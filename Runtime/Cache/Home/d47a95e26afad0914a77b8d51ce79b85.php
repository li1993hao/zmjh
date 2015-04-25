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

<!--main tagline area-->
<!--main content-->
      <div class="row" style="margin:0;">
   <div class="main_banner">
     <div class="main_width">
      <div class="main_inner">
       <div class="main_tzzx">
          <div style="border-bottom:1px solid #82b87b;"><p>通知中心</p></div>
          <div>
           <ul>
            <li><a>第一批名单公示</a></li>
            <li><a>天津市生涯教练团</a></li>
            <li><a>天津市生涯教练团</a></li>
            <li><a>第一批名单公示</a></li>
            <li><a>天津市生涯教练团</a></li>
           </ul>
          </div>
          </div>
          <div class="main_feature">
            <ul>
             <li>
              <span class="icons1"></span>
              <p>逐梦专项</p>
             </li>
             <li>
              <span class="icons2"></span>
              <p>助力逐梦</p>
             </li>
             <li>
              <span class="icons3"></span>
              <p>逐梦榜单</p>
             </li>
             <li>
              <span class="icons4"></span>
              <p>了解逐梦</p>
             </li>
            </ul>
          </div>
         </div>
       </div>
     </div>
   </div>
   
   <div class="bg-img">
   <div class="row" style="margin:0;">
    <div class="col-md-12" style="height:30px;"></div>
   </div>
   <div class="row" style="margin:0;">
    <div class="col-md-12">
      <div class="t_sel">
      <form>
      <!--<div class="col-md-3 sel_la" id="bt_zwlb" >
           <label style="padding:0px 0px;margin-top:5px;float:left;font-family:'Microsoft YaHei';border:1px solid #82b87b;">请选择职位类别:</label>
          <div class="zhiwei" >
           <table>
            <tbody id="tb"></tbody>
           </table>
          </div>
          <div>
         
          </div>
         </div>
         <div class="col-md-4 bg sel_la" id="bt_hylb" style="border:1px solid #82b87b;border-left:1px solid #FFF;">
           <label style="padding:0px 0px;margin-top:5px;float:left;font-family:'Microsoft YaHei';">请选择行业类别:</label>
          <div class="hangye bg" >
          <?php if(is_array(C("COMPANY_CATEGORY"))): $i = 0; $__LIST__ = C("COMPANY_CATEGORY");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3" ><a style="color:#000;"><?php echo ($vo); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
         </div>
         </div>-->
       <div class="col-md-12" style="padding-left:0px; ">
        <input type="text" name="sel" style="width:100%;height:32px;" placeholder="搜索实习信息~企业" />
       </div>
       </form>
      </div>
    </div>
   </div>
   <div class="col-md-12">
    <div class="sel_p">
     <p>这次，让我们改变实习>></p>
    </div>
  </div>
  
  <div class="col-md-12">
    <div class="sel_a" id="sel_a" style="font-family:'Microsoft YaHei';">
     <a>点击查看更多</a>
    </div>
  </div>
   
   <div class="row " style="margin:0;">
   <div class="col-md-12" style="height:50px;"></div>
   </div>
   <div class="row" style="margin:0;">
   <div class="col-md-12" id="title_nav">
    <div class="title_nav">
    <a href="#">全部</a>
    <a>最新</a>
    <a>最热</a>
    <a>企事业单位</a>
    <a>国有企业</a>
    <a>非公企业</a>
    <div class="col-md-12 ctn">
    <div class="col-md-4 bg2 c_ctn">
     <div class="c_box1" style="height:100px;">
     <span style="float:left;"><img src="/zmjh/Template/zhumeng/asset/img/content/5.png" /></span>
      <div><p style="color:#A5A5A5;">天津时代科技</p></div>
      <p >【直招】PHP工程师</p>
     </div>
     <div class="c_box2">
      <p>职位需求</p>
      <p>一.初中文化程度</p>
      <p>二.年龄18-35岁，会骑电动车</p>
      <p>三.需要有健康证(如果没有,公司可办理)</p>
      <p>四.需要有健康证(如果没有,公司可办理)，需要有健康证(如果没有,公司可办理)</p>
     </div>
    </div>
    <div class="col-md-4 bg2 c_ctn">
     <div class="c_box1" style="height:100px;">
     <span style="float:left;"><img src="/zmjh/Template/zhumeng/asset/img/content/6.png" /></span>
      <div><p style="color:#A5A5A5;">天津时代科技</p></div>
      <p >【直招】销售代表</p>
     </div>
     <div class="c_box2">
      <p>职位需求</p>
      <p>一.23岁以上，大专学历</p>
      <p>二.年龄18-35岁，会骑电动车</p>
      <p>三.富有亲和力，具备良好的团队合作精神</p>
      <p>四.性格外向，思维敏捷，具有良好的逻辑思维能力和行动力</p>
     </div>
    </div>
    <div class="col-md-4 bg2 c_ctn">
     <div class="c_box1" style="height:100px;">
     <span style="float:left;"><img src="/zmjh/Template/zhumeng/asset/img/content/7.png" /></span>
      <div><p style="color:#A5A5A5;">天津时代科技</p></div>
      <p >【直招】商务代表</p>
     </div>
     <div class="c_box2">
      <p>职位需求</p>
      <p>一.初中文化程度</p>
      <p>二.40岁以下车</p>
      <p>三.需要有健康证(如果没有,公司可办理)</p>
      <p>四.1年市场销售工作经验，有客户资源或从事保险、银行信用卡业务者优先考虑。</p>
     </div>
    </div>
    <div class="col-md-4 bg2 c_ctn">
     <div class="c_box1" style="height:100px;">
     <span style="float:left;"><img src="/zmjh/Template/zhumeng/asset/img/content/8.png" /></span>
      <div><p style="color:#A5A5A5;">天津时代科技</p></div>
      <p >【直招】教师</p>
     </div>
     <div class="c_box2">
      <p>职位需求</p>
      <p>一.高中文化程度</p>
      <p>二.年龄18-35</p>
      <p>三.对学生进行专业分析和评测</p>
      <p>四.有1年教学经历</p>
     </div>
    </div>
    <div class="col-md-4 bg2 c_ctn">
     <div class="c_box1" style="height:100px;">
     <span style="float:left;"><img src="/zmjh/Template/zhumeng/asset/img/content/9.png" /></span>
      <div><p style="color:#A5A5A5;">天津时代科技</p></div>
      <p >【直招】WEB工程师</p>
     </div>
     <div class="c_box2">
      <p>职位需求</p>
      <p>一.初中文化程度</p>
      <p>二.年龄18-35岁，会骑电动车</p>
      <p>三.需要有健康证(如果没有,公司可办理)</p>
      <p>四.1年以上（非实习）手机网页的开发经验及大中型网站web前端开发经验；</p>
     </div>
    </div>
    <div class="col-md-4 bg2 c_ctn">
     <div class="c_box1" style="height:100px;">
     <span style="float:left;"><img src="/zmjh/Template/zhumeng/asset/img/content/10.png" /></span>
      <div><p style="color:#A5A5A5;">天津时代科技</p></div>
      <p >【直招】网页设计师</p>
     </div>
     <div class="c_box2">
      <p>职位需求</p>
      <p>一.初中文化程度</p>
      <p>二.年龄18-35岁，会骑电动车</p>
      <p>三.中专以上学历、应届生优先</p>
      <p>四.需要有健康证，需要有健康证(如果没有,公司可办理)</p>
     </div>
    </div>
    <div class="col-md-4 bg2 c_ctn">
     <div class="c_box1" style="height:100px;">
     <span style="float:left;"><img src="/zmjh/Template/zhumeng/asset/img/content/11.png" /></span>
      <div><p style="color:#A5A5A5;">天津时代科技</p></div>
      <p >【直招】会计</p>
     </div>
     <div class="c_box2">
      <p>职位需求</p>
      <p>一.初中文化程度</p>
      <p>二.年龄18-35岁，会骑电动车</p>
      <p>三.需要有健康证(如果没有,公司可办理)</p>
      <p>四.需要有健康证(如果没有,公司可办理)，需要有健康证(如果没有,公司可办理)</p>
     </div>
    </div>
    <div class="col-md-4 bg2 c_ctn">
     <div class="c_box1" style="height:100px;">
     <span style="float:left;"><img src="/zmjh/Template/zhumeng/asset/img/content/12.png" /></span>
      <div><p style="color:#A5A5A5;">天津时代科技</p></div>
      <p >【直招】房地产销售</p>
     </div>
     <div class="c_box2">
      <p>职位需求</p>
      <p>一.初中文化程度</p>
      <p>二.年龄18-35岁，会骑电动车</p>
      <p>三.需要有健康证(如果没有,公司可办理)</p>
      <p>四.需要有健康证(如果没有,公司可办理)，需要有健康证(如果没有,公司可办理)</p>
     </div>
    </div>
    <div class="col-md-4 bg2 c_ctn">
     <div class="c_box1" style="height:100px;">
     <span style="float:left;"><img src="/zmjh/Template/zhumeng/asset/img/content/13.png" /></span>
      <div><p style="color:#A5A5A5;">天津时代科技</p></div>
      <p >【直招】技工</p>
     </div>
     <div class="c_box2">
      <p>职位需求</p>
      <p>一.初中文化程度</p>
      <p>二.年龄18-35岁，会骑电动车</p>
      <p>三.愿意参加2-4个月的岗前实训</p>
      <p>四.理工类、计算机相关专业专业优先</p>
     </div>
    </div>
    
    
    
   </div>
    </div>
    
   </div>
   </div>
   
   <div class="row" style="margin:0;">
    <div class="col-md-12" style="height:50px;">
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