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
	<style>
	</style>
	<script type="text/javascript" src="js/jquery.marquee.js"></script>
	<script>
		$('.marquee').marquee({ pauseOnHover: true });
	</script>
</head>
<?php include_once "Conn_SQL.php"; ?>
<body class="AllBODY">
	<?php include_once('Top.php');?>
	<?php include_once('banner.php');?>
	<?php include_once('IndexBanner.php');?>
	<?php include_once('marquee.php');?>
	
	<div class="AboutMe">
		<div class="AboutMe_Slide">
            <div class="AboutMe_Slide_Content">
                <div class="AboutMe_Slide_Back"></div>
				<div class="AboutMe_Slide_Image" style="background-image: url('images/2.jpg')"></div>
                <div class="AboutMe_Slide_Text">
					<img src="images/icons/taiwan.png" style="width:12%;height:12%"/><br>
                    <text style="font-size:28px;color:#418765">關於台灣語文學會</text>　
					<a href="Member.php" style="color:#6AA447">歡迎加入會員▶</a><br><br>
                    <p>「台灣語文學會」最早於1990年開始，由張裕宏教授、董忠司教授與洪惟仁教授展開籌備。1991年，委由董忠司教授草擬學會章程草案。之後陸續邀集周純一教授、陳恒嘉教授等討論草案內容，並積極聯絡各大學、研究單位的語文及相關科目的學者，募集發起人。</p>
					<br>
					<button style="background-color:#418765;color:#fff;border-radius:10px;border:none;" onclick="window.location.href='Introduction.php';">「台灣語文學會」成立經過</button>
                </div>
            </div>
        </div>
	</div>
	<div class="banner-bottom">
		<div class="container">
			<div class="video-bottom-grids">
				<div>
					<p style="color:#fff;font-size:25px">最新消息　<a href="News.php" style="color:#F7FBCF;font-size:15px">more...</a></p>
				</div>
				<div class="video-bottom-grids1">
					<div class="col-md-4 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before">
								<img src="images/frontpage-news-activity.jpg" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
								</div>
								<div style="width:60%;float:left;font-size:25px;padding:5px 15px;">
									<p style="color:#52403C">活動消息</p></div>
								<div style="width:40%;float:right; padding:5px 15px;color:#52403C;">
									<a href="News.php?tab=activity" style="color:#52403C">全部活動消息▶</a>
								</div>
							</div>
							<div style="clear:both;"></div>
							<ul class="list" style="font-size: 12pt;">
								<?php
									$sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='活動消息' ORDER BY OrderIndex DESC LIMIT 3";
									$result = $conn_1->query($sql);
									if ($result->num_rows > 0) {
										while ($row = mysqli_fetch_array($result)) {
											echo "<li style='min-height: 110px; padding:5px 15px;'>";
											echo "<div style='width:70%;float:left;font-size:15px'>";
											if($row["Mode"]=="File")
												echo "		<a style='color:black' href='Attachment/News/".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a>";
											else if($row["Mode"]=="Page")
												echo "		<a style='color:black' href='NewsMasterPage.php?_ID=".$row['_ID']."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a>";
											else if($row["Mode"]=="Link")
												echo "		<a style='color:black' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a>";
											echo "</div>";
											echo "<div style='width:30%;float:right;font-size:10px'>";
											if($row["Mode"]=="File")
												echo "　　　<a href='Attachment/News/".$row["url"]."' class='custom-button'>more...</a>";
											else if($row["Mode"]=="Page")
												echo "　　　<a href='NewsMasterPage.php?_ID=".$row['_ID']."' class='custom-button'>more...</a>";
											else if($row["Mode"]=="Link")
												echo "　　　<a href='".$row["url"]."' class='custom-button'>more...</a>";
											echo "</div>";
											echo "</li>";
										}
										 
									}
								?>
							</ul>
						</div>
					</div>
					<div class="col-md-4 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before before">
								<img src="images/frontpage-news-conference.jpg" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
								</div>
								<div style="width:60%;float:left;font-size:25px;padding:5px 15px;">
                                    <p style="color:#52403C">學術研討會</p></div>
                                <div style="width:40%;float:right; padding:5px 15px;color:#52403C;">
                                    <a href="News.php?tab=seminar" style="color:#52403C">全部學術研討會▶</a>
								</div>
                            	<div style="clear:both;"></div>
							</div>
							<ul class="list" style="font-size: 12pt;">
								<?php
									$sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='學術研討會' ORDER BY OrderIndex LIMIT 3";
									$result = $conn_1->query($sql);
									if ($result->num_rows > 0) {
										while ($row = mysqli_fetch_array($result)) {
                                            echo "<li style='min-height: 110px; padding:5px 15px;'>";
                                            echo "<div style='width:70%;float:left;font-size:15px'>";
                                            echo "     <a style='color:black' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a>";
                                            echo "</div>";
                                            echo "<div style='width:30%;float:right;font-size:10px'>";
                                            echo "　　　<a href='".$row["url"]."' class='custom-button'>more...</a>";
                                            echo "</div>";
                                            echo "</li>";
										}
									}
								?>
							</ul>
						</div>
					</div>
					<div class="col-md-4 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before before">
								<img src="images/frontpage-news-publish.jpg" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
								</div>
								<div style="width:60%;float:left;font-size:25px;padding:5px 15px;">
                                    <p style="color:#52403C">出版資訊</p></div>
                                <div style="width:40%;float:right; padding:5px 15px;color:#52403C;">
                                    <a href="News.php?tab=publication" style="color:#52403C">全部出版資訊▶</a>
                                </div>
							</div>
							<div style="clear:both;"></div>
							<ul class="list" style="font-size: 12pt;">
								<?php
									$sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='出版資訊' ORDER BY OrderIndex LIMIT 3";
									$result = $conn_1->query($sql);
									if ($result->num_rows > 0) {
										while ($row = mysqli_fetch_array($result)) {
                                            echo "<li style='min-height: 110px; padding:5px 15px;'>";
                                            echo "<div style='width:70%;float:left;font-size:15px'>";
                                            echo "     <a style='color:black' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a>";
                                            echo "</div>";
                                            echo "<div style='width:30%;float:right;font-size:10px'>";
                                            echo "　　　<a href='".$row["url"]."' class='custom-button'>more...</a>";
                                            echo "</div>";
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
			<br>
		</div>
	</div>
	<?php include_once('footer.php'); ?>
	<script src="js/bootstrap.js"></script>
</body>

</html>