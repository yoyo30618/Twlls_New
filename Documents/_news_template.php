<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>台灣語文學會</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/nav.css" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <style type="text/css">
    #abanner {
        width: 1200px;
        height: 200px;
        position: relative;
        overflow: hidden;
    }
    </style>
    <script>
    function getCookie(name) //取cookies
    {
        var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
        if (arr != null) return unescape(arr[2]);
        return null;
    }

    function cooikeadd(name, val) {
        document.cookie = name + "=" + val + ";";
    }
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">
	
    $(document).ready(function() {
        $("#slideicon").click(function() {
            $("#innavidiv").slideToggle();
        });
        $("[class=product]").click(function() {
            if ($(this).closest('div').children('#slide').css('display') != "block") {
                $("[id=slide]").slideUp();
            }
            $(this).closest('div').children('#slide').slideToggle();
            if ($(this).closest('div').find('li').length <= 1) {
                cooikeadd("openDiv", 'service.php');
                location.href = 'service.php';
            }
        });
        $("[id=slide] ul li").click(function() {
            cooikeadd("openDiv", $(this).children('a').attr("href"));
        });
        $("[id=slide] ul li a").each(function() {
            if ($(this).attr("href") == getCookie("openDiv")) {
                $(this).closest('#slide').css('display', "block");
            }
        });
    });

    function MM_swapImgRestore() { //v3.0
        var i, x, a = document.MM_sr;
        for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
    }

    function MM_preloadImages() { //v3.0
        var d = document;
        if (d.images) {
            if (!d.MM_p) d.MM_p = new Array();
            var i, j = d.MM_p.length,
                a = MM_preloadImages.arguments;
            for (i = 0; i < a.length; i++)
                if (a[i].indexOf("#") != 0) {
                    d.MM_p[j] = new Image;
                    d.MM_p[j++].src = a[i];
                }
        }
    }

    function MM_findObj(n, d) { //v4.01
        var p, i, x;
        if (!d) d = document;
        if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
            d = parent.frames[n.substring(p + 1)].document;
            n = n.substring(0, p);
        }
        if (!(x = d[n]) && d.all) x = d.all[n];
        for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
        for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
        if (!x && d.getElementById) x = d.getElementById(n);
        return x;
    }

    function MM_swapImage() { //v3.0
        var i, j = 0,
            x, a = MM_swapImage.arguments;
        document.MM_sr = new Array;
        for (i = 0; i < (a.length - 2); i += 3)
            if ((x = MM_findObj(a[i])) != null) {
                document.MM_sr[j++] = x;
                if (!x.oSrc) x.oSrc = x.src;
                x.src = a[i + 2];
            }
    }
    </script>

    <body onLoad="MM_preloadImages('images/s1-2.png')">
        <a name="aaa"></a>
        <div id="content2">
            <a href="index.html"><img src="images/a_01.png" width="1200" height="158" border="0"></a>
            <?php

                $filename = "__nav";
                if (file_exists($filename)){
                $handle = fopen($filename, "rb");
               
                 $contents;
                 while (!feof($handle))
                 {
                        
                        $contents = fread($handle, 8192);
                        echo $contents;
                 }
                 fclose($handle);
                }
            ?>



            <div id="abanner">
                <img src="images/a_04.png" width="1200" alt="" /> </div>
            <div id="pos"><img class="posimage" src="images/home.png" width="16" /><a href="index.html">首頁</a></div>
            <div id="con">
                <div id="left">
                 <?php

                $filename = "index_left";
                if (file_exists($filename)){
                $handle = fopen($filename, "rb");
                $contents;
                while (!feof($handle))
                {
                    
                    $contents = fread($handle, 8192);
                    echo $contents;
                }
                fclose($handle);
                }
                ?>
                </div>
                <div style=" width:795px; float:right;">
                     
                    <div id="tt">
                        <div id="tit"></div>
                    </div>
                    <div class="content">
                        






                    </div>


                    <div id="clear"></div>
                    <div id="top"><img style="float:left;" src="images/top.png" width="15" height="15"><a href="#aaa">Top</a></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="footer">
                <p>台灣語言學會 / Taiwan Languages and Literature Society </p>
                版權所有 © 2002. All Rights Reserved.</div>
            <!--end-->
        </div>
        <!--end-->
    </body>

</html>
