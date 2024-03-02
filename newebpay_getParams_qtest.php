<?php
// QQ測試環境
/*1. 測試環境僅接受以下的測試卡號
4000-2211-1111-1111 (一次付清+分期付款)
4003-5511-1111-1111 (紅利折抵)
3760-000000-00006 (美國運通卡)
2. 測試卡號有效月年及卡片背面末三碼，請任意填寫
3. 以測試授權碼來模擬付款完成，並未實際發動至收單機構
4. 銀聯卡交易不開放測試*/
$apiURL = "https://ccore.newebpay.com/MPG/mpg_gateway";
$MerchantID = "MS116215250";
$HashKey = "PhwJZl6DVlOeodv8b8KTRXm2QReVLvMK";
$HashIV = "CsDoKAnT71yDsoXP";

$arr = array('status' => -1);
if (isset($_GET['theString']) == false) {
    $arr['msg'] = "資料錯誤";
    print json_encode($arr);
    return;
}


if (isset($_GET['Email']) == false || filter_var($_GET['Email'], FILTER_VALIDATE_EMAIL) == false) {
    $arr['msg'] = '請填寫 email';
    print json_encode($arr);
    return;
}

if (isset($_GET['name']) == false || $_GET['name'] == "") {
    $arr['msg'] = '請填寫姓名';
    print json_encode($arr);
    return;
}

if (isset($_GET['ReceiptTitle']) == false || $_GET['ReceiptTitle'] == "") {
    $arr['msg'] = '請填寫收據抬頭';
    print json_encode($arr);
    return;
}

if (isset($_GET['phone']) == false || $_GET['phone'] == "") {
    $arr['msg'] = '請填寫連絡電話';
    print json_encode($arr);
    return;
}

$phone = $_GET['phone'];
if (strlen($phone) < 9 ||
    (strlen($phone) == 9 && !preg_match('/0\d{8}/', $phone)) ||
    (strlen($phone) == 10 && !preg_match('/0\d{9}/', $phone)) ||
    (strlen($phone) > 10 && !preg_match('/0\d{9}#\d+/', $phone) && !preg_match('/0\d{8}#\d+/', $phone))
) {
    $arr['msg'] = '連絡電話未依照格式 0912345678';
    print json_encode($arr);
    return;
}

if (isset($_GET['theString']) == false || $_GET['theString'] == "") {
    $arr['msg'] = '網路錯誤';
    print json_encode($arr);
    return;
}


$theString = $_GET['theString'];
$x = explode(",", $theString);
if (count($x) != 2) {
    $arr['msg'] = '網路錯誤';
    print json_encode($arr);
    return;
}

$sum = 0;
$s = "";
$products = explode("|", $x[0]);
$prices = explode("|", $x[1]);

if (count($products) == 0 || count($products) != count($prices)) {
    $arr['msg'] = '網路錯誤';
    print json_encode($arr);
    return;
}

for ($i = 0; $i < count($prices); $i++) {
    $prices[$i] = intval($prices[$i]);

    if (is_int($prices[$i]) == false || $prices[$i] < 0) {
        $arr['msg'] = '網路錯誤';
        print json_encode($arr);
        return;
    }
    $sum = $sum + $prices[$i];
    $s .= (($i != 0 ? ',' : '') . $products[$i]);
}

if ($sum >= 10000000) {
    $arr['msg'] = '網路錯誤';
    print json_encode($arr);
    return;
}


$Amt = strval($sum);
$arr['Amt'] = $Amt;
$arr['ItemDesc'] = $s;



$arr['Email'] = $_GET['Email'];

$mytime = time();

$arr['MerchantID'] = $MerchantID;
$arr['TimeStamp'] = $mytime;
$arr['MerchantOrderNo'] = "TY$mytime";
$arr['NotifyURL'] = "http://www.twlls.org.tw/newebpay_checkpayment_qtest.php?orderNo=TY$mytime";

$arr['ReturnURL'] = "http://www.twlls.org.tw/";
$s = "HashKey=$HashKey";
$s .= "&Amt=$Amt&MerchantID=$MerchantID&MerchantOrderNo=TY$mytime&TimeStamp=$mytime&Version=1.2&";
$s .= "HashIV=$HashIV";
$arr['CheckValue'] = strtoupper(hash("sha256", $s));



$conn = new mysqli('localhost', 'vhost100843', 'tlls2015', 'vhost100843');
$conn->query("SET NAMES UTF8");
if ($conn->connect_error) {
    print json_encode($arr);
    return;
}

$sql = "SELECT * FROM `qtest` where orderNo = 'TY$mytime'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    print json_encode($arr);
    return;
}

function mysql_string_safe($con, $stringtoclean)
{
    $safestring = mysqli_real_escape_string($con, $stringtoclean);
    return $safestring;
}

$name = mysql_string_safe($conn, $_GET['name']);
$phone = mysql_string_safe($conn, $_GET['phone']);
$email = mysql_string_safe($conn, $_GET['Email']);
$ReceiptTitle = mysql_string_safe($conn, isset($_GET['ReceiptTitle']) ? $_GET['ReceiptTitle'] : "");
$TaxIDNumber = mysql_string_safe($conn, isset($_GET['TaxIDNumber']) ? $_GET['TaxIDNumber'] : "");
$ReceiptAddress = mysql_string_safe($conn, isset($_GET['ReceiptAddress']) ? $_GET['ReceiptAddress'] : "");
$itemdesc = $theString;
$timestamp = date("Y-m-d h:i:s", $mytime);

$sql = "INSERT INTO `vhost100843`.`qtest` (`name`, `email`, `phone`, `ReceiptTitle`, `TaxIDNumber`, `ReceiptAddress`, `timestamp`, `amt`, `itemdesc`, `orderNo`) VALUES ";
$sql .= "('$name', '$email', '$phone', '$ReceiptTitle', '$TaxIDNumber', '$ReceiptAddress', '$timestamp', '$Amt', '$itemdesc', 'TY$mytime')";
$result = $conn->query($sql);
$conn->close();


$arr['status'] = 1;
$arr['apiURL'] = $apiURL;
print json_encode($arr);