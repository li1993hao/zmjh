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


    
    <link href="/zmjh/Template/zhumeng/Person/asset/person.css" rel="stylesheet"/>

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

    <div class="container page-content">
        <div class="row">
            ﻿<div class="person_menu col-sm-4">
    <ul>
        <li>功能菜单</li>
        <li>基本信息</li>
        <li>我的简历</li>
        <li>我关注的企业</li>
        <li>通知中心</li>
        <li>公司评价</li>
    </ul>
</div>

            <div class="col-sm-8">
                    <form class="form-horizontal" role="form" action="<?php echo _U();?>">
                        <div id="legend" class="">
                            <legend class="">基本信息<?php if(empty($info)): ?>(赶快完善下个人信息吧!)<?php endif; ?>
                                <span  class="pull-right">位置: 首页>个人中心>基本信息</span>
                            </legend>
                        </div>
                        <div class="form-group">
                            <label for="name"  class="col-sm-2 control-label">姓名</label>
                            <div class="col-sm-5">
                                <input type="text" btvd-type="re" value="<?php echo ($info["name"]); ?>" btvd-err="姓名必填!" class="form-control" id="name"
                                       placeholder="请输入名字">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-2 control-label">姓别</label>
                            <div class="col-sm-5">
                                <?php if(info.sex == 1): ?><label class="radio-inline">
                                            <input type="radio" name="sex" value="1" checked id="sex"/>男
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="0"  name="sex" />女
                                    </label>
                                 <?php else: ?>
                                    <label class="radio-inline">
                                        <input type="radio" name="sex"  value="1"  id="sex"/>男
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" checked value="0" name="sex" />女
                                    </label><?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birthday" class="col-sm-2 control-label">出生日期</label>
                            <div class="col-sm-5">
                                <input type="text" class="date" <?php if(!empty($info["birthday"])): ?>value="<?php echo (date('Y-m-d',$info["birthday"])); ?>"<?php endif; ?>  btvd-type="re" btvd-err="出生日期必填!"  class="form-control" id="birthday" name="birthday"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">电子邮箱</label>
                            <div class="col-sm-5">
                                <input type="text"  btvd-type="mail" btvd-err="邮箱格式不正确！" value="<?php echo ($info["email"]); ?>"  class="form-control" id="email" name="email"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="school_1" class="col-sm-2 control-label">所在学校</label>
                            <div class="col-sm-5">
                                <select name="school_1" class="form-control" btvd-type="number" btvd-err="请选择所在学校" id="school_1">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="school_2" class="col-sm-2 control-label">所在院系</label>
                            <div class="col-sm-5">
                                <select name="school_2" class="form-control" btvd-type="number" btvd-err="请选择所在院系！" id="school_2">
                                    <option value="xuanze">请选择</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="graduation_time" class="col-sm-2 control-label">毕业时间</label>
                            <div class="col-sm-5">
                                <input type="text" <?php if(!empty($info["graduation_time"])): ?>value="<?php echo (date('Y-m-d',$info["graduation_time"])); ?>"<?php endif; ?>  class="date" btvd-type="re" btvd-err="毕业时间必填!" class="form-control" id="graduation_time" name="graduation_time"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info">保存</button>
                            </div>
                        </div>
                    </form>
            </div>
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
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery.gritter.min.js"></script>
<script type="text/javascript" src="/zmjh/Template/zhumeng/asset/js/main_page.js"></script>


    <link href="/zmjh/Public/vendor/uploadify/uploadify.css" rel="stylesheet" type="text/css">
    <link href="/zmjh/Public/vendor/datetimepicker/css/datetimepicker_blue.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/zmjh/Public/vendor/uploadify/jquery.uploadify.min.js"></script>
    <script type="text/javascript" src="/zmjh/Public/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="/zmjh/Public/vendor/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
    <script src="/zmjh/Public/vendor/bt-validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="/zmjh/Public/jdi/uni_cate1429511405.js"></script>
    <script type="text/javascript">
        var tj = job_cate[0].children;//天津的学校列表
        var html_op = "<option value='xuanze'>请选择</option>";
        for(var i=0; i<tj.length;i++){
            html_op+="<option value='"+tj[i].id+"'>"+tj[i].name+"</option>";
        }
        $("#school_1").empty().html(html_op).change(function(){
            school2($(this).val());
        });

        <?php if(!empty($info)): ?>Think.setValue("school_1",<?php echo ($info["school_1"]); ?>);
            $("#school_1").data('index',<?php echo ($info["school_1"]); ?>);
            school2(<?php echo ($info["school_1"]); ?>,$info.school_2);<?php endif; ?>

        function school2(id,select){
            for(var i=0; i<tj.length;i++){
                if(id == tj[i].id){
                    var s2 = tj[i].children;
                    var html_op = "<option value='xuanze'>请选择</option>";
                    for(var j=0; j<s2.length;j++){
                        html_op+="<option value='"+s2[j].id+"'>"+s2[j].name+"</option>";
                    }
                    $("#school_2").empty().html(html_op)
                    break;
                }
            }
            if(select){
                Think.setValue("school_2",select);
            }
        }

        $('.date').datetimepicker({
            format: 'yyyy-mm-dd',
            language:"zh-CN",
            minView:2,
            startView:4,
            autoclose:true

        });
        $('.form-horizontal').validation();
    </script>


<?php echo hook('pageFooter');?>
</body>
</html>