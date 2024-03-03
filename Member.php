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
</head>
<?php include_once "Conn_SQL.php"; ?>
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
														<li><a href="Pay.php">期刊</a></li>
													</ul>
												</li>
												<li><a href="Member.php" style="font-size: 16px;">歷屆獎項</a></li>
												<li><a href="Member.php" style="font-size: 16px;">會員專區</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														線上繳費 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="Pay.php">會員繳費與捐款</a></li>
														<li><a href="icons.html">出版品購買</a></li>
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
			</div>
			<div class="upcoming-events-grids">
				<div class="col-md-8 upcoming-events-left">
					<h3>申請入會</h3>
					<div class="news-grid-rght3">
						<div class="story">
							<text style="color:red">關於加入本學會，成為本學會會員，本學會章程規定如下：</text> 
							<br><br>
							<b> 第三章　會員</b> 
							<table class='table table-bordered'>
								<tr> 
									<td style='width:20%'>第六條</td>
									<td>凡贊同本會宗旨者，由本會會員二人以上之介紹，並經本會理事會通過，得為本會會員。</td>
								</tr>
								<tr> 
									<td>第七條</td>
									<td>本會會員分為一般會員、榮譽會員、團體會員與預備會員四種：<br>
									一、以個人身分入會者為一般會員。<br>
									二、凡對臺灣語文研究與教育卓有成就，或對本會有鉅大貢獻者，得經理事會通過，聘為榮譽會員。<br>
									三、凡以團體資格入會者為團體會員。<br>
									四、凡是對台灣語文有相當研究或者推廣興趣者，經理事會通過，得為預備會員。<br>
									五、具學生身份者得為預備會員。</td>
								</tr>
								<tr> 
									<td>第八條</td>
									<td>一般會員之資格，除須年滿二十歲並繳納入會費以外，並應合乎下列款項之一：<br>
									一、語文及其相關學科的學者。<br>
									二、語文及其相關學科的研究生。<br>
									三、對臺灣語文研究具有相當成就者。<br>
									四、預備會員連續滿兩年者。</td>
								</tr>
								<tr> 
									<td>第九條</td>
									<td>團體會員之資格，除繳納入會費以外，並應合乎下列諸款之一：<br>
									一、語文及其相關學科之學術團體。<br>
									二、教育機構或團體。<br>
									三、文化團體。<br>
									四、其他贊同或支持本會宗旨之團體。</td>
								</tr>
								<tr> 
									<td>第十條</td>
									<td>會員若嚴重違反本會章程，得經理事會出席理事三分之二以上通過，予以糾正、停權、或除名，並提請下次會員大會追認。</td>
								</tr>
								<tr> 
									<td>第十一條</td>
									<td>凡無故連續二年不繳納常年會費之一般會員和團體會員，視為自動退會。</td>
								</tr>
								<tr> 
									<td>第十二條</td>
									<td>會員得以書面向理事會聲明退會。</td>
								</tr>
								<tr> 
									<td>第十三條</td>
									<td>會員經出會或退會，已繳納之各項費用不予退還。</td>
								</tr>
								<tr> 
									<td>第十四條</td>
									<td>一般會員和團體會員有遵守本會章程、決議、及繳納會費的義務。</td>
								</tr>
								<tr> 
									<td>第十五條</td>
									<td>本會一般會員和團體會員應享的權利如後：<br>
									一、出席會議並享有發言權、提案權與表決權。<br>
									二、享有選舉權、被選舉權與罷免權。每一會員為一權。<br>
									三、本會所舉辦各種事業上之權益。<br>
									四、會員應享之其他權益。</td>
								</tr>
								<tr> 
									<td>第十六條</td>
									<td>預備會員得列席會議，並享有發言權。</td>
								</tr>
								<tr> 
									<td colspan="2"><b>附註：</b><br> 
									1.符合上述資格，欲加入本學會者，可自行下載「<a href="Documents/tlls_application2020.doc" style="color:blue">入會申請表</a>」，詳細填寫資料後，請<a href="mailto:contact.tlls@gmail.com" style="color:blue">E-mail</a>寄回本會。<br>
									2.本學會於接受「入會申請表」後，經由理事會審核通過，方可成為正式會員。<br>
									3.經理事會審核通過新加入的會員，需繳交壹仟圓入會費，及年費。<br />年費：一般會員壹仟圓，學生會員（為目前在學學生）伍佰圓。
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-4 upcoming-events-right">
					<h3>年費繳交說明暨相關文件</h3>
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
												aria-hidden='true'></i>年費繳交
										</a>
									</h4>
								</div>
								<div id='collapse1' class='panel-collapse collapse' role='tabpanel'
									aria-labelledby='headingOne' style='height: 0px;'>
									<div class='panel-body'>
									繳費方式：<br>(入會費1000元＋一般年費1000元/學生年費500元)<br><br>
									台灣語文學會帳戶：<br>渣打銀行（代碼052）東內壢分行<br>轉帳帳號「0635300-0018637」。<br><br>
									轉帳完成後請以電子郵件告知「姓名」及「匯款帳號末六碼」，連同基本資料表寄回 contact.tlls@gmail.com。<br>
									<a href='Pay.php'>前往繳費</a><br>
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
												aria-hidden='true'></i>入會申請表
										</a>
									</h4>
								</div>
								<div id='collapse2' class='panel-collapse collapse' role='tabpanel'
									aria-labelledby='headingOne' style='height: 0px;'>
									<div class='panel-body'>
									入會申請表如附件，請下載後詳細填寫。<br>
									<a href="documents/tlls_application2020.doc" style="color:blue">入會申請表</a><br>
									</div>
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
	<script src="js/bootstrap.js"></script>
</body>

</html>