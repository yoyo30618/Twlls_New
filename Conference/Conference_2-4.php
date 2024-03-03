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
									<tr><td style="text-align:center;color:red;"><b>青年學者臺灣語言學術研討會</b></td></tr>
									<tr><td style="text-align:center;color:black;"><b>第四屆青年學者臺灣語言學術研討會</b></td></tr>
									<tr><td style="text-align:center;color:black;">（網址：<a href="https://sites.google.com/site/4youngscholarsconference/da-hui-xiao-xi" target="_blank">https://sites.google.com/site/4youngscholarsconference/da-hui-xiao-xi</a>）</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="text-align:center;color:black;font-size:20pt"><b>第四屆青年學者台灣語言學術研討會議程表</b></td></tr>
									<tr>
										<td style="">
											<table class="table table-bordered" style="width:100%;">
												<tr>
													<td style="text-align:center;width:21%;">時間/場次</td>
													<td colspan="4" style="text-align:center;">會議進程</td>
												</tr>
												<tr>
													<td style="text-align:center;">09：00－09：20</td>
													<td colspan="4" style="text-align:center;">報到、領取會議資料</td>
												</tr>
												<tr>
													<td style="text-align:center;">09：20－09：30</td>
													<td colspan="4" style="text-align:center;">開幕典禮國立台東大學劉校長金源致詞</td>
												</tr>
												<tr>
													<td style="text-align:center;">09：30－09：50</td>
													<td colspan="4" style="text-align:center;">台灣語文學會理事長楊秀芳教授致詞</td>
												</tr>
												<tr>
													<td style="text-align:center;">場次</td>
													<td style="text-align:center;width:15%;">主持人</td>
													<td style="text-align:center;width:15%;">主講人</td>
													<td colspan="2" style="text-align:center;">論文題目</td>
												</tr>
												<tr>
													<td rowspan="4" style="text-align:center;">第一場發表會A<br>（原住民語）<br>09：50－11：35</td>
													<td rowspan="4" style="text-align:center;">黃美金</td>
													<td style="text-align:center;">高秀玉</td>
													<td style="text-align:center;">泰雅族家庭的族語傳承與使用—以新竹縣尖石鄉為例</td>
													<td style="text-align:center;width:15%;">陳淑娟</td>
												</tr>
												<tr>
													<td style="text-align:center;">黃天來</td>
													<td style="text-align:center;">從話語概念看阿美語族語教材課文用語的研究</td>
													<td style="text-align:center;">黃美金</td>
												</tr>
												<tr>
													<td style="text-align:center;">黃基成</td>
													<td style="text-align:center;">排灣語na與nu標記初探</td>
													<td style="text-align:center;">湯愛玉</td>
												</tr>
												<tr>
													<td style="text-align:center;">陳誼誠</td>
													<td style="text-align:center;">從族語文本評估阿美族語的語言活力</td>
													<td style="text-align:center;">張學謙</td>
												</tr>
												<tr>
													<td rowspan="4" style="text-align:center;">第一場發表會B<br>（原住民語）<br>9：40－11:35</td>
													<td rowspan="4" style="text-align:center;">楊秀芳</td>
													<td style="text-align:center;">董宜佳</td>
													<td style="text-align:center;">排灣貴族階層使用的語言意義及其關係─以土坂村Patjalinuk頭目家的祭儀為例</td>
													<td style="text-align:center;">葉美利</td>
												</tr>
												<tr>
													<td style="text-align:center;">陳嬿庄</td>
													<td style="text-align:center;">噶哈巫語的使用現狀與語言、文化復振</td>
													<td style="text-align:center;">李佩容</td>
												</tr>
												<tr>
													<td style="text-align:center;">何秀珍</td>
													<td style="text-align:center;">初探雙語人以雙語作論述用語，觀察其語言成分及論述效益—以排灣族牧師講道為例</td>
													<td style="text-align:center;">江敏華</td>
												</tr>
												<tr>
													<td style="text-align:center;">武佳箴</td>
													<td style="text-align:center;">阿美族表達感謝的語用研究—以面子與文化比較的觀點切入</td>
													<td style="text-align:center;">陳麗君</td>
												</tr>
												<tr>
													<td style="text-align:center;">11：35－13：00</td>
													<td colspan="4" style="text-align:center;"><b>午餐、休息</b></td>
												</tr>


												<tr>
													<td rowspan="4" style="text-align:center;">第一場發表會A<br>（原住民語）<br>09：50－11：35</td>
													<td rowspan="4" style="text-align:center;">黃美金</td>
													<td style="text-align:center;">高秀玉</td>
													<td style="text-align:center;">泰雅族家庭的族語傳承與使用—以新竹縣尖石鄉為例</td>
													<td style="text-align:center;">陳淑娟</td>
												</tr>
												<tr>
													<td style="text-align:center;">黃天來</td>
													<td style="text-align:center;">從話語概念看阿美語族語教材課文用語的研究</td>
													<td style="text-align:center;">黃美金</td>
												</tr>
												<tr>
													<td style="text-align:center;">黃基成</td>
													<td style="text-align:center;">排灣語na與nu標記初探</td>
													<td style="text-align:center;">湯愛玉</td>
												</tr>
												<tr>
													<td style="text-align:center;">陳誼誠</td>
													<td style="text-align:center;">從族語文本評估阿美族語的語言活力</td>
													<td style="text-align:center;">張學謙</td>
												</tr>
												<tr>
													<td rowspan="4" style="text-align:center;">第一場發表會B<br>（原住民語）<br>9：40－11:35</td>
													<td rowspan="4" style="text-align:center;">楊秀芳</td>
													<td style="text-align:center;">董宜佳</td>
													<td style="text-align:center;">排灣貴族階層使用的語言意義及其關係─以土坂村Patjalinuk頭目家的祭儀為例</td>
													<td style="text-align:center;">葉美利</td>
												</tr>
												<tr>
													<td style="text-align:center;">陳嬿庄</td>
													<td style="text-align:center;">噶哈巫語的使用現狀與語言、文化復振</td>
													<td style="text-align:center;">李佩容</td>
												</tr>
												<tr>
													<td style="text-align:center;">何秀珍</td>
													<td style="text-align:center;">初探雙語人以雙語作論述用語，觀察其語言成分及論述效益—以排灣族牧師講道為例</td>
													<td style="text-align:center;">江敏華</td>
												</tr>
												<tr>
													<td style="text-align:center;">武佳箴</td>
													<td style="text-align:center;">阿美族表達感謝的語用研究—以面子與文化比較的觀點切入</td>
													<td style="text-align:center;">陳麗君</td>
												</tr>
												<tr>
													<td style="text-align:center;">11：35－13：00</td>
													<td colspan="4" style="text-align:center;"><b>午餐、休息</b></td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">第二場發表會A<br>（客家語）<br>13：00－14：20</td>
													<td rowspan="3" style="text-align:center;">葉美利</td>


													<td style="text-align:center;">許秀娟、鍾鎮城</td>
													<td style="text-align:center;">國小數學科客華雙語教學之課室言談分析</td>
													<td style="text-align:center;">江敏華</td>
												</tr>
												<tr>
													<td style="text-align:center;">陳彥君</td>
													<td style="text-align:center;">語言轉移後的母語殘餘成份—以臺灣幾個語言現象為例</td>
													<td style="text-align:center;">葉美利</td>
												</tr>
												<tr>
													<td style="text-align:center;">何純惠</td>
													<td style="text-align:center;">兩岸客家話小稱詞演變探析─臺灣客家話與廣東、福建客家話的初步比較</td>
													<td style="text-align:center;">杜佳倫</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">第二場發表會B<br>（華語與台華比較）<br>13：00－14：20</td>
													<td rowspan="3" style="text-align:center;">陳麗君</td>
													<td style="text-align:center;">佐藤圭司</td>
													<td style="text-align:center;">從閩南語看日語漢字讀音「長音」</td>
													<td style="text-align:center;">陳麗君</td>
												</tr>
												<tr>
													<td style="text-align:center;">黃萍雅</td>
													<td style="text-align:center;">導覽員的語言使用現象—以高雄市哈瑪星文化公車為觀察對象</td>
													<td style="text-align:center;">楊允言</td>
												</tr>
												<tr>
													<td style="text-align:center;">蔡子培</td>
													<td style="text-align:center;">台灣華語電視新聞主播播報語音分析</td>
													<td style="text-align:center;">舒兆民</td>
												</tr>
												<tr>
													<td style="text-align:center;">14：20－14：40</td>
													<td colspan="4" style="text-align:center;"><b>茶敘時間</b></td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">第二場發表會B<br>（華語與台華比較）<br>13：00－14：20</td>
													<td rowspan="3" style="text-align:center;">陳麗君</td>
													<td style="text-align:center;">佐藤圭司</td>
													<td style="text-align:center;">從閩南語看日語漢字讀音「長音」</td>
													<td style="text-align:center;">陳麗君</td>
												</tr>
												<tr>
													<td style="text-align:center;">黃萍雅</td>
													<td style="text-align:center;">導覽員的語言使用現象—以高雄市哈瑪星文化公車為觀察對象</td>
													<td style="text-align:center;">楊允言</td>
												</tr>
												<tr>
													<td style="text-align:center;">蔡子培</td>
													<td style="text-align:center;">台灣華語電視新聞主播播報語音分析</td>
													<td style="text-align:center;">舒兆民</td>
												</tr>
												<tr>
													<td style="text-align:center;">14：20－14：40</td>
													<td colspan="4" style="text-align:center;"><b>茶敘時間</b></td>
												</tr>
												<tr>
													<td rowspan="2" style="text-align:center;">第三場發表會A<br>（雙語、跨語言）<br>14：40－15：35</td>
													<td rowspan="2" style="text-align:center;">張學謙</td>
													<td style="text-align:center;">謝詩萱</td>
													<td style="text-align:center;">語言多樣性的利與弊─馬來西亞華語受粵語的影響下的語言遷移現象</td>
													<td style="text-align:center;">湯愛玉</td>
												</tr>
												<tr>
													<td style="text-align:center;">馬秀英</td>
													<td style="text-align:center;">約量助詞「左右」、「前後」及「上下」漢泰語對比與分析</td>
													<td style="text-align:center;">曾金金</td>
												</tr>
												<tr>
													<td rowspan="2" style="text-align:center;">第三場發表會B<br>（台語）<br>14：40－15：35</td>
													<td rowspan="2" style="text-align:center;">李佩容</td>
													<td style="text-align:center;">張以文</td>
													<td style="text-align:center;">鄉土語言教育的觀察與省思—以蘆洲地區的閩南語教學為例</td>
													<td style="text-align:center;">杜佳倫</td>
												</tr>
												<tr>
													<td style="text-align:center;">鄧孟倫</td>
													<td style="text-align:center;">華語與閩南語手部三字格認知隱喻研究</td>
													<td style="text-align:center;">李佩容</td>
												</tr>
												<tr>
													<td style="text-align:center;">15：35－15：55</td>
													<td colspan="4" style="text-align:center;"><b>茶敘時間</b></td>
												</tr>

												<tr>
													<td rowspan="2" style="text-align:center;">第四場發表會A<br>（台語）<br>15：55－17：15</td>
													<td rowspan="2" style="text-align:center;">陳淑娟</td>
													<td style="text-align:center;">潘惠華</td>
													<td style="text-align:center;">當代台語八點檔電視連續劇《風水世家》雙語現象之探討</td>
													<td style="text-align:center;">張學謙</td>
												</tr>
												<tr>
													<td style="text-align:center;">李紫瑜</td>
													<td style="text-align:center;">從語句的「預設」與「衍推」訊息，區別台灣閩南語「甲、著、了」的補語語意</td>
													<td style="text-align:center;">楊秀芳</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">第四場發表會B<br>（新移民語）<br>15：55－17：15</td>
													<td rowspan="3" style="text-align:center;">曾金金</td>
													<td style="text-align:center;">陳咨玟</td>
													<td style="text-align:center;">師生共創越南字母雙語書</td>
													<td style="text-align:center;">曾金金</td>
												</tr>
												<tr>
													<td style="text-align:center;">盧佩芊</td>
													<td style="text-align:center;">融入文化在TPRS 越南語教學上－以越南菊花故事為例</td>
													<td style="text-align:center;">楊允言</td>
												</tr>
												<tr>
													<td style="text-align:center;">蘇青婉</td>
													<td style="text-align:center;">新住民母語學習在台之狀況以泰語為例</td>
													<td style="text-align:center;">舒兆民</td>
												</tr>
												<tr>
													<td style="text-align:center;">17：15－17：35</td>
													<td colspan="4" style="text-align:center;"><b>閉幕典禮楊理事長秀芳主持、賦歸</b></td>
												</tr>
											</table>
										</td>
									</tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="text-align:center;color:red;"><b>第四屆青年學者台灣語言學術研討會</b></td></tr>
									<tr><td style="text-align:center;color:black;font-size:16pt"><b>徵稿啟事</b></td></tr>
									<tr>
										<td style="text-align:center;color:black;font-size:12pt">
											<b>
												會議主題：<br>
												台灣的雙語現象與雙語教育<br>
												會議子題：<br>
												台灣的雙語現象  ● 台灣的雙語教育<br>
												台灣語言的保存與流失 ● 族群語言的教育規畫<br>
												雙語的語言學研究 ● 雙語教育與語言習得<br>
												雙語的心理語言學研究 ● 國小母語教學<br>
												雙語的社會語言學研究 ● 沉浸式母語教學<br>
												雙語現象與語言景觀 ● 國、高中母語必修課的規劃<br>
												瀕危語言的記錄與數位化 ● 母語教學的創新發展<br>
												族群語言的地位規畫 ● 母語的讀寫教育<br>
												族群語言的文本規畫 ● 雙語翻譯與口譯<br>
												（其他與台灣語言及語言教學相關的論文亦所歡迎）<br>
											</b>
										</td>
									</tr>
									<tr><td style="color:darkblue;">摘要截稿：</td></tr>
									<tr><td style="">2015年3月22日</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">錄取通知：</td></tr>
									<tr><td style="">2015年4月26日</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">全文截稿：</td></tr>
									<tr><td style="">2015年10月24日</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">投稿方式：</td></tr>
									<tr><td style="">下載並填寫「發表人資料表」及「論文題目與摘要」，以電子郵件寄到sky821119@gmail.com(每人限制發表一篇)</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">研討會網址：</td></tr>
									<tr><td style=""><a href="https://sites.google.com/site/4youngscholarsconference/" target="_blank">https://sites.google.com/site/4youngscholarsconference/</a></td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">會議收費方式：</td></tr>
									<tr>
										<td style="">
										（1） 論文發表費：學生1500元；非學生2000元（已含會議註冊費）<br>
										（2） 會議註冊費稍後公告<br>
										（3） 台灣語文學會會員免論文發表費及會議註冊費<br>
										</td>
									</tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">主辦單位：</td></tr>
									<tr><td style="">台灣語文學會、國立台東大學華語文學系</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">會議地點：</td></tr>
									<tr><td style="">國立台東大學華語文學系</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">聯絡方式：</td></tr>
									<tr>
										<td style="">
											聯絡地址：95092台東市大學路二段369號<br>
											聯絡電話：089-517764<br>
											稿件聯繫：sky821119@gmail.com 蘇元廷同學<br>
											<a href="../Documents/youth/2015_第四屆青年學者台灣語言學術研討會徵稿啟事fnl.doc">表單下載</a><br>
										</td>
									</tr>
									<tr><td style=""><br></td></tr>
									<tr>
										<td style="">
											備註：<br>
											1.論文摘要請至少包括：「主旨」、「研究問題」、「取材」、「方法」、「預期成果」等。<br>
											2.論文摘要之字數請掌握在一頁以內。<br>
											3.為匿名送審，論文摘要內容請避免透露個人資訊。<br>
											4.投稿時請回傳WORD及PDF一式兩檔。<br>
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