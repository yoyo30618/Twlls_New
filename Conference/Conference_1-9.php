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
								<tr><td style="text-align:center;color:red;"><b>第九屆臺灣語言及其教學國際學術研討會</b></td></tr>
								<tr><td style="text-align:center;"><br></td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">一、會議名稱</td></tr>
								<tr><td style="">第九屆臺灣語言及其教學國際學術研討會</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">二、指導單位</td></tr>
								<tr><td style="">行政院國家科學委員會、客家委員會、行政院原住民族委員會、教育部</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">三、主辦單位</td></tr>
								<tr><td style="">臺灣語文學會、國立中央大學客家語文研究所、國立中央大學客家學院、中央研究院語言學研究所</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">四、會議時間</td></tr>
								<tr><td style="">2012 年 10 月 5-6 日（星期五、六）</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">五、會議地點</td></tr>
								<tr><td style="">國立中央大學客家學院大樓國際會議廳（32001 桃園縣中壢市中大路300號）</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">六、會議緣起及目的</td></tr>
								<tr><td style="">舉辦「第九屆臺灣語言及其教學國際學術研討會」之目的在經由對學術論文的探討，促進國際與臺灣各大學、民間團體及個人研究者交流的機會，共同致力於臺灣各族群母語及其文化之振興工作。族群母語的學習與研究，有助於各族群文化的保存與提昇，對於逐漸消失或式微的族群語言及文化來說，無異是件值得鼓舞的事。為了促進臺灣各族群文學語言之研究，使臺灣族群文化得以永續保存及傳承，並符合當前世界文化潮流，實踐聯合國大會《在民族或族裔、宗教和語言上屬於少數群體的人的權利宣言》（Declaration on the Rights of Persons Belonging to National or Ethnic, Religious and Linguistic Minorities，1992年）及《使用多種語文》（Multilingualism，2011年）兩項決議之共同目標，有必要定期舉辦「臺灣語言及其教學國際學術研討會」，讓海內外人士共同研究、相互切磋、集思廣益。臺灣語文學會自創立以來，為了凝聚全臺灣文化、語言教育工作者與社會大眾的心力，提升臺灣語言的研究和教學，每兩年主辦一次臺灣語文國際學術研討會，成效卓著。本會依例於2012年10月在國立中央大學舉辦「第九屆臺灣語言及其教學國際學術研討會」，透過國際學術研討會之舉行，增進專家學者與研究生在國際學術場域的交流，分享最新的研究成果，有效提升臺灣語言研究者在國際學術研究社群的競爭力。另一方面聯合海內外學界切磋臺灣本土語文，深入探討臺灣語文的教學內容及其教材教法，以期落實母語教育之推廣及本土文化之存續與復振。</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">七、會議主題</td></tr>
								<tr>
									<td style="">
										「臺灣語言的跨領域研究」：臺灣語言包含臺灣閩南語、臺灣客家話、臺灣原住民語言……等使用於臺灣的各種語言。跨領域的科際整合研究是現今各學科發展的重要趨勢，隨著臺灣語言的研究日漸深化，從不同學科的角度觀察、探索同一現象，能夠擴大我們的視野。本屆會議的子題包括：<br>
										1. 臺灣的語言接觸<br>
										2. 臺灣語言與族群之互動關係<br>
										3. 臺灣語言與文化<br>
										4. 臺灣語言與文學<br>
										5. 臺灣語言與歷史<br>
										6. 臺灣語言與地理<br>
										7. 臺灣語言與民俗<br>
										8. 其他有關臺灣語言研究與教學之相關議題<br>
									</td>
								</tr>
								<tr>
									<td style="">
										<table style="width:100%;" class="table table-bordered">
											<tr><td colspan="5" style="color:red;text-align:center;">第九屆臺灣語言及其教學國際學術研討會議程表</td></tr>
											<tr><td colspan="5" style="text-align:center;">一、中華民國101年10月5日（星期五）</td></tr>
											<tr>
												<td>時間</td>
												<td>場次</td>
												<td>主持人</td>
												<td>發表人</td>
												<td>論文題目</td>
											</tr>
											<tr>
												<td>08:00-08:40</td>
												<td>報到</td>
												<td colspan="3">【國立中央大學客家學院大樓國際會議廳】</td>
											</tr>
											<tr>
												<td>08:20-08:40</td>
												<td>開幕式</td>
												<td colspan="3">
													主持人：國立中央大學客家學院羅肇錦院長<br>
													致  詞：國立中央大學教務長李光華教授<br>
													貴賓致詞<br>
												</td>
											</tr>
											<tr>
												<td>08:40-09:30</td>
												<td>專題演講1</td>
												<td colspan="3">
													主持人：羅肇錦  院長<br>
													主講人：丁邦新  院士<br>
													演講題目：再論閩語白話音從古漢語分支的年代<br>
												</td>
											</tr>
											<tr>
												<td rowspan="4">09:30-11:00</td>
												<td rowspan="4">一</td>
												<td rowspan="4">姚榮松</td>
												<td>陳淑娟</td>
												<td>宜蘭龜山島方言的語音變異與變化</td>
											</tr>
											<tr>
												<td>陳彥君</td>
												<td>臺灣閩南語永靖方言三代間的語音變異</td>
											</tr>
											<tr>
												<td>秋谷裕幸</td>
												<td>閩北區浦城臨江方言和邵將區光澤寨里方言的古濁平聲分化</td>
											</tr>
											<tr>
												<td>杜佳倫</td>
												<td>從語言接觸的觀點來看閩語的歷史層次</td>
											</tr>
											<tr>
												<td>11:00-11:20</td>
												<td colspan="4">茶敘</td>
											</tr>
											<tr>
												<td rowspan="4">11:20-12:40</td>
												<td rowspan="4">二</td>
												<td rowspan="4">陳秀琪</td>
												<td>賴文英</td>
												<td>客語文本中的回指照應研究</td>
											</tr>
											<tr>
												<td>吳睿純</td>
												<td>客家話中的強勢語─以「抱怨」為例</td>
											</tr>
											<tr>
												<td>葉瑞娟</td>
												<td>客家話「好」及其搭配成份之研究：語料庫之應用</td>
											</tr>
											<tr>
												<td>黃琮瑄、謝菁玉</td>
												<td>客家話成語中的典型認知與語意變化</td>
											</tr>
											<tr>
												<td>12:40-13:50</td>
												<td colspan="4">午餐 【客家學院大樓二樓教室】</td>
											</tr>
											<tr>
												<td rowspan="4">13:50-15:20</td>
												<td rowspan="4">三</td>
												<td rowspan="4">洪惟仁</td>
												<td>羅肇錦</td>
												<td>「客家」名稱形成的年代比對</td>
											</tr>
											<tr>
												<td>鍾榮富</td>
												<td>東勢與其他客家話舌尖擦音的感知特性之比較</td>
											</tr>
											<tr>
												<td>簡宏逸</td>
												<td>語義校準對古代閩南語準正字法的規範機制：以臺灣地名為例</td>
											</tr>
											<tr>
												<td>董忠司</td>
												<td>臺灣多元化語文教學的源流與對比語文教學法的建立</td>
											</tr>
											<tr>
												<td>15:20-15:40</td>
												<td colspan="4">茶敘</td>
											</tr>
											<tr>
												<td rowspan="4">13:50-15:20</td>
												<td rowspan="4">四</td>
												<td rowspan="4">董忠司</td>
												<td>洪惟仁</td>
												<td>語言地理學與歷史學的跨領域互動</td>
											</tr>
											<tr>
												<td>申祐先</td>
												<td>臺灣國語的重疊式</td>
											</tr>
											<tr>
												<td>鄧盛有</td>
												<td>臺灣四縣及海陸客語的詞彙差異與文化意涵探析</td>
											</tr>
											<tr>
												<td>邱湘雲</td>
												<td>海陸客家話特徵詞的趨同趨異表現</td>
											</tr>
											<tr>
												<td></td>
												<td colspan="4">休息、移動</td>
											</tr>
											<tr>
												<td>18:00</td>
												<td colspan="4">晚宴 【新陶芳餐廳】</td>
											</tr>
											
										</table>
									</td>
								</tr>
								<tr><td>發表人報告時間：每篇15分鐘，其餘為自由討論時間。自由討論時間每位發言人請先自報姓名及服務單位，發言以3分鐘為宜。</td></tr>
								<tr>
									<td style="">
										<table style="width:100%;" class="table table-bordered">
											<tr><td colspan="5" style="text-align:center;">二、　101年10月6日（星期六）</td></tr>
											<tr>
												<td>時間</td>
												<td>場次</td>
												<td>主持人</td>
												<td>發表人</td>
												<td>論文題目</td>
											</tr>
											<tr>
												<td>08:10-09:00</td>
												<td>專題演講2</td>
												<td colspan="3">
													主持人：中央研究院語言學研究林英津教授<br>
													主講人：國立清華大學曹逢甫榮譽退休教授<br>
													演講題目：漢語聲調的分類與分析：以閩南漳平方言為例<br>
												</td>
											</tr>
											<tr>
												<td rowspan="4">09:00-10:30</td>
												<td rowspan="4">五</td>
												<td rowspan="4">齊莉莎</td>
												<td>遠藤光曉</td>
												<td>阿美語身體部位詞彙的語言地理學研究</td>
											</tr>
											<tr>
												<td>葉美利</td>
												<td>賽夏語指示詞的語意與構詞</td>
											</tr>
											<tr>
												<td>謝瑞珍、素伊．多夕</td>
												<td>跨語言認知角度評析不同文化的經驗觀―從有趣的「植物命名」淺談泰雅語和海陸客家話的互異性</td>
											</tr>
											<tr>
												<td>張永利</td>
												<td>輕動詞下的強勢分段：鄒語、臺灣華語及閩南語的例證</td>
											</tr>
											<tr>
												<td>10:30-10:50</td>
												<td colspan="4">茶敘</td>
											</tr>
											<tr>
												<td rowspan="3">10:50-12:20</td>
												<td rowspan="3">六</td>
												<td rowspan="3">賴惠玲</td>
												<td>徐賢德</td>
												<td>六堆地區客家語言接觸研究―以高樹為例</td>
											</tr>
											<tr>
												<td>何純惠</td>
												<td>談客家話〔-u-〕介音的丟失及保存</td>
											</tr>
											<tr>
												<td>鄭玉華</td>
												<td>客語、閩語的地位更迭―以苗栗市鄭屋為例</td>
											</tr>
											<tr>
												<td>12:20-13:40</td>
												<td colspan="4">午餐 / 臺灣語文學會會員大會<br>【客家學院大樓三樓會議室】</td>
											</tr>
											<tr>
												<td rowspan="4">13:40-15:10</td>
												<td rowspan="4">七</td>
												<td rowspan="4">王  旭</td>
												<td>連金發</td>
												<td>明清閩南戲文代指構式初探</td>
											</tr>
											<tr>
												<td>鄭  縈</td>
												<td>閩南語短暫義時段詞初探</td>
											</tr>
											<tr>
												<td>張學謙、許秀金</td>
												<td>以雙語冊進行地方為本的母語讀寫教育</td>
											</tr>
											<tr>
												<td>溫曼伶、范瑞玲</td>
												<td>電子繪本融入客語教學之研究—以五年級學童為例</td>
											</tr>
											<tr>
												<td>15:10-15:30</td>
												<td colspan="4">茶敘</td>
											</tr>
											<tr>
												<td rowspan="3">13:50-15:20</td>
												<td rowspan="3">八</td>
												<td rowspan="3">連金發</td>
												<td>李仲民、李宜軒</td>
												<td>臺中地區大學生閩南語日語詞彙消退分析之社會因素分析</td>
											</tr>
											<tr>
												<td>張淑敏</td>
												<td>現代漢語和閩南語「差比句」的比較研究：以「語序類型學」的觀點再出發</td>
											</tr>
											<tr>
												<td>徐富美</td>
												<td>語言學角度的語言風格學—以〈嫁妝一牛車〉的語言變異分析為例</td>
											</tr>
											<tr>
												<td>17:00-17:15</td>
												<td colspan="4">閉幕式</td>
											</tr>
										</table>
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