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
									<tr><td style="text-align:center;color:red;"><b>第三屆青年學者臺灣語言學術研討會</b></td></tr>
									<tr><td style="text-align:center;color:black;font-size:20pt"><b>第三屆青年學者臺灣語言學術研討會議程表</b></td></tr>
									<tr><td style=""><br></td></tr>
									<tr>
										<td style="">
											<table class="table table-bordered" style="width:100%;">
												<tr>
													<td style="text-align:center;width:21%;">時間/場次</td>
													<td colspan="4" style="text-align:center;">會議進程</td>
												</tr>
												<tr>
													<td style="text-align:center;">08：40－09：10</td>
													<td colspan="4" style="text-align:center;">報到、領取會議資料</td>
												</tr>
												<tr>
													<td style="text-align:center;">09：10－09：30</td>
													<td colspan="4" style="text-align:center;"><b>開幕典禮</b><br>客文所利所長亮時主持、國立高雄師範大學蔡校長培村致詞</td>
												</tr>
												<tr>
													<td style="text-align:center;"><b>場次</b></td>
													<td style="text-align:center;width:12%;"><b>主持人</b></td>
													<td style="text-align:center;width:12%;"><b>發表人</b></td>
													<td colspan="2"  style="text-align:center;"><b>論文題目</b></td>
												</tr>
												<tr>
													<td style="text-align:center;">09：30－10：00</td>
													<td rowspan="2" style="text-align:center;">陳淑娟</td>
													<td style="text-align:center;color:red;">邀請中</td>
													<td colspan="2"  style="text-align:center;color:red;">102年度台灣語文博士論文獎得獎人發表(I)</td>
												</tr>
												<tr>
													<td style="text-align:center;">10：00－10：30</td>
													<td style="text-align:center;color:red;">邀請中</td>
													<td colspan="2"  style="text-align:center;color:red;">102年度台灣語文博士論文獎得獎人發表(I)</td>
												</tr>
												<tr>
													<td style="text-align:center;">10：30－10：50</td>
													<td colspan="3"  style="text-align:center;"><b>茶敘時間</b></td>
													<td style="text-align:center;width:12%;"><b>評論人</b></td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">第一場發表會A(客家語)<br>10：50－12：00</td>
													<td rowspan="3" style="text-align:center;">吳中杰</td>
													<td style="text-align:center;">何純惠</td>
													<td style="text-align:center;">長汀縣羊牯鄉(官坑)客家方言的音韻演變</td>
													<td style="text-align:center;">鄭曉峯</td>
												</tr>
												<tr>
													<td style="text-align:center;">蔡幸娥</td>
													<td style="text-align:center;">台灣客家「乞食」諺語之社會文化研究</td>
													<td style="text-align:center;">邱湘雲</td>
												</tr>
												<tr>
													<td style="text-align:center;">盧俊方</td>
													<td style="text-align:center;">臺灣客語曾梗兩攝韻尾流變探析</td>
													<td style="text-align:center;">江敏華</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">第二場發表會B（閩南語）<br>13：30－14：40</td>
													<td rowspan="3" style="text-align:center;">楊秀芳</td>
													<td style="text-align:center;">郭永松</td>
													<td style="text-align:center;">試析臺灣閩南語介詞「自」、「從(tsing5)」與「從(tsiong5)」的時空概念化差異</td>
													<td style="text-align:center;">連金發</td>
												</tr>
												<tr>
													<td style="text-align:center;">劉慧娟</td>
													<td style="text-align:center;">影響閩南語音段在語誤當中出現的頻率高低的幾個關鍵因素</td>
													<td style="text-align:center;">賴怡秀</td>
												</tr>
												<tr>
													<td style="text-align:center;">盧玟伶</td>
													<td style="text-align:center;">台灣閩南語「食」的動作詞彙語義辨析初探</td>
													<td style="text-align:center;">楊秀芳</td>
												</tr>
												<tr>
													<td style="text-align:center;">14：40－15：00</td>
													<td colspan="4"  style="text-align:center;"><b>茶敘時間</b></td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">第三場發表會A（華語）<br>15：00－16：10</td>
													<td rowspan="3" style="text-align:center;">曹逢甫</td>
													<td style="text-align:center;">葉梓安</td>
													<td style="text-align:center;">常用詞「然後」語音的轉變</td>
													<td style="text-align:center;">歐淑珍</td>
												</tr>
												<tr>
													<td style="text-align:center;">袁華鴻</td>
													<td style="text-align:center;">The two types of verbal plurality: the case of chang (常) ‘often’ and shichang (時常) ‘often’</td>
													<td style="text-align:center;">曹逢甫</td>
												</tr>
												<tr>
													<td style="text-align:center;">林怡安</td>
													<td style="text-align:center;">The Comprehension of the Subject and the Object Relative Clauses by Mandarin-speaking Individuals with Down Syndrome</td>
													<td style="text-align:center;">許馨仁</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">第三場發表會B（閩南語）<br>15：00－16：10</td>
													<td rowspan="3" style="text-align:center;">姚榮松</td>
													<td style="text-align:center;">盧立祥</td>
													<td style="text-align:center;">Hyperbolic Expressions in Conversation of Taiwanese Serial Drama</td>
													<td style="text-align:center;">李惠琦</td>
												</tr>
												<tr>
													<td style="text-align:center;">葉千菁</td>
													<td style="text-align:center;">檳城閩南語中的馬來語借詞之聲調規律研究</td>
													<td style="text-align:center;">林香薇</td>
												</tr>
												<tr>
													<td style="text-align:center;">陳筱琪</td>
													<td style="text-align:center;">漳平新橋閩南話魚虞韻讀iau/au的層次與音變</td>
													<td style="text-align:center;">吳瑞文</td>
												</tr>
												<tr>
													<td style="text-align:center;">16：10－16：30</td>
													<td colspan="4"  style="text-align:center;"><b>茶敘時間</b></td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">第四場發表會A<br>16：30－17：40</td>
													<td rowspan="3" style="text-align:center;">洪惟仁</td>
													<td style="text-align:center;">李宣槿</td>
													<td style="text-align:center;">漢語方言異序詞研究—以牲畜公與母的地名為例</td>
													<td style="text-align:center;">韋煙灶</td>
												</tr>
												<tr>
													<td style="text-align:center;">黃天仕</td>
													<td style="text-align:center;">論漢語作格動詞的定義問題</td>
													<td style="text-align:center;">徐淑瑛</td>
												</tr>
												<tr>
													<td style="text-align:center;">黃崇哲</td>
													<td style="text-align:center;">臺灣閩南語詈語研究：動物隱喻的男女轉喻</td>
													<td style="text-align:center;">洪惟仁</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">第四場發表會B（跨語言）<br>16：30－17：40</td>
													<td rowspan="3" style="text-align:center;">王旭</td>
													<td style="text-align:center;">鄭安秀</td>
													<td style="text-align:center;">台灣語言使用與態度初探─以台北、高雄兩地為例</td>
													<td style="text-align:center;">陳麗君</td>
												</tr>
												<tr>
													<td style="text-align:center;">陳韋廷</td>
													<td style="text-align:center;">王白淵《蕀の道》漢譯本中破折號的增刪與意涵─以巫永福、陳才崑譯本為例</td>
													<td style="text-align:center;">彭瑞金</td>
												</tr>
												<tr>
													<td style="text-align:center;">陳依真</td>
													<td style="text-align:center;">「母親的語言」還在嗎？----宜蘭口音中/uinn/的流失現狀之個案探討</td>
													<td style="text-align:center;">王旭</td>
												</tr>
												<tr>
													<td style="text-align:center;">17：40－18：00</td>
													<td colspan="4"  style="text-align:center;"><b>閉幕典禮</b>（陳會長淑娟、吳老師中杰<b>共同主持</b>）</td>
												</tr>
												<tr>
													<td colspan="5">
														備註<br>
														<br>
														◎ 報到、開幕典禮及閉幕典禮皆於文學院B1『小劇場』<br>
														◎ 會場A：文學院B1『小劇場』<br>
														◎ 會場B：文學院2F『地理學系3216教室』<br>
														◎ 茶敘：文學院B1小劇場外廣場<br>
														◎ 會員大會：中午十二點於地理學系3216教室召開<br>
														◎ 午餐：會場A及會場B外領取，用餐地點現場引導<br>
														◎ 午餐需出示餐券才可領取<br>
														◎ 文學院B1『小劇場』內嚴禁飲食<br>
														◎ 為響應環保，會議當天請大家自備環保杯，現場有飲水機供大家<br>
														
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="text-align:center;color:red;"><b>第三屆青年學者台灣語言學術研討會</b></td></tr>
									<tr><td style="text-align:center;color:black;font-size:16pt"><b>徵稿啟事</b></td></tr>
									<tr><td style="color:darkblue;">一、會議名稱：</td></tr>
									<tr><td style="">第三屆青年學者台灣語言學術研討會</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">二、主辦單位：</td></tr>
									<tr><td style="">臺灣語文學會、國立高雄師範大學客家文化研究所、國立高雄師範大學台灣歷史文化及語言研究所</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">三、會議日期：</td></tr>
									<tr><td style="">2013年10月26、27日</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">四、會議地點：</td></tr>
									<tr><td style="">國立高雄師範大學文學院</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">五、會議主題：台灣語言的多樣性研究</td></tr>
									<tr><td style="">會議子題：有關台灣閩南語、客家話、南島語及華語的語音、音韻、構詞、句法及其他語言學相關研究</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">六、摘要截稿日期：</td></tr>
									<tr><td style="">2013年3月4日</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">七、公布摘要通過日期：</td></tr>
									<tr><td style="">2013年4月15日</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">八、全文截稿日期：</td></tr>
									<tr><td style="">2013年9月15日</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">九、資格限定：</td></tr>
									<tr><td style="">研究生及取得博士學位五年內之青年學者。</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">十、投稿方式：</td></tr>
									<tr><td style="">請填寫「發表人資料表」及「論文題目與摘要」兩份文件，並將「論文題目與摘要」存為一式兩檔（WORD檔及PDF檔），以電子郵件寄到gsstl2013@gmail.com（每人限制發表一篇）。</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">十一、聯絡地址：</td></tr>
									<tr>
										<td style="">
											802高雄市苓雅區和平一路116號<br>
											國立高雄師範大學台灣歷史文化及語言研究所 李慧質同學<br>
											聯絡電話：07-717-2930轉2541; 0983008107<br>
											電子信箱：gsstl2013@gmail.com<br>
										</td>
									</tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">十二、會議收費方式：</td></tr>
									<tr>
										<td style="">
											（1） 論文發表費：學生1500元；非學生2000元（已含會議註冊費）<br>
											（2） 會議註冊費稍後公告。<br>
											（3） 台灣語文學會會員免費參加。<br>
										</td>
									</tr>
									<tr><td style=""><br></td></tr>
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