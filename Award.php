<!DOCTYPE HTML>
<html>
<head>
<?php include_once "Conn_SQL.php"; ?>
	<?php
	// 獲取當前選擇的標籤，預設為活動消息
	if(isset($_GET['Issue'])==false || $_GET['Issue']=='LatestIssue'){
		//找出最新一屆數
		$thesisawardsql = "SELECT `Issue` FROM `thesisawardcontent` ORDER BY `OrderIndex` DESC ";
		$thesisawardresult = $conn_1->query($thesisawardsql);
		while ($row = mysqli_fetch_array($thesisawardresult)) {
			$Issue =$row['Issue'];
			break;
		}
	}
	else{
		$Issue = $_GET['Issue'] ;
	}
	$tab = isset($_GET['tab']) ? $_GET['tab'] : 'Award';
	?>
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
	
	<script type="text/javascript" src="js/jquery.marquee.js"></script>
	<script>
		$('.marquee').marquee({ pauseOnHover: true });
	</script>
</head>
<body class="AllBODY">
	<?php include_once('Top.php');?>
	<?php include_once('banner.php');?>
	<div style="margin-top: 120px;"></div>
	<?php include_once('marquee.php');?>
	<div class="banner-bottom" style="background-image: url(images/news-banner.jpg);">
		<div class="container">
			<div class="video-bottom-grids" style="color:white;text-align:center;height:150px; display:flex; align-items:center; justify-content:center;">
				<text style="font-size:40px;">歷屆獎項</text>
			</div>
		</div>
	</div>
	<br>
	<div class="container ">
		<div class="video-bottom-grids1" style="margin-top:20px;">
			<div class="col-md-12 ">
				<div class="col-md-3">
					<?php
						$thesisawardsql = "SELECT `Issue` FROM `thesisawardinfo`  GROUP BY `Issue` ORDER BY `OrderIndex` DESC";
						$thesisawardresult = $conn_1->query($thesisawardsql);
						if ($thesisawardresult->num_rows > 0) {
							while ($row = mysqli_fetch_array($thesisawardresult)) {
									echo "<div class='JournalListButton'>";
									echo "<a style='font-size:20px;color:#55463D' href='Award.php?Issue=".$row['Issue']."&tab=".$tab."'>".$row['Issue']."優秀博士論文獎</a>";
									echo "</div>";
							}
						}
					?>
				</div>
				<div class="col-md-9">
				<div class="tabs" style="color:#418765">
					<?php
						echo "<div class='tab ".( $tab === 'Award' ? 'active' : '')."' onclick='location.href=\"Award.php?Issue=".$Issue."&tab=Award\"'>優秀博士論文獎</div>";
						echo "<div class='tab ".( $tab === 'Apply' ? 'active' : '')."' onclick='location.href=\"Award.php?Issue=".$Issue."&tab=Apply\"'>申請辦法</div>";
					?>
				</div>
					<?php
						if($tab=="Award"){
							$thesisawardcontentsql = "SELECT * FROM `thesisawardcontent`  ORDER BY `OrderIndex` DESC";
							$thesisawardinfosql = "SELECT * FROM `thesisawardinfo` ORDER BY `OrderIndex` DESC";
							if($tab!='' && $Issue!=''){
								$thesisawardcontentsql = "SELECT * FROM `thesisawardcontent` WHERE `Issue`='".$Issue."' ORDER BY `OrderIndex` DESC";
								$thesisawardinfosql = "SELECT * FROM `thesisawardinfo`  WHERE `Issue`='".$Issue."' ORDER BY `OrderIndex` DESC";
							}
							echo "<a style='color:#3C7556;font-size:25px;'>".$Issue."台灣語文學會優秀博士論文獎</a>";

							echo "<table class='Journaltable'>";
							echo "	<tr>";
							echo "		<th class='Journalth' style='width:20%;'>獲獎者</th>";
							echo "		<th class='Journalth' style='width:20%;'>畢業年</th>";
							echo "		<th class='Journalth' style='width:40%;'>博士論文題目</th>";
							echo "		<th class='Journalth' style='width:20%;'>指導教授</th>";
							echo "	</tr>";
							$thesisawardcontentresult = $conn_1->query($thesisawardcontentsql);
							while ($row = mysqli_fetch_array($thesisawardcontentresult)) {
							echo "	<tr class='Journaltr'>";
							echo "		<td class='Journaltd'>".$row['Winner']."</td>";
							echo "		<td class='Journaltd'>".$row['Year']."</td>";
							echo "		<td class='Journaltd'>".$row['Title']."<br>".$row['TitleEng']."</td>";
							echo "		<td class='Journaltd'>".$row['professor']."</td>";
							echo "	</tr>";
							}
							echo "</table>";
							$thesisawardinforesult = $conn_1->query($thesisawardinfosql);
							while ($row = mysqli_fetch_array($thesisawardinforesult)) {
								echo "<a style='color:black;font-size:18px;'>".$row['Memo']."</a><br><br>";
								if($row['IssueDate']!="")
									echo "<a style='color:black;font-size:15px;'>發布日期：".$row['IssueDate']."</a><br>";
								if($row['Attachment']!="")
									echo "<a style='color:black;font-size:15px;'>附件：<a href='Attachment/Award/".$row['Attachment']."'>結果公告</a></a><br>";
							}
						}
						else if($tab=="Apply"){
							$filePath = "Award/" . $Issue . ".txt";
							if (file_exists($filePath)) {
								include_once($filePath);
							} else {
								echo "未建立該屆申請辦法";
							}
						}						
					?>
				</div>
				
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>

	
	<?php include_once('footer.php'); ?>
	<script src="js/bootstrap.js"></script>
</body>

</html>