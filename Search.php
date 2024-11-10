<!DOCTYPE HTML>
<html>
<head>
	<?php
	// 獲取當前選擇的標籤，預設為活動消息
	$tab = isset($_GET['tab']) ? $_GET['tab'] : 'News';
	$Key="";
	if(isset($_GET['search'] ))$Key=$_GET['search'];
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
<?php include_once "Conn_SQL.php"; ?>
<body class="AllBODY">
	<?php include_once('Top.php');?>
	<?php include_once('banner.php');?>
	<div style="margin-top: 120px;"></div>
	<?php include_once('marquee.php');?>
	<div class="banner-bottom" style="background-image: url(images/news-banner.jpg);">
		<div class="container">
			<div class="video-bottom-grids" style="color:white;text-align:center;height:150px; display:flex; align-items:center; justify-content:center;">
				<text style="font-size:40px;">搜尋結果</text>
			</div>
		</div>
	</div>
	<br>
	<div class="container tabs" style="color:#418765">
		<div class="tab <?php echo $tab === 'News' ? 'active' : ''; ?>" onclick="location.href='?tab=News&search=<?php echo $Key;?>'">最新消息</div>
		<div class="tab <?php echo $tab === 'Conference' ? 'active' : ''; ?>" onclick="location.href='?tab=Conference&search=<?php echo $Key;?>'">研討會</div>
		<div class="tab <?php echo $tab === 'Journal' ? 'active' : ''; ?>" onclick="location.href='?tab=Journal&search=<?php echo $Key;?>'">期刊</div>
		<div class="tab <?php echo $tab === 'Award' ? 'active' : ''; ?>" onclick="location.href='?tab=Award&search=<?php echo $Key;?>'">歷屆獎項</div>
	</div>
	<div class="container ">
		<div class="video-bottom-grids1">
			<div class="col-md-12 col-sm-12">
				
					<div style="clear:both;"></div><br>
					<div class="video-bottom-grid1" >
					<ul class="list" style="font-size: 12pt;">
						<?php
							if($tab==="News"){
								$sql = "SELECT * FROM `news` WHERE 1=1 AND `IsShow`='1' AND `Title` lIKE '%".$Key."%' ORDER BY OrderIndex DESC";
								$result = $conn_1->query($sql);
								if ($result->num_rows > 0) {
									while ($row = mysqli_fetch_array($result)) {
										echo "<li style='padding:5px 15px;'>";
										echo "<div style='width:10%;float:left;font-size:15px'>";
										echo "		<a style='color:black'>".$row["DateTime"]."</a>";
										echo "</div>";
										echo "<div style='width:70%;float:left;font-size:15px'>";
										if($row["Mode"]=="File")
											echo "		<a style='color:black' href='Attachment/News/".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a>";
										else if($row["Mode"]=="Page")
											echo "		<a style='color:black' href='NewsMasterPage.php?_ID=".$row['_ID']."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a>";
										else if($row["Mode"]=="Link")
											echo "		<a style='color:black' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a>";
										echo "</div>";
										echo "<div style='width:20%;float:right;font-size:10px'>";
										if($row["Mode"]=="File")
											echo "　　　<a href='Attachment/News/".$row["url"]."' class='custom-button' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>more...</a>";
										else if($row["Mode"]=="Page")
											echo "　　　<a href='NewsMasterPage.php?_ID=".$row['_ID']."' class='custom-button' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>more...</a>";
										else if($row["Mode"]=="Link")
											echo "　　　<a href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."' class='custom-button'>more...</a>";
									
										echo "</div>";
										echo "<div style='clear: both;'></div>"; // 清除浮動
										echo "</li>";
									}
									
								}
							}
							if($tab==="Conference"){
								$sql = "SELECT * FROM `relatedlinks` WHERE 1=1 AND `Notice`='研討會' AND `IsUsed`='1' AND (`Function` like '%".$Key."%' OR `Item` like '%".$Key."%' OR `Place` like '%".$Key."%'  OR `Title`  like '%".$Key."%' ) ORDER BY `OrderIndex` DESC";
								$result = $conn_1->query($sql);
								if ($result->num_rows > 0) {
									while ($row = mysqli_fetch_array($result)) {
										echo "<li style='padding:5px 15px;'>";
										echo "<div style='width:20%;float:left;font-size:15px'>";
										echo "		<a style='color:black'>".$row["Date"]."</a>";
										echo "</div>";
										echo "<div style='width:60%;float:left;font-size:15px'>";
										echo "		<a style='color:black' href='ConferenceMasterPage.php?sessions=".$row["Link"]."' target=''>".$row["Function"]."  ".$row["Item"]."  ".$row["Title"]."</a>";
										echo "</div>";
										echo "<div style='width:20%;float:right;font-size:10px'>";
										echo "　　　<a href='ConferenceMasterPage.php?sessions=".$row["Link"]."' class='custom-button'>more...</a>";
										echo "</div>";
										echo "<div style='clear: both;'></div>"; // 清除浮動
										echo "</li>";
									}
									
								}
							}
							if($tab==="Journal"){
								$sql = "SELECT * FROM `journalcontent_NewOrder` WHERE 1=1 AND (`JournalSession` like '%".$Key."%' OR `JournalIssue` like '%".$Key."%' OR `Author` like '%".$Key."%' OR `AuthorEng` like '%".$Key."%' OR `Title` like '%".$Key."%') ORDER BY `OrderIndex` DESC ";
								$result = $conn_1->query($sql);
								if ($result->num_rows > 0) {
									while ($row = mysqli_fetch_array($result)) {
										if($row["Author"]!=""){
											echo "<li style='padding:5px 15px;'>";
											echo "<div style='width:15%;float:left;font-size:15px'>";
											echo "		<a style='color:black' href='Journal.php?Session=".$row["JournalSession"]."&Issue=".$row["JournalIssue"]."'>".$row["JournalSession"]."(".$row["JournalIssue"].")</a>";
											echo "</div>";
											echo "<div style='width:15%;float:left;font-size:15px'>";
											echo "		<a style='color:black' href='Journal.php?Session=".$row["JournalSession"]."&Issue=".$row["JournalIssue"]."'>".$row["JournalDate"]."</a>";
											echo "</div>";
											echo "<div style='width:35%;float:left;font-size:15px'>";
											echo "		<a style='color:black' href='Journal.php?Session=".$row["JournalSession"]."&Issue=".$row["JournalIssue"]."'>".$row["Author"]."(".$row["AuthorEng"].")</a>";
											echo "</div>";
											echo "<div style='width:35%;float:left;font-size:15px'>";
											echo "		<a style='color:black' href='Journal.php?Session=".$row["JournalSession"]."&Issue=".$row["JournalIssue"]."'>".$row["Title"]."</a>";
											echo "</div>";
											echo "<div style='clear: both;'></div>"; // 清除浮動
											echo "</li>";
										}
									}
									
								}
							}
							if($tab==="Award"){
								$sql = "SELECT * FROM `thesisawardcontent` WHERE 1=1 AND (`Issue`like '%".$Key."%' OR `Title`like '%".$Key."%' OR `TitleEng`like '%".$Key."%' OR `professor`like '%".$Key."%') ORDER BY `OrderIndex` DESC";
								$result = $conn_1->query($sql);
								if ($result->num_rows > 0) {
									while ($row = mysqli_fetch_array($result)) {
										echo "<li style='padding:5px 15px;'>";
										echo "<div style='width:20%;float:left;font-size:15px'>";
										echo "		<a style='color:black' href='Award.php?Issue=".$row["Issue"]."&tab=Award'>".$row["Issue"]."</a>";
										echo "</div>";
										echo "<div style='width:20%;float:left;font-size:15px'>";
										echo "		<a style='color:black' href='Award.php?Issue=".$row["Issue"]."&tab=Award'>".$row["Winner"]."</a>";
										echo "</div>";
										echo "<div style='width:20%;float:left;font-size:15px'>";
										echo "		<a style='color:black' href='Award.php?Issue=".$row["Issue"]."&tab=Award'>".$row["Year"]."</a>";
										echo "</div>";
										echo "<div style='width:20%;float:left;font-size:15px'>";
										echo "		<a style='color:black' href='Award.php?Issue=".$row["Issue"]."&tab=Award'>".$row["Title"]."<br>".$row["TitleEng"]."</a>";
										echo "</div>";
										echo "<div style='clear: both;'></div>"; // 清除浮動
										echo "</li>";
									}
									
								}
							}
						?>
					</ul>
					</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>

	
	<?php include_once('footer.php'); ?>
	<script src="js/bootstrap.js"></script>
</body>

</html>