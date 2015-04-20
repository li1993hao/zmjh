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
<meta name="renderer" content="webkit">
<!-- basic styles -->
<link href="/zmjh/Public/vendor/ace/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/zmjh/Public/vendor/ace/css/font-awesome.min.css" />

<!--[if IE 7]>
<link rel="stylesheet" href="/zmjh/Public/vendor/ace/css/font-awesome-ie7.min.css" />
<![endif]-->
<link rel="stylesheet" href="/zmjh/Public/vendor/ace/css/jquery.gritter.css" />
<!-- fonts -->

<!--[if !IE]> -->
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery-2.0.3.min.js"></script>
<!-- <![endif]-->
<!--[if IE]>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/html5shiv.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/respond.min.js"></script>
<![endif]-->
<link href="/zmjh/Template/zhumeng/asset/css/common.css" rel="stylesheet"/>
<link href="/zmjh/Template/zhumeng/asset/css/main_page.css" rel="stylesheet"/>
<link href="/zmjh/Template/zhumeng/asset/css/common.css" rel="stylesheet"/>


    
    
</head>
<body>
<!-- 头部 -->
<!--header and menu-->
<!--[if lt IE 8]>
<div class="alert alert-block alert-danger fade in" style="margin-bottom: 0">您正在使用 <strong>过时的</strong> 浏览器. 是时候 <a target="_blank" href="http://browsehappy.com/">更换一个更好的浏览器</a> 来提升用户体验.</div>
<![endif]-->

<div class="row bg_ti_color">
  <div style="width:100%;">
    <div class="col-md-12 bg" style="position:relative;">
      <ul class="h_title" id="h_title">
        <li ><a href="<?php echo U('Home/Index/index');?>">主页</a></li>
        <?php $__NAV__=cat('',false,$rootNav,'active'); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i; if($cat['has_child'] != 0): ?><li >
              <div class="btn-group"> <a type="button" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <?php echo ($cat['name']); ?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu" style="margin-top:-1px;">
                  <?php $_result=cat($cat['id'],true);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat_child): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($cat_child['url']); ?>"><?php echo ($cat_child['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
              </div>
            </li>
            <?php else: ?>
            <li> <a href="<?php echo ($cat['url']); ?>"> <?php echo ($cat['name']); ?> </a> </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
</div>

<!-- /头部 -->

<!-- 主体 -->



    <!--main tagline area-->
    <section class="taglineWrap">
    <div style="background-color:#EEEEEE;height:70px;">
        <div class="container">
            <div class="row-fluid  tagline">
                <div class="breadcrumbs">
                    <div class="container" style="font-size: 16px; margin-top:30px;">
                        <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$av): $mod = ($i % 2 );++$i; if($i == count($nav)): echo ($av["name"]); ?>
                                <?php else: ?>
                                <a href="<?php echo ($av["url"]); ?>" style="color: #49afcd"><?php echo ($av["name"]); ?></a>/<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div> 
        </div><!-- /container -->
    </section>
    <section class="mainContentWrap">
        <div class="container mainContent well" style="height:600px;">
            <div class="row-fluid">

                <!--main content-->

                <div class="span12">
                    <div class="row-fluid">
                        <div class="row-fluid pageTitle">
                                <?php if(info.title_color == '#555' ): ?><h1  style="margin-bottom:10;text-align: center"><?php echo ($info["title"]); ?></h1>
                                    <?php else: ?>
                                    <h1 class="text-center" style="margin-bottom:10px;text-align: center;color:<?php echo ($info["title_color"]); ?>"><?php echo ($info["title"]); ?></h1><?php endif; ?>
                            <div style="margin-bottom: 10px">
                                <span><i class="icon-calendar"></i><?php echo (date('Y-m-d H:i',$info["create_time"])); ?></span>&nbsp;
                                <span><i class="icon-pencil"></i><?php echo get_nickname($info['uid']);?></span>&nbsp;
                                <span><i class="icon-eye-open"></i> <?php echo ($info["view"]); ?></span>&nbsp;
                                <?php if(!empty($info["keyword"])): ?><span>
                                        <i class="icon-tags"></i>
                                        <span><?php echo ($info["keyword"]); ?></span>
                                    </span><?php endif; ?>
                                <?php echo plugin('SocialShare');?>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <section><?php echo (htmlspecialchars_decode($info["content"])); ?></section>
                            <?php echo plugin('SocialButton');?>
                            <?php $prev = api('Document/prev',array('id'=>$info['id'],'category_id'=>$info['category_id']))?>
<?php $next = api('Document/next',array('id'=>$info['id'],'category_id'=>$info['category_id']))?>
<hr/>
<div class="blog_footer clearfix">
    <div style="float: left">
        上一篇:
        <?php if(!empty($prev)): ?><a href="<?php echo ($prev["url"]); ?>" data-color="<?php echo ($prev["list_color"]); ?>"><?php echo (msubstr($prev["title"],0,20,true)); ?></a>
            <?php else: ?>
            没有了!<?php endif; ?>
    </div>
    <div style="float: right">
        下一篇:
        <?php if(!empty($next)): ?><a href="<?php echo ($next["url"]); ?>" data-color="<?php echo ($next["list_color"]); ?>"><?php echo (msubstr($next["title"],0,20,true)); ?></a>
            <?php else: ?>
            没有了!<?php endif; ?>
    </div>
</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


<!-- /主体 -->

<!-- 底部 -->
<!--footer-->
<footer id="footer">
    <!--footer testimonail-->
    
      <div>
        <hr>
       </div>
      <div class="row" style="background-color:#303A40">
       <div class="bg con_center bottom" style="width:80%;color:white;">
        <div class="col-md-2 bg yqlj">
         <label>友情链接:</label>
         <div >
          <ul>
           <li><a style="color:white;">南开大学</a></li>
           <li><a style="color:white;">天津大学</a></li>
           <li><a style="color:white;">理工大学</a></li>
           <li><a style="color:white;">南开大学</a></li>
           <li><a style="color:white;">天津大学</a></li>
           <li><a style="color:white;">理工大学</a></li>
          </ul>
         </div>
        </div>
        <div class="col-md-4 col-md-offset-6 bg" style="color:white;">
         <label>客户端下载</label>
         <div>
          <img width="150px" src="/zmjh/Template/zhumeng/asset/img/content/weixin.jpg"/>
         </div>
         <?php echo plugin('IPlistener');?>
        </div>
       </div>
       
      </div>
      
        <div class="row">
         <div class="col-md-12" style="height:150px;">
         <hr />
             <h3 style="text-align: center">
                &copy; 时代科技
             </h3>
           </div>
        </div>
      </div>
</footer>

<script type="text/javascript">
         var ThinkPHP = window.Think = {
            "ROOT"   : "/zmjh", //当前网站地址
            "APP"    : "/zmjh/index.php", //当前项目地址
            "PUBLIC" : "/zmjh/Public", //项目公共目录地址
            "DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
            "MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
        };
		
</script>

<script type="text/javascript" src="/zmjh/Public/vendor/think.js"></script>
<script type="text/javascript" src="/zmjh/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery.gritter.min.js"></script>
<script type="text/javascript" src="/zmjh/Template/zhumeng/asset/js/main_page.js"></script>
<script type="text/javascript" src="/zmjh/Public/jdi/job_cate.js"></script>
<script type="text/javascript" src="/zmjh/Template/zhumeng/asset/js/fenlei.js"></script>




</body>
</html>