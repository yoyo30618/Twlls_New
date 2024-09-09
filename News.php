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
				<text style="font-size:40px;">最新消息</text>
			</div>
		</div>
	</div>
	<br>
	<div class="container tabs" style="color:#418765">
		<div class="tab <?php echo $tab === 'activity' ? 'active' : ''; ?>" onclick="location.href='?tab=activity'">活動消息</div>
		<div class="tab <?php echo $tab === 'seminar' ? 'active' : ''; ?>" onclick="location.href='?tab=seminar'">學術研討會</div>
		<div class="tab <?php echo $tab === 'publication' ? 'active' : ''; ?>" onclick="location.href='?tab=publication'">出版資訊</div>
	</div>
	<div class="container ">
		<div class="video-bottom-grids1">
			<div class="col-md-12 video-bottom-grid">
				
					<div class="video-bottom-grid1-before" style="">
					<?php if($tab==="activity") echo "<img src='images/NewsBanner-event.jpg' alt=' ' class='img-responsive content' style='height:130px; object-fit: cover; width: 100%;'/>";?>
					<?php if($tab==="seminar") echo "<img src='images/NewsBanner-conference.jpg' alt=' ' class='img-responsive content' style='height:130px; object-fit: cover; width: 100%;'/>";?>
					<?php if($tab==="publication") echo "<img src='images/NewsBanner-publications.jpg' alt=' ' class='img-responsive content' style='height:130px; object-fit: cover; width: 100%;'/>";?>
						<div style="position: absolute; bottom: 0; left: 0; width: 60%; font-size: 25px; padding: 5px 15px; color: white; ">
							<p>活動消息</p>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="video-bottom-grid1" >
					<ul class="list" style="font-size: 12pt;">
						<?php
							if($tab==="activity") $sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='活動消息'  ORDER BY OrderIndex DESC";
							if($tab==="seminar") $sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='學術研討會' ORDER BY OrderIndex DESC";
							if($tab==="publication") $sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='出版資訊' ORDER BY OrderIndex DESC";
							$result = $conn_1->query($sql);
							if ($result->num_rows > 0) {
								while ($row = mysqli_fetch_array($result)) {
									echo "<li style='padding:5px 15px;'>";
									echo "<div style='width:10%;float:left;font-size:15px'>";
									echo "		<a style='color:black'>".$row["DateTime"]."</a>";
									echo "</div>";
									echo "<div style='width:80%;float:left;font-size:15px'>";
									if($row["Mode"]=="File")
										echo "		<a style='color:black' href='Attachment/News/".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a>";
									else if($row["Mode"]=="Page")
										echo "		<a style='color:black' href='NewsMasterPage.php?_ID=".$row['_ID']."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a>";
									else if($row["Mode"]=="Link")
                                		echo "		<a style='color:black' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a>";
									echo "</div>";
									echo "<div style='width:10%;float:right;font-size:10px'>";
									if($row["Mode"]=="File")
										echo "　　　<a href='Attachment/News/".$row["url"]."' class='custom-button'>more...</a>";
									else if($row["Mode"]=="Page")
										echo "　　　<a href='NewsMasterPage.php?_ID=".$row['_ID']."' class='custom-button'>more...</a>";
									else if($row["Mode"]=="Link")
										echo "　　　<a href='".$row["url"]."' class='custom-button'>more...</a>";
                                
									echo "</div>";
									echo "<div style='clear: both;'></div>"; // 清除浮動
									echo "</li>";
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