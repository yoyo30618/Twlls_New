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
														<li><a href="../Pay.php">期刊</a></li>
													</ul>
												</li>
												<li><a href="../Member.php" style="font-size: 16px;">歷屆獎項</a></li>
												<li><a href="../Member.php" style="font-size: 16px;">會員專區</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														線上繳費 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="../Pay.php">會員繳費與捐款</a></li>
														<li><a href="../icons.html">出版品購買</a></li>
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
						$result = $conn->query($sql);
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
									<tr><td style="text-align:center;color:red;"><b>第六屆青年學者台灣語言學術研討會</b></td></tr>
									<tr><td style="text-align:center;color:black;">會議主網站 <a href="https://sites.google.com/view/ysstl6/ysstl6?authuser=0" target="_blank">https://sites.google.com/view/ysstl6/ysstl6?authuser=0</a></td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="text-align:center;color:black;"><a href="https://sites.google.com/view/ysstl6/%E5%A0%B1%E5%90%8D%E8%B3%87%E8%A8%8A?authuser=0" target="_blank">直接報名請點我</a></td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="text-align:center;color:black;"><b>第六屆青年學者台灣語言學術研討會議程表</b></td></tr>
									<tr>
										<td style="color:black;">
											舉辦日期：2019年11月2日（六）<br>
											會議地點：國立彰化師範大學國文系四樓視聽教室 & 台灣文學研究所二樓白沙書院<br>
											主辦單位：國立彰化師範大學台灣文學研究所、台灣語文學會<br>
										</td>
									</tr>
									<tr>
										<td style="">
											<table class="table table-bordered" style="width:100%;">
												<tr>
													<td style="text-align:center;">時間/場次</td>
													<td style="text-align:center;width:21%">主持人</td>
													<td style="text-align:center;width:21%">主講人</td>
													<td style="text-align:center;">活動及發表題目</td>
													<td style="text-align:center;width:21%">特約討論</td>
												</tr>
												<tr>
													<td style="text-align:center;">08:40-09:10</td>
													<td colspan="4" style="text-align:center;"><b>報到、領取會議資料（國文系四樓視聽教室）</b></td>
												</tr>
												<tr>
													<td style="text-align:center;">09:10-09:20</td>
													<td style="text-align:center;">召集人 邱湘雲<br>(彰化師大)</td>
													<td style="text-align:center;">郭艷光校長<br>周益忠院長<br>江敏華會長</td>
													<td colspan="2" style="text-align:center;">開幕典禮  貴賓致詞 介紹來賓</td>
												</tr>
												<tr>
													<td style="text-align:center;">09:20-10:20</td>
													<td style="text-align:center;">會長 江敏華<br>(中央研究院)</td>
													<td style="text-align:center;">劉承賢<br>(清華大學)</td>
													<td colspan="2" style="text-align:center;">台灣語文學會優秀博士論文獎頒獎暨得獎人發表</td>
												</tr>
												<tr>
													<td style="text-align:center;">10:20-10:40</td>
													<td colspan="4" style="text-align:center;">茶敘時間</td>
												</tr>
												<tr>
													<td rowspan="7" style="text-align:center;">Session 1<br>10:40-12:00</td>
													<td colspan="4" style="text-align:center;">語音 & 詞彙 & 語言風格</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">A場：視聽教室<br>楊秀芳<br>(台灣大學)</td>
													<td style="text-align:center;">游喬茵<br>(臺灣師大)</td>
													<td style="text-align:center;">論臺灣閩南語中唇音異化的歷時演變</td>
													<td style="text-align:center;">陳彥君<br>(東海大學)</td>
												</tr>
												<tr>
													<td style="text-align:center;">蔣敏全<br>(彰化師大)</td>
													<td style="text-align:center;">彰化縣在地俗諺之研究</td>
													<td style="text-align:center;">李惠琦<br>(成功大學)</td>
												</tr>
												<tr>
													<td style="text-align:center;">廖志斌<br>(彰化師大)</td>
													<td style="text-align:center;">閩南語四字格慣用語認知隱喻探析</td>
													<td style="text-align:center;">楊秀芳<br>(台灣大學)</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">B場：白沙書院<br>鍾榮富<br>(南臺科大)</td>
													<td style="text-align:center;">宋秀桂<br>(彰化師大)</td>
													<td style="text-align:center;">臺灣俗諺語量詞分類</td>
													<td style="text-align:center;">駱嘉鵬<br>(台中教大)</td>
												</tr>
												<tr>
													<td style="text-align:center;">林淑芬<br>(彰化師大)</td>
													<td style="text-align:center;">臺語文學獎囡仔歌作品語言風格─以《彰化縣創作比賽優勝作品專輯》為範疇</td>
													<td style="text-align:center;">梁淑慧<br>(台中教大)</td>
												</tr>
												<tr>
													<td style="text-align:center;">左春香<br>(臺北市大)</td>
													<td style="text-align:center;">試論客語小說語言風格—以〈德旺叔〉、〈求雨〉、〈水筆仔〉為例</td>
													<td style="text-align:center;">邱湘雲<br>(彰化師大)</td>
												</tr>
												<tr>
													<td style="text-align:center;">12:00-13:20</td>
													<td colspan="4" style="text-align:center;"><b>午餐、休息（台灣語文學會會員大會）</b></td>
												</tr>
												<tr>
													<td rowspan="7" style="text-align:center;">Session 2<br>13:20-14:40</td>
													<td colspan="4" style="text-align:center;">語法 & 語用</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">A場：視聽教室<br>王旭<br>(清華大學)</td>
													<td style="text-align:center;">蔡雅婷<br>(San José州大)</td>
													<td style="text-align:center;">ū 有 + VP Construction in Early Southern Min</td>
													<td style="text-align:center;">郭維茹<br>(台灣師大)</td>
												</tr>
												<tr>
													<td style="text-align:center;">高光良<br>(高雄師大)</td>
													<td style="text-align:center;">台灣南排灣語名物化結構研究—以屏東縣牡丹鄉牡丹部落方言為例</td>
													<td style="text-align:center;">李佩容<br>(東華大學)</td>
												</tr>
												<tr>
													<td style="text-align:center;">張美雲<br>(彰化師大)</td>
													<td style="text-align:center;">臺灣閩南語四字成詞之語法結構探討</td>
													<td style="text-align:center;">陳菘霖<br>(成功大學)</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">B場：白沙書院<br>葉美利<br>(清華大學)</td>
													<td style="text-align:center;">陳穎昌<br>(臺灣大學)</td>
													<td style="text-align:center;">On the Lexicalization and Grammaticalization of the Verbal</td>
													<td style="text-align:center;">鄭縈<br>(清華大學)</td>
												</tr>
												<tr>
													<td style="text-align:center;">黃正靜<br>(彰化師大)</td>
													<td style="text-align:center;">李文古話本中的詞彙結構探討</td>
													<td style="text-align:center;">何純惠<br>(交通大學)</td>
												</tr>
												<tr>
													<td style="text-align:center;">謝職全<br>(清華大學)</td>
													<td style="text-align:center;">客家話差比句「X 比 Y 較 W」否定式其華語對譯的語義探討</td>
													<td style="text-align:center;">賴文英<br>(台灣師大)</td>
												</tr>
												<tr>
													<td style="text-align:center;">14:40-15:00</td>
													<td colspan="4" style="text-align:center;"><b>茶敘時間</b></td>
												</tr>
												<tr>
													<td rowspan="7" style="text-align:center;">Session 3<br>15:00-16:20</td>
													<td colspan="4" style="text-align:center;">語義 & 教學</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">A場：視聽教室<br>邱湘雲<br>(彰化師大)</td>
													<td style="text-align:center;">郭庭妤<br>(清華大學)</td>
													<td style="text-align:center;">賽夏族之語言活力與復振─以苗栗縣賽夏族瓦祿部落為例</td>
													<td style="text-align:center;">范瑞鈴<br>(聯合大學)</td>
												</tr>
												<tr>
													<td style="text-align:center;">洪順義<br>(清華大學)</td>
													<td style="text-align:center;">從認知隱喻的角度看排灣族北葉部落Masilid的命名現象—以地名、人名、家名為例</td>
													<td style="text-align:center;">謝富惠<br>(大同大學)</td>
												</tr>
												<tr>
													<td style="text-align:center;">簡立婷<br>(清華大學)</td>
													<td style="text-align:center;">達悟語幼兒沉浸式教學實驗班初探</td>
													<td style="text-align:center;">謝富惠<br>(大同大學)</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">B場：白沙書院<br>王本瑛<br>(高雄師大)</td>
													<td style="text-align:center;">謝芸薇<br>(清華大學)</td>
													<td style="text-align:center;">「情境模式」應用於祈使句之課程與教學─以賽德克族語為例</td>
													<td style="text-align:center;">王本瑛<br>(高雄師大)</td>
												</tr>
												<tr>
													<td style="text-align:center;">鄧孟倫<br>(臺灣師大)</td>
													<td style="text-align:center;">淺談網路流行語之認知隱喻─以15-20歲之學生為例</td>
													<td style="text-align:center;">張群<br>(臺中科大)</td>
												</tr>
												<tr>
													<td style="text-align:center;">盧佩芊<br>(成功大學)</td>
													<td style="text-align:center;">用父親的話教母親的話:透過台語學習越南語的意義及做法</td>
													<td style="text-align:center;">徐富美<br>(元智大學)</td>
												</tr>
												<tr>
													<td style="text-align:center;">16:20-16:30</td>
													<td style="text-align:center;">江理事長 敏華 </td>
													<td colspan="3" style="text-align:center;"><b>閉幕典禮</b></td>
												</tr>
											</table>
										</td>
									</tr>
									<tr><td style="">*每場發表時間80分鐘，主持時間5分鐘，發表時間15分鐘，特約討論時間8分鐘，綜合討論時間6分鐘。</td></tr>
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
										<li><a href='Conference_1-14.php'>第十四屆</li>
										<li><a href='Conference_1-13.php'>第十三屆</li>
										<li><a href='Conference_1-12.php'>第十二屆</li>
										<li><a href='Conference_1-11.php'>第十一屆</li>
										<li><a href='Conference_1-10.php'>第十屆</li>
										<li><a href='Conference_1-9.php'>第九屆</li>
										<li><a href='Conference_1-8.php'>第八屆</li>
										<li><a href='Conference_1-7.php'>第七屆</li>
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
										<li><a href='Conference_2-8.php'>第八屆</li>
										<li><a href='Conference_2-7.php'>第七屆</li>
										<li><a href='Conference_2-6.php'>第六屆</li>
										<li><a href='Conference_2-5.php'>第五屆</li>
										<li><a href='Conference_2-4.php'>第四屆</li>
										<li><a href='Conference_2-3.php'>第三屆</li>
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
										<li><a href='Conference_3-7.php'>第七屆</li>
										<li><a href='Conference_3-6.php'>第六屆</li>
										<li><a href='Conference_3-5.php'>第五屆</li>
										<li><a href='Conference_3-4.php'>第四屆</li>
										<li><a href='Conference_3-3.php'>第三屆</li>
										<li><a href='Conference_3-2.php'>第二屆</li>
										<li><a href='Conference_3-1.php'>第一屆</li>
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