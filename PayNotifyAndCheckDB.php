<?php
include_once('Functions.php');
include_once('Conn_SQL.php');
//藍新回覆訊息，
$Status=$_POST['Status'];
$MerchantID=$_POST['MerchantID'];
$Version=$_POST['Version'];
$TradeInfo=$_POST['TradeInfo'];
$TradeSha=$_POST['TradeSha'];

$edata1 = decryptTradeInfo($TradeInfo, HASH_KEY, HASH_IV);
parse_str($edata1, $ResposeArray);
if ($edata1 !== false) {
    if($ResposeArray['Status']=='SUCCESS'){//藍新回覆刷卡成功，寄信給學會及買家收據
        //確認買家成功支付後，需要改寫DB內容
        $CheckBuySQL="SELECT * FROM `qtest` WHERE `orderNo`='".$ResposeArray['MerchantOrderNo']."'";
        $SomeOneWantBuyResult=$conn_1->query($CheckBuySQL);
        if($SomeOneWantBuyResult->num_rows>0){//確認有這筆訂單
            $Cnt=0;
            while ($BuyInfoRow = mysqli_fetch_array($SomeOneWantBuyResult)) {
                $Cnt+=1;
                if($Cnt==2){//異常出現兩筆交易紀錄，第一筆已經成功寄送收據
                    $MailContent= "於".date("Y/m/d H:i:s")."準備寄送相同訂單的第二次收據<br>";
                    $MailContent= "請檢查為甚麼會有兩筆相同訂單編號的紀錄<br>";
                    $MailContent= "訂單編號為".$ResposeArray['MerchantOrderNo']."<br>";
                    sendMail(TLLS_EMAIL, "台灣語文學會-有兩筆相同訂單編號的紀錄", $MailContent);
                    break;
                }
                //DB紀錄付款完成
                $SetPaySUCCESSSQL="UPDATE `qtest` SET `IsPay`='1' WHERE `orderNo`='".$ResposeArray['MerchantOrderNo']."'";
                $conn_1->query($SetPaySUCCESSSQL);
                $chineseSum = num2str($ResposeArray['Amt']);
                $TaxIDNumber = ($BuyInfoRow['TaxIDNumber'] == "") ? "" : convertStrType($BuyInfoRow['TaxIDNumber'], "TODBC");
                require_once('TCPDF-6.2.12/tcpdf.php');
                ini_set("memory_limit", "88032690");
                $title = $BuyInfoRow['TaxIDTitle'];
                $sum = 0;
                $amt_money_string = number_format($BuyInfoRow['amt']);
                $thisyear = date('Y', strtotime($BuyInfoRow['timestamp']));
                $y = $thisyear - 1911;
                $mytime = "中華民國　" . $y . "　年　" . date('m　月　d　日', strtotime($BuyInfoRow['timestamp']));
                $sql = "SELECT MAX(ReceiptSeq) FROM `qtest` where timestamp >=  '$thisyear/01/01 00:00:00' and timestamp <= '$thisyear/12/31 23:59:59'";
                $result2 = $conn_1->query($sql);
                $row2 = $result2->fetch_row();// 產生收據編號
                if ($result2->num_rows == 0 || $row2[0] == 0 || $row2[0] == '') {
                    $ReceiptSeq = 1;
                } else {
                    $ReceiptSeq = $row2[0] + 1;
                }
                $yearno = $y . str_pad($ReceiptSeq, 3, "0", STR_PAD_LEFT); //$yearno: 收據編號
                // 填入收據編號欄位的值 
                $sql = "UPDATE `qtest` SET `ReceiptID` = $yearno,`ReceiptSeq` = $ReceiptSeq where orderNo = '".$BuyInfoRow['orderNo']."'"; // ReceiptID: 資料庫的收據編號
                $conn_1->query($sql);
                $BuyInfosize = (mb_strlen($BuyInfoRow['itemdesc'], "utf-8") <= 9) ? "12px" : "10px";
                $tdString="";
                $tdString ="<tr><td style=\"height: 20px; line-height: 20px; font-size: ".$BuyInfosize.";\" colspan=\"4\" >".$BuyInfoRow['itemdesc']."</td><td style=\"height: 20px; line-height: ".$BuyInfosize.";\" colspan=\"7\">".$BuyInfoRow['amt']."</td><td colspan=\"2\" style=\"height: 20px; line-height: 20px; color: blue;\">".$BuyInfoRow['name']."</td></tr>";
                $tdString .="<tr><td style=\"height: 20px; line-height: 20px; font-size: 12px;\" colspan=\"4\" ></td><td style=\"height: 20px; line-height: 20px;\" colspan=\"7\"></td><td colspan=\"2\" style=\"height: 20px; line-height: 20px; color: blue;\"></td></tr>";
                $tdString .="<tr><td style=\"height: 20px; line-height: 20px; font-size: 12px;\" colspan=\"4\" ></td><td style=\"height: 20px; line-height: 20px;\" colspan=\"7\"></td><td colspan=\"2\" style=\"height: 20px; line-height: 20px; color: blue;\"></td></tr>";
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
                $files = array();
                for ($i = 1; $i <= 3; $i++) {
                    $files[] = array(
                        'content' => generate($html, $i, false),
                        'name' => "receipt_$i.pdf"
                    );
                }
                //產生收據寄給買家
                $MailContent = "感謝您於".date("Y/m/d H:i:s")."支付成功，此信由系統自動發送<br>";
                sendMailByRecipe($BuyInfoRow['email'], "台灣語文學會電子收據通知",$MailContent, array($files[2]));
                //產生收據寄給學會
                $MailContent= "於".date("Y/m/d H:i:s")."收到藍新金流觸發的支付回條，買家支付成功<br>";
                $MailContent.= "以下是藍新回覆的資料<br>";
                foreach ($ResposeArray as $key => $value) {
                    $MailContent .= $key . ": " . $value . "<br>";
                }
                sendMailByRecipe(TLLS_EMAIL, "【TLLS收款通知】開立電子收據".$BuyInfoRow['timestamp'], $MailContent, $files);
            }
        }
        else{//收到藍新的刷卡成功通知，但很意外地沒有這筆訂單
            $MailContent= "於".date("Y/m/d H:i:s")."收到藍新金流觸發的支付回條，得到刷卡成功的SUCCESS，但學會記錄內沒有這筆訂單，請查看回條並連繫買家<br>";
            // 將回傳的標題和內容組合
            foreach ($ResposeArray as $key => $value) {
                $MailContent .= $key . ": " . $value . "<br>";
            }
            sendMail(TLLS_EMAIL, "台灣語文學會-收據異常通知", $MailContent);

        }
    }
    else{//藍新回覆刷卡失敗，寄信給學會通知異常
        $MailContent= "於".date("Y/m/d H:i:s")."收到藍新金流觸發的支付回條，有收到回條但得到的狀態並非SUCCESS，請查看回條並連繫買家<br>";
        // 將回傳的標題和內容組合
        foreach ($ResposeArray as $key => $value) {
            $MailContent .= $key . ": " . $value . "<br>";
        }
        sendMail(TLLS_EMAIL, "台灣語文學會-異常刷卡通知", $MailContent);
    }
} else {//藍新回覆字串異常，寄信給學會通知異常
    $MailContent= "於".date("Y/m/d H:i:s")."收到藍新金流觸發的支付回條，但回條內容無法解析，可能是API改版了，請查閱回條內容<br>";
    $MailContent .=  $ResponseData."<br>";
    $MailContent .=  $Status."<br>";
    $MailContent .=  $MerchantID."<br>";
    $MailContent .=  $Version."<br>";
    $MailContent .=  $TradeInfo."<br>";
    $MailContent .=  $TradeSha."<br>";
    sendMail(TLLS_EMAIL, "台灣語文學會-API解析異常通知", $MailContent);
}
?>
