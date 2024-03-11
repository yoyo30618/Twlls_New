<!DOCTYPE HTML>
<html>

<head>
	<title>台灣語文學會</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="../js/jquery-1.11.1.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<?php include_once "../Conn_SQL.php"; ?>
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
									<td style="width:10%"><a href="../index.php"><img src="../images/logo.png" style="border-radius: 20px;width:100%;" /></a></td>
									<td style="width:30%">
										<a class="navbar-brand" href="../index.php" style="font-size: 50px;">
											台灣語文學會<br><text style="font-size: 12px;">Taiwan Languagee & Literature Society</text>
										</a>
									</td>
									<td style="width:60%;">
										<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
											<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
												<li class="act"><a href="../index.php" style="font-size: 16px;">首頁</a></li>
												<li><a href="../Introduction.php" style="font-size: 16px;">學會簡介</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														學術活動 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="../Conference.php">研討會</a></li>
														<li><a href="http://www.twlls.org.tw/jtll/index.php">期刊</a></li>
													</ul>
												</li>
												<li><a href="../Award.php" style="font-size: 16px;">歷屆獎項</a></li>
												<li><a href="../Member.php" style="font-size: 16px;">會員專區</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														線上繳費 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="../Pay.php">會員繳費與捐款</a></li>
														<li><a href="../Pay_2.php">出版品購買</a></li>
													</ul>
												</li>
												<li><a href="../breaking.html" style="font-size: 16px;">人才庫</a></li>
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
									echo "<div class='marquee1'><a class='breaking' href='../".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a></div>";
								else
									echo "<div class='marquee1'><a class='breaking'>".$row["Title"]."</a></div>";
    						}
						}	
					?>		
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="../js/jquery.marquee.js"></script>
				<script>
					$('.marquee').marquee({ pauseOnHover: true });
				</script>
			</div>
			<div class="upcoming-events-grids">
				<div class="col-md-8 upcoming-events-left">
					<h3>首頁 / 研討會</h3>
					<div class="news-grid-rght3">
						<div class="story"> <!--修改研討會主要內容區域-->
							<table style="width:100%;">
								<tr><td style="text-align:center;color:red;"><b>第十三屆臺灣語言及其教學國際學術研討會</b></td></tr>
								<tr><td style="text-align:center;color:red;"><b>The 13th International Symposium on Taiwanese Languages and Teaching</b></td></tr>
								<tr><td style="text-align:center;"><br></td></tr>
								<tr><td style="text-align:center;">會議訊息通知</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">Michael Hornsby</td></tr>
								<tr>
									<td style="">
										服務單位：Adam Mickiewicz University Poznan<br>
										演講題目：The contribution of ’new speakers’ to minority language minoritisation<br>
									</td>
								</tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">Sally Rice</td></tr>
								<tr>
									<td style="">
										服務單位：University of Alberta<br>
										演講題目：Cognitive Linguistics and Endangered Language Pedagogy<br>
									</td>
								</tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">蔡素娟</td></tr>
								<tr>
									<td style="">
										服務單位：國立中正大學語言學研究所教授<br>
										演講題目：台灣閩南語口語語料庫的多重功能：研究、傳承與應用（The Multiple Functions of Taiwan-Minnan Spoken Corpora: Research, Inheritance, and Applications）<br>
									</td>
								</tr>
								<tr><td style="text-align:center;"><img src="../Documents/istlt13.png" style="width:100%;" alt=""/></td></tr>
								<tr>
									<td style="color:red">
										報名資訊：<br>
										1.線上報名系統：<a href="https://reurl.cc/5qGR16" target="_blank">https://reurl.cc/5qGR16（論文發表者、主持人、評論人免線上註冊報名）</a><br>
										2.線上繳費系統：<a href="http://www.twlls.org.tw/Pay.php" target="_blank">http://www.twlls.org.tw/Pay.php</a><br>
										3.註冊費用：<br>
											<table style="width:100%;" class="table table-bordered">
												<tr>
													<td colspan="3">I. 台灣語文學會會員</td>
												</tr>
												<tr>
													<td></td>
													<td>已繳交<br>2020年度會費</td>
													<td>尚未繳交<br>2020年度會費</td>
												</tr>
												<tr>
													<td>學生</td>
													<td>免費</td>
													<td>$500</td>
												</tr>
												<tr>
													<td>一般人士</td>
													<td>免費</td>
													<td>$1,000</td>
												</tr>
												<tr>
													<td colspan="3">II. 非台灣語文學會會員</td>
												</tr>
												<tr>
													<td colspan="2">即日起至9/30完成線上註冊<br>(最遲須於10/8完成繳費)</td>
													<td>現場註冊<br>10/16-10/17</td>
												</tr>
												<tr>
													<td>學生</td>
													<td>$600</td>
													<td>$750</td>
												</tr>
												<tr>
													<td>一般人士</td>
													<td>$1,200</td>
													<td>$1,500</td>
												</tr>
												<tr>
													<td colspan="3">
														備註：
														1. 9/30關閉線上註冊表單，10/8關閉匯款權限，若未於期限內完成，視同現場註冊。
														2. 現場報名之與會者，恕無法保證取得論文集。
													</td>
												</tr>
											</table>
										會議網址：<a href="https://istlt2020.wixsite.com/nthu" target="_blank">https://istlt2020.wixsite.com/nthu</a><br>
									</td>
								</tr>
								<tr><td style="text-align:center;"><embed src="../Documents/istlt13.pdf" style="width:100%;height:600px" alt="" ></embed></td></tr>
								<tr><td style=""><br></td></tr>
								<tr>
									<td style="">
										主辦單位：國立清華大學臺灣語言研究與教學研究所<br>
										聯絡資訊：<br>
										03-5715131轉73601 張小姐<br>
										<a href="mailto:istlt2020@gmail.com">istlt2020@gmail.com</a><br>
									</td>
								</tr>
							</table>
						</div>
					</div><br>
				</div>
				<div class="col-md-4 upcoming-events-right">
					<h3>研討會</h3>
					
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
												aria-hidden='true'></i>台灣語言及其教學國際研討會
										</a>
									</h4>
								</div>
								<div id='collapse1' class='panel-collapse collapse' role='tabpanel'
									aria-labelledby='headingOne' style='height: 0px;'>
									<div class='panel-body'>
									<ul>
										<?php
											$sql = "SELECT * FROM `relatedlinks` WHERE `Notice`='研討會' AND `Function`='台灣語言及其教學國際研討會' AND `IsUsed`=1 ORDER BY `OrderIndex` DESC";
											$result = $conn_1->query($sql);
											if ($result->num_rows > 0) {
												while ($row = mysqli_fetch_array($result)) {
													echo "<li><a href='../".$row['Value']."'>".$row['Item']."</li>";
												}
											}
										?>
									</ul>
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
												aria-hidden='true'></i>青年學者台灣語言學術研討會
										</a>
									</h4>
								</div>
								<div id='collapse2' class='panel-collapse collapse' role='tabpanel'
									aria-labelledby='headingOne' style='height: 0px;'>
									<div class='panel-body'>
									<ul>
										<?php
											$sql = "SELECT * FROM `relatedlinks` WHERE `Notice`='研討會' AND `Function`='青年學者台灣語言學術研討會' AND `IsUsed`=1 ORDER BY `OrderIndex` DESC";
											$result = $conn_1->query($sql);
											if ($result->num_rows > 0) {
												while ($row = mysqli_fetch_array($result)) {
													echo "<li><a href='../".$row['Value']."'>".$row['Item']."</li>";
												}
											}
										?>
									</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class='panel panel-default'>
								<div class='panel-heading' role='tab' id='headingOne'>
									<h4 class='panel-title'>
										<a class='pa_italic collapsed' role='button' data-toggle='collapse'
											data-parent='#accordion' href='#collapse3' aria-expanded='true'
											aria-controls='collapse3'>
											<span class='glyphicon glyphicon-plus' aria-hidden='true'></span><i
												class='glyphicon glyphicon-minus'
												aria-hidden='true'></i>台灣語言學一日大師/專題講座
										</a>
									</h4>
								</div>
								<div id='collapse3' class='panel-collapse collapse' role='tabpanel'
									aria-labelledby='headingOne' style='height: 0px;'>
									<div class='panel-body'>
									<ul>
										<?php
											$sql = "SELECT * FROM `relatedlinks` WHERE `Notice`='研討會' AND `Function`='台灣語言學一日大師/專題講座' AND `IsUsed`=1 ORDER BY `OrderIndex` DESC";
											$result = $conn_1->query($sql);
											if ($result->num_rows > 0) {
												while ($row = mysqli_fetch_array($result)) {
													echo "<li><a href='../".$row['Value']."'>".$row['Item']."</li>";
												}
											}
										?>
									</ul>
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
	<script src="../js/bootstrap.js"></script>
</body>

</html>