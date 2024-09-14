<!DOCTYPE HTML>
<html>
<head>
	<?php
	// 獲取當前選擇的標籤，預設為活動消息
	$tab = isset($_GET['tab']) ? $_GET['tab'] : 'activity';
	?>
	<title>台灣語文學會</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="assets/js/jquery.marquee.js"></script>
	<script>
		$('.marquee').marquee({ pauseOnHover: true });
	</script>
</head>
<?php include_once "Conn_SQL.php"; ?>
<body class="AllBODY">
	<?php include_once('Top.php');?>
	<?php include_once('banner.php');?>
	<div style="margin-top: 120px;"></div>
	<?php include_once('marquee.php');?>
	<div class="banner-bottom" style="background-image: url();">
		<div class="container">
			<div class="video-bottom-grids" style="color:white;text-align:center;height:150px; display:flex; align-items:center; justify-content:center;">
				<text style="font-size:40px;">會員專區</text>
			</div>
		</div>
	</div>
	<div class="container ">
		<div class="video-bottom-grids1">
			<div class="col-md-12 video-bottom-grid">
				<div class="news-grid-rght3" style="margin:15px;">
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
			<div class="clearfix"> </div>
		</div>
	</div>
	<?php include_once('footer.php'); ?>
	<script src="assets/js/bootstrap.js"></script>
</body>

</html>