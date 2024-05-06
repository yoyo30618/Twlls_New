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
		.rslides {
			background-color: rgba(192, 192, 192, 0.4);
			border-radius: 15px;
			padding: 10px;
		}
		#bgVideo {
			position: absolute;
			right: 0;
			bottom: 0;
			width: 100%;
			height: 100%;
			z-index: -1;
		}
		.AllBODY{
			background-image: url('images/AllBackGround.png'); 
			background-size: cover; 
			background-position: center;
		}
		.AboutMe {
            width: 70%;
            height: 500px;
            position: relative;
            margin: 5% auto;
            overflow: hidden;
        }
        .AboutMe_Slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: opacity 0.5s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .AboutMe_Slide_Content {
            position: relative;
            width: 100%;
            height: 100%;
        }
        .AboutMe_Slide_Text {
            background-color: white;
			padding: 2% 5% 2% 5%;
            border-top-left-radius: 90px;
            width: 45%;
            height: 70%;
            position: absolute;
            top: 30%;
            right: 10%;
            z-index: 5;
        }
        .AboutMe_Slide_Back {
			background-color: transparent; /* 將背景顏色設為透明 */
			border: 2px solid #418765; /* 設置綠色外框 */
			padding: 2% 5% 2% 5%;
            border-top-left-radius: 90px;
            width: 45%;
            height: 70%;
            position: absolute;
            top: 20%;
            right: 15%;
            z-index: 1;
        }
        .AboutMe_Slide_Image {
            width: 40%;
            height: 75%;
            border-top-left-radius: 90px;
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 5%;
            left: 10%;
            z-index: 3;
        }
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
                    <text style="font-size:30px">關於台灣語文學會</text>　　　　　<a href="">歡迎加入會員▶</a><br><br>
                    <p>「台灣語文學會」最早於1990年開始，由張裕宏教授、董忠司教授與洪惟仁教授展開籌備。1991年，委由董忠司教授草擬學會章程草案。之後陸續邀集周純一教授、陳恒嘉教授等討論草案內容，並積極聯絡各大學、研究單位的語文及相關科目的學者，募集發起人。</p>
                </div>
            </div>
        </div>
	</div>

















	<div class="banner-bottom">
		<div class="container">
			<div class="video-bottom-grids">
				<div class="video-bottom-grids1">
					<div class="col-md-4 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before">
								<img src="images/PIC1.jpg" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
									<p>活動消息</p>
								</div>
							</div>
							<ul class="list" style="font-size: 12pt;">
								<?php
									$sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='活動消息' ORDER BY OrderIndex LIMIT 3";
									$result = $conn_1->query($sql);
									if ($result->num_rows > 0) {
										while ($row = mysqli_fetch_array($result)) {
											echo "<li style='min-height: 110px;'><a style='color:black' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a></li>";
										}
										 
									}
								?>
							</ul>
							<div class="read-more">
								<a href="News.php">查看全部公告</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before before1">
								<img src="images/PIC2.png" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
									<p>學術研討會</p>
								</div>
							</div>
							<ul class="list" style="font-size: 12pt;">
								<?php
									$sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='學術研討會' ORDER BY OrderIndex LIMIT 3";
									$result = $conn_1->query($sql);
									if ($result->num_rows > 0) {
										while ($row = mysqli_fetch_array($result)) {
											echo "<li style='min-height: 110px;'><a style='color:black' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a></li>";
										}
									}
								?>
							</ul>
							<div class="read-more">
								<a href="News.php">查看全部公告</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 video-bottom-grid">
						<div class="video-bottom-grid1">
							<div class="video-bottom-grid1-before before1">
								<img src="images/PIC3.jpg" alt=" " class="img-responsive" />
								<div class="video-bottom-grid1-pos">
									<p>出版品</p>
								</div>
							</div>
							<ul class="list" style="font-size: 12pt;">
								<?php
									$sql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='出版品' ORDER BY OrderIndex LIMIT 3";
									$result = $conn_1->query($sql);
									if ($result->num_rows > 0) {
										while ($row = mysqli_fetch_array($result)) {
											echo "<li style='min-height: 110px;'><a style='color:black' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a></li>";
										}
									}
								?>
							</ul>
							<div class="read-more">
								<a href="News.php">查看全部公告</a>
							</div>
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