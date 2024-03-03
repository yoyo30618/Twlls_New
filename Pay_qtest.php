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
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<?php include_once "Conn_SQL.php"; ?>
<body>
	<div class="banner1">
		<div class="banner-info1">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="logo">
							<table>
								<tr>
									<td style="width:10%"><a href="index.php"><img src="images/logo.png" style="border-radius: 20px;width:100%;" /></a></td>
									<td style="width:30%">
										<a class="navbar-brand" href="index.php" style="font-size: 50px;">
											台灣語文學會<br><text style="font-size: 12px;">Taiwan Languagee & Literature Society</text>
										</a>
									</td>
									<td style="width:60%;">
										<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
											<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
												<li class="act"><a href="index.php" style="font-size: 16px;">首頁</a></li>
												<li><a href="Introduction.php" style="font-size: 16px;">學會簡介</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														學術活動 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="Conference.php">研討會</a></li>
														<li><a href="Pay.php">期刊</a></li>
													</ul>
												</li>
												<li><a href="Member.php" style="font-size: 16px;">歷屆獎項</a></li>
												<li><a href="Member.php" style="font-size: 16px;">會員專區</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														線上繳費 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="Pay.php">會員繳費與捐款</a></li>
														<li><a href="icons.html">出版品購買</a></li>
													</ul>
												</li>
												<li><a href="breaking.html" style="font-size: 16px;">人才庫</a></li>
											</ul>
										</div><!-- /.navbar-collapse -->
									</td>
								</tr>
							</table>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="news-and-events">
		<div class="container">
			<div class="move-text">
				<div class="breaking_news">
					<h2>最新消息</h2>
				</div>
				<div class="marquee">
					<?php
						$sql = "SELECT * FROM `news` WHERE `ShowOnMarquee`=1";
						$result = $conn_1->query($sql);
						if ($result->num_rows > 0) {
    						while ($row = mysqli_fetch_array($result)) {
								if($row["url"]!="")
									echo "<div class='marquee1'><a class='breaking' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a></div>";
								else
									echo "<div class='marquee1'><a class='breaking'>".$row["Title"]."</a></div>";
    						}
						}	
					?>		
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="js/jquery.marquee.js"></script>
				<script>
					jQuery('.marquee').marquee({ pauseOnHover: true });
				</script>
			</div>
			<div class="upcoming-events-grids">
				<div class="col-md-8 upcoming-events-left">
					<h3>線上繳費</h3>
					<div class="news-grid-rght3">
						<div class="story">
							<div style="">
								<div id="tt">
									<div id="tit">線 上 繳 費</div>
								</div>


								<form method="POST" id="newebpayForm" target="_blank">
									<input type="hidden" name="RespondType" value="JSON" />
									<input type="hidden" name="Version" value="1.2" />
									<input type="hidden" name="EmailModify" value="0" />
									<input type="hidden" name="LoginType" value="0" />
									<input type="hidden" name="WEBATM" value="0" />
									<input type="hidden" name="CREDIT" value="1" />
									<input type="hidden" name="VACC" value="1" />
									<input type="hidden" name="BARCODE" value="1" />
								</form>





								<div class="content">
									<div style="width: 100%;">
										<?php
											require_once('PHPExcel-1.8.2/Classes/PHPExcel.php');
											$excel = PHPExcel_IOFactory::load("Payments.xlsx");
											$sheet = $excel->getSheetByName('繳費項目與電子收據');
											$buttons = array();
											foreach ($sheet->getRowIterator(2, $sheet->getHighestRow()) as $row) {
												$cellIterator = $row->getCellIterator();
												$cellIterator->setIterateOnlyExistingCells(FALSE);
												$cells = array();
												foreach ($cellIterator as $cell) {
													$cells[] = str_replace("\n", "|", $cell->getValue());
												}
												if ($cells[0] == null)
													continue;

												$buttons[] = "<button class=\"btn btn-warning btn-fill btn-block\" onclick=\"setupPaymentPage('$cells[1],$cells[2]')\">$cells[0]</button>";
											}

											if(count($buttons) > 0){
												print('
												<div class="card card-stats mb-4 mb-lg-0" style="background-color: #f4f5f7; padding: 0px 30px 0px 30px;">
												<div class="card-body">
													<div class="row">
														<div class="col text-center">
															<h5 class="card-title text-uppercase text-muted mb-0"></h5>
															<span class="h3 font-weight-bold mb-0"><b>「台灣語文學會」會員繳費</b></span>
															<h4>提醒：本系統於收到繳費後，會寄發電子收據。</h4>
														</div>
													</div>
													<p class="mt-3 mb-0 text-muted text-sm">');
												foreach($buttons as $item)
													print($item);
												print('</p></div></div>');
											}

											$sheet = $excel->getSheetByName('研討會');
											$buttons = array();
											foreach ($sheet->getRowIterator(2, $sheet->getHighestRow()) as $row) {
												$cellIterator = $row->getCellIterator();
												$cellIterator->setIterateOnlyExistingCells(FALSE);
												$cells = array();
												foreach ($cellIterator as $cell) {
													$cells[] = str_replace("\n", "|", $cell->getValue());
												}
												if ($cells[0] == null)
													continue;

												$buttons[] = "<button class=\"btn btn-warning btn-fill btn-block\" onclick=\"setupPaymentPage('$cells[1],$cells[2]')\">$cells[0]</button>";
											}

											if(count($buttons) > 0){
												print('
												<div class="card card-stats mb-4 mb-lg-0" style="background-color: #f4f5f7; padding: 0px 30px 0px 30px;">
												<div class="card-body">
													<div class="row">
														<div class="col text-center">
															<h5 class="card-title text-uppercase text-muted mb-0"></h5>
															<span class="h3 font-weight-bold mb-0"><b>研討會註冊費繳費</b></span>
															<h4>提醒：本系統於收到繳費後，會寄發電子收據。</h4>
														</div>
													</div>
													<p class="mt-3 mb-0 text-muted text-sm">');
												foreach($buttons as $item)
													print($item);
												print('</p></div></div>');
											}
										?>

										<div class="card card-stats mb-4 mb-lg-0" style="background-color: #f4f5f7; padding: 0px 30px 0px 30px;">
											<div class="card-body">
												<div class="row">
													<div class="col text-center">
														<h5 class="card-title text-uppercase text-muted mb-0"></h5>
														<span class="h3 font-weight-bold mb-0"><b>捐款</b></span>
														<h4>提醒：本系統於收到繳費後，會寄發電子收據。</h4>
													</div>
												</div>
												<p class="mt-3 mb-0 text-muted text-sm">
													<button class="btn btn-warning btn-fill btn-block" onclick="setupUserInputPaymentPage()">為台灣語文學會捐款</button>
												</p>
											</div>
										</div>
									</div>
								</div>



								<div id="clear"></div>
								<div id="top"><img style="float:left;" src="images/top.png" width="15" height="15"><a href="#aaa">Top</a></div>
							</div>
							<div class="modal fade" id="paymentModal" role="dialog" aria-labelledby="exampleModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">繳費資料</h5>
										</div>
										<div class="modal-body">
											<div class="form-group" id="userInputDiv">
												<label>繳費金額*</label>
												<div class="row">
													<div class="col-md-9"><input id="userInput" type="number" class="form-control" placeholder="繳費金額" min="1">
													</div>
												</div>
												<hr>
											</div>
											<div class="form-group">
												<label>繳款人姓名*</label>
												<div class="row">
													<div class="col-md-9"><input id="name" type="text" class="form-control" placeholder="繳款人姓名"></div>
												</div>
											</div>
											<div class="form-group">
												<label>收據抬頭*</label><span>（如需報帳，請填寫核銷單位所需名稱；如無，則填寫姓名）</span>
												<div class="row">
													<div class="col-md-9"><input id="ReceiptTitle" type="text" class="form-control"></div>
												</div>
											</div>
											<div class="form-group">
												<label>統編（無可免填）</label>
												<div class="row">
													<div class="col-md-9"><input id="TaxIDNumber" type="text" class="form-control"></div>
												</div>
											</div>
											<div class="form-group">
												<label>電子信箱/E-mail*</label>
												<div class="row">
													<div class="col-md-9"><input id="email" type="text" class="form-control" placeholder="請輸入email">
													</div>
												</div>
											</div>
											<div class="form-group">
												<label>連絡電話/Telephone*</label><span>（請依照格式 0912345678，若有分機請依 0212345678#1234）</span>
												<div class="row">
													<div class="col-md-9"><input id="phone" type="text" class="form-control" placeholder="0912345678">
													</div>
												</div>
											</div>
											<p>1. 有*標記者為必填。</p>
											<p>2. 以上欄位請務必確認填寫正確，如有誤填情形，本會恕難提供重新開立收據，敬請見諒。</p>
											<input id="ReceiptAddress" type="hidden" class="form-control">
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" onclick="send()">前往繳費</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 upcoming-events-right">
					<h3>線上繳費</h3>
					<div class="banner-bottom-video-grid-left">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class='panel panel-default'>
								<div class='panel-heading' role='tab' id='headingOne'>
									<h4 class='panel-title'>
										<a class='pa_italic collapsed' role='button' data-toggle='collapse'
											data-parent='#accordion' href='#collapse1' aria-expanded='true'
											aria-controls='collapse1'>
											<span class='glyphicon glyphicon-plus' aria-hidden='true'></span><i
												class='glyphicon glyphicon-minus'
												aria-hidden='true'></i>會員繳費與捐款
										</a>
									</h4>
								</div>
								<div id='collapse1' class='panel-collapse collapse' role='tabpanel'
									aria-labelledby='headingOne' style='height: 0px;'>
									<div class='panel-body'>
									<a href='Pay.php'>會員繳費與捐款連結</a>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class='panel panel-default'>
								<div class='panel-heading' role='tab' id='headingOne'>
									<h4 class='panel-title'>
										<a class='pa_italic collapsed' role='button' data-toggle='collapse'
											data-parent='#accordion' href='#collapse2' aria-expanded='true'
											aria-controls='collapse2'>
											<span class='glyphicon glyphicon-plus' aria-hidden='true'></span><i
												class='glyphicon glyphicon-minus'
												aria-hidden='true'></i>出版品購買
										</a>
									</h4>
								</div>
								<div id='collapse2' class='panel-collapse collapse' role='tabpanel'
									aria-labelledby='headingOne' style='height: 0px;'>
									<div class='panel-body'>
									<a href='Pay_2.php'>出版品購買連結</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<br>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="footer-grids wthree-agile">
				<div class="col-md-4 footer-grid-left">
					<h3>聯絡我們</h3>
					<ul>
						<li>聯絡信箱：contact.tlls@gmail.com</li>
						<li>學會地址：11529台北市南港區研究院路二段128號<br>中研院語言所</li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>相關連結</h3>
					<a style="color:white" href="http://www.uijin.idv.tw/" target="_blank"><i>- 洪惟仁老師網站</i></a><br>
					<a style="color:white" href="https://linguist.tw/zh-tw/" target="_blank"><i>- 台灣語言學學會</i></a>
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>關於我們</h3>
					<p>
						「台灣語文學會」最早於1990年開始，由張裕宏教授、董忠司教授與洪惟仁教授展開籌備。
						1991年，委由董忠司教授草擬學會章程草案。
						之後陸續邀集周純一教授、陳恒嘉教授等討論草案內容，並積極聯絡各大學、研究單位的語文及相關科目的學者，募集發起人。
						<i>- 「台灣語文學會」成立經過</i>
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<div class="footer-bottom-left-whtree-agileinfo">
					<p>Copyright &copy; 台灣語文學會 / Taiwan Languages and Literature Society</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<script>
    let totalString = "";
    let userInputElem = document.querySelector("#userInputDiv");

    function setupPaymentPage(theString) {
        userInputElem.style.display = 'none';
        totalString = theString;
        jQuery.noConflict();
        jQuery('#paymentModal').modal('show');
    }

    function setupUserInputPaymentPage() {
        userInputElem.style.display = 'block';
        jQuery.noConflict();
        jQuery('#paymentModal').modal('show');
    }

    document.querySelector("#userInput").addEventListener('change', (event) => {
        totalString = `捐款,${event.target.value}`;
    });

    function send() {
        if(userInputElem.style.display === "block" && document.querySelector("#userInput").value === "")
            return alert('請輸入捐款金額');
        let form = document.querySelector('#newebpayForm');
        let email = document.querySelector('#email').value;
        let name = document.querySelector('#name').value;
        let phone = document.querySelector('#phone').value;
        phone = phone.replace('#', encodeURIComponent('#'));
        let ReceiptTitle = document.querySelector('#ReceiptTitle').value;
        let TaxIDNumber = document.querySelector('#TaxIDNumber').value;
        let ReceiptAddress = document.querySelector('#ReceiptAddress').value;
        console.log(`newebpay_getParams_qtest.php?Email=${email}&name=${name}&phone=${phone}&ReceiptTitle=${ReceiptTitle}&TaxIDNumber=${TaxIDNumber}&ReceiptAddress=${ReceiptAddress}&theString=${totalString}`);
        // return;
        fetch(`newebpay_getParams_qtest.php?Email=${email}&name=${name}&phone=${phone}&ReceiptTitle=${ReceiptTitle}&TaxIDNumber=${TaxIDNumber}&ReceiptAddress=${ReceiptAddress}&theString=${totalString}`)
            .then(res => res.json())
            .then(json => {
                if (json.status == -1)
                    return alert(json.msg);
                form.setAttribute('action', json.apiURL);
                form.innerHTML += `<input type="hidden" name="Amt" value=${json.Amt} />`;
                form.innerHTML += `<input type="hidden" name="ItemDesc" value=${json.ItemDesc} />`;
                form.innerHTML += `<input type="hidden" name="Email" value=${json.Email} />`;
                form.innerHTML += `<input type="hidden" name="MerchantID" value=${json.MerchantID} />`;
                form.innerHTML += `<input type="hidden" name="TimeStamp" value=${json.TimeStamp} />`;
                form.innerHTML += `<input type="hidden" name="MerchantOrderNo" value=${json.MerchantOrderNo} />`;
                form.innerHTML += `<input type="hidden" name="TimeStamp" value=${json.TimeStamp} />`;
                form.innerHTML += `<input type="hidden" name="NotifyURL" value=${json.NotifyURL} />`;
                form.innerHTML += `<input type="hidden" name="TimeStamp" value=${json.TimeStamp} />`;
                form.innerHTML += `<input type="hidden" name="CheckValue" value=${json.CheckValue} />`;
                form.submit();
                form.innerHTML = `<input type="hidden" name="RespondType" value="JSON" />
                    <input type="hidden" name="Version" value="1.2" />
                    <input type="hidden" name="EmailModify" value="0" />
                    <input type="hidden" name="LoginType" value="0" />
                    <input type="hidden" name="WEBATM" value="0" />
                    <input type="hidden" name="CREDIT" value="1" />
                    <input type="hidden" name="VACC" value="1" />
                    <input type="hidden" name="BARCODE" value="1" />`;
                jQuery.noConflict();
                jQuery('#paymentModal').modal('hide');
            })
            .catch(err => {
                console.log(err);
                alert('網路錯誤');
            })
    }
</script>
</body>

</html>