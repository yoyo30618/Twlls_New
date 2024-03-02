<?php
// 正式
$MerchantID = "MS3340779031";
$HashKey = "2qZoz5pmpq4PolPgRsxz8adBXyooGxai";
$HashIV = "PQK9lCFHY2IuFZqC";
$apiUrl = 'https://core.newebpay.com/API/QueryTradeInfo';


$arr = array('status' => -1);
if (isset($_GET['orderNo']) == false) {
    $arr['msg'] = "資料錯誤";
    print json_encode($arr);
    return;
}

$conn = new mysqli('localhost', 'vhost100843', 'tlls2015', 'vhost100843');
$conn->query("SET NAMES UTF8");
if ($conn->connect_error) {
    print json_encode($arr);
    return;
}

function mysql_string_safe($con, $stringtoclean)
{
    $safestring = mysqli_real_escape_string($con, $stringtoclean);
    return $safestring;
}


$no = mysql_string_safe($conn, $_GET['orderNo']);
$sql = "SELECT * FROM `tlls_order` where orderNo = '$no' limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_object($result)) {
        $sql = "UPDATE `tlls_order` SET isPay = true where orderNo = '$no' and isPay = false";
        $conn->query($sql);
        // 20230724前舊版本
        // $no = $_GET['orderNo'];
        // $s = "IV=$HashIV";
        // $s .= "&Amt=$row->amt&MerchantID=$MerchantID&MerchantOrderNo=$no&Key=$HashKey";
        // $data = array(
        //     'MerchantID' => $MerchantID,
        //     'Version' => "1.1",
        //     'RespondType' => "JSON",
        //     'TimeStamp' => strtotime($row->timestamp),
        //     'MerchantOrderNo' => $no,
        //     'CheckValue' => strtoupper(hash("sha256", $s)),
        //     'Amt' => $row->amt
        // );

        // $postdata = http_build_query($data);

        // $opts = array(
        //     'http' =>
        //     array(
        //         'method'  => 'POST',
        //         'header'  => 'Content-Type: application/x-www-form-urlencoded',
        //         'content' => $postdata
        //     )
        // );

        // $context  = stream_context_create($opts);

        // $body = file_get_contents($apiUrl, false, $context);

        // $body = json_decode($body);
        // if ($body->Status != "SUCCESS")
        //     return;
        // // 1: 付款成功
        // if ($body->Result->TradeStatus != 1)
        //     return;
        
        // 20230724後修正新版本
        $mon=$_GET['orderNo'];
        $data1=http_build_query(array(
        'Amt'=>$row->amt,
        'MerchantID'=>$MerchantID,
        'MerchantOrderNo'=>$mon
        ));
        $hashs="IV=".$HashIV."&".$data1."&Key=".$HashKey;
        $hash=strtoupper(hash("sha256",$hashs));

        echo $hashs."<br>";
        echo $hash."<br>";
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $apiUrl); 
        curl_setopt($ch, CURLOPT_POST, true); 
        curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query(array(
            "MerchantID"=>$MerchantID, 
            "Version"=>"1.3",
            "RespondType"=>"JSON",
            "CheckValue"=>$hash,
            "TimeStamp"=>time(),
            "MerchantOrderNo"=>$mon,
            "Amt"=>$row->amt
        )));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 將返回值以字串形式返回，而不是直接輸出
        $output = (string)curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output,true);
        
        if ( $output['Status'] != "SUCCESS")
            return;
        // 1: 付款成功
        if ($output['Result']['TradeStatus'] != 1)
            return;

        function num2str($num)
        {
            $numc = "零,壹,貳,參,肆,伍,陸,柒,捌,玖";
            $unic = ",拾,佰,仟";
            $unic1 = "元正,萬,億,兆,京";
            $numc_arr = split(",", $numc);
            $unic_arr = split(",", $unic);
            $unic1_arr = split(",", $unic1);
            $i = str_replace(",", "", $num);
            $c0 = 0;
            $str = array();
            do {
                $aa = 0;
                $c1 = 0;
                $s = "";
                $lan = (strlen($i) >= 4) ? 4 : strlen($i);
                $j = substr($i, -$lan);
                while ($j > 0) {
                    $k = $j % 10;
                    if ($k > 0) {
                        $aa = 1;
                        $s = $numc_arr[$k] . $unic_arr[$c1] . $s;
                    } elseif ($k == 0) {
                        if ($aa == 1) $s = "0" . $s;
                    }
                    $j = intval($j / 10);
                    $c1 += 1;
                }
                $str[$c0] = ($s == '') ? '' : $s . $unic1_arr[$c0];
                $count_len = strlen($i) - 4;
                $i = ($count_len > 0) ? substr($i, 0, $count_len) : '';
                $c0 += 1;
            } while ($i != '');
            foreach ($str as $v) $string .= array_pop($str);
            $string = preg_replace('/0+/', '零', $string);
            return $string;
        }

        $chineseSum = num2str($row->amt);


        /**
         * 字串半形和全形間相互轉換
         * @param string $str 待轉換的字串
         * @param int  $type TODBC:轉換為半形；TOSBC，轉換為全形
         * @return string 返回轉換後的字串
         */
        function convertStrType($str, $type)
        {
            $dbc = array(
                '０', '１', '２', '３', '４',
                '５', '６', '７', '８', '９',
                'Ａ', 'Ｂ', 'Ｃ', 'Ｄ', 'Ｅ',
                'Ｆ', 'Ｇ', 'Ｈ', 'Ｉ', 'Ｊ',
                'Ｋ', 'Ｌ', 'Ｍ', 'Ｎ', 'Ｏ',
                'Ｐ', 'Ｑ', 'Ｒ', 'Ｓ', 'Ｔ',
                'Ｕ', 'Ｖ', 'Ｗ', 'Ｘ', 'Ｙ',
                'Ｚ', 'ａ', 'ｂ', 'ｃ', 'ｄ',
                'ｅ', 'ｆ', 'ｇ', 'ｈ', 'ｉ',
                'ｊ', 'ｋ', 'ｌ', 'ｍ', 'ｎ',
                'ｏ', 'ｐ', 'ｑ', 'ｒ', 'ｓ',
                'ｔ', 'ｕ', 'ｖ', 'ｗ', 'ｘ',
                'ｙ', 'ｚ', '－', '　', '：',
                '．', '，', '／', '％', '＃',
                '！', '＠', '＆', '（', '）',
                '＜', '＞', '＂', '＇', '？',
                '［', '］', '｛', '｝', '＼',
                '｜', '＋', '＝', '＿', '＾',
                '￥', '￣', '｀'
            );
            $sbc = array( //半形
                '0', '1', '2', '3', '4',
                '5', '6', '7', '8', '9',
                'A', 'B', 'C', 'D', 'E',
                'F', 'G', 'H', 'I', 'J',
                'K', 'L', 'M', 'N', 'O',
                'P', 'Q', 'R', 'S', 'T',
                'U', 'V', 'W', 'X', 'Y',
                'Z', 'a', 'b', 'c', 'd',
                'e', 'f', 'g', 'h', 'i',
                'j', 'k', 'l', 'm', 'n',
                'o', 'p', 'q', 'r', 's',
                't', 'u', 'v', 'w', 'x',
                'y', 'z', '-', ' ', ':',
                '.', ',', '/', '%', ' #',
                '!', '@', '&', '(', ')',
                '<', '>', '"', '\'', '?',
                '[', ']', '{', '}', '\\',
                '|', ' ', '=', '_', '^',
                '￥', '~', '`'
            );
            if ($type == 'TODBC') {
                return str_replace($sbc, $dbc, $str); //半形到全形
            } elseif ($type == 'TOSBC') {
                return str_replace($dbc, $sbc, $str); //全形到半形
            } else {
                return $str;
            }
        }

        $TaxIDNumber = ($row->TaxIDNumber == "") ? "" : convertStrType($row->TaxIDNumber, "TODBC");

        require_once('TCPDF-6.2.12/tcpdf.php');
        ini_set("memory_limit", "88032690");



        $title = $row->ReceiptTitle;

        $theString = $row->itemdesc;

        $x = explode(",", $theString);

        $sum = 0;
        $s = "";
        $products = explode("|", $x[0]);
        $prices = explode("|", $x[1]);

        for ($i = 0; $i < count($prices); $i++) {
            $prices[$i] = intval($prices[$i]);
            if (is_int($prices[$i]) == false || $prices[$i] < 0) return;
            $sum = $sum + $prices[$i];
        }

        if (count($products) == 0 || count($products) != count($prices) || $sum >= 10000000 || $row->amt != $sum || count($products) >= 3) return;

        // 改成不用切，做成 1,000,000,000 的格式
        foreach ($prices as &$price)
            $price = number_format($price);
        $amt_money_string = number_format($row->amt);

        $thisyear = date('Y', strtotime($row->timestamp));
        $y = $thisyear - 1911;
        $mytime = "中華民國　" . $y . "　年　" . date('m　月　d　日', strtotime($row->timestamp));

        //$sql = "SELECT * FROM `tlls_order` where timestamp >=  '$thisyear/01/01 00:00:00'";
        $sql = "SELECT MAX(ReceiptNum) FROM `tlls_order` where timestamp >=  '$thisyear/01/01 00:00:00' and timestamp <= '$thisyear/12/31 23:59:59'";
        $result2 = $conn->query($sql);
        // 產生收據編號
        $row2 = $result2->fetch_row();
        if ($result2->num_rows == 0 || $row2[0] == 0 || $row2[0] == '') {
            $ReceiptNum = 1;
        } else {
            $ReceiptNum = $row2[0] + 1;
        }
        //$yearno = $y . str_pad($result2->num_rows + 1, 3, "0", STR_PAD_LEFT); // $yearno: 收據編號
        $yearno = $y . str_pad($ReceiptNum, 3, "0", STR_PAD_LEFT); //$yearno: 收據編號

        // 填入收據編號欄位的值 
        $sql = "UPDATE `tlls_order` SET ReceiptNum = $ReceiptNum, ReceiptID = $yearno where orderNo = '$no'"; // ReceiptID: 資料庫的收據編號
        $conn->query($sql);

        $tdString = "";
        for ($i = 0; $i <= 2; $i++) {
            $s = ($i == 0) ? $row->name : "";
            $lh = mb_strlen($products[$i], "utf-8")<=29 ? "20px" : "10px";
            $fs = mb_strlen($products[$i], "utf-8")<=14 ? "12px" : "6px";
            $tdString .= "<tr><td style=\"height: 20px; line-height: $lh; font-size: $fs;\" colspan=\"4\" >$products[$i]</td><td style=\"height: 20px; line-height: 20px;\" colspan=\"7\">$prices[$i]</td><td colspan=\"2\" style=\"height: 20px; line-height: 20px; color: blue;\">$s</td></tr>";
        }

        $titlesize = (mb_strlen($title, "utf-8") <= 9) ? "12px" : "6px";
        $titlelineheight = (mb_strlen($title, "utf-8") <= 19) ? "20px" : "10px";

        $html = <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>
    h1 {
        color: navy;
        font-family: times;
        font-size: 16pt;
        text-decoration: underline;
    }
    p {
        font-family: msjh;
        font-size: 8pt;
        margin: 0px;
        padding: 0px;
    }
    table.first {
        color: black;
        font-family: msjh;
        font-size: 12pt;
        border: 1px solid black;
        text-align: center;
        border-collapse: collapse;
    }
    td {
        border: 1px solid black;
    }
    div.test {
        font-family: msjh;
        font-size: 12pt;
        text-align: center;
    }
    div.test>span {
        font-family: Times New Roman;
        font-size: 18pt;
    }
    .lowercase {
        text-transform: lowercase;
    }
    .uppercase {
        text-transform: uppercase;
    }
    .capitalize {
        text-transform: capitalize;
    }
</style>
<div class="test">
台　　　灣　　　語　　　文　　　學　　　會<br>
<span style="font-family: monotypecorsiva; font-size: 8px;">Taiwan Languages and Literature Society<span><br></span></span>
收　據
<div style="text-align: right; font-size: 8pt;font-family: msjh;">
<span>No. <strong style="color: red;">$yearno</strong></span>
</div>
<span style="text-align: left; font-size: 8pt;font-family: msjh;">$mytime</span>
</div>

<table class="first" cellpadding="1">
    <tr>
        <td style="width: 60px; height: 20px; line-height:20px;">繳款人</td>
        <td style="width: 120px; line-height:$titlelineheight; color: blue; font-size: $titlesize;" colspan="3">$title</td>
        <td style="width: 120px; line-height:20px;" colspan="7">統　一　編　號</td>
        <td style="width: 136px; line-height:20px;font-family: msjhbd; color: blue;" colspan="2">$TaxIDNumber</td>
    </tr>
    <tr>
        <td style="height: 20px; line-height:20px;" colspan="4">科　　目　　名　　稱</td>
        <td style="height: 20px; line-height:20px;" colspan="7">金　　　額</td>
        <td style="line-height:20px;" colspan="2" >備　　註</td>
    </tr>
    $tdString
    <tr>
        <td style="height: 20px; line-height: 20px;" colspan="4" ></td>
        <td style="height: 20px; line-height: 20px;" colspan="7"></td>
        <td colspan="2" style="height: 20px; line-height: 20px;" rowspan="3"><img src="newebpay/stamp.jpg" style="height: 65px;" /></td>
    </tr>
    <tr>
        <td style="height: 20px; line-height: 20px; text-align: right;" colspan="4" >總計（小寫）</td>
        <td style="height: 20px; line-height: 20px;" colspan="7">$amt_money_string</td>
    </tr>
    <tr>
        <td colspan="1" style="height: 25px; font-size: 10px;">新台幣<br>（大寫）</td>
        <td colspan="10" style="line-height:25px;">$chineseSum</td>
    </tr>
    <tr>
        <td style="width: 52px; height: 30px; line-height: 32px;">理事長</td>
        <td style="width: 57px;"><img src="newebpay/1.jpg" style="height: 30px; width: 30px;" /></td>
        <td style="width: 52px; height: 30px; line-height: 32px;">秘書長</td>
        <td style="width: 57px;" colspan="2"><img src="newebpay/2.jpg" style="height: 30px; width: 30px;" /></td>
        <td style="width: 52px; height: 30px; line-height: 32px;" colspan="3">會　計</td>
        <td style="width: 57px;" colspan="3"><img src="newebpay/3.jpg" style="height: 30px; width: 30px;" /></td>
        <td style="width: 52px; height: 30px; line-height: 32px;">出　納</td>
        <td style="width: 57px;"><img src="newebpay/4.jpg" style="height: 30px; width: 30px;" /></td>
    </tr>
</table>
EOF;

        function generate($html, $num, $view)
        {
            $pdf = new TCPDF('L', 'cm', array(13, 17.3), true, 'UTF-8', false);
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
            $pdf->SetFont("msjh", '', 20);
            $pdf->SetFont("msjhbd", '', 20);
            $pdf->AddPage();
            $pdf->setHtmlVSpace(array('h1' => array('h' => 100)));
            $pdf->writeHTML($html);

            // 額外加的，直接蓋圖上去
            $image = file_get_contents('newebpay/lefttop.jpg');
            $pdf->Image('@' . $image, 0.75, 1, 3, 1.5, 'JPG');

            $image = file_get_contents("newebpay/rb$num.png");
            $pdf->Image('@' . $image, 16.42, 7.2, 0.5, 2, 'PNG');
            return $pdf->Output('pseudo.pdf', ($view) ? 'I' : 'S');
        }
        // generate($html, 3, true);
        // return;

        function sendMail($to, $subject, $role, $arrFiles, $db_row, $ReceiptID)
        //增加$role，1:繳款人 2:學會。增加$db_row。增加$ReceiptID
        //function sendMail($to, $subject, $arrFiles)
        {
            mb_internal_encoding('UTF-8');
            require_once('PHPMailer-5.2.24/PHPMailerAutoload.php'); //where your phpmailer folder is
            $mail = new PHPMailer();
            $mail->IsSMTP(); //設定使用SMTP方式寄信
            $mail->SMTPAuth = true; //設定SMTP需要驗證
            $mail->SMTPSecure = "ssl";
            $mail->Host = "pollux8.url.com.tw"; //設定SMTP主機
            $mail->Port = 465; //設定SMTP埠位，預設為25埠
            $mail->CharSet = "utf8"; //設定郵件編碼
            $mail->Username = "service@twlls.org.tw"; //設定驗證帳號
            $mail->Password = "tlls2015"; //設定驗證密碼
            $mail->From = "service@twlls.org.tw";
            $mail->FromName = mb_encode_mimeheader("台灣語文學會", 'UTF-8');
            $mail->AddAddress($to);
            foreach ($arrFiles as $file) {
                $mail->AddStringAttachment($file['content'], $file['name']);
                // $mail->AddStringAttachment($file['content'], $file['name'], $file['content-type']);      // attach pdf that was saved in a folder
            }
            $mail->IsHTML(true); // 2020.11.12增加
            $mail->Subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
            // $mail->Subject = mb_encode_mimeheader($subject, 'UTF-8');
            //$mail->Body = "此信由系統自動發送";
            if ($role == 1) { // 給繳款人
                $mail->Body = "此信由系統自動發送";
            } elseif ($role == 2) { // 給學會
                $mail->Body = "<table style=\"border-collapse:collapse; border:1px #3c3c3c solid;\" border='1'>"                        
                            . "<tr><td>訂單編號</td><td>" . $db_row->orderNo . "</td></tr>"
                            . "<tr><td>收據編號</td><td>" . $ReceiptID . "</td></tr>"
                            . "<tr><td>姓名</td><td>" . $db_row->name . "</td></tr>"
                            . "<tr><td>E-MAIL</td><td>" . $db_row->email . "</td></tr>"
                            . "<tr><td>連絡電話</td><td>" . $db_row->phone . "</td></tr>"
                            . "<tr><td>收據抬頭</td><td>" . $db_row->ReceiptTitle . "</td></tr>"
                            . "<tr><td>統一編號</td><td>" . $db_row->TaxIDNumber . "</td></tr>"
                            . "<tr><td>款項說明</td><td>" . $db_row->itemdesc . "</td></tr>"
                            . "<tr><td>交易金額</td><td>" . $db_row->amt . " 元</td></tr>"                          
                            . "</table>";
            }

            if (!$mail->Send()) {
                echo "Message could not be sent. <p>";
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "Message sent";
            }
        }

        // echo memory_get_usage() . " - end1\n\n";
        $files = array();
        for ($i = 1; $i <= 3; $i++) {
            $files[] = array(
                'content' => generate($html, $i, false),
                'name' => "receipt_$i.pdf"
            );
            // echo memory_get_usage() . " - end\n\n";
        }

        //sendMail($row->email, "台灣語文學會 電子收據", array($files[2]));
        sendMail($row->email, "台灣語文學會電子收據通知", 1, array($files[2]));
        // echo memory_get_usage() . " - end\n\n";
        /*sendMail("contact.tlls@gmail.com", "台灣語文學會 線上繳費系統 繳款成功 $row->timestamp", array($files[0]));
        sendMail("contact.tlls@gmail.com", "台灣語文學會 線上繳費系統 繳款成功 $row->timestamp", array($files[1]));
        sendMail("contact.tlls@gmail.com", "台灣語文學會 線上繳費系統 繳款成功 $row->timestamp", array($files[2]));*/
        sendMail("contact.tlls@gmail.com", "【TLLS收款通知】開立電子收據 $yearno $row->timestamp", 2, $files, $row, $yearno);
        // 取消寄送明細，因為寄送明細程式會造成藍新系統多次回傳，每次回傳都會觸發寄信功能，導致產生重覆信件。
        //require_once("newebpay_yearlycsv.php");
        //$csv_data = getYearlyCSV($apiUrl, $MerchantID, $HashIV, $HashKey, $row->timestamp, $row->name, $row->ReceiptTitle, $row->TaxIDNumber, $row->email, $row->phone);
        //sendMail("contact.tlls@gmail.com", "台灣語文學會 線上繳費系統 繳款成功 $row->timestamp", array(array('content' => $csv_data, 'name' => 'yearly.csv')));
        echo memory_get_usage() . " - end\n\n";
        return;
    }
}
// contact.tlls@gmail.com
