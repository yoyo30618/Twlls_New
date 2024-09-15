<!DOCTYPE HTML>
<?php session_start();?>
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
</head>
<?php include_once "Conn_SQL.php"; ?>
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
									<td style="width:10%"><a href="index.php"><img src="images/logo.png" style="border-radius: 20px;width:100%;" /></a></td>
									<td style="width:30%">
										<a class="navbar-brand" href="index.php" style="font-size: 50px;">
											台灣語文學會<br><text style="font-size: 12px;">Taiwan Languagee & Literature Society</text>
										</a>
									</td>
									<td style="width:60%;">
										<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
											<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
												<li class="act"><a href="index.php" style="font-size: 16px;">首頁</a></li>
												<li><a href="Introduction.php" style="font-size: 16px;">學會簡介</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														學術活動 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="Conference.php">研討會</a></li>
														<li><a href="http://www.twlls.org.tw/jtll/index.php">期刊</a></li>
													</ul>
												</li>
												<li><a href="Award.php" style="font-size: 16px;">歷屆獎項</a></li>
												<li><a href="Member.php" style="font-size: 16px;">會員專區</a></li>
												<li role="presentation" class="dropdown" style="font-size: 16px;">
													<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
														線上繳費 <span class="caret"></span>
													</a>
													<ul class="dropdown-menu" style="font-size: 16px;">
														<li><a href="Pay.php">會員繳費與捐款</a></li>
														<li><a href="Pay_2.php">出版品購買</a></li>
													</ul>
												</li>
												<li><a href="breaking.html" style="font-size: 16px;">人才庫</a></li>
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
									echo "<div class='marquee1'><a class='breaking' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."</a></div>";
								else
									echo "<div class='marquee1'><a class='breaking'>".$row["Title"]."</a></div>";
    						}
						}	
					?>		
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="js/jquery.marquee.js"></script>
				<script>
					$('.marquee').marquee({ pauseOnHover: true });
				</script>
			</div>
			<div class="upcoming-events-grids">
				<div class="col-md-12 upcoming-events-left">
					<h3>紀錄查詢</h3>
					<div class="news-grid-rght3">
						<div class="story">
							<?php
							$correctPassword = 'tlls2015';
							if (isset($_SESSION['Islogin']) OR $_SERVER['REQUEST_METHOD'] === 'POST') {
								if(isset($_POST['password'])) $userPassword = $_POST['password'];
								if (isset($_SESSION['Islogin']) OR $userPassword === $correctPassword) {
									$_SESSION['Islogin']=1;
									?>
									<h2>收款資料查詢_測試區</h2>  
									<?php
										$Page=1;
										$Line=0;
									?>
									<table class="table table-bordered">
												<thead>
												<tr align="right">
													<td colspan="9">
														<form action="DataQuery_qtest.php" method="get">
															<div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
																<input type="text" class="form-control" placeholder="請輸入查詢資料" name="KeyWord" value="<?php if(isset($_GET['KeyWord'])) echo $_GET['KeyWord']; ?>">
																<button class="btn btn-outline-secondary" type="submit" id="button-addon2">查詢</button>
															</div>
														</form>
													</td>
												</tr>
												<tr>
													<td>訂單<br>編號</td>
													<td>繳款人<br>資訊</td>
													<td>收據<br>抬頭</td>
													<td>統一<br>編號</td>
													<td>收據<br>編號</td>
													<td>金額</td>
													<td>用途<br></td>
													<!-- <td>寄書<br>資訊</td>
													<td>購買<br>本數</td>
												</tr> -->
											</thead>
											<tbody>
												<?php
													$sql = "SELECT * FROM `qtest` where 1 ORDER BY `qtest`.`orderNo` DESC";
													$Keyword="";
													if(isset($_GET['KeyWord'])){
														$Keyword=$_GET['KeyWord'];
														$sql = "SELECT * FROM `qtest` where ";
														$sql .= "`name` like '%" . $_GET['KeyWord'] . "%' OR ";
														$sql .= "`email` like '%" . $_GET['KeyWord'] . "%' OR ";
														$sql .= "`phone` like '%" . $_GET['KeyWord'] . "%' OR ";
														$sql .= "`ReceiptTitle` like '%" . $_GET['KeyWord'] . "%' OR ";
														$sql .= "`TaxIDNumber` like '%" . $_GET['KeyWord'] . "%' OR ";
														$sql .= "`ReceiptID` like '%" . $_GET['KeyWord'] . "%' OR ";
														$sql .= "`ReceiptAddress` like '%" . $_GET['KeyWord'] . "%' OR ";
														$sql .= "`amt` like '%" . $_GET['KeyWord'] . "%' OR ";
														$sql .= "`itemdesc` like '%" . $_GET['KeyWord'] . "%' OR ";
														$sql .= "`orderNo` like '%" . $_GET['KeyWord'] . "%'";
														// $sql .= "`BookAddress` like '%" . $_GET['KeyWord'] . "%' OR ";
														// $sql .= "`BookQuantity` like '%" . $_GET['KeyWord'] . "%' ";
														$sql .= "ORDER BY `qtest`.`orderNo` DESC";
													}
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while ($row = mysqli_fetch_object($result)) {
															$color="lightgreen";
															if($row->isPay==0)
																$color="pink";
															echo "<tr>";
																echo "<td bgcolor='$color'>$row->orderNo</td>";
																echo "<td bgcolor='$color'>$row->name<br>$row->email<br>$row->phone</td>";
																echo "<td bgcolor='$color'>$row->ReceiptTitle</td>";
																echo "<td bgcolor='$color'>$row->TaxIDNumber</td>";
																echo "<td bgcolor='$color'>$row->ReceiptID</td>";
																echo "<td bgcolor='$color'>$row->amt</td>";
																echo "<td bgcolor='$color'>$row->itemdesc</td>";
																// echo "<td bgcolor='$color'>$row->BookAddress</td>";
																// echo "<td bgcolor='$color'>$row->BookQuantity</td>";
															echo "</tr>";
														}
													}
												?>
											</tbody>
									</table>  
						
								<?php
                				} else {
                    			?>
									<div style="margin:10px auto;">
										<div>
											<div id="tit">收款資料查詢_測試區</div>
											<div class="container">
											</div>
										</div>
									</div>
									<?php
									echo '<form action="DataQuery_qtest.php" method="post">';
									echo '  <label for="password">Password:</label>';
									echo '  <input type="password" name="password" id="password">';
									echo '  <input type="submit" value="Submit">';
									echo '</form>';
									echo '<p>Incorrect password. Please try again.</p>';
                				}

								} else {
									?>
									<div style="margin:10px auto;">
										<div>
											<div id="tit">收款資料查詢_測試區</div>
											<div class="container">
											</div>
										</div>
									</div>
									<?php
									echo '<form action="DataQuery_qtest.php" method="post">';
									echo '  <label for="password">Password:</label>';
									echo '  <input type="password" name="password" id="password">';
									echo '  <input type="submit" value="Submit">';
									echo '</form>';
								}
								?>
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
	<script src="js/bootstrap.js"></script>
</body>

</html>