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
		#bgVideo {
		position: absolute;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		z-index: -1;
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
														<li><a href="http://www.twlls.org.tw/jtll/index.php">期刊</a></li>
													</ul>
												</li>
												<li><a href="Award.php" style="font-size: 16px;">歷屆獎項</a></li>
												<li><a href="Member.php" style="font-size: 16px;">會員專區</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														線上繳費 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="Pay.php">會員繳費與捐款</a></li>
														<li><a href="Pay_2.php">出版品購買</a></li>
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
					$('.marquee').marquee({ pauseOnHover: true });
				</script>
				</div><br>
				<div id="top" class="callbacks_container" >
					<ul class="rslides" id="slider3">
						<?php
							$sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `ShowOnBanner`=1 ORDER BY OrderIndex LIMIT 10";
							$result = $conn_1->query($sql);
							if ($result->num_rows > 0) {
								while ($row = mysqli_fetch_array($result)) {
									echo"<li style='width: 100%;min-height:330px'>";
										echo"<div class='banner-info-slider'>";
											echo"<ul>";
												echo"<li><a>".$row["Classification"]."</a></li>";
												echo"<li style='float:right;padding-right: 2%;'>".substr($row["DateTime"],0,10)."</li>";
											echo"</ul>";
											echo"<h3><a style='color:white;' href='".$row["url"]."'>".$row["Title"]."</a></h3>";
											echo"<p><span>-- <i>".$row["PostedBy"]."</i></span></p>";
											echo"<div class='more'>";
												echo"<a href='".$row["url"]."' class='type-1'>";
													echo"<span> Read More </span>";
													echo"<span> Read More </span>";
												echo"</a>";
												// echo"<video autoplay muted loop id='bgVideo'>";
												// echo"<source src='images/banner.mp4' type='video/mp4'>";
												// echo"Your browser does not support HTML5 video.";
												// echo"</video>";
											echo"</div>";

										echo"</div>";
										
									echo"</li>";
						
								}
							}
						?>					
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
								<img src="images/PIC1.jpg" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
									<p>活動消息</p>
								</div>
							</div>
							<ul class="list" style="font-size: 10pt;">
								<?php
									$sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='活動消息' ORDER BY OrderIndex LIMIT 3";
									$result = $conn_1->query($sql);
									if ($result->num_rows > 0) {
										while ($row = mysqli_fetch_array($result)) {
											echo "<li style='min-height: 90px;'><a style='color:black' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a></li>";
										}
										 
									}
								?>
							</ul>
							<div class="read-more">
								<a href="News.php">查看全部公告</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before before1">
								<img src="images/PIC2.png" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
									<p>學術研討會</p>
								</div>
							</div>
							<ul class="list" style="font-size: 10pt;">
								<?php
									$sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='學術研討會' ORDER BY OrderIndex LIMIT 3";
									$result = $conn_1->query($sql);
									if ($result->num_rows > 0) {
										while ($row = mysqli_fetch_array($result)) {
											echo "<li style='min-height: 90px;'><a style='color:black' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a></li>";
										}
									}
								?>
							</ul>
							<div class="read-more">
								<a href="News.php">查看全部公告</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before before1">
								<img src="images/PIC3.jpg" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
									<p>出版品</p>
								</div>
							</div>
							<ul class="list" style="font-size: 10pt;">
								<?php
									$sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='出版品' ORDER BY OrderIndex LIMIT 3";
									$result = $conn_1->query($sql);
									if ($result->num_rows > 0) {
										while ($row = mysqli_fetch_array($result)) {
											echo "<li style='min-height: 90px;'><a style='color:black' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a></li>";
										}
									}
								?>
							</ul>
							<div class="read-more">
								<a href="News.php">查看全部公告</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before before1">
								<img src="images/PIC3.jpg" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
									<p>出版期刊</p>
								</div>
							</div>
							<ul class="list" style="font-size: 10pt;">
								<?php
									$sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='出版期刊' ORDER BY OrderIndex LIMIT 3";
									$result = $conn_1->query($sql);
									if ($result->num_rows > 0) {
										while ($row = mysqli_fetch_array($result)) {
											echo "<li style='min-height: 90px;'><a style='color:black' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a></li>";
										}
									}
								?>
							</ul>
							<div class="read-more">
								<a href="News.php">查看全部公告</a>
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
					<a style="color:white" href="http://www.uijin.idv.tw/" target="_blank"><i>- 洪惟仁老師網站</i></a><br>
					<a style="color:white" href="https://linguist.tw/zh-tw/" target="_blank"><i>- 台灣語言學學會</i></a>
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