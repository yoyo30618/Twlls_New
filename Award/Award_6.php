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
					<h3>首頁 / 優秀博士論文獎</h3>
					<div class="news-grid-rght3">
						<div class="story"> 
							<table style="width:100%;" class="table table-bordered"> <!--論文獎結果-->
								<tr>
									<td colspan="4"><b>第六屆台灣語文學會優秀博士論文獎（2021）獲獎者一名。</b></td><!--本屆論文獎註釋說明-->
								</tr>
								<tr>
									<th style="text-align:center;width:13%">獲獎者</th>
									<th style="text-align:center;width:13%">畢業年</th>
									<th style="text-align:center;">博士論文題目</th>
									<th style="text-align:center;width:15%">指導教授</th>
								</tr>
								<tr>
									<td style="text-align:center;">全茂永</td>
									<td style="text-align:center;">2021</td>
									<td style="text-align:center;">
										從卡社布農語的隱喻看其文化內涵<br>
										Cultural Traits as Seen from Metaphors in Takibakha Bunun</td>
									<td style="text-align:center;">葉美利</td>
								</tr>
								<tr>
									<td colspan="4">附件：<a href="../Documents/award_1_06.pdf" target="_blank">結果公告</a><br>發布日期：2022/01/28</td>
								</tr>
							</table>
							<table style="width:100%;"><!--論文獎規則-->
								<tr><td style="text-align:center;color:red;"><b>第六屆台灣語文學會優秀博士論文獎</b></td></tr>
								<tr><td style="text-align:center;color:darkblue;"><b>徵件啟事</b></td></tr>
								<tr><td style="text-align:center;"><br></td></tr>
								<tr>
								<td>
								　　台灣語文學會為獎勵台灣語文研究的優秀博士論文，特設此一獎項。學會將邀請獲獎之優秀青年學者現身說法，講論學位論文的重要研究成果，一方面示範學術研究的方法與態度，一方面也分享學術研究的成果與經驗，以鼓勵並引導在學研究生積極投入台灣語文的相關研究。此一獎項自2013年開始舉辦，自2015年起，本活動每兩年舉辦一次。<br><br>
									一、獎項名稱：台灣語文學會優秀博士論文獎<br><br>
									二、名額：每屆一至兩名<br><br>
									三、主辦單位：台灣語文學會<br><br>
									四、申請資格：<br>
									　　（1）<b>2017年7月至2021年10月已正式取得博士學位者</b>（每人以申請兩次為限）。<br>
									　　（2）申請者若為台灣語文學會會員請繳交當年年費；若非台灣語文學會會員，可選擇入會或繳交審查費用1000元。<br>
									　　（欲加入台灣語文學會者請參見<a href="../Member.php">會員專區</a>）<br>
									五、論文主題限定：有關台灣語言相關之研究，包括閩南語、客家話、南島語及台灣華語的語音、音韻、構詞、句法及其他台灣語言學相關研究之博士學位論文。<br><br>
									六、申請方式：指導教授推薦或本人自行報名均可。請填寫「<a href="../Documents/5thddapp.docx"><b>申請表</b></a>」（表末請自評並說明<b>該論文與台灣語言的相關性</b>），並檢附以下資料：<br>
									　　（1）<b>研究結論要點</b>（summary）3-5頁以及<b>章節目錄</b>。<br>
									　　（2）<b>博士論文全本</b>（電子檔一份，若審查人需要紙本論文，將請申請人提供紙本論文）。<br>
									　　（3）<b>博士學位證書</b>（掃描檔一份）。<br>
									　　<text style="color:blue">備註：應屆畢業生已通過口試但尚未辦理離校手續者，可先以
									    <text style="color:red">論文口試通過證明</text>暫代畢業證書，俟辦理離校手續後再補交畢業證書。畢業證書補件期限為
										<text style="color:red">11月10日</text>，未能於期限前補齊資料者，將取消獲獎資格，已繳交之審查費或入會費亦不予退還。</text><br>
									　　備妥以上資料，以電子郵件方式寄至<a href="mailto:contact.tlls@gmail.com">contact.tlls@gmail.com。</a><br><br>
									七、審查：由本學會理監事委員組織學術委員會，進行初審、複審兩階段審查。通過資格初審的博士論文進入全文複審，再由學術委員會議決獲獎名單。<br><br>
									八、申請截止日期：<b>2021年10月30日</b><br><br>
									<text style="color:red">九、應屆畢業生畢業證書補件截止日期：2021年11月10日</text><br><br>
									十、獲獎名單公布日期：<b>2022年1月31日</b><br><br>
									十一、<b>獲獎者將獲邀於台灣語文學會舉辦之學術活動頒發獎狀，並進行約30分鐘的學位論文成果發表。</b><br><br>
									十二、獲獎者若為會員，將獲免繳年費兩年；若非會員，將獲邀請入會並免繳年費兩年。<br><br>
									十三、繳費方式：<br>
									　　台灣語文學會帳戶：渣打銀行（代碼052）轉帳帳號「06353-0018637」。<br>
									　　轉帳完成後請以電子郵件告知「<b>姓名</b>」及「<b>匯款帳號末六碼</b>」，<br>
									　　電子郵件請寄<a href="mailto:contact.tlls@gmail.com">contact.tlls@gmail.com</a><br><br>
									十四、聯絡地址：台灣語文學會祕書處聯絡組<a href="mailto:contact.tlls@gmail.com">contact.tlls@gmail.com</a><br><br>
									</td>
								</tr>
							</table>
						</div>
					</div><br>
				</div>
				<div class="col-md-4 upcoming-events-right">
					<h3>優秀博士論文獎暨申請辦法</h3>
					
					<div class="banner-bottom-video-grid-left">
							<?php
								$sql = "SELECT * FROM `relatedlinks` WHERE `Notice`='歷屆獎項' AND `IsUsed`=1 ORDER BY `OrderIndex` DESC";
								$result = $conn_1->query($sql);
								if ($result->num_rows > 0) {
									while ($row = mysqli_fetch_array($result)) {
										echo "<div class='panel-group' id='accordion' role='tablist' aria-multiselectable='true'>";
											echo "<div class='panel panel-default'>";
												echo "<div class='panel-heading' role='tab' id='headingOne'>";
													echo "<h4 class='panel-title'>";
														echo "<a class='pa_italic collapsed'  href='../".$row["Value"]."'>";
															echo "<span class='glyphicon glyphicon-plus' aria-hidden='true'></span><i";
																echo "class='glyphicon glyphicon-minus'";
																echo "aria-hidden='true'></i>".$row["Item"].$row["Function"];
														echo "</a>";
													echo "</h4>";
												echo "</div>";
											echo "</div>";
										echo "</div>";
									}
								}	
							?>	
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