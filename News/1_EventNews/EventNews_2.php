<!DOCTYPE HTML>
<html>

<head>
	<title>台灣語文學會</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="../../js/jquery-1.11.1.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<?php include_once "../../Conn_SQL.php"; ?>
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
									<td style="width:10%"><a href="../../index.php"><img src="../../images/logo.png" style="border-radius: 20px;width:100%;" /></a></td>
									<td style="width:30%">
										<a class="navbar-brand" href="../../index.php" style="font-size: 50px;">
											台灣語文學會<br><text style="font-size: 12px;">Taiwan Languagee & Literature Society</text>
										</a>
									</td>
									<td style="width:60%;">
										<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
											<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
												<li class="act"><a href="../../index.php" style="font-size: 16px;">首頁</a></li>
												<li><a href="../../Introduction.php" style="font-size: 16px;">學會簡介</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														學術活動 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="../../Conference.php">研討會</a></li>
														<li><a href="http://www.twlls.org.tw/jtll/index.php">期刊</a></li>
													</ul>
												</li>
												<li><a href="../../Member.php" style="font-size: 16px;">歷屆獎項</a></li>
												<li><a href="../../Member.php" style="font-size: 16px;">會員專區</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														線上繳費 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="../../Pay.php">會員繳費與捐款</a></li>
														<li><a href="../../Pay_2.php">出版品購買</a></li>
													</ul>
												</li>
												<li><a href="../../breaking.html" style="font-size: 16px;">人才庫</a></li>
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
									echo "<div class='marquee1'><a class='breaking' href='../../".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a></div>";
								else
									echo "<div class='marquee1'><a class='breaking'>".$row["Title"]."</a></div>";
    						}
						}	
					?>		
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="../../js/jquery.marquee.js"></script>
				<script>
					$('.marquee').marquee({ pauseOnHover: true });
				</script>
			</div>
			<div class="upcoming-events-grids">
				<div class="col-md-12 upcoming-events-left">
					<h3><b>2022/4/8「反對2030雙語國家」記者會相關報導</b></h3>
					<div class="news-grid-rght3">
						<div class="story">
							1.     公視新聞_憂獨尊英語破壞台灣語言生態　學界連署反對2030雙語政策<br>
							<a href="https://news.pts.org.tw/article/575389" target="_blank">https://news.pts.org.tw/article/575389</a><br>
							2.     公視新聞_嗙雙語政策孤注重英文　學者籲政府保本土語言<br>
							<a href="https://news.pts.org.tw/article/575497" target="_blank">https://news.pts.org.tw/article/575497</a><br>
							3.     客家新聞_憂本土語流失　學界連署反2030雙語政策<br>
							<a href="https://www.hakkatv.org.tw/news-detail/1649413989747737" target="_blank">https://www.hakkatv.org.tw/news-detail/1649413989747737</a><br>
							(蕃新聞) <a href="https://n.yam.com/Article/2022040855929" target="_blank">https://n.yam.com/Article/2022040855929</a>1<br>
							4.     原視新聞網_台灣擁有多元語言文化　學界掀反對獨尊英語聲浪<br>
							<a href="https://news.ipcf.org.tw/29261" target="_blank">https://news.ipcf.org.tw/29261</a><br>
							5.     大紀元_雙語政策致階級惡化　台學者籲以加拿大為借鏡<br>
							<a href="https://www.epochtimes.com/b5/22/4/8/n13704618.htm" target="_blank">https://www.epochtimes.com/b5/22/4/8/n13704618.htm</a><br>
							6.     工商時報_學界批雙語國家政策淪自我殖民　呼籲立刻退回行政院<br>
							<a href="https://ctee.com.tw/livenews/ch/chinatimes/20220408002659-260405" target="_blank">https://ctee.com.tw/livenews/ch/chinatimes/20220408002659-260405</a><br>
							7.     中央社_學界連署逾千人支持　籲走向「多語台灣英語友善」<br>
							<a href="https://money.udn.com/money/story/7307/6223857?from=edn_newest_index" target="_blank">https://money.udn.com/money/story/7307/6223857?from=edn_newest_index</a><br>
							8.     中央社_學界發起連署　籲走向「多語台灣英語友善」(圖)<br>
							<a href="https://tw.news.yahoo.com/%E5%AD%B8%E7%95%8C%E7%99%BC%E8%B5%B7%E9%80%A3%E7%BD%B2-%E7%B1%B2%E8%B5%B0%E5%90%91-%E5%A4%9A%E8%AA%9E%E5%8F%B0%E7%81%A3%E8%8B%B1%E8%AA%9E%E5%8F%8B%E5%96%84-%E5%9C%96-042446564.html" target="_blank">https://tw.news.yahoo.com/%E5%AD%B8%E7%95%8C%E7%99%BC%E8%B5%B7%E9%80%A3%E7%BD%B2-%E7%B1%B2%E8%B5%B0%E5%90%91-%E5%A4%9A%E8%AA%9E%E5%8F%B0%E7%81%A3%E8%8B%B1%E8%AA%9E%E5%8F%8B%E5%96%84-%E5%9C%96-042446564.html</a><br>
							9.     中央廣播電臺_學界團體反對「雙語國家」　籲發展「多語台灣」方案<br>
							<a href="https://www.rti.org.tw/news/view/id/2129453" target="_blank">https://www.rti.org.tw/news/view/id/2129453</a><br>
							10.  中時_學界批雙語國家政策淪自我殖民　呼籲立刻退回行政院<br>
							<a href="https://www.chinatimes.com/realtimenews/20220408002659-260405?chdtv" target="_blank">https://www.chinatimes.com/realtimenews/20220408002659-260405?chdtv</a><br>
							11.  中時_雙語政策獨尊英語　學界批自我殖民<br>
							<a href="https://turnnewsapp.com/choice/259073.html" target="_blank">https://turnnewsapp.com/choice/259073.html</a><br>
							12.  民視新聞網_反對「2030雙語國家」　逾400位專家學者連署<br>
							(文字) <a href="https://tw.news.yahoo.com/%E5%8F%8D%E5%B0%8D-2030%E9%9B%99%E8%AA%9E%E5%9C%8B%E5%AE%B6-%E9%80%BE400%E4%BD%8D%E5%B0%88%E5%AE%B6%E5%AD%B8%E8%80%85%E9%80%A3%E7%BD%B2-062359035.html" target="_blank">https://tw.news.yahoo.com/%E5%8F%8D%E5%B0%8D-2030%E9%9B%99%E8%AA%9E%E5%9C%8B%E5%AE%B6-%E9%80%BE400%E4%BD%8D%E5%B0%88%E5%AE%B6%E5%AD%B8%E8%80%85%E9%80%A3%E7%BD%B2-062359035.html</a><br>
							(影片) <a href="https://tw.tv.yahoo.com/life-news/%E5%8F%8D%E5%B0%8D-2030%E9%9B%99%E8%AA%9E%E5%9C%8B%E5%AE%B6-%E9%80%BE400%E4%BD%8D%E5%B0%88%E5%AE%B6%E5%AD%B8%E8%80%85%E9%80%A3%E7%BD%B2-082502762.html" target="_blank">https://tw.tv.yahoo.com/life-news/%E5%8F%8D%E5%B0%8D-2030%E9%9B%99%E8%AA%9E%E5%9C%8B%E5%AE%B6-%E9%80%BE400%E4%BD%8D%E5%B0%88%E5%AE%B6%E5%AD%B8%E8%80%85%E9%80%A3%E7%BD%B2-082502762.html</a><br>
							13.  民視新聞網_反對獨尊英語！學界籲檢討2030雙語國家<br>
							<a href="https://tw.news.yahoo.com/%E5%8F%8D%E5%B0%8D%E7%8D%A8%E5%B0%8A%E8%8B%B1%E8%AA%9E-%E5%AD%B8%E7%95%8C%E7%B1%B2%E6%AA%A2%E8%A8%8E2030%E9%9B%99%E8%AA%9E%E5%9C%8B%E5%AE%B6-035747294.html" target="_blank">https://tw.news.yahoo.com/%E5%8F%8D%E5%B0%8D%E7%8D%A8%E5%B0%8A%E8%8B%B1%E8%AA%9E-%E5%AD%B8%E7%95%8C%E7%B1%B2%E6%AA%A2%E8%A8%8E2030%E9%9B%99%E8%AA%9E%E5%9C%8B%E5%AE%B6-035747294.html</a><br>
							14.  自由時報_台灣語文學會等倡議「多語台灣、英語友善」逾1700人連署支持<br>
							<a href="https://news.ltn.com.tw/news/life/breakingnews/3886386" target="_blank">https://news.ltn.com.tw/news/life/breakingnews/3886386</a><br>
							15.  國語日報_學界反雙語國家　籲發展多語臺灣<br>
							<a href="https://www.mdnkids.com/content.asp?sub=1&sn=6412" target="_blank">https://www.mdnkids.com/content.asp?sub=1&sn=6412</a><br>
							16.  聯合報_雙語國家恐弱化學生學習力　台大教授批：烏魯木齊政策<br>
							<a href="https://udn.com/news/story/6885/6224161?from=udn-referralnews_ch2artbottom" target="_blank">https://udn.com/news/story/6885/6224161?from=udn-referralnews_ch2artbottom</a><br>
							17.  聯合報_雙語國家恐釀階級惡化　學者籲以加拿大、新加坡為鑑<br>
							<a href="https://udn.com/news/story/6885/6224249" target="_blank">https://udn.com/news/story/6885/6224249</a><br>
							18.  Taiwan News_Academics urge prioritization of Taiwan's native languages over English<br>
							<a href="https://www.taiwannews.com.tw/en/news/4503281" target="_blank">https://www.taiwannews.com.tw/en/news/4503281</a><br>
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
	<script src="../../js/bootstrap.js"></script>
</body>

</html>