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
	<div style="margin-top: 120px;"></div>
	<?php include_once('marquee.php');?>
	<div class="AllBODY container ">
		<div class="video-bottom-grids1" style="margin:10px">
            
			<div class="col-md-8 video-bottom-grid" style="margin-top:20px;">
                <a href="News.php" style="color:#6AA447">回到最新消息▶</a>
                <div style="background-color:white;margin-top:10px;padding:20px">
                    <?php 
                    if(isset($_GET['_ID']))
                        $News_ID=$_GET['_ID'];
                    else
                        $News_ID=1;
                    $sqlNewsConnent = "SELECT * FROM `news` WHERE `IsShow`=1 AND `_ID`='".$_ID."' ORDER BY `OrderIndex` DESC";
                    $resulNewsConnent = $conn_1->query($sqlNewsConnent);
                    $filePath="";
                    if ($resulNewsConnent->num_rows > 0) {
                        while ($rowNewsConnent = mysqli_fetch_array($resulNewsConnent)) {
                            $filePath=$rowNewsConnent['url'];
                        }
                    }
                    if (file_exists($filePath)) {
                        include_once($filePath);
                    } else {
                        echo "未正確設定消息檔案";
                    }
                    ?>
                    
                </div>
            </div>
			<div class="col-md-4 video-bottom-grid">
                <!--台灣語言及其教學國際研討會-->
                <?php
                    $sqlNewsInfo = "SELECT distinct `Classification` FROM `news` WHERE `IsShow`=1 ORDER BY `OrderIndex` DESC";
                    $resulNewsInfo = $conn_1->query($sqlNewsInfo);
                    if ($resulNewsInfo->num_rows > 0) {
                        while ($rowNewsInfo = mysqli_fetch_array($resulNewsInfo)) {
                            $titlecolor="#3C7556";
                            $titlecsrc="icon-LOGO3.png";
                            if($rowNewsInfo['Classification']=="活動消息"){$titlecsrc="icon-LOGO3.png";$titlecolor="#3C7556";}
                            if($rowNewsInfo['Classification']=="學術研討會"){$titlecsrc="icon-LOGO4.png";$titlecolor="#6AA447";}
                            if($rowNewsInfo['Classification']=="出版資訊"){$titlecsrc="icon-LOGO5.png";$titlecolor="#70524A";}
                            echo "<table style='width:100%'>";
                            echo "    <tr>";
                            echo "        <th colspan='12' style='color:".$titlecolor.";line-height:4em;font-size:20px;'><img src='images/".$titlecsrc."'/>".$rowNewsInfo['Classification']."</th>";
                            echo "    </tr>";
                            $itemsql = "SELECT * FROM `news` WHERE `IsShow`=1 AND `Classification`='".$rowNewsInfo['Classification']."'  ORDER BY `OrderIndex` DESC LIMIT 0 , 5";
                            $itemresult = $conn_1->query($itemsql);
                            while ($itemrow = mysqli_fetch_array($itemresult)) {
                                echo "<tr>";
                                echo "  <td style='width:1%;border-left: 4px solid ".$titlecolor.";'></td>";//左邊綠線的空格
								if($itemrow["Mode"]=="File")
                                    echo "  <td style='width:16%;line-height:1.5em;'><a style='color:#70524A;' href='Attachment/News/".$itemrow["url"]."'>".$itemrow['Title']."</a><br></td>";
                                else if($itemrow["Mode"]=="Page")
                                    echo "  <td style='width:16%;line-height:1.5em;'><a style='color:#70524A;' href='NewsMasterPage.php?_ID=".$itemrow['_ID']."'>".$itemrow['Title']."</a><br></td>";
                                else if($itemrow["Mode"]=="Link")
                                    echo "  <td style='width:16%;line-height:1.5em;'><a style='color:#70524A;' href='".$itemrow['url']."'>".$itemrow['Title']."</a><br></td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
                    }
                    
                ?>
            </div>
			<div class="clearfix"> </div>
		</div>
		</div>
	<?php include_once('footer.php'); ?>
	<script src="js/bootstrap.js"></script>
</body>

</html>