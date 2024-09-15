<!DOCTYPE HTML>
<html>
<head>
	<?php
	// 獲取當前選擇的標籤，預設為活動消息
	$tab = isset($_GET['tab']) ? $_GET['tab'] : 'LatestIssue';
	$Issue = isset($_GET['Issue']) ? $_GET['Issue'] : '';
	$Session = isset($_GET['Session']) ? $_GET['Session'] : '';
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
		<img src="images/Journal-Banner.jpg"/>
	<div style="background-color:#70524A">
		<div class="container" style="color:white;line-height:3em;font-size:20px;">
			<?php
				$JournalAwordsql = "SELECT * FROM `relatedlinks` WHERE `Notice`='期刊獲獎資訊'  ORDER BY OrderIndex LIMIT 3";
				if($Session!=''){
					$JournalAwordsql = "SELECT * FROM `relatedlinks` WHERE `Notice`='期刊獲獎資訊' AND `Item`='".$Session."' ORDER BY OrderIndex";
				}
				$JournalAwordresult = $conn_1->query($JournalAwordsql);
				if ($JournalAwordresult->num_rows > 0) {
					while ($row = mysqli_fetch_array($JournalAwordresult)) {
						$Aword = $row['Title'];
						$Aword = preg_replace('/"/', ' <text style=\'color:#FDFFA3\'>', $Aword, 1);
						$Aword = preg_replace('/"/', '</text>', $Aword, 1);
						echo "<img src='images/icon-賀.png'/>　".$Aword."<br>";
					}
				}
			?>
			
		</div>
	</div>
	<br>
	<div class="container tabs" style="color:#418765">
		<div class="tab <?php echo $tab === 'LatestIssue' ? 'active' : ''; ?>" onclick="location.href='?tab=LatestIssue'">最新期數</div>
		<div class="tab <?php echo $tab === 'Inspiration' ? 'active' : ''; ?>" onclick="location.href='?tab=Inspiration'">徵稿啟事</div>
		<div class="tab <?php echo $tab === 'JournalIntroduction' ? 'active' : ''; ?>" onclick="location.href='?tab=JournalIntroduction'">期刊簡介</div>
	</div>
	<div class="container ">
		<div class="video-bottom-grids1" style="margin-top:20px;">
			<div class="col-md-12 video-bottom-grid">
				
				<?php
				if($tab === 'LatestIssue'){
				?>
				<div style="font-size:25px;text-align:center;width:100%;color:#70524A;margin-bottom:20px;" >最新期數</div>
				<div class="col-md-3">
					<?php
						$JournalListsql = "SELECT `JournalSession` , `JournalIssue` FROM `journalcontent` WHERE 1 GROUP BY `JournalSession` , `JournalIssue` ORDER BY `OrderIndex` DESC";
						$JournalListresult = $conn_1->query($JournalListsql);
						$LastSession="";
						$First=false;
						if ($JournalListresult->num_rows > 0) {
							while ($row = mysqli_fetch_array($JournalListresult)) {
								if($LastSession!=$row['JournalSession']){
									if($First) echo "</div>";
									echo "<div class='JournalListButton'>";
									echo "<a style='font-size:20px;color:#55463D'>".$row['JournalSession']."</a>　　　<a style='color:#55463D' href='Journal.php?Session=".$row['JournalSession']."&Issue=".$row['JournalIssue']."'>".$row['JournalIssue']."</a>";
									$LastSession=$row['JournalSession'];
									$First=true;
								}
								else{
									echo " | <a style='color:#55463D' href='Journal.php?Session=".$row['JournalSession']."&Issue=".$row['JournalIssue']."'>".$row['JournalIssue']."</a>";
									echo "</div>";
									$First=false;
								}
							}
							if($First) echo "</div>";
						}
						
					?>
				</div>
				<div class="col-md-9">
					<?php
						$JournalInfosql = "SELECT `JournalSession` , `JournalIssue`, `JournalDate` FROM `journalcontent` WHERE 1 GROUP BY `JournalSession` , `JournalIssue`, `JournalDate` ORDER BY `OrderIndex` DESC";
						$JournalTextsql =" SELECT * FROM `journalcontent` WHERE  `JournalSession`=( SELECT `JournalSession` FROM `journalcontent` WHERE 1 GROUP BY `JournalSession`,`JournalIssue` ORDER BY `OrderIndex` DESC  LIMIT 1)AND  `JournalIssue`=( SELECT `JournalIssue` FROM `journalcontent` WHERE 1 GROUP BY `JournalSession`,`JournalIssue` ORDER BY `OrderIndex` DESC  LIMIT 1) ORDER BY OrderIndex DESC";
						$JournalMembersql="SELECT `Position`, GROUP_CONCAT(CONCAT(`Name`, ' ', `Unit`) SEPARATOR '<br>') AS People FROM `journalinfo` GROUP BY `Position`;";
						if($Session!='' && $Issue!=''){
							$JournalInfosql = "SELECT `JournalSession` , `JournalIssue`, `JournalDate` FROM `journalcontent` WHERE 1 AND `JournalSession`='".$Session."' AND `JournalIssue`='".$Issue."' GROUP BY `JournalSession` , `JournalIssue`, `JournalDate` ORDER BY `OrderIndex` DESC";
							//$JournalTextsql = "WITH TEMP AS (SELECT `JournalSession`, `JournalIssue` FROM `journalcontent` WHERE 1 AND `JournalSession`='".$Session."' AND `JournalIssue`='".$Issue."' GROUP BY `JournalSession`, `JournalIssue`ORDER BY `OrderIndex` DESC LIMIT 1 )SELECT * FROM `journalcontent` WHERE `JournalSession` = (SELECT `JournalSession` FROM TEMP) AND `JournalIssue` = (SELECT `JournalIssue` FROM TEMP) ORDER BY `OrderIndex` DESC";
							$JournalTextsql =" SELECT *  FROM `journalcontent`  WHERE `JournalSession` = '$Session'  	    AND `JournalIssue` = '$Issue' ORDER BY `OrderIndex` DESC";
							$JournalMembersql="SELECT `Position`, GROUP_CONCAT(CONCAT(`Name`, ' ', `Unit`) SEPARATOR '<br>') AS People FROM `journalinfo` WHERE 1 AND `JournalSession`='".$Session."' AND `JournalIssue`='".$Issue."' GROUP BY `Position`;";
						}
						$JournalInforesult = $conn_1->query($JournalInfosql);
						while ($row = mysqli_fetch_array($JournalInforesult)) {
							echo "<a style='color:#3C7556;font-size:25px;'>".$row['JournalSession'].$row['JournalIssue']."</a>";
							echo "<a style='color:#70524A;font-size:20px;'>　".$row['JournalDate']."出刊</a><br>";
							echo "<a style='color:#70524A;font-size:20px;border-left: 4px solid #3C7556;'>本期內容</a><br>";
							break;
						}
						echo "<table class='Journaltable'>";
						echo "	<tr class='Journaltr'>";
						echo "		<th class='Journalth' style='width:23%;'>作者</th>";
						echo "		<th class='Journalth' style='width:63%;'>篇名</th>";
						echo "		<th class='Journalth' style='width:7%;'>頁次</th>";
						echo "		<th class='Journalth' style='width:7%;'>全文</th>";
						echo "	</tr>";
						$JournalTextresult = $conn_1->query($JournalTextsql);
						while ($row = mysqli_fetch_array($JournalTextresult)) {
						echo "	<tr class='Journaltr'>";
						echo "		<td class='Journaltd'>".$row['Author']."<br>".$row['AuthorEng']."</td>";
						echo "		<td class='Journaltd'>".$row['Title']."</td>";
						echo "		<td class='Journaltd'>".$row['Page']."</td>";
						echo "		<td class='Journaltd'>";
						if($row['FileLink']!=''){
							echo "			<a href='Attachment/Journal/".$row['FileLink']."' download>";
							echo "				<img  alt='下載PDF'class='download-icon'>";
							echo "			</a>";
						}
						echo "      </td>";
						echo "	</tr>";
						}
						echo "</table>";
						echo "<a style='color:#70524A;font-size:20px;border-left: 4px solid #3C7556;'>編輯委員會名單</a><br>";
						echo "<table class='Journaltable'>";
						
						$JournalMemberResult = $conn_1->query($JournalMembersql);
						while ($row = mysqli_fetch_array($JournalMemberResult)) {
						echo "	<tr >";
						echo "		<td style='vertical-align: top;font-size:20px;width:30%'>".$row['Position']."</td>";
						echo "		<td style='vertical-align: top;font-size:15px;'>".$row['People']."</td>";
						echo "	</tr>";
						}
						echo "</table>";


					?>
				</div>
				<?php
				}
				?>
				<?php
				if($tab === 'Inspiration'){
				?>
					<div style="line-height:2em;">
						<table style="vertical-align:top;">
							<tr style="vertical-align:top;">
								<td colspan="2" style="font-size:25px;text-align:center;width:100%;color:#70524A;">徵稿啟事</td>
							</tr>
							<tr style="vertical-align:top;">
								<td>一、</td>
								<td>本刊刊登與台灣語言（包括閩南語、客語、南島語、華語或在台灣之其他語言）相關之學術論文，與語言相關之文字、文學、文化等論文或書評，亦在所歡迎。</td>
							</tr>
							<tr style="vertical-align:top;">
								<td>二、</td>
								<td>本刊每年發行一卷兩期，分別於四月及十月出刊。</td>
							</tr>
							<tr style="vertical-align:top;">
								<td>三、</td>
								<td>來稿隨到隨審，來稿請另檔註明作者中英文姓名、服務機構、職稱、通訊地址、電子郵件信箱、電話或傳真號碼，並請註明論文所屬主要次領域。其為會議論文或計畫成果者亦請註明。</td>
							</tr>
							<tr style="vertical-align:top;">
								<td>四、</td>
								<td>
							        來稿以不超過兩萬字為原則，並應符合一般學術論文規範與下列規定。<br>
							        ˙來稿請附中英文篇名、中英文摘要（中文摘要限五百字以內；英文摘要以一頁為限）、中英文關鍵詞（五個為限）。<br>
							        ˙來稿時格式可依照語言學論文一般格式，稿件錄取之後將請作者依照本刊格式說明修改格式。本刊論文採雙盲（double-blind）審查，論文撰寫請注意不要顯示作者身份，投稿時請略去作者姓名，服務機關，謝詞等資料，審查通過之後再加入。論文行文中若有顯示作者身份疑慮者，編輯於送審時將在不影響文意情況下以XXX掩蓋，或請作者修改內文。<br>
							        ˙來稿請以電腦檔MS-Word製作，並另製作一PDF檔。請利用Word檔「增加行號」功能（【版面配置】(版面設定)>【行號】>【連續】，在內文每行前面增加行號，以便評審評論時易於定位。<br>
							        ˙來稿以未曾正式出版者為限，請遵守學術倫理，勿一稿同時多投。曾發表於網路期刊、網路專書及會後論文集者，視同已出版。論文中引用他人之圖、表、數據等資料，若牽涉到版權問題，請作者負責處理。
								</td>
							</tr>
							<tr style="vertical-align:top;">
								<td>五、</td>
								<td>
									本刊使用之語言及字型如下：<br>
									（1）語言—稿件得以中文、英文或台文撰寫。<br>
									（2）字型—中文：新細明體，英文：Times New Roman。<br>
									特殊符號例如音標請盡量利用Times New Roman (Unicode 16進位) 字集所含之符號（在Word裡【插入】>【符號】>【其他符號】>【字型 Times New Roman】, 【從: Unicode 十六進位】），如有必要利用其他字型，請於投稿時附上所使用之字集（應與新細明體及 Times New Roman 相容）。
								</td>
							</tr>
							<tr style="vertical-align:top;">
								<td>六、</td>
								<td>本刊稿件出版後，將致贈作者該期紙本刊物兩冊及編輯排版完成之該文PDF檔一份。</td>
							</tr>
							<tr style="vertical-align:top;">
								<td>七、</td>
								<td>
									來稿請提交Word與PDF檔各一份，以及包含作者資料的Word檔，寄至本刊專屬信箱：
									<a href="mailto:jtlljournal@gmail.com" target="_blank" style="color:#81BB9F">jtlljournal@gmail.com</a>
								</td>
							</tr>
							<tr style="vertical-align:top;">
								<td>八、</td>
								<td>其他未盡事宜，依一般學術期刊之慣例處理。</td>
							</tr>
						</table>
						<a href="Documents/callForPaper_notice20170801.pdf"  target="_blank" style="color:#558D33;">下載徵稿啟事 ▶</a><br>
						<a href="Documents/callForPaper_format_20230414.pdf" target="_blank" style="color:#558D33;">徵稿格式下載 ▶</a>
					</div>
				<?php
				}
				?>
				
				<?php
				if($tab === 'JournalIntroduction'){
				?>
					<div style="line-height:2em;">
						<table style="vertical-align:top;">
							<tr style="vertical-align:top;">
								<td colspan="2" style="font-size:25px;text-align:center;width:100%;color:#70524A;">期刊簡介</td>
							</tr>
							<tr style="vertical-align:top;">
								<td>
								<text style="font-size:20px;"><b>本刊緣起</b></text><br>
       							　《臺灣語文研究》之發刊緣起，始於2001年至2002年，由第五屆台灣語文學會理事會通過提案，並且為表達對創會會長曹逢甫教授於本會領導之感佩，以及推廣台灣語文研究之功勞，決議以《慶祝曹逢甫教授六十華誕論文集》作為《臺灣語文研究》之創刊號，於2003年1月正式出版，其意義與目的不僅在於創辦一本高水準的學術性刊物，同時也是第一本台灣語言文學研究的學術期刊。因此，《臺灣語文研究》的創刊是標示著台灣語文的研究更加學術化、更加嚴謹，使研究道路更為開闊之里程碑。<br>
								<text style="font-size:20px;"><b>本刊宗旨</b></text><br>
       							　《臺灣語文研究》的宗旨與刊登論文的領域範圍主要分為三類：一、與台灣語言（包括閩南語、客語、南島語、華語或在台灣之其他語言）相關之學術論文；二、論文主題以語言學研究為主；三、與語言相關之文學、文字、文化等主題之論文。<br>
								<text style="font-size:20px;"><b>出版頻率</b></text><br>
       							　《臺灣語文研究》期刊第一卷至第二卷之出版時間分別為2003年與2004年，每卷一期，共二卷，平均每卷收錄12至13篇論文；第三卷、第四卷亦為每卷一期，共二卷，分別於2009年1月及7月出版，平均每卷收錄9篇論文；第五卷開始，改為每年發行一卷兩期，分別於三月及九月出刊，平均每期收錄5至6篇論文。本刊出刊時間於2016年開始，更改為於每年的四月與十月出刊。<br>
								<text style="font-size:20px;"><b>本刊成果</b></text><br>
       							　《臺灣語文研究》榮獲國家圖書館『臺灣學術資源影響力』之獎項：<br>
								111年　即時傳播獎：語言學學門期刊第一名<br>
								109年　即時傳播獎：語言學學門期刊第二名<br>
								108年　知識影響力獎：語言學學門期刊第三名<br>
       							　《臺灣語文研究》自第七卷（2012）起獲科技部人文社會科學研究中心收錄為「人文學核心期刊（THCI core）」，復於2016年「期刊評比收錄新制」獲選為THCI第二級期刊（回溯至第八卷2013年起），顯示本刊在臺灣語言和語文研究領域的出版品質獲得學界肯定。<br>
								<text style="font-size:20px;"><b>購買資訊</b></text><br>
								本刊自第十六卷起之實體期刊購買請洽本會<a href="http://www.twlls.org.tw" target="_blank" style="color:#81BB9F">http://www.twlls.org.tw/</a>，聯絡方式：E-MAIL：<a href="mailto:contact.tlls@gmail.com" target="_blank" style="color:#81BB9F">contact.tlls@gmail.com</a>。<br>
								第十五卷（含）前之實體期刊由萬卷樓圖書股份有限公司獨家出版發行，欲購買請洽萬卷樓圖書公司（<a href="http://www.wanjuan.com.tw/" target="_blank" style="color:#81BB9F">http://www.wanjuan.com.tw/</a>）。<br>
								</td>
							</tr>
						</table>
					</div>
				<?php
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