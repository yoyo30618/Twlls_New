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
                <a href="Conference.php" style="color:#6AA447">回到研討會▶</a>
                <div style="background-color:white;margin-top:10px;padding:20px">
                    <?php 
                    $sqlMeetingInfo = "SELECT * FROM `relatedlinks` WHERE `Notice`='研討會' and `Link`='".$_GET['sessions']."' and `IsUsed`=1 ORDER BY `OrderIndex` DESC";
                    $resulMeetingInfo = $conn_1->query($sqlMeetingInfo);
                    if ($resulMeetingInfo->num_rows > 0) {
                        while ($rowMeetingInfo = mysqli_fetch_array($resulMeetingInfo)) {
                            echo "<table>";
                            echo "    <tr style='border-bottom:3px solid #418765;font-size:20px'>";
                            echo "        <td style='padding:10px;color:#70524A;'>";
                            echo $rowMeetingInfo['Item'];
                            echo $rowMeetingInfo['Function'];
                            echo "<br>";
                            echo $rowMeetingInfo['TitleEng'];
                            echo "        </td>";
                            echo "    </tr>";
                            echo "    <tr>";
                            echo "        <td style='padding:10px;'>";
                            echo "            <button style='background-color:#418765;color:#fff;border-radius:5px;border:none;' onclick='window.open(\"".$rowMeetingInfo['MeetingURL']."\");'>前往會議網站</button>";
                            echo "        </td>";
                            echo "    </tr>";
                            echo "</table>";
							$filePath = "Conference/" . $Issue . ".txt";
							if (file_exists($filePath)) {
								include_once($filePath);
							} else {
								echo "未建立該屆研討會資訊";
							}
                            break;
                        }
                    }
                    ?>
                    
                </div>
            </div>
			<div class="col-md-4 video-bottom-grid">
                <?php
                    $sqltitle = "SELECT  DIStinct `Function` FROM `relatedlinks` WHERE `Notice`='研討會' AND `IsUsed`=1  ORDER BY `Function` DESC";
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
                            $itemsql = "SELECT * FROM `relatedlinks` WHERE `Notice`='研討會' AND `IsUsed`=1 AND Function='".$rowtitle['Function']."' ORDER BY `OrderIndex` DESC";
                            $itemresult = $conn_1->query($itemsql);
                            while ($itemrow = mysqli_fetch_array($itemresult)) {
                                echo "<tr>";
                                echo "  <td style='width:1%;border-left: 4px solid ".$titlecolor.";'></td>";//左邊綠線的空格
                                echo "  <td style='width:16%;line-height:1.5em;'><a style='color:#70524A;' href='ConferenceMasterPage.php?sessions=".$itemrow['Link']."'>".$itemrow['Item']."</a></td>";
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