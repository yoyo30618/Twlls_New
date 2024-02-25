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
														<li><a href="short-codes.html">研討會</a></li>
														<li><a href="short-codes.html">期刊</a></li>
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
														<li><a href="short-codes.html">會員繳費與捐款</a></li>
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
						$sql = "SELECT * FROM `marquee` WHERE `IsShow`=1";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
    						while ($row = mysqli_fetch_array($result)) {
								if($row["url"]!="")
									echo "<div class='marquee1'><a class='breaking' href='".$row["url"]."'>".$row["Message"]."</a></div>";
								else
									echo "<div class='marquee1'><a class='breaking'>".$row["Message"]."</a></div>";
    						}
						}	
					?>		
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="js/jquery.marquee.js"></script>
				<script>
					$('.marquee').marquee({ pauseOnHover: true });
				</script>
			</div>
			<div class="upcoming-events-grids">
				<div class="col-md-6 upcoming-events-left">
					<h3>成立經過</h3>
					<div class="news-grid-rght3">
						<img src="images/found.jpg" alt=" " class="img-responsive" />
						<div class="story">
							<p style="color:red;">「台灣語文學會」成立經過</p>
							<h3>
								<pre style="white-space: pre-wrap;font-family:CustomFont;">
　　「台灣語文學會」最早於1990年開始，由張裕宏教授、董忠司教授與洪惟仁教授展開籌備。1991年，委由董忠司教授草擬學會章程草案。之後陸續邀集周純一教授、陳恒嘉教授等討論草案內容，並積極聯絡各大學、研究單位的語文及相關科目的學者，募集發起人。
　　1991年 4月13日，第一次發起人會假國家政策研究中心會議室正式召開。會中討論了章程草案，填寫發起人名冊，選出籌備委員共九名：張裕宏、洪惟仁、董忠司、姚榮松、曹逢甫、江永進、陳恒嘉、羅肇錦、趙順文（依得票數順序），接著立即召開第一次籌備會議，討論進一步之籌備工作、決定未來一年半的工作計劃：
    1. 1991年底以前完成音標研議。
    2. 1992年底以前完成台語常用漢字表。籌備經費由台語社負擔。籌備伊始，台語社即慨捐一萬元，以為支應。
       1991年5月5日，召開第二次籌備會議。
       1991年5月8日，由董忠司教授與洪惟仁教授遞送申請書前往內政部申請立案，並於 5月31日獲准正式籌備。
       1991年6月23日，在台北市ＹＭＣＡ舉行第二次發起人會，並依法在內政部社會司派員監督下舉行發起人會議，此為第一次正式之發起人會。會中討論章程草案，選出十一名籌備委員為：曹逢甫、江永進、姚榮松、董忠司、洪惟仁、羅肇錦、陳恒嘉、黃宣範、龔煌城、鍾榮富、張文彬（依得票順序）。並選出曹逢甫為主任委員。
       1991年7月20日，在國立臺灣師範大學召開第二次籌備會議，會中決定 8月17日召開「台灣語文學會」成立大會。
       1991年 8月17日，「台灣語文學會」正式成立。
							</pre>
							</h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 upcoming-events-right">
					<h3>組織成員</h3>
					<div class="banner-bottom-video-grid-left">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<?php
								$sql = "SELECT * FROM `member` ORDER BY OrderIndex DESC";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = mysqli_fetch_array($result)) {
										echo "<div class='panel panel-default'>";
										echo "	<div class='panel-heading' role='tab' id='headingOne'>";
										echo "		<h4 class='panel-title'>";
										echo "			<a class='pa_italic collapsed' role='button' data-toggle='collapse'";
										echo "				data-parent='#accordion' href='#collapse".$row["Term"]."' aria-expanded='true'";
										echo "				aria-controls='collapse".$row["Term"]."'>";
										echo "				<span class='glyphicon glyphicon-plus' aria-hidden='true'></span><i";
										echo "					class='glyphicon glyphicon-minus'";
										echo "					aria-hidden='true'></i>第".$row["Term"]."屆理監事會[".$row["Sessions"]."]";
										echo "			</a>";
										echo "		</h4>";
										echo "	</div>";
										echo "	<div id='collapse".$row["Term"]."' class='panel-collapse collapse' role='tabpanel'";
										echo "		aria-labelledby='headingOne' style='height: 0px;'>";
										echo "		<div class='panel-body'>";
										echo "			<table class='table table-bordered'>";
															for($i=1;$i<=15;$i++){
																if($row["Title".$i]!=""){
																	if($i==1){
																		echo "				<tr>";
																		echo "					<td width='35%'>".$row["Title".$i]."</td>";
																		echo "					<td>".$row["Value".$i]."</td>";
																		echo "				</tr>";

																	}
																	else{
																		echo "				<tr>";
																		echo "					<td>".$row["Title".$i]."</td>";
																		echo "					<td>".$row["Value".$i]."</td>";
																		echo "				</tr>";
																	}
																}
																else{
																	break;
																}
															}
										echo "			</table>";
										echo "		</div>";
										echo "	</div>";
										echo "</div>";
									}
								}
							?>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="news">
				<div class="news-grids">
					<div class="col-md-12 news-grid-left">
						<h3>相關法規</h3>
						<ul>
							<li>
								<h2><a href="Constitution.php">台灣語文學會組織章程</a> By 台灣語文學會
								</h2>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
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
	<script src="js/bootstrap.js"></script>
</body>

</html>