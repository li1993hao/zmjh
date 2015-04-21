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
<!--main content-->
      <div class="row">
       <div class="col-md-12 bg" style="height:300px;">
       
         <div id="carousel-example-generic" class="carousel slide h_pic" data-ride="carousel"> 
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active" > <img class="img-responsive" style="height:320px; width:100%;"src="/zmjh/Template/zhumeng/asset/img/content/bg3.png" alt="...">
          <!--style="background-size:cover;height:320px;width:100%;"-->
            <!--<div class="carousel-caption"> ... </div>-->
          </div>
          <div class="item" > <img class="img-responsive" style="height:320px;  width:100%;" src="/zmjh/Template/zhumeng/asset/img/content/bg2.jpg" alt="...">
            <!--<div class="carousel-caption"> ... </div>-->
          </div>
        </div>
        <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> 
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>--> </div>
        
         <div class="bg_login" id="form" style="position:absolute; left:75%">
         
          <form class="form-horizontal">
           <div class="form-group">
            
            <div class="col-sm-12">
            <input type="text" class="form-control" id="account" placeholder="账号">
            </div>
           </div>
          
           <div class="form-group">
            
            <div class="col-sm-12">
            <input type="password" class="form-control" id="password" placeholder="密码">
            </div>
           </div>
           
           <div >
            <label class="radio-inline" style="color:#fff;">
             <input  type="radio" name="radio" id="inlineRadio1" value="school" checked="checked"> 学校
            </label>
           
            <label class="radio-inline" style="color:#fff;">
             <input type="radio" name="radio" id="inlineRadio1" value="company"> 企业
            </label>
           </div>
           
           <div class="col-md-12 fg"></div>
           
           <div class="col-md-12">
            <input class="btn btn-info btn-block" type="button" name="land" value="登录"></input>
           </div>
            
            <div class="col-md-12 fgx"></div>
            
            <div class="col-md-12">
            <a class="btn btn-info btn-block" href="" name="reg">注册</a>
            </div>
           
          </form>
          </div>
         </div>
       </div>
       
      
       <div class="row">
        <div class="col-md-12 fg" style="position:absolute height:600px;">
        </div>
       </div>
       
       <div class="row bg">
    <div class="bg con_center" style="width:70%" >
         <div class="col-md-3" id="bt_zwlb" style="border:1px solid #000">
           <label style="padding:10px 0px;margin-top:5px;float:left;">请选择职位类别:</label>
          <li class="down"><img src="/zmjh/Template/zhumeng/asset/img/content/select_icon.gif" /></li>
          <div class="zhiwei">
           <table>
            <tbody id="tb"></tbody>
           </table>
          </div>
          <div>
         
          </div>
         </div>
         
         <div class="bg col-md-3" id="bt_hylb" style="border:1px solid #000">
           <label style="padding:10px 0px;margin-top:5px;">请选择行业类别:</label>
          <li class="down"><img src="/zmjh/Template/zhumeng/asset/img/content/select_icon.gif" /></li>
          <div class="hangye bg">
          <?php if(is_array(C("COMPANY_CATEGORY"))): $i = 0; $__LIST__ = C("COMPANY_CATEGORY");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3" ><a style="color:#000;"><?php echo ($vo); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
         </div>
         </div>
         
         <div class="col-md-4 s_job_pad bg">
          <input type="text" placeholder="请输入职位名，公司名等关键字" style="width:250px; height:50px; margin-top:-11px;"/>
         </div>
         <div class="col-md-2 s_job_pad bg" >
          <button style="width:150px;">找工作</button>
         </div>
         <div>
         </div>
       </div>  
  </div>
       
       <div class="row">
        <div class="col-md-12 fg">
        </div>
       </div>
<div class="row" style="background-color:#FAFAFA">
       <div class="col-md-12 bg">
        <div class="con_center bg hotinfo" style="width:80%">
          <label>热门信息</label>
        </div>
       </div>
     </div>
     
      <div class="row" style="background-color:#FAFAFA">
        <div class="col-md-12 bg">
         <div class="con_center bg" style="width:80%;">
          <div class="col-md-4 bg" >
            <div class="hotinfo-list" style="background-color:#F2F2F2">
              <b>最新实习信息</b>
              <a class="hotinfo-a" href="#">更多</a>
            </div>
            <div class="hotinfo-content">
              <ul class="hotinfo-ul">
                <li class="hotinfo-li">
                  <b>PHPxxxx开发人员</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>IOS开发</b>
                  <span>天津科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>教师</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>会计</b>
                  <span>天津有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>PHP开发人员</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-4 bg">
            <div>
              <div class="hotinfo-list" style="background-color:#F2F2F2">
              <b>最热实习信息</b>
              <a class="hotinfo-a" href="#">更多</a>
            </div>
            <div class="hotinfo-content">
              <ul class="hotinfo-ul">
                <li class="hotinfo-li">
                  <b>PHP开发人员</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>IOS开发</b>
                  <span>天津科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>教师</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>会计</b>
                  <span>天津有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>PHP开发人员</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
              </ul>
            </div>
            </div>
          </div>
          
          <div class="col-md-4 bg">
            <div>
              <div class="hotinfo-list" style="background-color:#F2F2F2">
              <b>机关企事业信息</b>
              <a class="hotinfo-a" href="#">更多</a>
            </div>
            <div class="hotinfo-content">
              <ul class="hotinfo-ul">
                <li class="hotinfo-li">
                  <b>PHP开发人员</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>IOS开发</b>
                  <span>天津科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>教师</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>会计</b>
                  <span>天津有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>PHP开发人员</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
              </ul>
            </div>
            </div>
          </div>
         </div>
        </div>
      </div>
      
      <div class="row"style="background-color:#FAFAFA">
        <div class="col-md-12 bg">
         <div class="con_center bg" style="width:80%;">
           <div class="col-md-4 bg" >
            <div class="hotinfo-list" style="background-color:#F2F2F2">
              <b>国有企业信息</b>
              <a class="hotinfo-a" href="#">更多</a>
            </div>
            <div class="hotinfo-content">
              <ul class="hotinfo-ul">
                <li class="hotinfo-li">
                  <b>PHP开发人员</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>IOS开发</b>
                  <span>天津科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>教师</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>会计</b>
                  <span>天津有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>PHP开发人员</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
              </ul>
            </div>
          </div>
          
           <div class="col-md-4 bg" >
            <div class="hotinfo-list" style="background-color:#F2F2F2">
              <b>非公企业信息</b>
              <a class="hotinfo-a" href="#">更多</a>
            </div>
            <div class="hotinfo-content">
              <ul class="hotinfo-ul">
                <li class="hotinfo-li">
                  <b>PHP开发人员</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>IOS开发</b>
                  <span>天津科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>教师</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>会计</b>
                  <span>天津有限公司</span>
                  <i>2015-4-7</i>
                </li>
                <li class="hotinfo-li">
                  <b>PHP开发人员</b>
                  <span>天津时代科技有限公司</span>
                  <i>2015-4-7</i>
                </li>
              </ul>
            </div>
          </div>
         </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12" style="height:20px;">
        </div> 
       </div>
      
      <div class="row">
      <div class="con_center bg" style="width:80%">
       <div class="col-md-12">
       <div class="col-md-8 hotinfo bg">
         <label>排行榜</label>
        </div>
        
        <div class="col-md-4 hotinfo bg" >
         <label>通知中心</label>
       </div>
       
        </div>
       </div>
       </div>      
      
      <div class="row">
        <div class="con_center bg" style="width:80%">
         <div class="col-md-12">
         
         <div class="col-md-8 well bg" style="margin-top:10px;" >
          <div class="col-md-3 phb" style="margin-left:-16px;border-radius:5px;" id="d_a">
           <ul class="nav nav-pills nav-stacked">
            <li class="active"><a id="1">学生注册数</a></li>
            <li><a id="2" >学校签约数</a></li>
            <li><a id="3" >岗位最多区县局</a><li>
            <li><a id="4" >评价最高企业</a><li>
            <li><a id="5" >简历最多企业</a><li>
           </ul>
          </div>
          <div class="col-md-9 " style="background-color:#FFF; border-radius:5px;" id="d_table" >
           <div id="6">
           <table class="table table-condensed table-hover">
            <thead>
             <tr>
              <th style="width:10%">排名</th>
              <th style="width:70%">学校</th>
              <th style="width:20%">注册人数</th>
             </tr>
            </thead>
            <tfoot></tfoot>
            <tbody>
             <tr><td>1</td><td>南开大学</td><td>100</td></tr>
             <tr><td>2</td><td>天津大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
            </tbody>
           </table>
           </div>
           <div id="7" style="display:none">
           <table class="table table-condensed table-hover">
            <thead>
             <tr>
              <th style="width:10%">排名</th>
              <th style="width:70%">学校</th>
              <th style="width:20%">注册人数</th>
             </tr>
            </thead>
            <tfoot></tfoot>
            <tbody>
             <tr><td>1</td><td>南开大学</td><td>100</td></tr>
             <tr><td>2</td><td>天津大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
            </tbody>
           </table>
           </div>
           <div id="8" style="display:none">
           <table class="table table-condensed table-hover">
            <thead>
             <tr>
              <th style="width:10%">排名</th>
              <th style="width:70%">学校</th>
              <th style="width:20%">注册人数</th>
             </tr>
            </thead>
            <tfoot></tfoot>
            <tbody>
             <tr><td>1</td><td>南开大学</td><td>100</td></tr>
             <tr><td>2</td><td>天津大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
            </tbody>
           </table>
           </div>
           <div id="9" style="display:none">
           <table class="table table-condensed table-hover">
            <thead>
             <tr>
              <th style="width:10%">排名</th>
              <th style="width:70%">学校</th>
              <th style="width:20%">注册人数</th>
             </tr>
            </thead>
            <tfoot></tfoot>
            <tbody>
             <tr><td>1</td><td>南开大学</td><td>100</td></tr>
             <tr><td>2</td><td>天津大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
            </tbody>
           </table>
           </div>
           <div id="10" style="display:none">
           <table class="table table-condensed table-hover">
            <thead>
             <tr>
              <th style="width:10%">排名</th>
              <th style="width:70%">学校</th>
              <th style="width:20%">注册人数</th>
             </tr>
            </thead>
            <tfoot></tfoot>
            <tbody>
             <tr><td>1</td><td>南开大学</td><td>100</td></tr>
             <tr><td>2</td><td>天津大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
             <tr><td>3</td><td>理工大学</td><td>100</td></tr>
            </tbody>
           </table>
           </div>
          </div>
         </div>
         
         <div class="col-md-4 bg well" style="margin-top:10px; height:400px;">
           <div class="tongzhigonggao">
            <?php $__LIST__=lists('6','0,6'); if(is_array($__LIST__)): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-9" style="padding:0px; height:45px;border-bottom:1px dotted #000000;">
                 <span class=""><?php echo ($key+1); ?>.</span>
                 <?php echo ($vo["title"]); ?>
                </div>
                <div class="col-md-3" style="text-align:right;padding:0px; height:45px;">
                <a href="<?php echo ($vo["url"]); ?>"><span>更多</span></a>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div style="text-align:right;">
              <a href='<?php echo cat_field('6','url') ?>'>更多</a>
            </div>
           </div>
          </div>
         </div>
         
         </div>
        </div>
       
      
      
      
      <div class="row">
        <div class="col-md-12 fg">
        </div>
       </div>
       <div class="row">
        <div class="col-md-12 fg">
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
      <div class="row" style="background-color:#303A40">
       <div class="bg con_center bottom" style="width:80%;color:white;">
        <div class="col-md-2 bg yqlj">
         <label>友情链接:</label>
         <div style="margin-top:30px;" >
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
        <div class="col-md-7 col-md-offset-1">
         <div>
          <p>客户端下载</p>
          <img width="150px;" src="/zmjh/Template/zhumeng/asset/img/content/weixin.jpg" />
          <img width="150px;" src="/zmjh/Template/zhumeng/asset/img/content/weixin.jpg"/ />
         </div>
        </div>
        <div class="col-md-2 bg" style="color:white;">
         <div style="float:right;">
           <p><label>微信平台</label></p>
          <img width="150px" src="/zmjh/Template/zhumeng/asset/img/content/weixin.jpg"/>
         </div>
         <?php echo plugin('IPlistener');?>
        </div>
       </div>
       
      </div>
      
        <div class="row">
         <div class="col-md-12" style="height:50px;">
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