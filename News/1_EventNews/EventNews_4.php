<!DOCTYPE HTML>
<html>

<head>
	<title>台灣語文學會</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="../../js/jquery-1.11.1.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<?php include_once "../../Conn_SQL.php"; ?>
<body>
	<div class="banner1">
		<div class="banner-info1">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="logo">
							<table>
								<tr>
									<td style="width:10%"><a href="../../index.php"><img src="../../images/logo.png" style="border-radius: 20px;width:100%;" /></a></td>
									<td style="width:30%">
										<a class="navbar-brand" href="../../index.php" style="font-size: 50px;">
											台灣語文學會<br><text style="font-size: 12px;">Taiwan Languagee & Literature Society</text>
										</a>
									</td>
									<td style="width:60%;">
										<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
											<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
												<li class="act"><a href="../../index.php" style="font-size: 16px;">首頁</a></li>
												<li><a href="../../Introduction.php" style="font-size: 16px;">學會簡介</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														學術活動 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="../../Conference.php">研討會</a></li>
														<li><a href="http://www.twlls.org.tw/jtll/index.php">期刊</a></li>
													</ul>
												</li>
												<li><a href="../../Member.php" style="font-size: 16px;">歷屆獎項</a></li>
												<li><a href="../../Member.php" style="font-size: 16px;">會員專區</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														線上繳費 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="../../Pay.php">會員繳費與捐款</a></li>
														<li><a href="../../Pay_2.php">出版品購買</a></li>
													</ul>
												</li>
												<li><a href="../../breaking.html" style="font-size: 16px;">人才庫</a></li>
											</ul>
										</div><!-- /.navbar-collapse -->
									</td>
								</tr>
							</table>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="news-and-events">
		<div class="container">
			<div class="move-text">
				<div class="breaking_news">
					<h2>最新消息</h2>
				</div>
				<div class="marquee">
					<?php
						$sql = "SELECT * FROM `news` WHERE `ShowOnMarquee`=1";
						$result = $conn_1->query($sql);
						if ($result->num_rows > 0) {
    						while ($row = mysqli_fetch_array($result)) {
								if($row["url"]!="")
									echo "<div class='marquee1'><a class='breaking' href='../../".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a></div>";
								else
									echo "<div class='marquee1'><a class='breaking'>".$row["Title"]."</a></div>";
    						}
						}	
					?>		
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="../../js/jquery.marquee.js"></script>
				<script>
					$('.marquee').marquee({ pauseOnHover: true });
				</script>
			</div>
			<div class="upcoming-events-grids">
				<div class="col-md-12 upcoming-events-left">
					<h3><b>以「多語臺灣，英語友善」取代「雙語國家」！台灣語文學會對「2030雙語國家」政策的立場聲明（連署至3月31日止）</b></h3>
					<div class="news-grid-rght3">
						<div class="story" style="width:100%">
							<table style="width:100%">
								<tr>
									<td style="text-align:center;width:100%">
										<b>以「多語臺灣，英語友善」取代「雙語國家」！<br>
										台灣語文學會對「2030雙語國家」政策的立場聲明</b>
									</td>
								</tr>
								<tr>
									<td>
										全球許多語言在英語全球化的影響下瀕臨滅絕，台灣的語言學家必須捍衛在地語言永續發展的基本人權。台灣語文學會因此發表聲明，反對「2030雙語國家」政策（簡稱「雙語國家」），鄭重呼籲政府以「多語臺灣，英語友善」取代獨尊英語的「雙語國家」，並以符合語言生態的普世價值訂定符合台灣社會語言實況的多語言政策，將破壞語言生態的中英雙語政策，轉為生態永續的多語言國家政策。我們反對該政策的理由如下：<br>
										<br>
										<b>1．「雙語國家」與「國家語言發展法」的精神背道而馳，嚴重忽視台灣是多元語言社會的事實</b><br>
										二戰後數十年的「國語政策」壓制本土語言，獨尊華語，導致本土語言嚴重流失。2019年1月9日政府公布實施《國家語言發展法》，賦予「臺灣各固有族群使用之自然語言」國家語言的地位，並且強調國家語言地位平等，以尊重國家多元文化，促進國家語言之傳承、復振及發展，從法律上保障、呼應了維護臺灣各族群語言多樣性的迫切需求。然而在《國家語言發展法》尚未真正落實之際，行政院國家發展委員會又推動《2030雙語國家發展藍圖》，並擬成立「雙語國家發展中心」。「雙語國家」中的雙語，其中一個語言是英語，另一個語言雖然沒有明說，但從目前的教育內容來說，毫無疑義就是華語，如此完全將法定的國家語言排除在外，幾乎沒有《國家語言發展法》中所定義的「國家語言」發展的空間。「政府對語言的態度與政策」是聯合國教科文組織（UNESCO） 評估語言活力的重要指標之一，而這項指標又直接影響另一個指標「社群成員對自己母語的態度」，因此語言政策事關重大，資源的差別對待將對國家語言的傳承造成重大傷害。<br>
										臺灣是個實質上的多語社會，這些多元語言涵蓋豐富的南島語系語言、漢語系語言與台灣手語等，是台灣語言的寶貴資產。英語雖然是國際通用語言，但它並不是「台灣固有族群使用之自然語言」（國家語言的定義），它在教育體系中的各個層級均列為必修科目，與東南亞七國語言列入國民教育的課綱一樣，在法制上屬於「認可的語言」（Recognized Language），雖然其認可程度高出許多，但終究還是外國語言。「雙語國家」將一個不是本國語言的英語無限上綱至國家級語言，其地位甚至凌駕於本土語言之上，在法源依據及法制位階上都缺乏正當性。<br>
										<br>
										<b>2．「雙語國家」是價值錯亂的語言規劃，必然危及台灣的主體意識，破壞台灣的語言生態</b><br>
										「雙語國家」在自我定位上將臺灣變成「華語國家＋英語國家」，既不符事實也應非政府政策本意，籲請政府重新思考英語的法制定位。事實上，提供友善的英語環境，讓異文化之間易於交流，以及提供優質的英語教育，增加民眾的國際溝通能力等政策目標，只需把英語視為具有國際交流功能的「外國語言」即可，無需將其地位拉抬至國家語言，我們主張以「多語臺灣，英語友善」取代「雙語國家」。<br>
										全球56個將英語列為官方語言的國家，除了原先的英語國家外，均為被歐美強權殖民過的國家，幾無例外。亞洲幾個以英語為官方語的地區，都曾被英美帝國長期殖民。例如菲律賓被美國殖民48 年，而新加坡、香港、馬來西亞與印度更是被英國殖民超過百年。台灣從未受到英美國家的殖民，實在沒有必要自願摒棄原有的本土語言，自我矮化國格，陷入自我殖民的困境。<br>
										「雙語國家」所設想的新加坡路線，是以犧牲在地語言為慘痛代價：在地語言被華語取代後，接下來就是英語消滅華語。2020年新加坡最新的人口普查顯示，英語高居家庭最常使用的語言（49.3%），華語為29.9%，而「漢語方言」則僅存8.7%。2009年的資料也顯示，在家講英語的小一新生將近60%，其語言生態已經澈底被改變。新加坡在2011年開始強力推行國家教育，因為全英語已造成其國家認同薄弱。由此可見，無節制的擴展英語，忽略在地社會語言生態和語言權利，將導致族群語言的急遽流失，也造成跨世代間的溝通困難與認同危機。<br>
										語言所擔負的功能除了最直接的溝通功能，與經濟功能（作為一種獲得工作與資本的工具）之外，語言還具有情感功能，社會表徵功能、歷史與文化功能（文化的載體，反映文化與歷史）、藝術與娛樂功能（以該語言所創作的文學、藝術等豐富的文化資產）、認知與思惟功能以及個人認同與集體認同功能（想像的共同體）等等，是建構社會作為一個共同體的重要要素。能夠同時具有完整功能的語言，通常都是有族群基礎的本土語言，透過漫長的歷史而形成語言的文化底蘊。「雙語國家」只著眼於英語最功利的溝通與經濟功能，輕率地把英語能力等同於國際化、國際移動力、數位力、競爭力，並且將其上升至國家最高層級的地位，完全忽視英語在台灣社會不可能具有的其他文化與認同功能，如此必然延伸出語言與文化拔根、身分認同混淆與錯亂的危機，加遽蔑視母語的意識形態以及崇洋媚外的扭曲價值。在缺乏台灣文化主體性下，盲目的推廣外語，將削弱本土語言文化，在英語至上的洪流下，台灣本土語言將淪為海邊的漂流木。<br>
										<br>
										<b>3．「雙語國家」在教育體系中的規劃缺乏可行性，將會徒勞無功</b><br>
										就雙語政策的具體內容來看，政府擬以全面啟動教育體系的雙語活化、推動設立全英語電視頻道及鼓勵公廣集團製播英語節目、增加廣播電臺之英語節目、營造友善雙語觀光環境、政府採購文件雙語化、鼓勵促參案件雙語化、重大案件與涉在臺外國人或外商之起訴書提供英文摘要內容、建議司法院對重大判決摘要英譯等16項個別策略來進行，這些具體策略除第一項涉及教育體系者外，大多屬於「英語友善政策」的範疇，並非完全不可行。然而與教育體系有關的雙語政策，擬將英語教育延伸至幼兒園，並明訂「推動中小學部分學科及高職專業群科採英語授課」，等於從幼兒園至高等教育全面推動沒有固有族群為基礎的英語教育，完全忽視聯合國教科文組織專家會議的共識「母語是啟蒙教育最好的工具」。此舉必然造成語言與文化的衝擊，與被殖民的社會幾無二致。政策中所聲稱的「不會壓抑母語教育的推動落實」事實上不可能實現。<br>
										「雙語國家」所力推的全英語授課，是基於過時的「分離式雙語觀」，未能善用第一語言的功能，不重視語言之間的協同效益，也忽略第一語言是學生信心來源的載體，反而在語言之間築起高牆，讓語言學習變成焦慮的學習過程。臺灣目前的英語教育，從小學到大學，英語學習成就呈現雙峰落差的問題始終存在。雙峰現象不只出現在城市與偏鄉之間，在城市與城市之間、校與校之間、班與班之間、甚至同一個班級之間都存在程度不等的雙峰現象。在這樣的現狀下，要求各級學校更多學科以「全英語授課」，無論對老師或學生而言，都是相當辛苦的課堂經驗。一廂情願的認為只要教師以英語授課，學生便能同時增加英語能力與學科或術科能力，這是過度樂觀的假設。真實的情況是，雙語政策對中等以下教育階段的學校行政、教師教學與學生學習都增加極大的壓力，師資缺口、雙語教材研發等皆未就緒，盲目以雙語進行授課，可能犧牲學生對學科核心知識的理解，以及對語言學習的興趣。更嚴重者，可能加速部分學生提早放棄學業。<br>
										<br>
										<b>4．「雙語國家」政策中的社會不公平及語言歧視問題</b><br>
										「雙語國家」政策藍圖中，政府只提及政策實施成功時美好的一面，卻忽視了政策背後的潛藏危機及負面效應，以及此政策對整體社會在文化與價值認同、學生學習、社會就業、階級分化上所產生的不良影響。該政策最想要效法的新加坡有其殖民地背景，亦即有一群人用英文跟殖民母國溝通，這與台灣的歷史脈絡不同。新加坡雙語政策係以服務國家利益為目的，英語程度將決定學生能否成為新加坡菁英並進入社會頂端的關鍵之一，因此，新加坡在小學階段即以英語能力作分流，層層篩選之下，最終決定大學門票的取得與否。我們必須思考，以語言做為篩選工具的分流制度是臺灣想要的制度嗎？從這個層面來思考，英語在臺灣不但無法具有集體認同的功能，反而將臺灣人透過民主改革逐漸凝聚起來的命運共同體一分為二。<br>
										以英語代表專業、或以英語作為不符比例原則的就業篩選工具，在全英語授課的要求下，在教育界已經是正在進行式了。許多學校要求英語教師去教授他們並不熟悉的藝能科目，上課所傳遞的藝能知識不完全正確，也無法讓喜歡藝能的孩子及早發現自己的興趣。也有學校在甄選教師時，忽略專業學科或術科的能力和經驗，僅以能否全英語授課作為是否錄用的標準。可以預見，雙語政策將導致教育界、公務界以英語能力作為篩選人才的標準，排擠具有其他外語能力或英語能力不足的專業人士，而晉用有英語能力卻缺乏專業能力的不適任人員。<br>
										「雙語國家」政策的動機一部分是出於「台灣人菜英文」的深度迷思，大學英檢畢業門檻的扭曲政策營造了台灣英語能力低於周邊國家的假象。事實上，台灣學生多益成績之所以看似低於某些國家，是因為台灣的大學普遍存在「英檢畢業門檻」，強迫所有大學生去考試，在國外只有菁英才會去考的測驗，台灣卻是全民運動，多多益善。多年來業者與媒體聯手以此謊言炒作，刻意唱衰以製造台灣人的英語自卑與焦慮，導致台灣深陷新殖民主義（Neocolonialism）的陷阱，盲目崇拜英語，造就英語產業的無限商機。新殖民主義佔領的不是台灣人的土地，而是台灣語言文化的精神版圖。以經濟掛帥作為幌子，進行政治、文化、經濟的控制。「雙語國家」實施以來，英檢人數大量增加，補習班不斷以此政策作為招生口號。我們可預見該政策將使台灣人民陷入「被英檢」與英語焦慮的惡性循環之中。英語並非台灣日常的社會用語，缺乏自然環境，學習英語是件昂貴的投資，此一政策必將造成更嚴重的語言階級、世代落差與城鄉差距。<br>
										<br>
										基於上述理由，語言學家呼籲政府儘速檢討此政策，並朝以下方向積極改善：<br>
										<br>
										<b>1．以「多語臺灣，英語友善」為目標，摒棄「英語國家」的幻想</b><br>
										政府應務實的認清英語是外來語、是作為國際交流的共通語，並非台灣在社會與日常生活使用的語言。「提升國人英語力、數位能力、國際接軌、提供外國人英語友善環境」的工具性層次的概念，並不等於臺灣要變成「英語國家」這種涉及身份與文化認同的層次。即使從競爭力的角度來看，在外語政策之推動上，除了强調英語的地位及重要性外，也應考量亞洲鄰國整體經貿、外交及民間關係上所需之多元外語，重視其他外語教學新場域，並善用我國新住民所引入之豐沛外語資源，才是兼顧國內多元語言的發展並提升競爭力的有效方法。建議政府應儘速檢討「2030雙語國家」的名稱與內容，改以「多語台灣，英語友善」為目標，將「雙語國家發展中心設置條例草案」退回行政院，與「國家語言發展中心」設置草案一併研議。<br>
										<br>
										<b>2．規劃本土語言優先的「多語言國家」，達成生態永續的正面語言規劃</b><br>
										政府應思考國家語言如何成為台灣在地全球化的資源，將自信心立基於國家語言的尊榮感、學習力、生活化和應用力上，應善用與發揚來自台灣本身獨特的語言、歷史、文化、藝術、傳統所孕育與延伸出來的嶄新創造力，作為強大競爭力的來源。透過積極正向的語言規劃，維持「語言花園」的美麗與多樣，提供最多的權利與資源給最需要保護的語言，讓台灣的語言多樣性能永續發展。<br>
										<br>
										如欲連署，請按下方連結：<br>
										<a href="https://docs.google.com/forms/d/e/1FAIpQLSd23xxXaH89rBsM_xtd6JoKAfAhURbEiHriTissHgfYQOLBKg/viewform" target="_blank">https://docs.google.com/forms/d/e/1FAIpQLSd23xxXaH89rBsM_xtd6JoKAfAhURbEiHriTissHgfYQOLBKg/viewform</a><br>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<br>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="footer-grids wthree-agile">
				<div class="col-md-4 footer-grid-left">
					<h3>聯絡我們</h3>
					<ul>
						<li>聯絡信箱：contact.tlls@gmail.com</li>
						<li>學會地址：11529台北市南港區研究院路二段128號<br>中研院語言所</li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>相關連結</h3>
					<a style="color:white" href="http://www.uijin.idv.tw/" target="_blank"><i>- 洪惟仁老師網站</i></a><br>
					<a style="color:white" href="https://linguist.tw/zh-tw/" target="_blank"><i>- 台灣語言學學會</i></a>
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>關於我們</h3>
					<p>
						「台灣語文學會」最早於1990年開始，由張裕宏教授、董忠司教授與洪惟仁教授展開籌備。
						1991年，委由董忠司教授草擬學會章程草案。
						之後陸續邀集周純一教授、陳恒嘉教授等討論草案內容，並積極聯絡各大學、研究單位的語文及相關科目的學者，募集發起人。
						<i>- 「台灣語文學會」成立經過</i>
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<div class="footer-bottom-left-whtree-agileinfo">
					<p>Copyright &copy; 台灣語文學會 / Taiwan Languages and Literature Society</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<script src="../../js/bootstrap.js"></script>
</body>

</html>