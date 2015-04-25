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
<link href="/zmjh/Template/zhumeng/asset/css/tx.css" rel="stylesheet"/>


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


    
	<link href="/zmjh/Template/zhumeng/asset/css/contentsx.css" rel="stylesheet"/>
    <script type="text/javascript" src="/zmjh/Template/zhumeng/asset/js/contentsx.js"></script>

</head>
<body>
<!-- 头部 -->
<!--header and menu-->
<!--[if lt IE 8]>
<div class="alert alert-block alert-danger fade in" style="margin-bottom: 0">您正在使用 <strong>过时的</strong> 浏览器. 是时候 <a target="_blank" href="http://browsehappy.com/">更换一个更好的浏览器</a> 来提升用户体验.</div>
<![endif]-->
<div class="container-fiuld">
 <div class="row" style="margin:0;">
  <div class="col-md-12 t_nav bg">
   <div class="nav_mask"></div>
   <div class="nav_width">
    <div class="nav_logo">
     <img src="/zmjh/Template/zhumeng/asset/img/content/nav_logo2.png"/>
    </div>
    <div class="nav_menu">
     <ul>
      <li><span><a href="<?php echo U('Home/Index/index');?>">首页</a></span></li>
       <?php $__NAV__=cat('',false,$rootNav,'active'); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i; if($cat['has_child'] != 0): ?><li>
          <span><a href="#"><?php echo ($cat['name']); ?></a></span>
          <div>
           <?php $_result=cat($cat['id'],true);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat_child): $mod = ($i % 2 );++$i;?><a href="<?php echo ($cat_child['url']); ?>"><?php echo ($cat_child['name']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
           </div>
          </li>
         <?php else: ?>
          <li><span><a href="<?php echo ($cat['url']); ?>"> <?php echo ($cat['name']); ?> </a></span></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
      
     </ul>
    </div>
    <div class="nav_btn">
     <a href="#">登录</a>
     <a href="#">注册</a>
    </div>
   </div>
  </div>
 </div>

<!-- /头部 -->

<!-- 主体 -->

  <div class="row" style="margin:0; position:relative;">
    <div class="col-md-12" style="height:120px;"></div>
  </div>
  
  <div class="row" style="margin:0;">
    <div class="consx_container bg">
      <div class=" consx_l_con bg">
        <div class=""> <img style="margin-top:-12px;" src="/zmjh/Template/zhumeng/asset/img/content/l_con.png"/> <img src="/zmjh/Template/zhumeng/asset/img/content/l_fgx.png"/> </div>
        <div class="">
          <ul class="consx_con_ul">
          <?php $__LIST__=lists('1','0,10'); if(is_array($__LIST__)): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><div class="triangle-right"></div><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--<li>
              <div class="triangle-right"></div>
              <a>资源管理专员(1名)</a></li>
            <li>
              <div class="triangle-right"></div>
              <a>客服专员(3名)</a></li>
            <li>
              <div class="triangle-right"></div>
              <a>专题主编(2名)</a></li>
            <li>
              <div class="triangle-right"></div>
              <a>市场推广专员(1名)</a></li>
            <li>
              <div class="triangle-right"></div>
              <a>电话销售(5名)</a></li>
            <li>
              <div class="triangle-right"></div>
              <a>销售主管(2名)</a></li>
            <li>
              <div class="triangle-right"></div>
              <a>大客户经理(1名)</a></li>
            <li>
              <div class="triangle-right"></div>
              <a>绩效专员(10名)</a></li>
            <li>
              <div class="triangle-right"></div>
              <a>IT系统开发工程师(3名)</a></li>-->
          </ul>
        </div>
      </div>
      <div class="consx_r_con1 bg">
        <?php if(info.title_color == '#555' ): ?><h3  style="margin-bottom:14px;text-align: center"><?php echo ($info["title"]); ?></h3>
          <?php else: ?>
          <h3 class="text-center" style="margin-bottom:20px;text-align: center;color:<?php echo ($info["title_color"]); ?>"><?php echo ($info["title"]); ?>
          </h3><?php endif; ?>
        <div class="bg">
           <span><?php echo (date('Y-m-d H:i',$info["create_time"])); ?></span>&nbsp;&nbsp;&nbsp;
           <span>浏览：<?php echo ($info["view"]); ?></span>
          </div>
          <div class='pos_des bg'>
            <div>
             <span>职位名称：<?php echo ($info["position"]); ?></span>
             <span style="margin-left:270px;">月薪：<?php echo ($info["salary"]); ?></span>
            </div>
            <div>
             <span>生活福利：<?php echo ($info["position"]); ?></span>
             <span style="margin-left:270px;">招聘人数：<?php echo ($info["number"]); ?></span>
            </div>
          </div>
          <div style="margin-top:40px;">
           <input type="button" value="投递简历"></input>
          </div>
      </div>
      <div class="consx_r_con2 bg">
        <div class="l_nav">
         <span><a id="test">职位描述</a></span>
         <span><a id="test2">公司介绍</a></span>
         <span><a>申请记录</a></span>
         <span><a>公司评价</a></span>
        </div>
        <div class="r_nav">
         <p class="test" style="display:none;"><?php echo ($info["position_des"]); ?></p>
         <p class="test2" style="display:none;">test2</p>
        </div>
      </div>
    </div>
  </div>


<!-- /主体 -->

<!-- 底部 -->
<!--footer-->

    <!--footer testimonail-->
    
   
   <div class="row" style="margin:0;">
    <div class="col-md-12 footer">
      <div class="footer_inner">
       <div class="lianj">
       <p>友情链接</p>
        <ul>
         <li><a>天津大学</a></li>
         <li><a>南开大学</a></li>
         <li><a>天津工业大学</a></li>
         <li><a>天津理工大学</a></li>
        </ul>
       </div>
       <div class="phone">
        <p>客户端下载</p>
         <div style="height:100px;">
          <div style="width:100px;height:100px;float:left; margin-left:20px; background-color:#FFF;"><img style="width:100px;" src="/zmjh/Template/zhumeng/asset/img/content/weixin.jpg" /></div>
          <div style="width:100px;height:100px;margin-left:70px; float:left;background-color:#FFF;"><img style="width:100px;" src="/zmjh/Template/zhumeng/asset/img/content/weixin.jpg" /></div>
         </div>
       </div>
       <div class="address">
        <p>地址:天津市西青区鑫茂科技园</p>
        <p>电话:13920344xxx</p>
        <p>邮箱:xxxxxxxx@gmail.com</p>
       </div>
      </div>
    </div>
   </div>
    </div>


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
<!--<script type="text/javascript" src="/zmjh/Template/zhumeng/asset/js/list_page.js"></script>-->
<!--<script type="text/javascript" src="/zmjh/Public/jdi/job_cate.js"></script>
<script type="text/javascript" src="/zmjh/Template/zhumeng/asset/js/fenlei.js"></script>-->





</body>
</html>