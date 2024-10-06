<!DOCTYPE HTML>
<html>
<head>
	<title>台灣語文學會</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery-1.11.1.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.marquee.js"></script>
	<script>
		$('.marquee').marquee({ pauseOnHover: true });
	</script>
</head>
<?php include_once "Conn_SQL.php"; ?>
<body class="AllBODY">
	<?php include_once('Top.php');?>
	<?php include_once('banner.php');?>
	<div style="margin-top: 120px;"></div>
	<?php include_once('marquee.php');?>
	<div class="banner-bottom" style="background-image: url(images/publications-banner.jpg);">
		<div class="container">
			<div class="video-bottom-grids" style="color:white;text-align:center;height:150px; display:flex; align-items:center; justify-content:center;">
				<text style="font-size:40px;">出版品</text>
			</div>
		</div>
	</div>
	<br>
	<?php
		// 捐款相關參數
		$Amount=-1;
	?>
	<div class="container ">
		<div class="video-bottom-grids1">
			<div class="col-md-12">
				<?php
					$PayListSQL="SELECT * FROM `relatedlinks` WHERE `Function`='出版品' AND `IsUsed`='1' ORDER BY `OrderIndex` DESC";
					$PayListResult = $conn_1->query($PayListSQL);
					while ($PayListrow = mysqli_fetch_array($PayListResult)) {
						//不同類別的要先長框
						echo "<div class='PayList'>";
						echo "	<div class='PayListTitle'>";
						echo "		<h3 style='color:#FDFFA3'>".$PayListrow['Item']."</h3>";
						echo "	</div>";
						echo "	<table style='margin: 50px;'>";
						echo "		<tr>";
						echo "			<td style='width:20%;text-align:right;'>";
						if($PayListrow['Photo']!="")
							echo "				<img style='width:200px;height:300px;' src='images/Publication/".$PayListrow['Photo']."'/>";
						echo "			</td>";
						echo "			<td style='width:80%;padding-left: 20px;'>";
						echo "				<div style='font-size:25px;color:#70524A;margin-top:10px;'>".$PayListrow['Item']."</div>";
						echo "				<div style='margin-top:10px;'>".$PayListrow['TitleEng']."</div>";
						echo "			</td>";
						echo "		</tr>";
						echo "		<tr>";
						echo "			<td  colspan='2'>";
						echo str_replace("<<EMAIL>>","<a href='mailto:".$PayListrow['Link']."' target='_blank'>".$PayListrow['Link']."</a>",$PayListrow['Title']);
						echo "			</td>";
						echo "		</tr>";
						echo "		<tr>";
						echo "			<td  colspan='2'>";
						$PayListDetalSQL="SELECT * FROM `publication` WHERE 1 AND `Category`='出版品' AND `IsUsed`='1' AND `Classification`='".$PayListrow['Item']."' ORDER BY `OrderIndex` DESC";
						$PayListDetalResult = $conn_1->query($PayListDetalSQL);
						while ($PayListDetalrow = mysqli_fetch_array($PayListDetalResult)) {
								$PayListColor="#418765";//預設顏色
								$PayListImg="icon-leaf1.png";//預設圖片
								if($PayListDetalrow['ColorType']=="1"){
									$PayListColor="#418765";
									$PayListImg="icon-leaf1.png";
								}
								else if($PayListDetalrow['ColorType']=="2"){
									$PayListColor="#418765";
									$PayListImg="icon-LOGO3.png";
								}
								else if($PayListDetalrow['ColorType']=="3"){
									$PayListColor="#6AA447";
									$PayListImg="icon-leaf2.png";
								}
								else if($PayListDetalrow['ColorType']=="4"){
									$PayListColor="#6AA447";
									$PayListImg="icon-LOGO4.png";
								}
								else if($PayListDetalrow['ColorType']=="5"){
									$PayListColor="#81BB9F";
									$PayListImg="icon-leaf3.png";
								}
								else if($PayListDetalrow['ColorType']=="6"){
									$PayListColor="#81BB9F";
									$PayListImg="icon-LOGO6.png";
								}
								else if($PayListDetalrow['ColorType']=="7"){
									$PayListColor="#70524A";
									$PayListImg="icon-LOGO5.png";
								}
								else if($PayListDetalrow['ColorType']=="8"){
									$PayListColor="#70524A";
									$PayListImg="icon-donate.png";
								}
								else if($PayListDetalrow['ColorType']=="9"){
									$PayListColor="#70524A";
									$PayListImg="icon-member.png";
								}
								else if($PayListDetalrow['ColorType']=="10"){
									$PayListColor="#418765";
									$PayListImg="icon-book.png";
								}
								echo "<div style='width: 20%;padding:3px;display: inline-block; margin: auto;'>";
								echo "	<div style='background-color: ".$PayListColor."; color: white; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 5px; text-align: center;'>";
								echo $PayListDetalrow['Title'];
								echo "	</div>";
								echo "	<div style='background-color: white; padding: 20px; border: 1px solid ".$PayListColor."; text-align: center;'>";
								echo "<img src='images/icons/".$PayListImg."' style='height:30px;'/><br>";
								echo $PayListDetalrow['Detail']."<br>";
								if($PayListDetalrow['Amount']==-1){//任意金額捐款，不顯示金額
									$PayListDetalrow['Amount']="任意金額";
									echo "<button class='openFormButton' data-Item='".$PayListDetalrow['Title'].$PayListDetalrow['Detail']."' data-Amount='".$PayListDetalrow['Amount']."'>我要付款</button>";
								}
								else{
									if($PayListDetalrow['Amount']==$PayListDetalrow['DiscountAmount']){
										echo $PayListDetalrow['Amount']."元<br>";
										echo "<button class='openFormButton' data-Item='".$PayListDetalrow['Title'].$PayListDetalrow['Detail']."' data-Amount='".$PayListDetalrow['Amount']."'>我要付款</button>";
									}
									else{
										echo "<del>".$PayListDetalrow['Amount']."</del> ".$PayListDetalrow['DiscountAmount']."元<br>";
										echo "<button class='openFormButton'  data-Item='".$PayListDetalrow['Title'].$PayListDetalrow['Detail']."'data-Amount='".$PayListDetalrow['DiscountAmount']."'>我要付款</button>";
									}
								}
								echo "	</div>";
							  	echo "</div>";
						}
						echo "			</td>";
						echo "		</tr>"; 
						echo "  </table>"; 
						echo "  </div>"; 
					}
				?>
						
			</div>
			<div class="clearfix"> </div>
		</div>

		</div>
		<div id="PayOverlay"></div>
		<div id="PayForm">
			<h2 style="color:#418765;">繳費資料</h2>
			<b><p style="background-color:#FDFFA3;" id="amountItem">當前項目: </p></b>
			<b><p style="background-color:#FDFFA3;" id="amountDisplay">繳款金額: </p></b>
			<form id="donationForm" onsubmit="event.preventDefault(); submitForm();">
				<input type="hidden" id="ItemDesc" name="ItemDesc" required>
				<table>
					<tr id="AmountInput">
						<td style="border-left: 3px solid #418765;padding-left:5px;"></td>
						<td style="padding-left:5px;">
							<label for="amount">捐款金額*:</label><br>
							<input type="text" id="amount" name="amount" required>
						</td>
					</tr>
					<tr><td style="height:10px;" colspan="2"></td></tr>
					<tr>
						<td style="border-left: 3px solid #418765;padding-left:5px;"></td>
						<td style="padding-left:5px;">
							<label for="payer_name">繳款人姓名*:</label><br>
							<input type="text" id="payer_name" name="payer_name" required>
						</td>
					</tr>
					<tr><td style="height:10px;" colspan="2"></td></tr>
					<tr>
						<td style="border-left: 3px solid #418765;padding-left:5px;"></td>
						<td style="padding-left:5px;">
							<label for="receipt_title">收據抬頭*（如需報帳，請填寫核銷單位所需名稱；如無，則填寫姓名）</label><br>
							<input type="text" id="receipt_title" name="receipt_title" required>
						</td>
					</tr>
					<tr><td style="height:10px;" colspan="2"></td></tr>
					<tr>
						<td style="border-left: 3px solid #418765;padding-left:5px;"></td>
						<td style="padding-left:5px;">
							<label for="tax_id">統編（無可免填）</label><br>
							<input type="text" id="tax_id" name="tax_id">
						</td>
					</tr>
					<tr><td style="height:10px;" colspan="2"></td></tr>
					<tr>
						<td style="border-left: 3px solid #418765;padding-left:5px;"></td>
						<td style="padding-left:5px;">
							<label for="email">電子信箱/E-mail*</label><br>
							<input type="email" id="email" name="email" required>
						</td>
					</tr>
					<tr><td style="height:10px;" colspan="2"></td></tr>
					<tr>
						<td style="border-left: 3px solid #418765;padding-left:5px;"></td>
						<td style="padding-left:5px;">
							<label for="phone">連絡電話/Telephone*（請依照格式 0912345678，若有分機請依 0212345678#1234）</label><br>
							<input type="tel" id="phone" name="phone" required>
						</td>
					</tr>
					<tr><td style="height:10px;" colspan="2"></td></tr>
					<tr>
						<td colspan="2">
							1. 有*標記者為必填。<br>
							2. 以上欄位請務必確認填寫正確，如有誤填情形，本會恕難提供重新開立收據，敬請見諒。<br>
							3. 若無法成功送出報名資訊，請重整頁面並手動輸入資料。<br><br>
							<button style="padding:5px;background-color:#418765;color:#fff;border-radius:10px;border:none;" type="submit">前往繳費</button>
						</td>
					</tr>
				</table>
			</form>
			<form id="paymentForm" method="post" action="https://ccore.newebpay.com/MPG/mpg_gateway" style="display: none;">
				<input type="hidden" id="TradeInfo" name="TradeInfo">
				<input type="hidden" id="TradeSha" name="TradeSha">
				<input type="hidden" id="MerchantID" name="MerchantID">
				<input type="hidden" id="Version" name="Version">
				<!-- 可能需要的其他隱藏字段 -->
			</form>
		</div>
	<?php include_once('footer.php'); ?>
	<script src="js/bootstrap.js"></script>
	
    <script>//付款表單使用
    function validateForm() {
        var amount = document.getElementById("amount").value;
        var name = document.getElementById("payer_name").value;
        var receipt_title = document.getElementById("receipt_title").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        if (amount == "" || name == "" || receipt_title == "" || email == "" || phone == "") {
            alert("請填寫所有必填欄位");
            return false;
        }
        if (isNaN(amount) || amount <= 0) {
            alert("請輸入有效的捐款金額");
            return false;
        }
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("請輸入有效的電子郵件地址");
            return false;
        }
        return true;
    }

    function submitForm() {
        if (validateForm()) {//通過表單基本驗證
            updateTimestamp();//產生時間戳並傳遞
        }
    }

    function updateTimestamp() {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'process_payment.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (this.status === 200) {
                var response = JSON.parse(this.responseText);
                document.getElementById('TradeInfo').value = response.TradeInfo;
                document.getElementById('TradeSha').value = response.TradeSha;
                document.getElementById('MerchantID').value = response.MerchantID;
                document.getElementById('Version').value = response.Version;
                document.getElementById('ItemDesc').value = response.ItemDesc;
                document.getElementById('paymentForm').submit();
            }
        };
        var formData = new FormData(document.getElementById('donationForm'));
        xhr.send(new URLSearchParams(formData).toString());
    }
    </script>

	
    <script>//繳費視窗浮現取消
		const openFormButtons = document.querySelectorAll('.openFormButton');
		const PayForm = document.getElementById('PayForm');
		const PayOverlay = document.getElementById('PayOverlay');
		const amountItem = document.getElementById('amountItem');
		const amountDisplay = document.getElementById('amountDisplay');
		const AmountInput = document.getElementById('AmountInput');
		const amountField = document.getElementById('amount');
		const ItemDesc = document.getElementById('ItemDesc');

		openFormButtons.forEach(button => {
			button.onclick = function() {
				const amount = this.getAttribute('data-amount');
				const dataItem = this.getAttribute('data-Item');
				amountItem.textContent = '當前項目: ' + dataItem;
				ItemDesc.value=dataItem;
				if(amount === "任意金額") {
					amountDisplay.textContent = '請輸入捐款金額';
					AmountInput.style.display = 'table-row';
					amountField.value = ''; // 清空金額輸入框
					amountField.removeAttribute('readonly');
				} else {
					amountDisplay.textContent = '繳款金額: ' + amount;
					AmountInput.style.display = 'none';
					amountField.value = amount;
					amountField.setAttribute('readonly', true);
				}
				
				PayForm.style.display = 'block';
				PayOverlay.style.display = 'block';
				setTimeout(() => {
					PayForm.style.transform = 'translate(-50%, -50%) scale(1)'; // 浮出效果
				}, 10); // 確保 CSS 更新
			}
		});
		PayOverlay.onclick = function() {
			PayForm.style.transform = 'translate(-50%, -50%) scale(0)'; // 縮回去
			setTimeout(() => {
				PayForm.style.display = 'none';
				PayOverlay.style.display = 'none';
			}, 300); // 等待動畫結束再隱藏
		}
    </script>
</body>

</html>