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
		.AllBODY {
			background-image: url('images/bg.jpg'); 
			background-size: auto; 
			background-position: center;
			background-repeat: repeat; /* 讓背景圖片重複 */
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
		.timeline {
              position: relative;
              margin: auto;
              padding: 10px 0;
          }
          .timeline::after {
              content: '';
              position: absolute;
              left: 20%;
              height: 100%;
              border-left: 2px solid green;
              transform: translateX(calc(20% + 5px));
              top: 0; /* 確保線條從頂部開始 */
          }
          .event {
              display: flex;
              align-items: center;
              margin: 20px 0;
              position: relative;
          }
          .event .date {
              position: absolute;
              left: 10%; /* 調整日期位置 */
              padding: 5px;
              text-align: right;
			  vertical-align: top;
			  top:0;
			  color:#418765;
          }
          .event .dot {
              position: absolute;
              left: 20%;
              background-color: green;
              border-radius: 50%;
              width: 12px;
              height: 12px;
              top: 10%; /* 將圓點放在線條上 */
          }
          .event .description {
              padding: 10px;
              margin-left: 25%;
			  vertical-align: top;
			  top:0;
			  border-bottom:2px solid #81BB9F;
          }
          .timelinetitle {
             color:#52403C;
			 font-size: 20px;
			 font-weight: bold;
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
	<?php include_once('AboutBanner.php');?>
	<?php include_once('marquee.php');?>
	<div style="width: 70%;position: relative;margin: 5% auto;overflow: hidden;">
	<div class="timeline">
          <div class="event">
              <div class="date">1991年<br>04月13日</div>
              <div class="dot"></div>
              <div class="description"><div class="timelinetitle">第一次發起人會假國家政策研究中心會議室正式召開</div><br>
                會中討論了章程草案，填寫發起人名冊，選出籌備委員共九名：張裕宏、洪惟仁、董忠司、姚榮松、曹逢甫、江永進、陳恒嘉、羅肇錦、趙順文（依得票數順序），接著立即召開第一次籌備會議，討論進一步之籌備工作、決定未來一年半的工作計劃：<br>
                1. 1991年底以前完成音標研議。<br>
                2. 1992年底以前完成台語常用漢字表。籌備經費由台語社負擔。籌備伊始，台語社即慨捐一萬元，以為支應。<br>
              </div>
          </div>
          <div class="event">
              <div class="date">1991年<br>05月05日</div>
              <div class="dot"></div>
              <div class="description"><div class="timelinetitle">召開第二次籌備會議</div></div>
          </div>
          <div class="event">
              <div class="date">1991年<br>05月08日</div>
              <div class="dot"></div>
              <div class="description"><div class="timelinetitle">獲准正式籌備</div><br>由董忠司教授與洪惟仁教授遞送申請書前往內政部申請立案，並於 5月31日獲准正式籌備。</div>
          </div>
          <div class="event">
              <div class="date">1991年<br>06月23日</div>
              <div class="dot"></div>
              <div class="description"><div class="timelinetitle">舉行第二次發起人會</div><br>在台北市ＹＭＣＡ舉行第二次發起人會，並依法在內政部社會司派員監督下舉行發起人會議，此為第一次正式之發起人會。會中討論章程草案，選出十一名籌備委員為：曹逢甫、江永進、姚榮松、董忠司、洪惟仁、羅肇錦、陳恒嘉、黃宣範、龔煌城、鍾榮富、張文彬（依得票順序）。並選出曹逢甫為主任委員。</div>
          </div>
          <div class="event">
              <div class="date">1991年<br>07月20日</div>
              <div class="dot"></div>
              <div class="description"><div class="timelinetitle">召開第二次籌備會議</div><br>在國立臺灣師範大學召開第二次籌備會議，會中決定 8月17日召開「台灣語文學會」成立大會。</div>
          </div>
          <div class="event">
              <div class="date">1991年<br>08月17日</div>
              <div class="dot"></div>
              <div class="description"><div class="timelinetitle">「台灣語文學會」正式成立。</div></div>
          </div>
      </div>
	</div>
	<div style="background-color:#418765;">
		<div class="container" style="padding-top: 5%;padding-left: 10%; padding-right: 10%;padding-bottom:5%">
			<div style="float:left;width:15%;text-align:right;color:#F7FBCF;padding-right:20px;font-size:20pt">組織成員</div>
			<div style="float:right;width:85%;border-top-left-radius: 50px;background-color:#fff">
				<div class="panel-group"style="margin-right:5%;margin-left:5%;padding-top: 5%;" id="accordion" role="tablist" aria-multiselectable="true">
					<?php
						$sql = "SELECT * FROM `member` ORDER BY OrderIndex DESC";
						$result = $conn_1->query($sql);
						if ($result->num_rows > 0) {
							while ($row = mysqli_fetch_array($result)) {
								echo "<div class='panel panel-default'>";
								echo "	<div class='panel-heading' role='tab' id='headingOne' style='border:none;'>";
								echo "		<h4 class='panel-title'>";
								echo "			<a class='pa_italic collapsed' role='button' data-toggle='collapse'";
								echo "				data-parent='#accordion' href='#collapse".$row["Term"]."' aria-expanded='true'";
								echo "				aria-controls='collapse".$row["Term"]."'>";
								echo "				<span class='glyphicon glyphicon-plus' aria-hidden='true'></span><i";
								echo "					class='glyphicon glyphicon-minus'";
								echo "					aria-hidden='true'></i><text style='color:#418765;font-size:25px;'>第".$row["Term"]."屆理監事會</text>　　[".$row["Sessions"]."]";
								echo "			</a>";
								echo "		</h4>";
								echo "	</div>";
								echo "	<div id='collapse".$row["Term"]."' class='panel-collapse collapse' role='tabpanel'";
								echo "		aria-labelledby='headingOne' style='height: 0px;'>";
								echo "		<div class='panel-body'>";
								echo "			<table class='table table-bordered' style='border:2px solid #3A6B53;border-collapse:collapse;'>";
													for($i=1;$i<=15;$i++){
														if($row["Title".$i]!=""){
															if($i==1){
																echo "				<tr>";
																echo "					<td width='35%' style='border:1px solid #3A6B53;border-collapse:collapse;color:white;background-color:#418765;'>".$row["Title".$i]."</td>";
																echo "					<td style='border:1px solid #3A6B53;border-collapse:collapse;color:#000;'>".$row["Value".$i]."</td>";
																echo "				</tr>";

															}
															else{
																echo "				<tr>";
																echo "					<td style='border:1px solid #3A6B53;border-collapse:collapse;color:white;background-color:#418765;'>".$row["Title".$i]."</td>";
																echo "					<td style='border:1px solid #3A6B53;border-collapse:collapse;color:#000;'>".$row["Value".$i]."</td>";
																echo "				</tr>";
															}
														}
														else{
															break;
														}
													}
								echo "			</table>";
								echo "		</div>";
								echo "	</div>";
								echo "</div>";
							}
						}
					?>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div><br><br>
		<div class="container">
			<div class="video-bottom-grids">
				<div class="col-md-12">
					<h3 style="text-align:center;">台灣語文學會組織章程</h3><br>
					<div class="news-grid-rght3">
						<div class="story">
							<table class='table'>
								<tr> 
									<td style="text-align:right">
										1991.08.17 會員大會修訂通過<br>
										1991.08.31 第一屆第二次理監事會斟酌文字<br>
										2002.01.27 第六屆第一次會員大會修訂通過<br>
										2003.02.14 第六屆第二次會員大會修訂通過<br>
										2014.10.25 第十一屆第二次會員大會修訂通過<br>
										2020.10.16 第十四屆第三次會員大會修訂通過<br>
										2022.07.12 第十五屆第一次臨時會員大會修訂通過
									</td>
								</tr>
							</table>
							<b>第一章　總則</b> 
							<table class='table table-bordered'>
								<tr> 
									<td style='width:20%'>第一條</td>
									<td>本會會名定為台灣語文學會，英文名為Taiwan Languages and Literature Society. 簡稱 "ＴＬＬＳ"。</td>
								</tr>
								<tr> 
									<td>第二條</td>
									<td>本會以從事臺灣語文的研究和教育為宗旨。</td>
								</tr>
								<tr> 
									<td>第三條</td>
									<td>本會以全國行政區域為組織區域。</td>
								</tr>
								<tr> 
									<td>第四條</td>
									<td>本會會址設於主管機關所在地區，並得報經主管機關核准設辦事處。 </td>
								</tr>
							</table>
							<b>第二章　任務</b> 
							<table class='table table-bordered'>
								<tr> 
									<td style='width:20%'>第五條</td>
									<td>本會之任務如左：<br>
										一、從事並推動臺灣語文及其相關學術的研究。<br>
										二、建立文獻資料庫。<br>
										三、出版相關的研究成果。<br>
										四、促進國際學術交流。<br>
										五、定期舉辦國內與國際學術會議。<br>
										六、定期舉辦演講會。<br>
										七、推動語文教育。<br>
										八、其他有關事項。
									</td>
								</tr>
							</table>
							<b> 第三章　會員</b> 
							<table class='table table-bordered'>
								<tr> 
									<td style='width:20%'>第六條</td>
									<td>凡贊同本會宗旨者，由本會會員二人以上之介紹，並經本會理事會通過，得為本會會員。</td>
								</tr>
								<tr> 
									<td>第七條</td>
									<td>
										本會會員分為一般會員、榮譽會員、團體會員與預備會員四種：<br>
										一、以個人身分入會者為一般會員。<br>
										二、凡對臺灣語文研究與教育卓有成就，或對本會有鉅大貢獻者，得經理事會通過，聘為榮譽會員。<br>
										三、凡以團體資格入會者為團體會員。<br>
										四、凡是對台灣語文有相當研究或者推廣興趣者，經理事會通過，得為預備會員。<br>
										五、具學生身份者得為預備會員。
									</td>
								</tr>
								<tr> 
									<td>第八條</td>
									<td>
										一般會員之資格，除須年滿二十歲並繳納入會費以外，並應合乎下列款項之一：<br>
										一、語文及其相關學科的學者。<br>
										二、語文及其相關學科的研究生。<br>
										三、對臺灣語文研究具有相當成就者。<br>
										四、預備會員連續滿兩年，申請為會員，經理事會通過者。
									</td>
								</tr>
								<tr> 
									<td>第九條</td>
									<td>
										團體會員之資格，除繳納入會費以外，並應合乎下列諸款之一：<br>
										一、語文及其相關學科之學術團體。<br>
										二、教育機構或團體。<br>
										三、文化團體。<br>
										四、其他贊同或支持本會宗旨之團體。
									</td>
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
									<td>
										本會一般會員和團體會員應享的權利如後：<br>
										一、出席會議並享有發言權、提案權與表決權。<br>
										二、享有選舉權、被選舉權與罷免權。每一會員為一權。<br>
										三、本會所舉辦各種事業上之權益。<br>
										四、會員應享之其他權益。
									</td>
								</tr>
								<tr> 
									<td>第十六條</td>
									<td>預備會員得列席會議，並享有發言權。</td>
								</tr>
							</table>
							<b>第四章　組織</b> 
							<table class='table table-bordered'>
								<tr> 
									<td style='width:20%'>第十七條</td>
									<td>本會以會員大會為最高權力機構，在會員大會閉會期間，由理事會代行其職權；監事會為監察機構。</td>
								</tr>
								<tr> 
									<td>第十八條</td>
									<td>
										會員大會之職權如下：<br>
										一、訂定與變更章程。<br>
										二、選舉或罷免理事、監事。<br>
										三、議決入會費、常年會費、事業費及會員捐款之數額與方式。<br>
										四、議決年度工作計畫、報告及預算、決算。<br>
										五、議決會員之糾正、停權、或除名處分。<br>
										六、議決財產之處分。<br>
										七、議決團體之解散。<br>
										八、與會員權利義務有關之其他重大事項之議決。
									</td>
								</tr>
								<tr> 
									<td>第十九條</td>
									<td>
										本會置理事十一人，候補理事三人；監事三人，候補監事一人：由會員大會選舉之。理事會得互選常務理事三人，監事得互選常務監事一人。理監事出缺時，應分別遞補。<br>
										理事、監事得採用通訊選舉。通訊選舉辦法由理事會通過報主管機關備查後行之。
									</td>
								</tr>
								<tr> 
									<td>第二十條</td>
									<td>
										理事會之職權如下：<br>
										一、議決會員大會之召開事項。<br>
										二、審定會員之資格。<br>
										三、選舉或罷免常務理事、會長。<br>
										四、議決理事、常務理事或會長之辭職。<br>
										五、任免工作人員。<br>
										六、擬定年度工作計畫、報告及預算、決算。<br>
										七、其他應執行事項。
									</td>
								</tr>
								<tr> 
									<td>第二一條</td>
									<td>本會置會長、副會長各一人，由理事就常務理事中選舉之。會長綜理會務，應視會務需要到會辦公；副會長協助會長處理會務，在會長因故無法執行職務而請假或離職時，由副會長代理。</td>
								</tr>
								<tr> 
									<td>第二二條</td>
									<td>本會理事（含會長、副會長）、監事均為義務職，任期二年，連選得連任之。會長與副會長之連任，以一次為限。</td>
								</tr>
								<tr> 
									<td>第二三條</td>
									<td>
										監事會之職權如下：<br>
										一、定期監察理事會工作之執行。<br>
										二、定期監察會計作業。<br>
										三、審核年度決算。<br>
										四、選舉或罷免常務監事。<br>
										五、議決監事或常務監事之辭職。<br>
										六、其他應監察事。
									</td>
								</tr>
								<tr> 
									<td>第二四條</td>
									<td>
										本會理、監事如有下列各款之一者，應分別由理、監事會議決，解除其職務，再提請下次會員大會追認：<br>
										一、因不得已之事故而辭職者。<br>
										二、曠廢職務者。<br>
										三、違反法令，以致影響本會名譽者。<br>
										四、無故兩次不出席理監事會議者。<br>
										五、喪失會員資格者。
									</td>
								</tr>
								<tr> 
									<td>第二五條</td>
									<td>本會置秘書長一人，幹事若干人。秘書長由會長就會員中提名，經理事會通過而聘免任之，並報主管機關備查，但秘書長之解聘應先報主管機關核備。</td>
								</tr>
								<tr> 
									<td>第二六條</td>
									<td>本會得設各種委員會、小組，其組織細則由理事會擬訂，報經主管機關核備後施行，變更時亦同。</td>
								</tr>
								<tr> 
									<td>第二七條</td>
									<td>本會得由理事會聘請名譽會長一人、名譽理事及顧問若干人，其聘期與理、監事之任期同。</td>
								</tr>
								<tr> 
									<td>第二八條</td>
									<td>本會選任之職員不得兼任工作人員。</td>
								</tr>
							</table>
							<b>第五章　會議</b> 
							<table class='table table-bordered'>
								<tr> 
									<td style='width:20%'>第二九條</td>
									<td>	本會會員大會分定期會議與臨時會議　定期會議每年舉行一次，得與學術討論會合併舉辦，由會長召集，召集時應於十五日前以書面通知之。臨時會議由理事會、或監事會、或經會員五分之一以上之請求而召集之。</td>
								</tr>
								<tr> 
									<td>第三十條</td>
									<td>會員無法親自出席會員大會時，得以書面委託其他會員代理，每一會員以代理一人為限。</td>
								</tr>
								<tr> 
									<td>第三一條</td>
									<td>
										本會理、監事會議，至少每半年各舉行一次，得召開聯席會議，不得委託出席。必要時得由會長、常務理事、常務監事、或理監事三人聯名，召集臨時會議。會議之召集應於十日前以書面確實通知；會議之決議，各以理、監事過半數之出席，出席人數較多數之同意行之。
										理、監事會議得以視訊會議為之，理事或監事以同步視訊方式參與會議者，視同親自出席。但如涉及選舉、罷免事宜，不得採行同步視訊會議。
									</td>
								</tr>
							</table>
							<b>第六章　經費、會計及財務</b> 
							<table class='table table-bordered'>
								<tr> 
									<td style='width:20%'>第三二條</td>
									<td>
										本會經費由下列各款充之：<br>
										一、一般會員入會費新臺幣壹千元，年會費壹千元。預備會員其入會費壹仟元，年會費減半；團體會員之入會費和年會費為一般會員之五倍。<br>
										二、個人、機關、團體之補助與捐獻。<br>
										三、本會所舉辦之活動及出版等收益。<br>
										四、委託收益。<br>
										五、基金及其孳息。<br>
										六、其他收入。
									</td>
								</tr>
								<tr> 
									<td>第三三條</td>
									<td>本會會計年度，自每年一月一日起至十二月三十一日止。</td>
								</tr>
								<tr> 
									<td>第三四條</td>
									<td>
										本會每年度編造預（決）算，於每年度結束前（後）二個月內，經理事會審查，提會員大會通過，並報請主管機關核備。會員大會無法及時召開時，應經理監事會通過，先報主管機關，事後提會員大會追認。但決算報告應先送監事會審核，並將審核結果一併提報會員大會。
									</td>
								</tr>
								<tr> 
									<td>第三五條</td>
									<td>本會於解散後，剩餘財產歸屬所在地之地方自治團體或主管機關指定之機關團體所有。</td>
								</tr>
							</table>
							<b>第七章　附則</b> 
							<table class='table table-bordered'>
								<tr> 
									<td style='width:20%'>第三六條</td>
									<td>本章程未規定事項，悉依有關法令規定辦理。</td>
								</tr>
								<tr> 
									<td>第三七條</td>
									<td>本會辦事細則由理事會訂定之。</td>
								</tr>
								<tr> 
									<td>第三八條</td>
									<td>本章程經會員大會通過，報請主管機關核准備案後施行，修訂時亦同。</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<?php include_once('footer.php'); ?>
	<script src="js/bootstrap.js"></script>
</body>

</html>