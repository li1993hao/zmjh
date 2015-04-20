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
<link href="/zmjh/Template/zhumeng/asset/css/main_page.css" rel="stylesheet"/>



    
    
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
<!--main content-->
      <div class="row">
       <div class="col-md-12 bg">
       
         <div id="carousel-example-generic" class="carousel slide h_pic" data-ride="carousel"> 
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active" > <img class="img-responsive" style="height:320px;"src="/zmjh/Template/zhumeng/asset/img/content/bg3.png" alt="...">
          <!--style="background-size:cover;height:320px;width:100%;"-->
            <!--<div class="carousel-caption"> ... </div>-->
          </div>
          <div class="item" > <img class="img-responsive" style="height:320px;" src="/zmjh/Template/zhumeng/asset/img/content/bg2.jpg" alt="...">
            <!--<div class="carousel-caption"> ... </div>-->
          </div>
        </div>
        <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> 
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>--> </div>
        
         <div class=" col-md-2 col-md-offset-9  bg_login" id="form">
         
          <form class="form-horizontal">
           <div class="form-group">
            <!--<label for="account" class="col-sm-3 control-label">账号</label>-->
            <div class="col-sm-12">
            <input type="text" class="form-control" id="account" placeholder="账号">
            </div>
           </div>
          
           <div class="form-group">
            <!--<label for="password" class="col-sm-3 control-label">密码</label>-->
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
        <div class="col-md-12 fg">
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
         
         <div class="col-md-4 bg" style="margin-top:10px;">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <!--1-->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
               <h4 class="panel-title">
                <a  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">第一批公示名单
        </a>
             </h4>
           </div>
         <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        test
      </div>
    </div>
  </div>
  <!--2-->
          <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          和平区名单
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        test
      </div>
    </div>
  </div>
  <!--3-->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
           河西区名单
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        test
      </div>
    </div>
  </div>
  <!--4-->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           河北区名单
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        test1
      </div>
    </div>
  </div>
  <!--5-->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
           河东区名单
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        test1
      </div>
    </div>
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
        $("#nav_top_main_bt").click(function(){
            $("#nav_top_main").toggle(200);
        })
    })();
</script>
<script type="text/javascript" src="/zmjh/Public/vendor/think.js"></script>
<script type="text/javascript" src="/zmjh/Public/Admin/js/common.js"></script>
<script src="/zmjh/Public/vendor/ace/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/zmjh/Template/zhumeng/asset/js/main_page.js"></script>



<?php echo hook('pageFooter');?>
</body>
</html>