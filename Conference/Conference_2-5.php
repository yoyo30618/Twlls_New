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
									<tr><td style="text-align:center;color:red;"><b>第五屆青年學者台灣語言學術研討會</b></td></tr>
									<tr><td style="text-align:center;color:black;"><b>第五屆青年學者台灣語言學術研討會議程表</b></td></tr>
									<tr><td style="text-align:center;color:black;">（網址：<a href="https://www.beclass.com/rid=203c8ae59c9bfa09146e" target="_blank">https://www.beclass.com/rid=203c8ae59c9bfa09146e</a>）</td></tr>
									<tr><td style=""><br></td></tr>
									<tr>
										<td style="">
											<table class="table table-bordered" style="width:100%;">
												<tr>
													<td style="text-align:center;width:21%;">時間/場次</td>
													<td colspan="4" style="text-align:center;">會議進程</td>
												</tr>
												<tr>
													<td style="text-align:center;">09:10－09:40</td>
													<td colspan="4" style="text-align:center;">報到、領取會議資料</td>
												</tr>
												<tr>
													<td style="text-align:center;">09:40－09:50</td>
													<td colspan="4" style="text-align:center;">開幕典禮 國立台中教育大學人文學院魏院長炎順致詞</td>
												</tr>
												<tr>
													<td style="text-align:center;">09:50－10:00</td>
													<td colspan="4" style="text-align:center;">貴賓致詞、介紹來賓 張理事長學謙主持</td>
												</tr>
												<tr>
													<td style="text-align:center;">場次</td>
													<td style="text-align:center;width:13%;">主持人</td>
													<td style="text-align:center;width:13%;">主講人</td>
													<td style="text-align:center;">論文題目</td>
													<td style="text-align:center;width:13%;">特約討論</td>
												</tr>
												<tr>
													<td style="text-align:center;">10:00－10:30</td>
													<td rowspan="2" style="text-align:center;">張學謙</td>
													<td style="text-align:center;">蘇凰蘭</td>
													<td colspan="2" style="text-align:center;">WRITING “TAIWANESE”: THE PE̍H-OĒ-JĪ ROMANIZATION AND IDENTITY CONSTRUCTION IN TAIWAN, 1860S-1990S (書寫「臺灣人」: 臺灣白話字拼寫系統與認同建構, 1860s-1990s)</td>
												</tr>
												<tr>
													<td style="text-align:center;">10:30－11:00</td>
													<td style="text-align:center;">蘇建唐</td>
													<td colspan="2" style="text-align:center;">閩南語正反問句和程度結構中否定詞的角色：共時和歷時透視</td>
												</tr>
												<tr>
													<td style="text-align:center;">11:00－11:20</td>
													<td colspan="4" style="text-align:center;"><b>茶敘時間</b></td>
												</tr>
												
												<tr>
													<td rowspan="3" style="text-align:center;">Session 1A<br>11:20－12:30<br>F104</td>
													<td rowspan="3" style="text-align:center;">洪惟仁</td>
													<td style="text-align:center;">楊真宜</td>
													<td style="text-align:center;">回顧台灣本土語言流失情形以及語言振復之探討</td>
													<td style="text-align:center;">洪惟仁</td>
												</tr>
												<tr>
													<td style="text-align:center;">凃堡升</td>
													<td style="text-align:center;">What do Chinese Eat? – On Objects of Mandarin Chinese Verb Chi ‘Eat’:A Generative Lexicon Approach Chi Eat</td>
													<td style="text-align:center;">張群</td>
												</tr>
												<tr>
													<td style="text-align:center;">林正昕</td>
													<td style="text-align:center;">台灣華語中的「會」與在台華語學習者「會」偏誤情形─以英語為母語學習者為例</td>
													<td style="text-align:center;">葉美利</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">Session 1B<br>11:20－12:30<br>F203-2</td>
													<td rowspan="3" style="text-align:center;">陳麗君</td>
													<td style="text-align:center;">簡宏逸</td>
													<td style="text-align:center;">Sound, Graph, or Meaning: Ways of Borrowing in the Hokkien Community in Batavia</td>
													<td style="text-align:center;">康培德</td>
												</tr>
												<tr>
													<td style="text-align:center;">阮氏玉梅</td>
													<td style="text-align:center;">從新住民角度看新住民學習台語之研究，以新住民在雙北為例</td>
													<td style="text-align:center;">陳麗君</td>
												</tr>
												<tr>
													<td style="text-align:center;">陳寶珠</td>
													<td style="text-align:center;">江昀閩客語散文集之詞彙風格初探—以重疊詞為例</td>
													<td style="text-align:center;">邱一帆</td>
												</tr>
												<tr>
													<td style="text-align:center;">12:30－13:50</td>
													<td colspan="4" style="text-align:center;"><b>午餐、休息（台灣語文學會會員大會）</b></td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">Session 2A<br>13:50－15:00<br>F104</td>
													<td rowspan="3" style="text-align:center;">蔣為文</td>
													<td style="text-align:center;">陳玟羽</td>
													<td style="text-align:center;">聲韻覺識與年齡及語言關係調查</td>
													<td style="text-align:center;">梁淑慧</td>
												</tr>
												<tr>
													<td style="text-align:center;">蘇凰蘭</td>
													<td style="text-align:center;">The Discourse of Western Women in Culture in Taiwanese Romanization in the Late Qing Taiwan</td>
													<td style="text-align:center;">蔣為文</td>
												</tr>
												<tr>
													<td style="text-align:center;">陳秀菊</td>
													<td style="text-align:center;">臺灣閩南語「分」的語意分析</td>
													<td style="text-align:center;">鄭縈</td>
												</tr>
												<tr>
													<td rowspan="3" style="text-align:center;">Session 2B<br>13:50－15:00<br>F203-2</td>
													<td rowspan="3" style="text-align:center;">江敏華</td>
													<td style="text-align:center;">邱曉玲</td>
													<td style="text-align:center;">探討客家地區教會對客語與客語聖經的態度－以六堆客家地區台灣基督長老教會為例</td>
													<td style="text-align:center;">吳中杰</td>
												</tr>
												<tr>
													<td style="text-align:center;">黃火盛</td>
													<td style="text-align:center;">以心智圖法繪臺灣客家語「打」的語意地圖</td>
													<td style="text-align:center;">江敏華</td>
												</tr>
												<tr>
													<td style="text-align:center;">黃子權</td>
													<td style="text-align:center;">韻律層次的方言流失:以四縣客語的新調群為例</td>
													<td style="text-align:center;">劉秀雪</td>
												</tr>
												<tr>
													<td style="text-align:center;">15:00－15:20</td>
													<td colspan="4" style="text-align:center;"><b>茶敘時間</b></td>
												</tr>


												<tr>
													<td rowspan="3" style="text-align:center;">Session 3A<br>15:20－16:30<br>F104</td>
													<td rowspan="3" style="text-align:center;">曾金金</td>
													<td style="text-align:center;">李翰綸</td>
													<td style="text-align:center;">A Corpus-based Study of Near Synonym Verb Wend Xing and Zou in Mandarin Chinese</td>
													<td style="text-align:center;">張妙霞</td>
												</tr>
												<tr>
													<td style="text-align:center;">陳登財</td>
													<td style="text-align:center;">初鹿卑南語問答句之教學</td>
													<td style="text-align:center;">曾金金</td>
												</tr>
												<tr>
													<td style="text-align:center;">盧佩芊</td>
													<td style="text-align:center;">從問題到資源：越南語在台灣的社會語言地位變遷</td>
													<td style="text-align:center;">蘇凰蘭</td>
												</tr>
												<tr>
													<td rowspan="2" style="text-align:center;">Session 3B<br>15:20－16:30<br>F203-2</td>
													<td rowspan="2" style="text-align:center;">杜佳倫</td>
													<td style="text-align:center;">張滿娘</td>
													<td style="text-align:center;">淺談客語復振：高雄市美濃國小附幼實施客語沉浸式教學為例</td>
													<td style="text-align:center;">張學謙</td>
												</tr>
												<tr>
													<td style="text-align:center;">游淑梅</td>
													<td style="text-align:center;">語言交流能力在大眾觀察中的依附關係─以客家語言為例</td>
													<td style="text-align:center;">杜佳倫</td>
												</tr>
												<tr>
													<td style="text-align:center;">16:30－16:50</td>
													<td colspan="4" style="text-align:center;"><b>閉幕典禮 張理事長學謙主持、賦歸</b></td>
												</tr>
											</table>
										</td>
									</tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="text-align:center;color:black;font-size:16pt"><b>徵稿啟事</b></td></tr>
									<tr>
										<td style="text-align:center;color:black;font-size:12pt">
											
												會議主題：<br>
												<b>台灣語言發展kah語言轉型正義</b><br>
												（其他與台灣語言及語言教學相關的論文亦所歡迎）<br>
												會議子題：<br>
												台灣語言發展 ● 台灣語言轉型正義<br>
												台灣語言的地位規畫 ● 語言轉型正義的理論<br>
												台灣語言的語文規畫 ● 台灣語言不平等的歷史<br>
												台灣語言的教育規畫 ● 語言轉型正義的政策規畫<br>
												台灣語言語料庫研究 ● 草根語言轉型正義的實踐<br>
												台灣語言的數位教學 ● 多文字現象與轉型正義<br>
												沉浸式母語教育 ● 轉型正義的語言人權分析<br>
												家庭與社區的母語教育 ● 落實語言轉型正義的方法<br>
												母語的讀寫教育 ● 語言轉型正義教材<br>
												雙語翻譯與口譯 ● 語言教育與轉型正義<br>
											
										</td>
									</tr>
									<tr><td style="color:darkblue;">摘要截稿：</td></tr>
									<tr><td style="">2017年3月17日（延期至4月7日）</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">錄取名單：</td></tr>
									<tr><td style="">2017年4月17日（因延長徵稿，審查結果通知順延2星期。）</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">全文截稿：</td></tr>
									<tr><td style="">2017年9月10日</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">會議日期：</td></tr>
									<tr><td style="">2017年10月14日（星期六）</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">資格限定：</td></tr>
									<tr><td style="">研究生及取得碩、博士學位五年內之青年學者</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">投稿方式：</td></tr>
									<tr><td style="">下載並填寫「發表人及論文題目與摘要資料表」，以電子郵件寄到5thysc@gmail.com (每人限制發表一篇)。</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">研討會網址：</td></tr>
									<tr><td style=""><a href="https://sites.google.com/site/5youngscholarsconference/" target="_blank">https://sites.google.com/site/5youngscholarsconference/</a></td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">會議收費方式：</td></tr>
									<tr>
										<td style="">
										（1） 論文發表費：學生1500元；非學生2000元（已含會議註冊費）。<br>
										（2） 會議註冊費稍後公告。<br>
										（3） 台灣語文學會會員免論文發表費及會議註冊費。<br>
										</td>
									</tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">主辦單位：</td></tr>
									<tr><td style="">台灣語文學會、國立台中教育大學台灣語文學系</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">會議地點：</td></tr>
									<tr><td style="">國立台中教育大學台灣語文學系</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">聯絡地址：</td></tr>
									<tr><td style="">40306台中市西區民生路140號台中教育大學台灣語文學系</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">聯絡電話：</td></tr>
									<tr><td style="">04-2218-3915 莊小姐</td></tr>
									<tr><td style=""><br></td></tr>
									<tr><td style="color:darkblue;">稿件聯繫：</td></tr>
									<tr><td style="">5thysc@gmail.com 莊小姐</td></tr>
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