<?php

include_once "Conn_SQL.php"; 
// 設置必要的頭部信息
header('Content-Type: application/json');
include_once('Functions.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST')// 驗證請求方法
    die("異常");
// 獲取表單數據
$amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_INT);
$payer_name = filter_input(INPUT_POST, 'payer_name', FILTER_SANITIZE_STRING);
$receipt_title = filter_input(INPUT_POST, 'receipt_title', FILTER_SANITIZE_STRING);
$tax_id = filter_input(INPUT_POST, 'tax_id', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$ItemDesc=$_POST['ItemDesc'];
// 驗證必填字段
if (!$amount || !$payer_name || !$receipt_title || !$email || !$phone) {
    die(array(
        'error'  => 'Missing required fields',
        'amount'  => $amount,
        'payer_name'  => $payer_name,
        'receipt_title'  => $receipt_title,
        'email'  => $email,
        'phone'  => $phone,
    ));
}
// 生成時間戳和訂單號
$timestamp = time();
$datestamp = date('Y-m-d H:i:s');
$order_no = 'TY' . $timestamp;
//寫入DB紀錄有人想買東西了
$SomeOneWantBuySQL = "INSERT INTO `tlls_order`(`name`, `email`, `phone`, `TaxIDTitle`, `TaxIDNumber`, `timestamp`, `amt`, `itemdesc`, `orderNo`, `isPay`) VALUES ('".$payer_name."','".$email."','".$phone."','".$receipt_title."','".$tax_id."','".$datestamp."','".$amount."','".$ItemDesc."','".$order_no."','0')";
$conn_1->query($SomeOneWantBuySQL);

$HashData=generateTradeInfo($timestamp,$email,$ItemDesc,$amount);
$trade_info_aes=$HashData[0];
$trade_sha=$HashData[1];
// 返回結果
echo json_encode(array(
    'MerchantID' => MERCHANT_ID,
    'TradeInfo' => $trade_info_aes,
    'TradeSha' => $trade_sha,
    'Version' => '2.0',
));
