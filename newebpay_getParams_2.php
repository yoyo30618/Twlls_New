<?php
// QQ測試
//$apiURL = "https://ccore.newebpay.com/MPG/mpg_gateway"; // 2020/10/5更改為新的正式串接網址
//$MerchantID = "MS116215250";
//$HashKey = "PhwJZl6DVlOeodv8b8KTRXm2QReVLvMK";
//$HashIV = "CsDoKAnT71yDsoXP";

// $apiURL = "https://ccore.spgateway.com/MPG/mpg_gateway"; // 舊版測試串接網址
// $apiURL = "https://ccore.newebpay.com/MPG/mpg_gateway"; // 新版測試串接網址
// $MerchantID = "MS19783412";
// $HashKey = "BAyQn3AYYMDgADe26qPCxD4qgzmYJt61";
// $HashIV = "CmjDPWsYXyJwO2dP";

// 正式
// $apiURL = "https://core.spgateway.com/MPG/mpg_gateway"; // 舊版正式串接網址
$apiURL = "https://core.newebpay.com/MPG/mpg_gateway"; // 2020/10/5更改為新的正式串接網址
$MerchantID = "MS3340779031";
$HashKey = "2qZoz5pmpq4PolPgRsxz8adBXyooGxai";
$HashIV = "PQK9lCFHY2IuFZqC";

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

if (isset($_GET['BookAddress']) == false || $_GET['BookAddress'] == "") {
    $arr['msg'] = '請填寫寄書地址與收件人姓名';
    print json_encode($arr);
    return;
}

if (isset($_GET['BookQuantity']) == false || $_GET['BookQuantity'] == "") {
    $arr['msg'] = '請填寫購買本數';
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
$arr['BookAddress'] = $_GET['BookAddress'];
$arr['BookQuantity'] = $_GET['BookQuantity'];
$mytime = time();

$arr['MerchantID'] = $MerchantID;
$arr['TimeStamp'] = $mytime;
$arr['MerchantOrderNo'] = "TY$mytime";
$arr['NotifyURL'] = "http://www.twlls.org.tw/newebpay_checkpayment.php?orderNo=TY$mytime";

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

$sql = "SELECT * FROM `tlls_order` where orderNo = 'TY$mytime'";
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
$BookAddress = mysql_string_safe($conn, $_GET['BookAddress']);
$BookQuantity = mysql_string_safe($conn, $_GET['BookQuantity']);
$phone = mysql_string_safe($conn, $_GET['phone']);
$email = mysql_string_safe($conn, $_GET['Email']);
$ReceiptTitle = mysql_string_safe($conn, isset($_GET['ReceiptTitle']) ? $_GET['ReceiptTitle'] : "");
$TaxIDNumber = mysql_string_safe($conn, isset($_GET['TaxIDNumber']) ? $_GET['TaxIDNumber'] : "");
$ReceiptAddress = mysql_string_safe($conn, isset($_GET['ReceiptAddress']) ? $_GET['ReceiptAddress'] : "");
$itemdesc = $theString;
$timestamp = date("Y-m-d h:i:s", $mytime);

$sql = "INSERT INTO `vhost100843`.`tlls_order` (`name`, `email`, `phone`, `ReceiptTitle`, `TaxIDNumber`, `ReceiptAddress`, `timestamp`, `amt`, `itemdesc`, `orderNo`, `BookAddress`, `BookQuantity`) VALUES ";
$sql .= "('$name', '$email', '$phone', '$ReceiptTitle', '$TaxIDNumber', '$ReceiptAddress', '$timestamp', '$Amt', '$itemdesc', 'TY$mytime', '$BookAddress', '$BookQuantity')";
$result = $conn->query($sql);
$conn->close();


$arr['status'] = 1;
$arr['apiURL'] = $apiURL;
print json_encode($arr);
