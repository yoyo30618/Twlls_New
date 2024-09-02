<?php

$key="PhwJZl6DVlOeodv8b8KTRXm2QReVLvMK";
$iv="CsDoKAnT71yDsoXP";
$mid="MS116215250";//商店代號
$data1=http_build_query(array(
    'MerchantID'=>$mid,
    'RespondType'=>'Json',
    'TimeStamp'=>time(),
    'Version'=>'2.0',
    'MerchantOrderNo'=>'Vanespl_ec_'.time(),
    'Amt'=>'30',
    'ItemDesc'=>'test',
    'NotifyURL' => 'http://www.twlls.org.tw/TestPage/NewCheckTest.php?MerchantOrderNo=TY'.$timestamp
    ));

echo "Data=[".$data1."]<br><br>";
$edata1=bin2hex(openssl_encrypt($data1, "AES-256-CBC", $key, OPENSSL_RAW_DATA, $iv));
$hashs="HashKey=".$key."&".$edata1."&HashIV=".$iv;
$hash=strtoupper(hash("sha256",$hashs));
?>
<form method=post action="https://ccore.newebpay.com/MPG/mpg_gateway">
商店代號: <input name="MerchantID" value="<?=$mid?>" readonly><br>
交易資料(AES 加密): <input name="TradeInfo" value="<?=$edata1?>" readonly><br>
交易資料(SHA256 加密): <input name="TradeSha" value="<?=$hash?>" readonly><br>
串接程式版本: <input name="Version" value="2.0" readonly><br>
<input type=submit>
</form>