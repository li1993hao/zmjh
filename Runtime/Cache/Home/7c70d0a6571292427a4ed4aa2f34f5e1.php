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
<link href="/zmjh/Template/zhumeng/asset/css/bootstrap.css" rel="stylesheet"/>
<!--Skins: uncomment to activate-->
<link href="/zmjh/Template/zhumeng/asset/css/bootstrap-theme.css" rel="stylesheet"/>
<link href="/zmjh/Template/zhumeng/asset/css/main_page.css" rel="stylesheet"/>
<!--<link href="css/skin_orange.css" rel="stylesheet"/>
-->
<!-- http://remysharp.com/2009/01/07/html5-enabling-script/ -->
<!--[if lt IE 9]>
<script type="text/javascript">/*@cc_on'abbr article aside audio canvas details figcaption figure footer header hgroup mark meter nav output progress section summary subline time video'.replace(/\w+/g,function(n){document.createElement(n)})@*/</script>
<![endif]-->
<script type="text/javascript">(function(H){H.className=H.className.replace(/bno-jsb/,'js')})(document.documentElement)</script>
<script type="text/javascript">
   var JPlaceHolder = {
    //检测
    _check : function(){
        return 'placeholder' in document.createElement('input');
    },
    //初始化
    init : function(){
        if(!this._check()){
            this.fix();
        }
    },
    //修复
    fix : function(){
        jQuery(':input[placeholder]').each(function(index, element) {
            var self = $(this), txt = self.attr('placeholder');
            self.wrap($('<div></div>').css({position:'relative', zoom:'1', border:'none', background:'none', padding:'none', margin:'none'}));
            var pos = self.position(), h = self.outerHeight(true), paddingleft = self.css('padding-left');
            var holder = $('<span></span>').text(txt).css({position:'absolute', left:pos.left, top:pos.top+7, height:h, lienHeight:h, paddingLeft:paddingleft, color:'#aaa'}).appendTo(self.parent());
            self.focusin(function(e) {
                holder.hide();
            }).focusout(function(e) {
                if(!self.val()){
                    holder.show();
                }
            });
            holder.click(function(e) {
                holder.hide();
                self.focus();
            });
        });
    }
};
//执行
jQuery(function(){
    JPlaceHolder.init();    
});
   </script>
<!-- favicon & iSO touch icons -->
    
    
</head>
<body>
<!-- 头部 -->
<!--header and menu-->
<!--[if lt IE 8]>
<div class="alert alert-block alert-danger fade in" style="margin-bottom: 0">您正在使用 <strong>过时的</strong> 浏览器. 是时候 <a target="_blank" href="http://browsehappy.com/">更换一个更好的浏览器</a> 来提升用户体验.</div>
<![endif]-->
<div class="row bg_ti_color">
  <div style="width:70%;">
    <div class="col-md-12 bg">
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
    
      <div>
        <hr>
       </div>
      <div class="row">
       <div class="bg con_center bottom" style="width:80%">
        <div class="col-md-2 bg" style="margin-left:25%;">
         <label>友情链接:</label>
         <ul>
          <li><a>南开大学</a></li>
          <li><a>天津大学</a></li>
          <li><a>理工大学</a></li>
         </ul>
        </div>
        <div class="col-md-4 col-md-offset-2 bg">
         <label>客户端下载</label>
         <div>
          <img src="/zmjh/images/main_page/b_pic.png"/>
          <img src="/zmjh/images/main_page/b_pic.png"/>
         </div>
         
        </div>
       </div>
       
      </div>
      </div>
</footer>


<script type="text/javascript" src="/zmjh/Public/vendor/think.js"></script>
<script type="text/javascript" src="/zmjh/Template/zhumeng/asset/js/bootstrap.js"></script>
<script type="text/javascript" src="/zmjh/Template/zhumeng/asset/js/main_page.js"></script>



<?php echo hook('pageFooter');?>
</body>
</html>