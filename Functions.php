<?php
// 定義常量
define('MERCHANT_ID', 'MS116215250');
define('HASH_KEY', 'PhwJZl6DVlOeodv8b8KTRXm2QReVLvMK');
define('HASH_IV', 'CsDoKAnT71yDsoXP');
define('TLLS_EMAIL', 'yoyo30618@gmail.com');
$key = 'PhwJZl6DVlOeodv8b8KTRXm2QReVLvMK';
$iv = 'CsDoKAnT71yDsoXP';

function sendMail($to, $subject, $ResponseData)
{
    mb_internal_encoding('UTF-8');
    require_once('PHPMailer-5.2.24/PHPMailerAutoload.php'); 
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
    $mail->IsHTML(true); 
    $mail->Subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
    $mail->Body = $ResponseData;
    if (!$mail->Send()) {
        echo "Message could not be sent. <p>";
        echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    else {echo "Message sent". $to;}
}
function sendMailByRecipe($to, $subject, $ResponseData, $files)
{
    mb_internal_encoding('UTF-8');
    require_once('PHPMailer-5.2.24/PHPMailerAutoload.php'); 
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
    foreach ($files as $file) {
        $mail->AddStringAttachment($file['content'], $file['name']);
    }
    $mail->IsHTML(true); 
    $mail->Subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
    $mail->Body = $ResponseData;
    if (!$mail->Send()) {
        echo "Message could not be sent. <p>";
        echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    else {echo "Message sent". $to;}
}
function hexToBin($hexString) {// 自定義十六進制轉二進制函數
    $bin = '';
    for ($i = 0; $i < strlen($hexString); $i += 2)
        $bin .= chr(hexdec(substr($hexString, $i, 2)));
    return $bin;
}
function strippadding($string) {// 去除 padding 副程式
    $slast = ord(substr($string, -1)); // 使用最後一個字元的 ASCII 值
    $slastc = chr($slast);
    $pcheck = substr($string, -$slast);
    if (preg_match("/$slastc{" . $slast . "}/", $string)) {
        $string = substr($string, 0, strlen($string) - $slast); 
        return $string;
    } 
    else {return false;}
}
function decryptTradeInfo($edata1, $key, $iv) {// 解密函數
    
    $binaryData = hexToBin($edata1);// 將十六進制數據轉換為二進制
    $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, str_pad($key, 32, "\0"), $binaryData, MCRYPT_MODE_CBC, $iv); // 使用 mcrypt 解密
    return strippadding($decrypted);// 去除填充
}
function generateTradeInfo($timestamp,$email,$ItemDesc,$amount) {
    $MerchantID=MERCHANT_ID;
    $key=HASH_KEY;
    $iv=HASH_IV;
    $trade_info = http_build_query(array(
        'MerchantID' => $MerchantID,
        'RespondType' => 'String',
        'TimeStamp' => $timestamp,
        'Version' => '2.0',
        'MerchantOrderNo' => 'TY' . $timestamp,
        'Amt' => $amount,
        'ItemDesc' => $ItemDesc,
        'Email' => $email,
        'NotifyURL' => 'http://www.twlls.org.tw/TestPage/NewCheckTest.php?MerchantOrderNo=TY'.$timestamp
    ));
    $key = str_pad(HASH_KEY, 32, "\0"); 
    $block_size = 16;
    $pad = $block_size - (strlen($trade_info) % $block_size);
    $trade_info .= str_repeat(chr($pad), $pad);
    $edata1 = bin2hex(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $trade_info, MCRYPT_MODE_CBC, $iv));
    $hashs = "HashKey=" . $key . "&" . $edata1 . "&HashIV=" . $iv;
    $hash = strtoupper(hash("sha256", $hashs));
    return array($edata1, $hash);
}
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
?>