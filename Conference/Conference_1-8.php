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
								<tr><td style="text-align:center;color:red;"><b>第八屆臺灣語言及其教學國際學術研討會</b></td></tr>
								<tr><td style="text-align:center;"><br></td></tr>
								<tr><td style="">一、會議名稱：</td></tr>
								<tr><td style="">第八屆臺灣語言及其教學國際學術研討會</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">二、指導單位：</td></tr>
								<tr><td style="">行政院國家科學委員會、行政院客家委員會、教育部、國立聯合大學研究發展處、京元電子股份有限公司</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">三、主辦單位：</td></tr>
								<tr><td style="">臺灣語文學會、國立聯合大學客家研究學院、國立聯合大學客家語言與傳播研究所、國立聯合大學經濟與社會研究所、國立聯合大學資訊與社會研究所、中央研究院語言學研究所</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">四、協辦單位：</td></tr>
								<tr><td style="">國立聯合大學台灣語文與傳播學系</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">五、會議地點：</td></tr>
								<tr><td style="">國立聯合大學國際會議廳</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">六、會議時間：</td></tr>
								<tr><td style="">2010年10月15、16日　（星期五、六）</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">七、會議緣起與宗旨：</td></tr>
								<tr><td style="">台灣語文學會自創會以來，為了促進台灣各族群文學語言之研究，使台灣族群文化得以永續保存及傳承，並符合當前世界文化潮流，實踐聯合國之共同目標，所以有必要定期舉辦「臺灣語言及其教學國際學術研討會」，讓海內外人士共同研究、集思廣益。<br>舉辦「臺灣語言及其教學國際學術研討會」之宗旨在於為致力於臺灣語言及教學相關領域的學者，提供一個國際性的交流平台。經由學術論文的發表與研討，提升臺灣語言及教學領域的研究水準，促進國際間與台灣各大學、民間團體及個人的學術交流。共同為台灣各族群母語及其文化之振興工作。<br>本會依例將於99年10月在國立聯合大學舉辦「第八屆臺灣語言及其教學國際學術研討會」，結合海內外學者切磋台灣本土語文，並深入探討台灣語文的教學內容及其教材教法，以落實語文教育之推廣，以及本土文化之復振與推展。</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">八、 會議規模：</td></tr>
								<tr><td style="">本次會議參與的成員包括臺灣本地從事臺灣語言及教學相關領域的學者專家與碩博士研究生，同時也收到日本、香港、中國、美國、德國等地的學者來稿。根據過去舉辦會議的經驗，預估參與會議(含發表、主持、講評與聽眾)的人數可達120人。</td>
								</tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">九、專題演講：</td></tr>
								<tr><td style="">李英哲</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">十、邀請學者：</td></tr>
								<tr><td style="">史皓元、李如龍、洪惟仁、姚榮松、秋谷裕幸、莊初升、連金發、張雙慶、 黃美金、齊莉莎、韓可龍</td></tr>
								<tr><td style=""><br></td></tr>
								<!--表格1-->
								<tr>
									<td style="">
										<table style="width:100%;" class="table table-bordered">
											<tr><td colspan="5" style="color:red;text-align:center;">第八屆臺灣語言及其教學國際學術研討會議程</td></tr>
											<tr><td colspan="5" style="text-align:center;">2010年10月15日（星期五）</td></tr>
											<tr>
												<td>時間</td>
												<td style="width:10%;">場次</td>
												<td style="width:12%;">主持人</td>
												<td style="width:15%;">發表人</td>
												<td>論文題目</td>
											</tr>
											<tr>
												<td>08:00-08:20</td>
												<td colspan="2">報到</td>
												<td colspan="2">（聯合大學國際會議廳）</td>
											</tr>
											<tr>
												<td>08:20-08:40</td>
												<td colspan="2">開幕式</td>
												<td colspan="2">
													主 持 人：國立聯合大學客家研究學院院長劉鳳錦<br>
													致　  詞：國立聯合大學校長李隆盛<br>
													會長致詞：姚榮松會長<br>													
												</td>
											</tr>
											<tr>
												<td>08:40-09:30</td>
												<td colspan="2">專題演講</td>
												<td colspan="2">
													主持人：連金發 <br>
													主講人：李英哲<br>
													演講題目：閩語一些句法聚合與擴散時的特殊意義<br>
												</td>
											</tr>
											<tr>
												<td rowspan="4">09:30-11:00</td>
												<td rowspan="4">一</td>
												<td rowspan="4">姚榮松</td>
												<td>韓可龍</td>
												<td>西洋傳教士之十七世紀閩南語研究及馬尼拉華僑方言接觸</td>
											</tr>
											<tr>
												<td>秋谷裕幸</td>
												<td>原始寧德方言古音構擬—二合、三合元音韻母部分</td>
											</tr>
											<tr>
												<td>鄭曉峰</td>
												<td>宜蘭羅東方言的特點：一個樣本的討論</td>
											</tr>
											<tr>
												<td>陳淑娟</td>
												<td>台北市方言央元音的語音變異與變化－北市安溪腔、同安腔閩南語的調查分析</td>
											</tr>
											<tr>
												<td>11:00-11:20</td>
												<td colspan="4">茶敘</td>
											</tr>
											<tr>
												<td rowspan="6">11:20-12:30</td>
												<td rowspan="3">二A</td>
												<td rowspan="3">董忠司</td>
												<td>張  群、連金發</td>
												<td>現代閩南語評價性謂語「好」Ho2 的多功能性用法</td>
											</tr>
											<tr>
												<td>蕭素英、余瓊怡</td>
												<td>語料庫為本的閩南語詞彙變化研究：以行、步、走為例</td>
											</tr>
											<tr>
												<td>張淑敏</td>
												<td>華語和閩南語「程度副詞+X」的非典型結構：「非範疇化」理論與「構式」分析法</td>
											</tr>
											<tr>
												<td rowspan="3">二B</td>
												<td rowspan="3">曾金金</td>
												<td>臧汀生</td>
												<td>台灣歌仔冊擬音「便宜字」書寫現象之芻議 的多功能性用法</td>
											</tr>
											<tr>
												<td>鄭  縈、游孟庭</td>
												<td>方言接觸引發閩南語重複義時間副詞的詞彙重整</td>
											</tr>
											<tr>
												<td>蔡婉怡</td>
												<td>A Cognitive Approach to the Understanding of Color Terms in Taiwan Southern Min</td>
											</tr>
											<tr>
												<td>12:30-13:40</td>
												<td colspan="4">午餐 </td>
											</tr>
											<tr>
												<td rowspan="8">13:40-15:10</td>
												<td rowspan="4">三A</td>
												<td rowspan="4">賴惠玲</td>
												<td>葉瑞娟、吳睿純、黃漢君</td>
												<td>論客家話「好X」格式的語法化和主觀化</td>
											</tr><tr>
												<td>余秀敏</td>
												<td>客語啊時貌之間的關係探討</td>
											</tr>
											<tr>
												<td>湯琬君</td>
												<td>從認知語義學的角度來看客家疾病命名</td>
											</tr>
											<tr>
												<td>陳奕秀</td>
												<td>臺灣閩南語趨向詞「過」的多義性與時空意象感知</td>
											</tr>
											<tr>
												<td rowspan="4">三B</td>
												<td rowspan="4">連金發</td>
												<td>房子欽</td>
												<td>閩南語動詞tshua和客語動詞thu比較研究</td>
											</tr><tr>
												<td>蘇建唐</td>
												<td>臺閩語義務情態詞「通」的語法化研究</td>
											</tr>
											<tr>
												<td>陳伯青</td>
												<td>The Circumfixal modal e7+Verb+tit4 in Taiwanese Southern Min</td>
											</tr>
											<tr>
												<td>涂文欽</td>
												<td>彰化縣閩南語方言音韻的類型與分佈</td>
											</tr>
											<tr>
												<td>15:10-15:30</td>
												<td colspan="4">茶敘</td>
											</tr>
											<tr>
												<td rowspan="7">15:30-17:00</td>
												<td rowspan="3">四A</td>
												<td rowspan="3">鍾榮富</td>
												<td>江敏華、黃彥菁</td>
												<td>《客英大辭典》客語辭彙釋義與文化初探</td>
											</tr>
											<tr>
												<td>賴文英</td>
												<td>講「麼」──兼論客語的疑問代詞</td>
											</tr>
											<tr>
												<td>鄭明中、張國志</td>
												<td>客語兒向言語的字調聲學研究</td>
											</tr>
											<tr>
												<td rowspan="4">四B</td>
												<td rowspan="4">陳淑娟</td>
												<td>駱嘉鵬</td>
												<td>語言聲調與音樂曲調的調合策略－以黃秋田唸歌《李三娘》為例</td>
											</tr><tr>
												<td>林佳怡</td>
												<td>淺論臺灣閩南語網路辭典的編輯脈絡</td>
											</tr>
											<tr>
												<td>王秀娟</td>
												<td>臺中市國小三年級閩南語拼音教學之現況研究</td>
											</tr>
											<tr>
												<td>陳筱琪</td>
												<td>龍巖新羅區城關閩南話的韻母演變</td>
											</tr>
											<tr>
												<td>15:10-15:30</td>
												<td colspan="4">茶敘</td>
											</tr>
											<tr>
												<td>18:00</td>
												<td colspan="4">晚宴</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr><td style="">註：【A場】行政大樓第二會議室、【B場】行政大樓第四會議室<br>【第八場、綜合座談、閉幕式】聯合大學國際會議廳</td></tr>
								<!--表格1end-->
								<!--表格2-->
								<tr>
									<td style="">
										<table style="width:100%;" class="table table-bordered">
											<tr><td colspan="5" style="text-align:center;">2010年10月16日（星期六）</td></tr>
											<tr>
												<td>時間</td>
												<td style="width:10%;">場次</td>
												<td style="width:12%;">主持人</td>
												<td style="width:15%;">發表人</td>
												<td>論文題目</td>
											</tr>
											<tr>
												<td rowspan="8">09:00-10:30</td>
												<td rowspan="4">五A</td>
												<td rowspan="4">王　旭</td>
												<td>黃菊芳、江敏華</td>
												<td>後龍海陸客家話的語音變異現象</td>
											</tr>
											<tr>
												<td>邱仲森、劉秀雪</td>
												<td>客家人對閩南語輕聲的使用</td>
											</tr>
											<tr>
												<td>李宜穎</td>
												<td>李得福客語鄉土文學《錢有角》語言特色初探</td>
											</tr>
											<tr>
												<td>劉淑惠、鄭明中</td>
												<td>國小客語教科書的性別角色內容分析</td>
											</tr>
											<tr>
												<td rowspan="4">五B</td>
												<td rowspan="4">湯志真</td>
												<td>齊莉莎、朱黛華</td>
												<td>Nominalization in Saisiyat</td>
											</tr>
											<tr>
												<td>石丸雅邦</td>
												<td>理蕃警察蕃語教材的研究</td>
											</tr>
											<tr>
												<td>張育菁</td>
												<td>達悟語中的ma-型動詞—被動語態初探</td>
											</tr>
											<tr>
												<td>鄧芳青</td>
												<td>From allative to anticausative:　The grammaticalization path of mu- in Puyuma</td>
											</tr>
											<tr>
												<td>10:30-10:50</td>
												<td colspan="4">茶敘</td>
											</tr>
											<tr>
												<td rowspan="6">10:50-12:00</td>
												<td rowspan="3">六A</td>
												<td rowspan="3">黃慧娟</td>
												<td>劉宇陽</td>
												<td>族語詞典線上工作平台檢討及教學應用之可能性</td>
											</tr><tr>
												<td>吳新生、黃美金</td>
												<td>台灣原住民族語詞典之編輯─從泰雅語詞典談起</td>
											</tr>
											<tr>
												<td>葉美利、高清菊</td>
												<td>賽夏詞典編輯的語義問題</td>
											</tr>
											<tr>
												<td rowspan="3">六B</td>
												<td rowspan="3">范瑞玲</td>
												<td>黃情詩、張  群</td>
												<td>漢語「要」的語法功能演變：從動詞到連接詞的演變談起</td>
											</tr>
											<tr>
												<td>黃惠華</td>
												<td>從華語的笑話看語言的融合</td>
											</tr>
											<tr>
												<td>林怡安</td>
												<td>漢語名詞組的句法與言談介面：分裂限定詞組的分析</td>
											</tr>
											<tr>
												<td>12:00-13:40</td>
												<td colspan="4">午餐 / 台灣語文學會會員大會</td>
											</tr>
											<tr>
												<td rowspan="6">13:40-14:50</td>
												<td rowspan="3">七A</td>
												<td rowspan="3">楊秀芳</td>
												<td>黃豑民</td>
												<td>日治「警察政治」對台北州居民的語言衝擊影響</td>
											</tr><tr>
												<td>蔡玲玲</td>
												<td>Learning Difficulties of Taiwanese Nasals by Native English Speakers of Taiwanese Learners</td>
											</tr>
											<tr>
												<td>潘惠華</td>
												<td>台語電視新聞語言轉換現象之分析</td>
											</tr>
											<tr>
												<td rowspan="3">七B</td>
												<td rowspan="3">羅肇錦</td>
												<td>應凱仁</td>
												<td>客籍大學生對客語的使用與態度調查──以中山醫學大學為例</td>
											</tr>
											<tr>
												<td>賴維凱、廖純瑜</td>
												<td>客語醫療詞彙在醫護專業的應用與推廣</td>
											</tr>
											<tr>
												<td>嚴珮瑜</td>
												<td>探討現代客語童謠中的譬喻結構－以謝宇威《ㄤ咕ㄤ咕》客語童謠專輯為例</td>
											</tr>
											<tr>
												<td>14:50-15:10</td>
												<td colspan="4">茶敘</td>
											</tr>
											<tr>
												<td rowspan="4">15:10-16:40</td>
												<td rowspan="4">八</td>
												<td rowspan="4">林英津</td>
												<td>洪惟仁</td>
												<td>漳州詔安縣的語言分佈</td>
											</tr>
											<tr>
												<td>黃美金</td>
												<td>台灣原住民族語師資培育之探討：回顧與展望</td>
											</tr>
											<tr>
												<td>史皓元</td>
												<td>Issues in Teaching and Romanizing of the Chinese Dialects</td>
											</tr>
											<tr>
												<td>李如龍</td>
												<td>“方言说解识字教学”的优越性</td>
											</tr>
											<tr>
												<td rowspan="5">16:40-17:30</td>
												<td rowspan="5"></td>
												<td rowspan="5">姚榮松</td>
												<td>羅肇錦</td>
												<td rowspan="5">綜合座談暨閉幕式<br>座談主題：「臺灣語言研究的現況與發展」</td>
											</tr>
											<tr><td>李英哲</td></tr>
											<tr><td>齊莉莎</td></tr>
											<tr><td>洪惟仁</td></tr>
											<tr><td>秋谷裕幸</td></tr>
										</table>
									</td>
								</tr>
								<tr><td style="">註：【A場】行政大樓第二會議室、【B場】行政大樓第四會議室<br>【第八場、綜合座談、閉幕式】聯合大學國際會議廳</td></tr>
								<!--表格2end-->
								<tr><td style=""><br></td></tr>
								<tr><td style="text-align:center;color:red;">徵稿啟事</td></tr>
								<tr><td style="">一、會議名稱</td></tr>
								<tr><td style="">第八屆臺灣語言及其教學國際學術研討會</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">二、會議緣起：</td></tr>
								<tr><td style="">臺灣語文學會兩年主辦一次臺灣語文國際學術研討會，廣邀海內外學者交換臺灣本土語文研究之心得，同時探究與臺灣語文教學相關之課題，以凝聚全臺灣文化、語言教育工作者與社會大眾的心力。</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">三、指導單位：</td></tr>
								<tr><td style="">行政院國家科學委員會、行政院客家委員會、教育部、國立聯合大學研究發展處、京元電子股份有限公司</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">四、主辦單位：</td></tr>
								<tr><td style="">臺灣語文學會、國立聯合大學客家研究學院、國立聯合大學客家語言與傳播研究所、國立聯合大學經濟與社會研究所、國立聯合大學資訊與社會研究所、中央研究院語言學研究所</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">五、協辦單位：</td></tr>
								<tr><td style="">國立聯合大學台灣語文與傳播學系</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">六、會議時間：</td></tr>
								<tr><td style="">2010年10月15、16日　（星期五、六）</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">七、會議主題：臺灣語言之聚合與擴散</td></tr>
								<tr><td style="">隨著台灣語言的研究日趨成熟，研究開始呈現了兩個方向：聚合與擴散。所謂「聚合」是朝著區同的觀點，以閩南語的田野調查為例，過去的報告，大都集中在「優勢腔」的描寫與分析，目的是建構一個共通的語言。所謂「擴散」則朝趨異的研究方向，包括[o]與[ə]的歧異分布，變調的差別，小稱詞的變異等等。「聚合與擴散」不僅出現在語音的研究上，同時廣為應用在虛詞、句法、語用的研究領域或田野調查之中，甚至於本字的考定或標音的教學，也出現了聚合與擴散的競爭。因此，本次會議的主題定為聚合與擴散，希望藉此會議，廣徵使用各種不同方法來研究台灣語言(閩南語，客家語，原住民語言)或教學的論文，共聚一堂，相互激勵。</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">八、　子　　題：</td></tr>
								<tr>
									<td style="">
										1. 台灣語言語音與音韻現象的描寫、分析、調查<br>
										2. 台灣語言句法與構詞的變異與變遷<br>
										3. 台灣閩、客、華語漢字書寫與教學問題<br>
										4. 台灣閩、客、原住民語辭典編纂的研究與方法<br>
										5. 台灣華語與本土語言的互動<br>
										6. 其他有關台灣語言研究與教學之相關議題<br>
									</td>
								</tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">九、　論文題目及摘要截稿日期：</td></tr>
								<tr><td style="">2009年1月29日(週五)</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">十、通知徵稿接受日期：</td></tr>
								<tr><td style="">2010年3月1日(週一)</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">十一、論文全文截稿日期：</td></tr>
								<tr><td style="">2010年7月30日(週五)</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">十二、報名方式：</td></tr>
								<tr><td style="">請填寫所附的「論文摘要暨發表人資料表」（參見附件一），利用電子郵件、傳真或郵寄到下列地址（電子郵件的主旨或郵件信封請註明「研討會投稿」）。</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">十三、注意事項：</td></tr>
								<tr><td style="">俟論文摘要審查結果公告後，擬發表者若非臺灣語文學會會員，敬請於公告後一個月內成為本學會會員。未具會員資格之發表者，恕無法排入正式之會議議程。</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">十四、聯絡地址：</td></tr>
								<tr>
									<td style="">
										苗栗市恭敬里聯大一號 國立聯合大學 客家研究學院<br>
										聯絡人： 林彥斌 電子信箱： nuuhsc@hotmail.com<br>
										手機： 0933989934<br>
										電話： (037)381190<br>
										傳真： (037)381857<br>
									</td>
								</tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="text-align:center;color:red;">論文發表</td></tr>
								<!--表格2啦啦啦-->
								<tr>
									<td style="">
										<table style="width:100%;text-align:center;" class="table table-bordered">
											<tr>
												<td>編號</td>
												<td style="width:17%;">發表人</td>
												<td>發表題目</td>
												<td>單位</td>
											</tr>

											<tr>
												<td>01</td>
												<td>韓可龍</td>
												<td style="text-align:left;">西洋傳教士之十七世紀閩南語研究及馬尼拉華僑方言接觸</td>
												<td style="text-align:left;">德國波鴻魯爾大學東亞學院中國語言文學系教授兼系主任</td>
											</tr>
											<tr>
												<td>02</td>
												<td>秋谷裕幸</td>
												<td style="text-align:left;">原始寧德方言古音構擬—二合、三合元音韻母部分</td>
												<td style="text-align:left;">愛媛大學法文學部副教授</td>
											</tr>
											<tr>
												<td>03</td>
												<td>鄭曉峰</td>
												<td style="text-align:left;">宜蘭羅東方言的特點：一個樣本的討論</td>
												<td style="text-align:left;">國立中央大學客語所助理教授</td>
											</tr>
											<tr>
												<td>04</td>
												<td>陳淑娟</td>
												<td style="text-align:left;">台北市方言央元音的語音變異與變化－北市安溪腔、同安腔閩南語的調查分析</td>
												<td style="text-align:left;">國立新竹教育大學中國語文學系教授</td>
											</tr>
											<tr>
												<td rowspan="2">05</td>
												<td>張  群</td>
												<td style="text-align:left;"rowspan="2" >現代閩南語評價性謂語「好」Ho2 的多功能性用法</td>
												<td style="text-align:left;">國立清華大學語言學研究所博士後研究員</td>
											</tr>
											<tr>
												<td>連金發</td>
												<td style="text-align:left;">國立清華大學語言學研究所教授</td>
											</tr>
											<tr>
												<td rowspan="2">06</td>
												<td>蕭素英</td>
												<td style="text-align:left;"rowspan="2" >語料庫為本的閩南語詞彙變化研究：以行、步、走為例 的多功能性用法</td>
												<td style="text-align:left;"rowspan="2">中央研究院語言學研究所助研究員</td>
											</tr>
											<tr>
												<td>余瓊怡</td>
											<tr>
												<td>07</td>
												<td>陳奕秀</td>
												<td style="text-align:left;">臺灣閩南語趨向詞「過」的多義性與時空意象感知</td>
												<td style="text-align:left;">國立新竹教育大學台語所博士生</td>
											</tr>
											<tr>
												<td>08</td>
												<td>張淑敏</td>
												<td style="text-align:left;">華語和閩南語「程度副詞+X」的非典型結構：「非範疇化」理論與「構式」分析法</td>
												<td style="text-align:left;">國立台中教育大學 台灣語文學系副教授兼系主任</td>
											</tr>
											<tr>
												<td>09</td>
												<td>臧汀生</td>
												<td style="text-align:left;">台灣歌仔冊擬音「便宜字」書寫現象之芻議</td>
												<td style="text-align:left;">靜宜大學 中文系教授</td>
											</tr>

											<tr>
												<td rowspan="2">10</td>
												<td>鄭  縈</td>
												<td style="text-align:left;"rowspan="2" >方言接觸引發閩南語重複義時間副詞的詞彙重整</td>
												<td style="text-align:left;">國立新竹教育大學副教授</td>
											</tr>
											<tr>
												<td>游孟庭</td>
												<td style="text-align:left;">國立新竹教育大學碩士生</td>
											</tr>

											<tr>
												<td>11</td>
												<td>陳伯青</td>
												<td style="text-align:left;">The Circumfixal modal e7+Verb+tit4 in Taiwanese Southern Min</td>
												<td style="text-align:left;">國立清華大學語言學研究所碩士生</td>
											</tr>
											<tr>
												<td>12</td>
												<td>蔡婉怡</td>
												<td style="text-align:left;">A Cognitive Approach to the Understanding of Color Terms in Taiwan Southern Min</td>
												<td style="text-align:left;">國立台灣師範大學英語研究所碩士生</td>
											</tr>
											<tr>
												<td rowspan="3">13</td>
												<td>葉瑞娟</td>
												<td style="text-align:left;"rowspan="3">論客家話「好X」格式的語法化和主觀化</td>
												<td style="text-align:left;">國立新竹教育大學台灣語言與語文教育研究所助理教授</td>
											</tr>
											<tr>
												<td>吳睿純</td>
												<td style="text-align:left;">國立新竹教育大學英語教學系助理教授</td>
											</tr>
											<tr>
												<td>黃漢君</td>
												<td style="text-align:left;">國立新竹教育大學英語教學系助理教授</td>
											</tr>
											<tr>
												<td>14</td>
												<td>余秀敏</td>
												<td style="text-align:left;">客語啊時貌之間的關係探討</td>
												<td style="text-align:left;">中華大學語言中心講師</td>
											</tr>
											<tr>
												<td>15</td>
												<td>湯琬君</td>
												<td style="text-align:left;">從認知語義學的角度來看客家疾病命名</td>
												<td style="text-align:left;">國立新竹教育大學台灣語言與語文教育研究所博士生</td>
											</tr>
											<tr>
												<td>16</td>
												<td>房子欽</td>
												<td style="text-align:left;">閩南語動詞tshua和客語動詞thu比較研究</td>
												<td style="text-align:left;">國立新竹教育大學台語所博班研究生</td>
											</tr>
											<tr>
												<td>17</td>
												<td>蘇建唐</td>
												<td style="text-align:left;">臺閩語義務情態詞「通」的語法化研究</td>
												<td style="text-align:left;">修平技術學院通識中心兼任講師</td>
											</tr>
											<tr>
												<td>18</td>
												<td>涂文欽</td>
												<td style="text-align:left;">彰化縣閩南語方言音韻的類型與分佈</td>
												<td style="text-align:left;">臺中縣豐原市葫蘆墩國小教師</td>
											</tr>
											<tr>
												<td rowspan="2">19</td>
												<td>江敏華</td>
												<td style="text-align:left;"rowspan="2">《客英大辭典》客語辭彙釋義與文化初探</td>
												<td style="text-align:left;">中央研究院語言學研究所副研究員</td>
											</tr>
											<tr>
												<td>黃彥菁</td>
												<td style="text-align:left;">中央研究院語言學研究所研究助理</td>
											</tr>
											<tr>
												<td>20</td>
												<td>賴文英</td>
												<td style="text-align:left;">講「麼」──兼論客語的疑問代詞</td>
												<td style="text-align:left;">中央大學客家語文所博士後研究</td>
											</tr>
											<tr>
												<td rowspan="2">21</td>
												<td>鄭明中</td>
												<td style="text-align:left;"rowspan="2">客語兒向言語的字調聲學研究</td>
												<td style="text-align:left;">國立聯合大學客家語言與傳播研究所助理教授</td>
											</tr>
											<tr>
												<td>張國志</td>
												<td style="text-align:left;">苗栗縣立大倫國中教師</td>
											</tr>
											<tr>
												<td>22</td>
												<td>駱嘉鵬</td>
												<td style="text-align:left;">語言聲調與音樂曲調的調合策略－以黃秋田唸歌《李三娘》為例</td>
												<td style="text-align:left;">清雲科技大學講師</td>
											</tr>
											<tr>
												<td>23</td>
												<td>林佳怡</td>
												<td style="text-align:left;">淺論臺灣閩南語網路辭典的編輯脈絡</td>
												<td style="text-align:left;">教育部國語推行委員會助理編輯</td>
											</tr>
											<tr>
												<td>24</td>
												<td>王秀娟</td>
												<td style="text-align:left;">臺中市國小三年級閩南語拼音教學之現況研究</td>
												<td style="text-align:left;">台中市西屯區上石國小教師</td>
											</tr>
											<tr>
												<td>25</td>
												<td>陳筱琪</td>
												<td style="text-align:left;">龍巖新羅區城關閩南話的韻母演變</td>
												<td style="text-align:left;">國立台灣大學中文系博士生</td>
											</tr>
											<tr>
												<td rowspan="2">26</td>
												<td>黃菊芳</td>
												<td style="text-align:left;"rowspan="2">後龍海陸客家話的語音變異現象</td>
												<td style="text-align:left;">中央研究院語言學研究所博士後研究人員</td>
											</tr>
											<tr>
												<td>江敏華</td>
												<td style="text-align:left;">中央研究院語言學研究所副研究員</td>
											</tr>
											<tr>
												<td rowspan="2">27</td>
												<td>邱仲森</td>
												<td style="text-align:left;"rowspan="2">客家人對閩南語輕聲的使用</td>
												<td style="text-align:left;">國立新竹教育大學台語所博士生</td>
											</tr>
											<tr>
												<td>劉秀雪</td>
												<td style="text-align:left;">國立新竹教育大學台語所副教授</td>
											</tr>
											<tr>
												<td>28</td>
												<td>李宜穎</td>
												<td style="text-align:left;">李得福客語鄉土文學《錢有角》語言特色初探</td>
												<td style="text-align:left;">國立屏東教育大學客家文化研究所研究生</td>
											</tr>
											<tr>
												<td rowspan="2">29</td>
												<td>齊莉莎</td>
												<td style="text-align:left;"rowspan="2">Nominalization in Saisiya</td>
												<td style="text-align:left;">中央研究院語言學研究所研究員</td>
											</tr>
											<tr>
												<td>朱黛華</td>
												<td style="text-align:left;">中央研究院語言學研究所</td>
											</tr>
											<tr>
												<td>30</td>
												<td>石丸雅邦</td>
												<td style="text-align:left;">理蕃警察蕃語教材的研究</td>
												<td style="text-align:left;">中央研究院台灣史研究所博士後研究員</td>
											</tr>
											<tr>
												<td>31</td>
												<td>張育菁</td>
												<td style="text-align:left;">達悟語中的ma-型動詞—被動語態初探</td>
												<td style="text-align:left;">國立清華大學語言所研究生</td>
											</tr>
											<tr>
												<td>32</td>
												<td>鄧芳青</td>
												<td style="text-align:left;">From allative to anticausative: The grammaticalization path of mu- in Puyuma</td>
												<td style="text-align:left;">中央研究院語言所助研究員</td>
											</tr>
											<tr>
												<td>33</td>
												<td>劉宇陽</td>
												<td style="text-align:left;">族語詞典線上工作平台檢討及教學應用之可能性</td>
												<td style="text-align:left;">實踐大學媒體傳達設計學系專任助理教授</td>
											</tr>
											<tr>
												<td rowspan="2">34</td>
												<td>吳新生</td>
												<td style="text-align:left;" rowspan="2">台灣原住民族語詞典之編輯─從泰雅語詞典談起</td>
												<td style="text-align:left;">尖石國中教師兼教務主任</td>
											</tr>
											<tr>
												<td>黃美金</td>
												<td style="text-align:left;">實踐大學應外系教授</td>
											</tr>
											<tr>
												<td rowspan="2">35</td>
												<td>葉美利</td>
												<td style="text-align:left;"rowspan="2">賽夏詞典編輯的語義問題</td>
												<td style="text-align:left;">國立新竹教育大學臺灣語言與語文教育研究所副教授</td>
											</tr>
											<tr>
												<td>高清菊</td>
												<td style="text-align:left;">苗栗縣南庄鄉東河國民小學教師兼教導主任</td>
											</tr>
											<tr>
												<td rowspan="2">36</td>
												<td>黃情詩</td>
												<td style="text-align:left;"rowspan="2">漢語「要」的語法功能演變：從動詞到連接詞的演變談起</td>
												<td style="text-align:left;">國立清華大學語言學研究所研究生</td>
											</tr>
											<tr>
												<td>張  群</td>
												<td style="text-align:left;">國立清華大學語言學研究所博士後研究員</td>
											</tr>
											<tr>
												<td>37</td>
												<td>黃惠華劉宇陽</td>
												<td style="text-align:left;">從華語的笑話看語言的融合</td>
												<td style="text-align:left;">國立中正大學語言學研究所博士後研究員</td>
											</tr>
											<tr>
												<td>38</td>
												<td>林怡安</td>
												<td style="text-align:left;">漢語名詞組的句法與言談介面：分裂限定詞組的分析</td>
												<td style="text-align:left;">玄奘大學應用外語系專任講師</td>
											</tr>
											<tr>
												<td>39</td>
												<td>黃豑民</td>
												<td style="text-align:left;">台灣日治時代「警察政治」對台北州居民的語言衝擊影響</td>
												<td style="text-align:left;">國立台灣師範大學台灣文化及語言文學研究所研究生</td>
											</tr>
											<tr>
												<td>40</td>
												<td>蔡玲玲</td>
												<td style="text-align:left;">Learning Difficulties of Taiwanese Nasals by Native English Speakers of Taiwanese Learners</td>
												<td style="text-align:left;">遠東科技大學講師</td>
											</tr>
											<tr>
												<td>41</td>
												<td>潘惠華</td>
												<td style="text-align:left;">台語電視新聞語言轉換現象之分析</td>
												<td style="text-align:left;">南華大學傳播學系兼任講師</td>
											</tr>
											<tr>
												<td>42</td>
												<td>應凱仁</td>
												<td style="text-align:left;">客籍大學生對客語的使用與態度調查─以中山醫學大學為例</td>
												<td style="text-align:left;">國立高雄師範大學客家文化研究所研究生</td>
											</tr>
											<tr>
												<td>43</td>
												<td>嚴珮瑜</td>
												<td style="text-align:left;">探討現代客語童謠中的譬喻結構－以謝宇威《ㄤ咕ㄤ咕》客語童謠專輯為例</td>
												<td style="text-align:left;">國立聯合大學客家語言與傳播研究所研究生</td>
											</tr>
											<tr>
												<td rowspan="2">44</td>
												<td>賴維凱</td>
												<td style="text-align:left;"rowspan="2">客語醫療詞彙在醫護專業的應用與推廣</td>
												<td style="text-align:left;">國立新竹教育大學台語所博士生</td>
											</tr>
											<tr>
												<td>廖純瑜</td>
												<td style="text-align:left;">國立中央大學客語所研究生</td>
											</tr>
											<tr>
												<td rowspan="2">45</td>
												<td>劉淑惠</td>
												<td style="text-align:left;"rowspan="2">國小客語教科書的性別角色內容分析</td>
												<td style="text-align:left;">苗栗縣立造橋國小教師</td>
											</tr>
											<tr>
												<td>鄭明中</td>
												<td style="text-align:left;">國立聯合大學客家語言與傳播研究所助理教授</td>
											</tr>
											<tr>
												<td>46</td>
												<td>洪惟仁</td>
												<td style="text-align:left;">漳州詔安縣的語言分佈</td>
												<td style="text-align:left;">國立台中教育大學教授</td>
											</tr>
											<tr>
												<td>47</td>
												<td>黃美金</td>
												<td style="text-align:left;">台灣原住民族語師資培育之探討：回顧與展望</td>
												<td style="text-align:left;">實踐大學應外系教授</td>
											</tr>
											<tr>
												<td>48</td>
												<td>史皓元</td>
												<td style="text-align:left;">Issues in Teaching and Romanizing of the Chinese Dialects</td>
												<td style="text-align:left;">Department of Asian Languages and Cultures, Rutgers, the State University of New Jersey</td>
											</tr>
											<tr>
												<td>49</td>
												<td>李如龍</td>
												<td style="text-align:left;">“方言说解识字教学”的优越性</td>
												<td style="text-align:left;">廈門大學人文學院中文系教授</td>
											</tr>


										</table>
									</td>
								</tr>
								<!--表格2啦啦啦end-->
								<tr><td style="text-align:center;color:red;">籌備委員</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">委員名單</td></tr>
								<tr>
									<td style="">
									劉鳳錦(國立聯合大學客家研究學院院長)<br>
									曹逢甫(國立清華大學語言學研究所教授)<br>
									姚榮松(國立臺灣師範大學台灣文化及語言文學研究所教授、臺灣語文學會理事長)<br>
									鍾榮富(國立聯合大學客家研究學院講座教授)<br>
									孫天心(中央研究院語言學研究所研究員)<br>
									洪惟仁(國立台中教育大學臺灣語文學系教授)<br>
									陳淑娟(國立新竹教育大學中國語文學系教授、臺灣語文學會秘書長)<br>
									范瑞玲(國立聯合大學客家語言與傳播研究所副教授)<br>
									林香薇(國立臺灣師範大學國文學系副教授、臺灣語文學會副會長)<br>
									吳瑞文(中央研究院語言學研究所助研究員)<br>
									鄭明中(國立聯合大學客家語言與傳播研究所助理教授)<br>
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