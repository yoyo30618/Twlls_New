<!DOCTYPE HTML>
<html>

<head>
	<?php
	$Page = isset($_GET['Page']) ? $_GET['Page']: 1;
	$Line = $Page * 20 -20;
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
	<?php include_once('Top.php'); ?>
	<?php include_once('banner.php'); ?>
	<div style="margin-top: 120px;"></div>
	<?php include_once('marquee.php'); ?>
	<div class="banner-bottom" style="background-image: url();">
		<div class="container">
			<div class="video-bottom-grids"
				style="color:white;text-align:center;height:150px; display:flex; align-items:center; justify-content:center;">
				<text style="font-size:40px;">收款資料查詢</text>
			</div>
		</div>
	</div>
	
	<?php
		include_once('Functions.php');
        session_start();
        if (isset($_SESSION['Islogin']) OR $_SERVER['REQUEST_METHOD'] === 'POST') {
            $userPassword = $_POST['password'];
            if (isset($_SESSION['Islogin']) OR $userPassword === CURTPWD) {
				$_SESSION['Islogin']=1;
                ?>

					<table class="table table-bordered">
							<thead>
								<tr align="right">
									<td colspan="9">
										<form action="DataQuery.php" method="get">
											<div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
												<input type="hidden" name="Page" value="1">
												<input type="text" class="form-control" placeholder="請輸入查詢資料" name="KeyWord"
													value="<?php echo $_GET['KeyWord']; ?>">
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
									<td>寄書<br>資訊</td>
									<td>購買<br>本數</td>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM `tlls_order` where 1 ORDER BY `tlls_order`.`orderNo` limit $Line,20";
								$Keyword = "";
								if (isset($_GET['KeyWord'])) {
									$Keyword = $_GET['KeyWord'];
									$sql = "SELECT * FROM `tlls_order` where ";
									$sql .= "`name` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`email` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`phone` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`TaxIDTitle` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`TaxIDNumber` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`ReceiptID` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`ReceiptSeq` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`amt` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`itemdesc` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`orderNo` like '%" . $_GET['KeyWord'] . "%' ";
									$sql .= "ORDER BY `tlls_order`.`orderNo` limit $Line, 20";
								}
								$result = $conn_1->query($sql);
								if ($result->num_rows > 0) {
									while ($row = mysqli_fetch_object($result)) {
										$color = "lightgreen";
										if ($row->isPay == 0)
											$color = "pink";
										echo "<tr>";
										echo "<td bgcolor='$color'>$row->orderNo</td>";
										echo "<td bgcolor='$color'>$row->name<br>$row->email<br>$row->phone</td>";
										echo "<td bgcolor='$color'>$row->ReceiptTitle</td>";
										echo "<td bgcolor='$color'>$row->TaxIDNumber</td>";
										echo "<td bgcolor='$color'>$row->ReceiptID</td>";
										echo "<td bgcolor='$color'>$row->amt</td>";
										echo "<td bgcolor='$color'>$row->itemdesc</td>";
										echo "<td bgcolor='$color'>$row->BookAddress</td>";
										echo "<td bgcolor='$color'>$row->BookQuantity</td>";
										echo "</tr>";
									}
								}
								?>
							</tbody>
					</table>
					<nav aria-label="...">
							<ul class="pagination">
								<li class="page-item <?php if ($Page == 1)
									echo 'disabled' ?>" <?php if ($Page == 1)
									echo 'style="pointer-events: none;"' ?>>
										<a class="page-link" <?php if ($Page == 1)
									echo 'disabled' ?>
											href="?Page=<?php echo $Page - 1 ?>&KeyWord=<?php echo $Keyword ?>">Previous</a>
								</li>
								<?php
								$cnt = 1;
								$sql = "SELECT COUNT(*) AS cnt FROM `tlls_order` where 1 ORDER BY `tlls_order`.`orderNo`";
								if (isset($_GET['KeyWord'])) {
									$Line = 0;
									$sql = "SELECT COUNT(*) AS cnt FROM `tlls_order` where ";
									$sql .= "`name` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`email` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`phone` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`TaxIDTitle` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`TaxIDNumber` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`ReceiptID` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`ReceiptSeq` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`amt` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`itemdesc` like '%" . $_GET['KeyWord'] . "%' OR ";
									$sql .= "`orderNo` like '%" . $_GET['KeyWord'] . "%' ";
									$sql .= "ORDER BY `tlls_order`.`orderNo`";
								}
								$result = $conn_1->query($sql);
								while ($row = mysqli_fetch_object($result)) {
									$cnt = $row->cnt;
									break;
								}
								$ck = 0;
								if (($cnt) % 20 > 0)
									$ck = 1;
								for ($i = 1; $i <= (int) (($cnt) / 20) + $ck; $i++) {
									if ($i == $Page) {
										echo "<li class='page-item active' aria-current='page'>";
										echo "<span class='page-link'>$i</span>";
										echo "</li>";
									} else
										echo "<li class='page-item'><a class='page-link' href='?Page=$i&KeyWord=$Keyword'>$i</a></li>";
								}
								?>
								<li class="page-item <?php if ($Page >= (int) (($cnt) / 20) + $ck)
									echo 'disabled' ?>" <?php if ($Page >= (int) (($cnt) / 20) + $ck)
									echo 'style="pointer-events: none;"' ?>>
										<a class="page-link" href="?Page=<?php echo $Page + 1 ?>&KeyWord=<?php echo $Keyword ?>">Next</a>
								</li>
							</ul>
					</nav>
				
    <?php
            } else {
                ?>
                <div style="margin:10px auto;">
                    <div>
                        <div id="tit">收款資料查詢</div>
                        <div class="container">
                        </div>
                    </div>
                </div>
                <?php
                echo '<form action="DataQuery.php" method="post">';
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
                    <div id="tit">收款資料查詢</div>
                    <div class="container">
                    </div>
                </div>
            </div>
            <?php
            echo '<form action="DataQuery.php" method="post">';
            echo '  <label for="password">Password:</label>';
            echo '  <input type="password" name="password" id="password">';
            echo '  <input type="submit" value="Submit">';
            echo '</form>';
        }	
	?>
	<?php include_once('footer.php'); ?>
	<script src="js/bootstrap.js"></script>
</body>

</html>