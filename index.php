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
	<style>
		.rslides {
			background-color: rgba(192, 192, 192, 0.4);
			border-radius: 15px;
			padding: 10px;
		}
	</style>
				<script type="text/javascript" src="js/jquery.marquee.js"></script>
				<script>
					$('.marquee').marquee({ pauseOnHover: true });
				</script>
</head>
<?php include_once "Conn_SQL.php"; ?>
<body>
	<div class="banner">
		<div class="banner-info">
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
									<td style="width:15%"><a href="index.php"><img src="images/logo.png" style="border-radius: 20px;width:100%;" /></a></td>
									<td style="width:30%">
										<a class="navbar-brand" href="index.php" style="font-size: 50px;">
											台灣語文學會<br><text style="font-size: 12px;">Taiwan Languagee & Literature Society</text>
										</a>
									</td>
									<td style="width:55%;">
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
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														會員專區 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="short-codes.html">申請入會</a></li>
														<li><a href="icons.html">入會申請表</a></li>
													</ul>
												</li>
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
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						
				</nav>
				<script src="js/responsiveslides.min.js"></script>
				<script>
					$(function () {
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
								$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
							}
						});
					});	
				</script>
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
			</div><br>
				<div id="top" class="callbacks_container" >
					<ul class="rslides" id="slider3">
						<li style="width: 100%;">
							<div class="banner-info-slider">
								<ul>
									<li><a href="single.html">研討會</a></li>
									<li style="float:right;padding-right: 2%;">21 MAR 2024</li>
								</ul>
								<h3>「第十五屆台灣語言及其教學國際學術研討會」徵稿啟事</h3>
								<p><span>-- <i>台灣語言及其教學國際學術研討會</i></span></p>
								<div class="more">
									<a href="single.html" class="type-1">
										<span> Read More </span>
										<span> Read More </span>
									</a>
								</div>
							</div>
						</li>
						<li style="width: 100%;">
							<div class="banner-info-slider">
								<ul>
									<li><a href="single.html">出版品</a></li>
									<li style="float:right;padding-right: 2%;">15 FEB 2024</li>
								</ul>
								<h3>《臺灣語文研究》第18卷第2期已出版</h3>
								<p><span>-- <i>《臺灣語文研究》</i></span></p>
								<div class="more">
									<a href="single.html" class="type-1">
										<span> Read More </span>
										<span> Read More </span>
									</a>
								</div>
							</div>
						</li>
						<li style="width: 100%;">
							<div class="banner-info-slider">
								<ul>
									<li><a href="single.html">學會公告</a></li>
									<li style="float:right;padding-right: 2%;">30 JAN 2024</li>
								</ul>
								<h3>國際漢學平台李壬癸院士的訪談影片分享</h3>
								<p><span>-- <i>國際漢學平台</i></span></p>
								<div class="more">
									<a href="single.html" class="type-1">
										<span> Read More </span>
										<span> Read More </span>
									</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="banner-bottom">
		<div class="container">
			<div class="video-bottom-grids">
				<div class="video-bottom-grids1">
					<div class="col-md-3 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before">
								<img src="images/smallbanner.jpg" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
									<p>活動消息</p>
								</div>
							</div>
							<ul class="list" style="font-size: 10pt;">
								<li><a>第六屆台灣語文學會優秀博士論文獎獲獎名單</a></li>
								<li><a>因應Covid-19多數學校延後畢業離校手續期限，第六屆台灣語文學會優秀博士論文獎持續收件至十月底</a></li>
								<li><a>第六屆台灣語文學會優秀博士論文獎即日起開放申請</a></li>
								<li><a>台灣語文學會Logo設計比賽獲獎名單</a></li>
								<li><a>臺東大學華語系多語言詩歌比賽</a></li>
							</ul>
							<div class="read-more">
								<a href="single.html">READ MORE</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before before1">
								<img src="images/smallbanner.jpg" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
									<p>研討會消息</p>
								</div>
							</div>
							<ul class="list" style="font-size: 10pt;">
								<li><a>台灣語文學會「一日大師講座」活動即將於2020/10/28舉辦</a></li>
								<li><a>台灣語言學系列演講－－台灣ê社會語言狀況，歡迎踴躍參加</a></li>
								<li><a>2022/4/8「反對2030雙語國家」記者會相關報導</a></li>
								<li><a>國際漢學平台李壬癸院士的訪談影片分享</a></li>
								<li><a>台灣語文學會第16屆理監事選舉結果及當選名單</a></li>
							</ul>
							<div class="read-more">
								<a href="single.html">READ MORE</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before before1">
								<img src="images/smallbanner.jpg" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
									<p>出版刊物</p>
								</div>
							</div>
							<ul class="list" style="font-size: 10pt;">
								<li><a>《臺灣語文研究》榮獲2023年臺灣人文及社會科學核心期刊第一級</a></li>
								<li><a>《臺灣語文研究》第18卷第2期已出版</a></li>
								<li><a>《臺灣語文研究》第18卷第1期已出版</a></li>
								<li><a>《臺灣語文研究》第17卷第2期已出版</a></li>
								<li><a>《臺灣語文研究》第17卷第1期已出版</a></li>
							</ul>
							<div class="read-more">
								<a href="single.html">READ MORE</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before before1">
								<img src="images/smallbanner.jpg" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
									<p>學會消息</p>
								</div>
							</div>
							<ul class="list" style="font-size: 10pt;">
								<li><a>	[徵稿啟事]第七屆青年學者台灣語言學術研討會暨台灣語文學會成立三十周年慶祝大會	</a></li>
								<li><a>	第十三屆台灣語言及其教學國際學術研討會	</a></li>
								<li><a>	第十三屆台灣語言及其教學國際學術研討會徵稿啟事	</a></li>
								<li><a>	第六屆青年學者台灣語言學術研討會 論文發表錄取名單	</a></li>
								<li><a>	第六屆青年學者台灣語言學術研討會開始報名	</a></li>
							</ul>
							<div class="read-more">
								<a href="single.html">READ MORE</a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
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
					<a style="color:white"><i>- 洪惟仁老師網站</i></a><br>
					<a style="color:white"><i>- 台灣語言學學會</i></a>
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>關於我們</h3>
					<p style="font-size: medium;">
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