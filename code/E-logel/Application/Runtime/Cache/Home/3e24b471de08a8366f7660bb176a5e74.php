<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>酒店管理公司网站模板</title>
    <meta name="keywords" content="CMS,企业,学校,政府,网站,内容,管理,建设,制作,建站,系统,模板,源码"/>
    <meta name="description" content="酒店管理公司网站模板是基于asp.net的网站内容管理系统，以简单、灵活的特点被广泛用于学校、政府、企业单位的网站建设"/>
    <meta name="Author" content="酒店管理公司网站模板"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <link href="/Public/home/templates/jd_1/style.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="/Public/home/css/comm.css" />
    <script src="/Public/home/js/jquery.min.js" type="text/javascript"></script>
    <script src="/Public/home/js/function.js" type="text/javascript"></script>
    <script src="/Public/home/js/comm.js" type="text/javascript"></script>
    <script src="/Public/home/js/zh-cn/lang.js" type="text/javascript"></script>
</head>
<body>
<div class="page_style lanmupage page_l61">
    <div class="top_box">
        <div class="top_box_inner">
            <div class="topcontent"></div>
            <div class="clear"></div>
            <div class="logo"><a href=""><img src="/Public/home/images/logo.jpg" border="0"></a></div>
            <div class="menu_box" id="Menu">
                <ul>
                    <li class="menu_style_homepage menu_current" id="MenuItem61" name="MenuItem"><a
                            href="index.html" class="menu">首页</a></li>
                    <li class="menu_style" id="MenuItem62" name="MenuItem"><a href="/home/aboutus"
                                                                              class="menu">酒店简介</a>
                    </li>
                    <li class="menu_style" id="MenuItem64" name="MenuItem"><a href="/home/"
                                                                              class="menu">酒店客房</a>
                    </li>
                    <li class="menu_style" id="MenuItem63" name="MenuItem"><a
                            href="/home/news/index" class="menu">酒店新闻</a>
                    </li>
                    <li class="menu_style" id="MenuItem77" name="MenuItem"><a href="swhy/"
                                                                              class="menu">商务会议</a>
                    </li>
                    <li class="menu_style" id="MenuItem68" name="MenuItem"><a href="/home/"
                                                                              class="menu">人力资源</a>
                    </li>
                    <li class="menu_style" id="MenuItem65" name="MenuItem"><a
                            href="/home/contactus/"
                                                                              class="menu">联系我们</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">var IsPageHome = "1";
    var Lanmu_Id = "61";
    var Sublanmu_Id = "0";
    ShowSubMenu(Lanmu_Id);</script>
    <link rel="stylesheet" type="text/css" href="/Public/home/css/dropmenu.css">
    <div style="clear: both;"></div>
    <div class="banner"><p style="padding:0px 0 0px 0;width:960px;border:0px solid #bddbf5;background:url(/Public/home/images/banner/banner1.jpg) no-repeat 0px 0px;">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" height="219" width="960">
        <param name="movie" value="/Public/home/images/banner/swf3.swf">
        <param name="quality" value="high">
        <param name="wmode" value="transparent">
        <embed src="/Public/home/images/banner/swf3.swf" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="960" height="219">
    </object>
</p></div>
<div class="main_box main_box_style1">
    <div class="main_box_inner">
        <div class="main_box_inner_left"><embed src="http://player.youku.com/player.php/sid/XMzk4ODc0NzQw/v.swf" allowfullscreen="true" quality="high" width="210" height="190" align="middle" allowscriptaccess="always" type="application/x-shockwave-flash" style="margin-bottom:20px;">

            <div id="nav_130" class="nav_box">
                <div class="nav_title"><span class="nav_sign">联系我们</span><span class="nav_more"></span></div>
                <div id="nav_conent_130" class="nav_content nav_content_introduct"><img alt="" src="/Public/home/upload/s1/fck/image/2012-11/17171739.jpg" height="242" border="0" vspace="5" width="189"><br>
                    地址：广东省中山市南头金湾广场<br>
                    客服：400-800-xxx<br>
                    Email：<a href="mailto:xxx@126">xxx@126</a>.com
                </div></div>
        </div>
        <div class="main_box_inner_right">
            <div class="current_location current_location_757"><ul><li class="current_location_1">当前位置：<a href="/">首页</a> &gt; <a href="../news/" class="cl_1">酒店新闻</a> &gt; <a href="#">公司新闻</a></li><li class="current_location_2">公司新闻</li></ul></div>
            <div class="sublanmu_box sublanmu_box_757">
                <div class="sublanmu_content sublanmu_content_article">
                    <ul class="article">
                    <?php if(is_array($newss)): $i = 0; $__LIST__ = $newss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span class="title">
<a href="#" target="_self" title="<?php echo ($vo["title"]); ?>" style=""><?php echo ($vo["title"]); ?></a></span>
                            <span class="date"><?php echo ($vo["addtime"]); ?></span>
                            <span class="clear"></span>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>

                </div>
            </div></div>
        <div class="pages"><?php echo ($pages); ?></div>
    </div>
    <div class="clear main_box_inner_bottom"></div>
</div>
    <div class="bottom_box"><p>
        <a href="#" onClick="setHome(this,'http://www.genban.org')">设为首页</a> | <a
            href="javascript:AddFavorite(location.href,'网站名称')">加入收藏</a> | <a href="#">留言反馈</a>&nbsp;|&nbsp;<a
            href="#">人才招聘</a>&nbsp;| <a href="#">联系我们</a>&nbsp;<br/>
        <span class="STYLE6">广东省中山市华拓网络版权所有&nbsp;Copyright <span
                style="font-family:Arial;">&copy;</span> 2008-2012</span>&nbsp;&nbsp;ICP备案号:粤ICP备xxxxxxxx号
    </p>
        <script type="text/javascript">
            function AddFavorite(sURL, sTitle) {
                try {
                    if (typeof(sURL) == "undefined" || sURL.length == 0) {
                        sURL = window.location;
                    }
                    if (typeof(sTitle) == "undefined" || sTitle.length == 0) {
                        sTitle = document.title;
                    }
                    window.external.addFavorite(sURL, sTitle);
                }
                catch (e) {
                    try {
                        window.sidebar.addPanel(sTitle, sURL, "");
                    }
                    catch (e) {
                        alert("您使用的浏览器不支持此功能，请按“Ctrl + D”键手工加入收藏!");
                    }
                }
            }
            function setHome(objid, urls) {
                var a = objid, b = urls, c = "unknown";
                try {
                    if (typeof(b) == "undefined" || b.length == 0) {
                        b = location.href;
                    }
                    a.style.behavior = "url(#default#homepage)";
                    var d = a.isHomePage(b);
                    d = (d = d || a.isHomePage(b + "/")) || a.isHomePage(b + "/#");
                    d = "" + d;
                    if (d != "true") {
                        a.setHomePage(b);
                    } else {
                        alert("您已经设为首页了!");
                    }
                } catch (e) {
                    alert("您的浏览器不支持自动设置主页，请使用浏览器菜单手动设置!");
                }
            }
            ;
        </script>
    </div>
</div>
</body>
</html>