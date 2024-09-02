<!DOCTYPE HTML>
<html>
<head>
	<?php
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
	<div class="banner-bottom" style="background-image: url(images/frontpage-news-conference.jpg);">
		<div class="container">
			<div class="video-bottom-grids" style="color:white;text-align:center;height:150px; display:flex; align-items:center; justify-content:center;">
				<text style="font-size:40px;">學術研討會</text>
			</div>
		</div>
	</div>
	<div style="background-color:#418765;padding:10px;height:450px;">
        <div class="slider-container">
            <div class="slide active">
                <div class="slide-content">
                    <?php
                    $sqltitleconference = "SELECT * FROM `relatedlinks`  WHERE `Notice`='研討會' AND `IsUsed`='1' AND `Date`!='' ORDER BY `relatedlinks`.`Date` DESC";
                    $resulttitleconference = $conn_1->query($sqltitleconference);
                    if ($resulttitleconference->num_rows > 0) {
                        while ($rowtitle = mysqli_fetch_array($resulttitleconference)) {
                            echo "<div class='Conference-slide-image' style='background-image: url(\"images/Conference/".$rowtitle['Photo']."\");'></div>";
                            echo "<div class='Conference-slide-text'>";
                            echo "    <table style='width:100%;'>";
                            echo "        <tr>";
                            echo "            <td colspan='2' style='color:#3C7556;font-size:20px; padding: 8px;'>";
                            echo "                ".$rowtitle['Item']." ".$rowtitle['Function']."<br>".$rowtitle['Title'];
                            echo "            </td>";
                            echo "        </tr>";
                            echo "        <tr>";
                            echo "            <td style='color:#70524A;font-size:14px; padding: 8px;width:20%;'>";
                            echo "                <div class='bordered-div'>";
                            echo "                    Date<br>日期";
                            echo "                </div>";
                            echo "            </td>";
                            echo "            <td style='color:#70524A;font-size:18px; padding: 8px;width:80%;'>";
                            echo "                ".$rowtitle['Date'];
                            echo "            </td>";
                            echo "        </tr>";
                            echo "        <tr>";
                            echo "            <td style='color:#70524A;font-size:14px; padding: 8px;'>";
                            echo "                <div class='bordered-div'>";
                            echo "                    Place<br>地點";
                            echo "                </div>";
                            echo "            </td>";
                            echo "            <td style='color:#70524A;font-size:18px; padding: 8px;'>";
                            echo "                ".$rowtitle['Place'];
                            echo "            </td>";
                            echo "        </tr>";
                            echo "        <tr>";
                            echo "            <td style='color:#70524A;font-size:14px; padding: 8px;' colspan='2'>";
                            echo "                <button style='background-color:#70524A;color:#fff;border-radius:5px;border:none;' onclick='window.location.href=\"ConferenceMasterPage.php?sessions=".$rowtitle['Link']."\";'>詳細資訊</button>";
                            if($rowtitle['MeetingURL']=="")
                                echo "                <a href='ConferenceMasterPage.php?sessions=".$rowtitle['Link']."' style='color:#52403C'>會議主網站▶</a>";
                            else
                                echo "                <a href='".$rowtitle['MeetingURL']."' style='color:#52403C'>會議主網站▶</a>";
                            echo "            </td>";
                            echo "        </tr>";
                            echo "    </table>";
                            echo "</div>";
                            break;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
	<div class="AllBODY container ">
		<div class="video-bottom-grids1">
			<div class="col-md-12 video-bottom-grid">
                <!--台灣語言及其教學國際研討會-->
                <?php
                    $sqltitle = "SELECT  DIStinct `Function` FROM `relatedlinks` WHERE `Notice`='研討會' AND `IsUsed`=1  ORDER BY `Function` ASC";
                    $resulttitle = $conn_1->query($sqltitle);
                    if ($resulttitle->num_rows > 0) {
                        while ($rowtitle = mysqli_fetch_array($resulttitle)) {
                            $titlecolor="#3C7556";
                            $titlecsrc="icon-LOGO3.png";
                            if($rowtitle['Function']=="台灣語言及其教學國際研討會"){$titlecsrc="icon-LOGO3.png";$titlecolor="#3C7556";}
                            if($rowtitle['Function']=="台灣語言學一日大師/專題講座"){$titlecsrc="icon-LOGO4.png";$titlecolor="#6AA447";}
                            if($rowtitle['Function']=="青年學者台灣語言學術研討會"){$titlecsrc="icon-LOGO5.png";$titlecolor="#70524A";}
                            echo "<table style='width:100%'>";
                            echo "    <tr>";
                            echo "        <th colspan='12' style='color:".$titlecolor.";line-height:4em;font-size:20px;'><img src='images/".$titlecsrc."'/>".$rowtitle['Function']."</th>";
                            echo "    </tr>";
                            $sql = "SELECT * FROM `relatedlinks` WHERE `Notice`='研討會' AND `IsUsed`=1 AND Function='".$rowtitle['Function']."' ORDER BY `OrderIndex` DESC";
                            $result = $conn_1->query($sql);
                            $rowcnt=0;
                            if ($result->num_rows > 0) {
                                echo "<tr>";
                                echo "  <td style='width:1%;border-left: 3px solid ".$titlecolor.";'></td>";//左邊綠線的空格
                                while ($rows = mysqli_fetch_array($result)) {
                                    echo "  <td style='width:16%' class='dashed-border'>".$rows['Item']."</td>";
                                    echo "  <td style='width:8%' class='dashed-border'><a href='ConferenceMasterPage.php?sessions=".$rows['Link']."' class='coffee-button'>詳細資訊</a></td>";
                                    if($rows['MeetingURL']=="")
                                        echo "  <td style='width:8%' class='dashed-border'><a href='ConferenceMasterPage.php?sessions=".$rows['Link']."' target='_blank' style='color:#70524A;'>會議主網站▸</a></td>";
                                    else
                                        echo "  <td style='width:8%' class='dashed-border'><a href='".$rows['MeetingURL']."' target='_blank' style='color:#70524A;'>會議主網站▸</a></td>";
                                    
                                    echo "  <td style='width:1%'>　</td>";//分隔用空格
                                    $rowcnt++;
                                    if($rowcnt%3==0){
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "  <td style='width:1%;border-left: 3px solid ".$titlecolor.";'></td>";//左邊綠線的空格
                                    }
                                }
                            }
                            echo "</tr>";
                            echo "</table>";
                        }
                    }
                    
                ?>
                <!--青年學者台灣語言學術研討會-->
                <!--台灣語言學一日大師/專題講座-->
            </div>
			<div class="clearfix"> </div>
		</div>
		</div>

	
	<?php include_once('footer.php'); ?>
	<script src="js/bootstrap.js"></script>
</body>

</html>