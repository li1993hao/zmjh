<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!DOCTYPE HTML>
<!--[if IE 7 ]>
<html class="ie7 no-js" lang="en">
<![endif]-->
<!--[if IE 8 ]>
<html class="ie8 no-js" lang="en">
<![endif]-->
<!--[if IE 9 ]>
<html class="ie9 no-js" lang="en">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
<title><?php echo ($title); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="description" content="<?php echo (C("WEB_SITE_DESCRIPTION")); ?>" />
<meta name="author" content="天津时代科技有限公司" />
<meta name="keyword" content="<?php echo (C("WEB_SITE_KEYWORD")); ?>"/>
<!--[if !IE]> -->
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery-2.0.3.min.js"></script>
<!-- <![endif]-->
<!--[if IE]>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery-1.10.2.min.js"></script>
<![endif]-->

<script type="text/javascript" src="/zmjh/Public/vendor/placeholder/placeholder.js"></script>


<!-- CSS styles -->
<link href="/zmjh/Template/chenglin/asset/css/mentor.min.css" rel="stylesheet"/>
<!--Skins: uncomment to activate-->
<link href="/zmjh/Template/chenglin/asset/css/skin_blue.css" rel="stylesheet"/>
<link href="/zmjh/Template/chenglin/asset/css/common.css" rel="stylesheet"/>
<!--<link href="css/skin_orange.css" rel="stylesheet"/>
-->
<!-- http://remysharp.com/2009/01/07/html5-enabling-script/ -->
<!--[if lt IE 9]>
<script type="text/javascript">/*@cc_on'abbr article aside audio canvas details figcaption figure footer header hgroup mark meter nav output progress section summary subline time video'.replace(/\w+/g,function(n){document.createElement(n)})@*/</script>
<![endif]-->
<script type="text/javascript">(function(H){H.className=H.className.replace(/bno-jsb/,'js')})(document.documentElement)</script>

<!-- favicon & iSO touch icons -->
    
    
</head>
<body>
<!-- 头部 -->
<!--header and menu-->
<!--[if lt IE 8]>
<div class="alert alert-block alert-danger fade in" style="margin-bottom: 0">您正在使用 <strong>过时的</strong> 浏览器. 是时候 <a target="_blank" href="http://browsehappy.com/">更换一个更好的浏览器</a> 来提升用户体验.</div>
<![endif]-->
<div class="navbar navbar-fixed-top" id="top" >
    <div class="navbar-inner">
        <div class="container" >
            <div style="float: left;position: relative"><span style="color: #000000;font-size: 22px;line-height: 48px;">成林教育</span>
                <small >  您身边的教育专家</small>
            </div>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="btnTitle">菜单</span>
                <span class="icon-chevron-down icon-white"></span>
            </a>
            <!--<a class="brand" href="index.html" title="Home">-->
            <!--</a>-->
            <div class="nav-collapse">
                <!--main nav-->
                <ul class="nav">
                    <li class="<?php echo ($index_style); ?>">
                        <a href="<?php echo U('Index/index');?>">首页</a>
                    </li>
                    <?php $__NAV__=cat('',false,$rootNav,'active'); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i; if($cat['has_child'] != 0): ?><li class="dropdown <?php echo ($cat["class"]); ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                                    <?php echo ($cat['name']); ?>
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php $_result=cat($cat['id'],true);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat_child): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($cat_child['url']); ?>"><?php echo ($cat_child['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li class="<?php echo ($cat["class"]); ?>">
                                <a href="<?php echo ($cat['url']); ?>">
                                    <?php echo ($cat['name']); ?>
                                </a>
                            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            </div>
            <!--end main menu-->

        </div>
    </div>
</div>
<!-- /头部 -->

<!-- 主体 -->

    <!--main tagline area-->
    <section class="taglineWrap">
        <div class="container">
            <div class="row-fluid  tagline">
                <div class="breadcrumbs">
                    <div class="container" style="font-size: 16px;">
                        <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$av): $mod = ($i % 2 );++$i; if($i == count($nav)): echo ($av["name"]); ?>
                                <?php else: ?>
                                <a href="<?php echo ($av["url"]); ?>" style="color: #49afcd"><?php echo ($av["name"]); ?></a>/<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->
    </section>

    <section class="mainContentWrap">
        <div class="container mainContent">

            <div class="row-fluid">

                <div class="span12">
                        <?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><div class="row-fluid">
                                <?php if(isset($info["cover_path"])): ?><div class="span3">
                                        <div class="innerSpacer">
                                            <div class="portfolioItem">
                                                <a href="<?php echo ($info["url"]); ?>">
                                                    <img src="<?php echo (thumb($info["cover_path"],218,180)); ?>" style="height: 100%;width: 100%" alt="project"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--description-->
                                    <div class="span9">
                                        <div class="item-description">
                                            <h3>
                                                <a href="<?php echo ($info["url"]); ?>l"><?php echo ($info["title"]); ?></a>
                                            </h3>
                                            <div class="subtitle">
                                                <i class="icon-calendar"></i><?php echo (date('Y-m-d H:i',$info["create_time"])); ?> &nbsp;&nbsp;
                                                <i class="icon-eye-open"></i> <?php echo ($info["view"]); ?>
                                            </div>

                                            <p><?php echo (msubstr($info["description"],0,120)); ?></p>

                                            <!--alert error-->
                                                <a href="<?php echo ($info["url"]); ?>" class="btn btn-info">详情</a>
                                        </div>
                                    </div>
                                    <div class="divider solid clearfix"><span></span></div>
                                    <?php else: ?>
                                    <div class="span12">
                                        <div class="item-description">
                                            <h3>
                                                <a href="<?php echo ($info["url"]); ?>l"><?php echo ($info["title"]); ?></a>
                                            </h3>
                                            <div class="subtitle">
                                                <i class="icon-calendar"></i><?php echo (date('Y-m-d H:i',$info["create_time"])); ?> &nbsp;&nbsp;
                                                <i class="icon-eye-open"></i> <?php echo ($info["view"]); ?>
                                            </div>

                                            <p><?php echo (msubstr($info["description"],0,120)); ?></p>

                                            <!--alert error-->
                                            <a href="<?php echo ($info["url"]); ?>" class="btn btn-info">详情</a>
                                        </div>
                                    </div><?php endif; ?>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php else: ?>
                            <h1 style="text-align: center"><?php echo ((isset($tip) && ($tip !== ""))?($tip):'暂时还没有新闻哦~~'); ?></h1><?php endif; ?>
                        <!--pagination-->
                        <div class="row-fluid project-pagination">
                            <div class="span12">
                                <?php echo ($page); ?>
                            </div>
                        </div>
                        <!--end pagination-->

                    </div>

                </div>
        </div>
    </section>



<!-- /主体 -->

<!-- 底部 -->
<!--footer-->
<footer id="footer">
    <!--footer testimonail-->
    <section class="testimonial">
        <div class="container">
            <div class="row-fluid">
                <div class="span9">
                    <blockquote>
                        <p>
                            "让我们来帮助您，帮助您的孩子，选择成林，欢迎致电
                            <span class="tel">13264167086</span>
                            "
                        </p>
                        <small class="pull-right">杜老师</small>
                    </blockquote>
                </div>
                <div class="span3 mugshot" style="text-align: center">
                    <img src="/zmjh/Template/chenglin/asset/img/content/client_mug2.png" alt="client" />
                </div>
            </div>

        </div>
    </section>

    <section class="footerMain">
        <div class="container">
            <div class="row-fluid">

                <!--footer main columns-->

                <div class="span3">

                    <!--newsletter widget-->

                    <div class="widget widget_newsletter">
                        <h3>给我们留言</h3>
                        <p>
                            欢迎给我们留言，我们将会即使的对您提出的问题进行回复。
                        </p>
                        <a href="<?php echo cat_field('16','url') ?>" target="_blank" class="btn btn-success">我要留言</a>
                    </div>
                    <!--end widget-->

                </div>

                <div class="span6">

                    <!--recent posts widget-->

                    <div class="widget widget_recent_entries">
                        <h3>
                            校区地址
                            <a href="<?php echo cat_field('17','url') ?>" target="_blank">
                                <span class="label">地图</span>
                            </a>
                        </h3>
                        <ul>
                            <li>
                                <a class="title" href="#">别墅校区</a>
                                <p>
                                    盛世郦园别墅区62-6（泉达路和振华西道交口，彤德莱火锅店后）
                                </p>
                            </li>

                            <li class="last">
                                    <a class="title" href="#">一中校区</a>
                                    <p>
                                        蒲瑞馨园底商三层（杨村一中对面）
                                    </p>
                            </li>

                        </ul>
                    </div>
                    <!--end widget-->

                </div>

                <div class="span3 last">
                    <!--footer logo-->
                    <a href="index.html" class="logo-foot" title="Home">
                        <img src="/zmjh/Template/chenglin/asset/img/content/weixin.jpg" alt="mentor logo" />
                    </a>
                    <?php echo plugin('IPlistener');?>
                </div>
            </div>
        </div>
    </section>

    <!--footer lower-->
    <section class="footerLower">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 copyright">
                    <h3 style="text-align: center">
                        &copy; 时代科技
                    </h3>
                </div>
            </div>
        </div>
    </section>

</footer>
<!--back to top button-->
<a href="#top" id="peBackToTop" class="label btt disabled">
    <span class="icon-chevron-up icon-white"></span>
</a>
<script type="text/javascript">
    (function(){
        var ThinkPHP = window.Think = {
            "ROOT"   : "/zmjh", //当前网站地址
            "APP"    : "/zmjh/index.php", //当前项目地址
            "PUBLIC" : "/zmjh/Public", //项目公共目录地址
            "DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
            "MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
        }
    })();
</script>
<script type="text/javascript" src="/zmjh/Public/vendor/think.js"></script>
<!-- import minified javascript -->
<script type="text/javascript" src="/zmjh/Template/chenglin/asset/js/mentor.min.js"></script>
<script type="text/javascript" src="/zmjh/Template/chenglin/asset/js/common.js"></script>



<?php echo hook('pageFooter');?>
</body>
</html>