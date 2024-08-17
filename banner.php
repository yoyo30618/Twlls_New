<style>
.banner-info {
    width: 100%;
    background-color: #FDF9F6;	
}
    .navbar-brand {
        display: flex;
        flex-direction: column; /* 垂直排列 */
        align-items: center; /* 水平置中 */
        justify-content: center; /* 垂直置中 */
        height: 120px; /* 設定高度以便垂直置中 */
    }

    .navbar-brand2 {
        font-size: 12px; 
        line-height: 1; 
        margin: 0; /* 移除上下邊距 */
    }

</style>
<script>
    window.onscroll = function() {
    var banner = document.querySelector('.banner-info');
    var content = document.querySelector('.AL-slider-container');
    var bannerlogo = document.querySelector('.bannerlogo');

    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        banner.classList.add('shrink');
		bannerlogo.src="images/logo.png";
        content.style.marginTop = '80px'; // 縮小後的邊距
    } else {
        banner.classList.remove('shrink');
		bannerlogo.src="images/logo-main.png";
        content.style.marginTop = '120px'; // 初始邊距
    }
};

</script>

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<div class="banner">
	<div class="banner-info" style="height: 120px;"> <!-- 設定初始高度 -->
		<div class="container" style="margin-top:20px">
			<nav id="navbar" class="navbar navbar-default">
				<div class="navbar-header" style="margin: 0 auto;">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo" style="">
						<table style="width:100%;">
							<tr>
								<td style="width:30%"><a href="index.php"><img class="bannerlogo" src="images/logo-main.png" style="height: auto;vertical-align: middle; display: flex;align-items: center;"id="logo-img" /></a></td>
								<td style="width:70%;">
									<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
											<li class="act"><a href="index.php" style="font-size: 16px;">首頁</a></li>
											<li><a href="News.php" style="font-size: 16px;">最新消息</a></li>
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
											<li>
												<div class="icon-box"><a class="agile-icon" href="#"><i class="fa fa-envelope"></i></a></div>
                                            </li>
										</ul>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
