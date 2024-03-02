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
								<tr><td style="text-align:center;color:red;"><b>第十二屆臺灣語言及其教學國際學術研討會</b></td></tr>
								<tr><td style="text-align:center;color:red;"><b>The 12th International Symposium on Taiwanese Languages and Teaching</b></td></tr>
								<tr><td style="text-align:center;"><br></td></tr>
								<tr><td style="text-align:center;">會議訊息通知</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">一、會議名稱：</td></tr>
								<tr><td style="">第十二屆臺灣語言及其教學國際學術研討會（ISTLT-12）</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">二、主辦單位</td></tr>
								<tr><td style="">台灣語文學會、國立中山大學中國文學系、中央研究院語言學研究所</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">三、合辦單位</td></tr>
								<tr><td style="">國立台灣文學館</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">四、補助單位</td></tr>
								<tr><td style="">科技部、客家委員會、原住民族委員會</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">五、會議日期</td></tr>
								<tr><td style="">2018年10月26、27日</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">六、會議地點</td></tr>
								<tr><td style="">國立中山大學文學院</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">七、會議主題</td></tr>
								<tr>
									<td style="">
										台灣語言的多樣性與永續發展<br>
										會議子題：<br>
										1. 台灣語言的多元發展與變異<br>
										2. 台灣語言的接觸、融合與新變<br>
										3. 台灣語言的保存與流失<br>
										4. 台灣語言的復振及相關語言政策<br>
										5. 台灣語言語音與音韻的結構分析<br>
										6. 台灣語言構詞及句法的理論探討<br>
										7. 台灣語言的書寫、應用與教學<br>
										8. 台灣語言詞典編撰的研究與方法<br>
										9. 台灣語言與民間文化之互動<br>
										10. 其他與台灣語言或台灣語言教學相關之議題<br>
									</td>
								</tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">八、摘要截稿日期</td></tr>
								<tr><td style="">2018年1月7日</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">九、公布摘要通過日期</td></tr>
								<tr><td style="">2018年3月5日</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">十、全文截稿日期</td></tr>
								<tr><td style="">2018年8月20日</td></tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">十一、投稿方式</td></tr>
								<tr>
									<td style="">
									（1）投稿語言：台灣語言、英語。 <br>
									（2）個別投稿：與「會議主題、子題」相關的台灣語言、文化、教學研究。<br>
									（3）專題小組（panel）投稿：自組專題小組成員3~5人（含主持人）。<br>
									專題小組主題：A 台灣語言書寫與應用 B台灣語言沉浸式教學 C台灣語言的保存與流失 D台灣民間文化的語文採錄<br>
									（4）請下載「<a href="../Documents/2018contributor.docx">投稿人資料表</a>」（專題小組投稿者的參加成員都必須各自下載填寫），並將「論文題目與摘要」存為一式兩檔（WORD檔及PDF檔），以電子郵件寄到以下信箱。<br>
									</td>
								</tr>
								<tr><td style=""><br></td></tr>
								<tr>
									<td style="">
										★會議網頁：<a href="https://goo.gl/27a7y6" target="_blank">https://goo.gl/27a7y6</a><br>
										★會議議程：<a href="https://ppt.cc/fhZz5x" target="_blank">https://ppt.cc/fhZz5x</a><br>
										★線上報名系統：<a href="https://ppt.cc/fkL9qx" target="_blank">https://ppt.cc/fkL9qx</a>（論文發表者及主持/評論人不需進行報名註冊）<br>
									</td>
								</tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">十二、會議註冊費用</td></tr>
								<tr>
									<td style="">
										A. 台灣語文學會會員：<br>
										（A1） 已繳交 2018 年費者：免繳註冊費。<br>
										（A2） 未繳交 2018 年費者：學生500 元；非學生1000 元<br>
										（A3） 申請新入會：入會費1000 元＋2018 年費(學生500 元/非學生1000 元)<br>
										（欲加入台灣語文學會者，請下載入會申請表：）<br>
										B. 非台灣語文學會會員：<br>
										（B1） 9 月 30 日之前報名：學生 600 元；非學生 1200 元<br>
										（B2） 10 月 01 日之後及 現場報名：學生 750 元；非學生 1500 元<br>
										（請注意：10 月 01 日之後及現場報名者，不保證能拿到會前論文集，敬請見諒）<br>
									</td>
								</tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">十三、繳費方式：</td></tr>
								<tr>
									<td style="">
										請匯款至台灣語文學會帳戶：渣打銀行（代碼 052）帳號「06353-0018637」。<br>
										繳費完成後請務必線上回復若干資訊，以便確認繳費。<br>
										★線上繳費確認：<a href="https://ppt.cc/fuxqhx" target="_blank">https://ppt.cc/fuxqhx</a><br>
										★待收到匯款確認信函，方完成報名程序。<br>
									</td>
								</tr>
								<tr><td style=""><br></td></tr>
								<tr><td style="">十四、聯絡方式</td></tr>
								<tr>
									<td style="">
										1. 本次會議繳費事務由台灣語文學會秘書處全權處理，如有繳費疑問請洽：<a href="mailto:contact.tlls@gmail.com">contact.tlls@gmail.com</a><br>
										2. 繳費事務以外其他會務問題，請洽：<a href="mailto:istlt2018@gmail.com">istlt2018@gmail.com</a><br>
									</td>
								</tr>
								<tr><td style="text-align:center;"><embed src="../Documents/istt12th.pdf" style="width:100%;height:600px"></embed></td></tr>
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