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
    <div class="banner-info">
        <div class="container">
            <nav id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img class="bannerlogo" src="images/logo-main.png" alt="Logo" />
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">首頁</a></li>
                        <li><a href="News.php">最新消息</a></li>
                        <li><a href="Introduction.php">學會簡介</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                學術活動 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="Conference.php">研討會</a></li>
                                <li><a href="Journal.php">期刊</a></li>
                            </ul>
                        </li>
                        <li><a href="Award.php">歷屆獎項</a></li>
                        <li><a href="Member.php">會員專區</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                線上繳費 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="Payment.php">會員繳費與捐款</a></li>
                                <li><a href="Publication.php">出版品購買</a></li>
                            </ul>
                        </li>
                        <li><a onclick="alert('建置中，敬請期待！')">人才庫</a></li>
                        <li>
                            <div class="icon-box">
                                <a class="agile-icon" href="mailto:contact.tlls@gmail.com"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
