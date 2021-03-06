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

<div class="container-fluid">
<div class="row">
  <div class="col-md-12 bg">
    <div class="col-md-5 h_logo"> 
      <!--<img class="logo_pic" src="/zmjh/images/main_page/logo.png"/>--> 
    </div>
    <div class="col-md-7">
      <h3>天津高校就业信息网</h3>
    </div>
  </div>
</div>

<!--<div class="row">
       <div class="col-md-12 fgx">
       </div>
     </div>-->

<div class="row bg_ti_color">
  <div style="width:70%;">
    <div class="col-md-12 bg">
      <ul class="h_title" id="h_title">
        <li ><a href="<?php echo U('Index/index');?>">主页</a></li>
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

   <div class="row">
  <div class="bg con_center" style="width:50%;">
   <form action="/zmjh/index.php/Test/index/reg" method="post">
   <div>用户名<input type="text" name="username"></input></div>
   <div>密码<input type="text" name="password"></input></div>
   <div>重复密码<input type="text" name="re_password"></input></div>
   <div>昵称<input type="text" name="nickname"></input></div>
   <!--<div>学校<input type="text"></input></div>
   <div>学院<input type="text"></input></div>
   <div>学号<input type="text"></input></div>
   <div>班级<input type="text"></input></div>-->
   <div>手机号码<input type="text" name="phone"></input></div>
   <!--<div>验证码<input type="text"></input><button type="button" class="btn btn-primary">获取验证码</button></div>-->
   <div><input type="checkbox">我已同意大学生就业相关协议</input></div>
   <div><input type="submit" value="保存"></input></div>
   </form>
   </div>
 </div>
 

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