<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
<title><?php echo ((isset($meta_title) && ($meta_title !== ""))?($meta_title):C('WEB_SITE_TITLE')); ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="renderer" content="webkit">
<!-- basic styles -->
<link href="/zmjh/Public/vendor/ace/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/zmjh/Public/vendor/ace/css/font-awesome.min.css" />

<!--[if IE 7]>
<link rel="stylesheet" href="/zmjh/Public/vendor/ace/css/font-awesome-ie7.min.css" />
<![endif]-->

<!-- page specific plugin styles -->
<link rel="stylesheet" href="/zmjh/Public/vendor/ace/css/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="/zmjh/Public/vendor/ace/css/jquery.gritter.css" />
<!-- fonts -->

<!-- ace styles -->

<link rel="stylesheet" href="/zmjh/Public/vendor/ace/css/ace.min.css" />
<link rel="stylesheet" href="/zmjh/Public/vendor/ace/css/ace-rtl.min.css" />
<link rel="stylesheet" href="/zmjh/Public/vendor/ace/css/ace-skins.min.css" />

<link rel="stylesheet" href="/zmjh/Public/Admin/css/comm.css" />
<!--[if lte IE 8]>
<link rel="stylesheet" href="/zmjh/Public/vendor/ace/css/ace-ie.min.css" />
<![endif]-->

<!--[if !IE]> -->

<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery-2.0.3.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery-1.10.2.min.js"></script>
<![endif]-->

<!-- ace settings handler -->

<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/ace-extra.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/html5shiv.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/respond.min.js"></script>
<![endif]-->

    

    
</head>
<body class="navbar-fixed">
<div class="shade" style="display:none"></div>
<!-- 头部 -->
<div class="navbar navbar-default navbar-fixed-top">
<script type="text/javascript">
    try {
        ace.settings.check('navbar', 'fixed')
    } catch (e) {
    }
</script>
<div class="container-fluid">
    <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" id="nav_top_main_bt" data-toggle="collapse" data-target="nav_top_main">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse" id="nav_top_main">
        <ul class="nav navbar-nav">
            <li class="menu_hide menu_hide1">
                <span>您好:<?php echo session('user_auth.nickname');?></span>
            </li>
            <li class="menu_hide menu_hide2">
                <a href="<?php echo U('Index/updatePassword');?>">
                    修改密码
                </a>
            </li>
            <li class="menu_hide menu_hide2">
                <a href="<?php echo U('Index/updateNickname');?>">
                    修改昵称
                </a>
            </li>
            <li class="menu_hide menu_hide3">
                <a href="<?php echo U('Public/logout');?>">
                    退出
                </a>
            </li>
            <li class="menu_hide" style="background-color: #fff;height:2px"></li>
            <li><a href="<?php echo U('Home/Index/index');?>" target="_blank" style="font-size: 28px;color: white;display: inline-block;margin-top: 5px;margin-right: 15px;"><?php echo (C("ADMIN_WEB_TITLE")); ?></a></li>
            <li ><a  href="<?php echo U('Index/index');?>" class="<?php echo ((isset($__INDEXCLASS__) && ($__INDEXCLASS__ !== ""))?($__INDEXCLASS__):''); ?>">首页</a></li>
            <?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i; if(($menu["hide"]) == "0"): ?><li ><a  class="<?php echo ((isset($menu["class"]) && ($menu["class"] !== ""))?($menu["class"]):''); ?>" href="<?php echo U($menu['url']);?>"><?php echo ($menu["title"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

        </ul>
        <ul class="user_menu_ul nav navbar-nav navbar-right ">
            <li >
                <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                    <i class="icon-user" style="font-size: 23px"></i>
                </a>
                <ul class="user-menu  dropdown-menu">
                    <li>
                        <span>您好:<?php echo session('user_auth.nickname');?></span>
                    </li>
                    <li class="menu_hide menu_hide2">
                        <a href="<?php echo U('Index/updatePassword');?>">
                            修改密码
                        </a>
                    </li>
                    <li class="menu_hide menu_hide2">
                        <a href="<?php echo U('Index/updateNickname');?>">
                            修改昵称
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Public/logout');?>">
                            退出
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /.ace-nav -->
</div>


<!-- /头部 -->

<!-- 主体 -->
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        
            <div class="sidebar sidebar-fixed" id="sidebar">
                <script type="text/javascript">
                    try {
                        ace.settings.check('sidebar', 'fixed')
                    } catch (e) {
                    }
                </script>

                <ul class="nav nav-list">
                    <?php if(!empty($_extra_menu)): ?>
                        <?php echo extra_menu($_extra_menu,$__MENU__); endif; ?>
                    <?php if(is_array($__MENU__["child"])): $i = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?><!-- 子导航 -->
                        <?php if(!empty($sub_menu)): if(empty($key)): if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="<?php echo ((isset($menu["class"]) && ($menu["class"] !== ""))?($menu["class"]):''); ?>">
                                        <a href="<?php echo _U($menu['url']);?>">
                                            <span class="menu-text"><?php echo ($menu["title"]); ?></span>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php else: ?>
                                <?php $group_class = $__MENU__['group_class'][$key]; ?>
                                <li class="<?php echo ($group_class); ?>">
                                    <a href="#" class="dropdown-toggle">
                                        <span class="menu-text"><?php echo ($key); ?></span>
                                        <b class="arrow icon-angle-down"></b>
                                    </a>
                                    <ul class="submenu">
                                        <?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="<?php echo ((isset($menu["class"]) && ($menu["class"] !== ""))?($menu["class"]):''); ?>">
                                                <a href="<?php echo _U($menu['url']);?>"><?php echo ($menu["title"]); ?></a>
                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </li><?php endif; endif; ?>
                        <!-- /子导航 --><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <!-- /.nav-list -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="icon-double-angle-right" data-icon1="icon-double-angle-left"
                       data-icon2="icon-double-angle-right"></i>
                </div>
                <script type="text/javascript">
                    try {
                        ace.settings.check('sidebar', 'collapsed')
                    } catch (e) {
                    }
                </script>
            </div>
        

        <div class="main-content">

            <div class="page-content">
                <div class="page-header">
                    <h1 class="page-header-title">
                        
    区县用户信息

                    </h1>
                </div>
                <!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        
    <!--"Modules://BaiBang@index/aa"-->
    <div>
        <div class="btn-group">
            <button class="btn btn-sm btn-primary ajax-post" url="<?php echo _U('resume');?>" target-form="ids">启 用</button>
            <button class="btn btn-sm btn-primary ajax-post" url="<?php echo _U('forbid');?>" target-form="ids">禁 用</button>
            <button class="btn btn-sm btn-primary ajax-post confirm" url="<?php echo _U('del');?>" target-form="ids"
                    data-tip="确定要删除么?">删 除
            </button>
        </div>

        <div class="pull-right">
            <span class="input-icon">
                <input type="text" placeholder="搜索用户昵称,按回车搜索" autocomplete="off" id="search">
                <i class="icon-search"></i>
			</span>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th class="center">
                    <label>
                        <input type="checkbox" class="ace check-all">
                        <span class="lbl"></span>
                    </label>
                </th>
                <th>用户名</th>
                <th>昵称</th>
                <th>登录次数</th>
                <th>所在区</th>
                <th>最后登录时间</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$com): $mod = ($i % 2 );++$i;?><tr>
                        <td class="center">
                            <label>
                                <input type="checkbox" class="ids ace" name="id[]" value="<?php echo ($com["id"]); ?>">
                                <span class="lbl"></span>
                            </label>
                        </td>
                        <td><?php echo ($com["username"]); ?></td>
                        <td>
                            <?php echo ($com["nickname"]); ?>
                        </td>
                        <td><?php echo ($com["login_times"]); ?></td>
                        <td><?php echo ($com["extend_text"]); ?></td>
                        <td><?php echo (date("Y-m-d h:i",$com["last_login_time"])); ?></td>
                        <td>
                            <?php echo ($com["status_text"]); ?>
                        </td>
                        <td>
                            <a title="删除" class="confirm ajax-get"   href="<?php echo _U('del',array('id'=>$com['id']));?>">删除</a>
                            <?php if($com['status'] == 0): ?><a title="启用" class="ajax-get"   href="<?php echo _U('resume',array('id'=>$com['id']));?>">启用</a><?php endif; ?>
                            <?php if($com['status'] == 1): ?><a title="禁用" class="ajax-get"   href="<?php echo _U('forbid',array('id'=>$com['id']));?>">禁用</a><?php endif; ?>
                            <a title="禁用" class="changePassword" href="javascript:;"   data-url="<?php echo _U('changePassword',array('id'=>$com['id']));?>">修改密码</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                <td colspan="8" class="text-center"> aOh! 暂时还没有内容! </td><?php endif; ?>
            </tbody>
        </table>

        <!-- 分页 -->
        <div class="page">
            <?php echo ($_page); ?>
        </div>
    </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.page-content -->
            </div>
            <!-- /.main-content -->
        </div>
    </div>
</div><!-- /.main-container -->



<!-- /主体 -->

<!-- 底部 -->

<script type="text/javascript">
    !function(){
        var str = "<script src='/zmjh/Public/vendor/ace/js/jquery.mobile.custom.min.js'>"+"<"+"script>";
        if("ontouchend" in document) document.write(str);
    }();
</script>
<script src="/zmjh/Public/vendor/ace/js/bootstrap.min.js"></script>
<script src="/zmjh/Public/vendor/ace/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/excanvas.min.js"></script>
<![endif]-->

<script type="text/javascript"  src="/zmjh/Public/vendor/ace/js/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery.easy-pie-chart.min.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/flot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/flot/jquery.flot.resize.min.js"></script>

<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/bootbox.min.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery.gritter.min.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/bootstrap-wysiwyg.min.js"></script>

<!-- ace scripts -->

<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/ace-elements.min.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/ace.min.js"></script>
<script type="text/javascript" src="/zmjh/Public/vendor/ace/js/jquery.hotkeys.min.js"></script>
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




    <script>
        $(function() {
            //回车搜索
            $("#search").keyup(function(e) {
                if (e.keyCode === 13) {
                    var url =  "<?php echo _U('index?nickname=PLACEHODLE');?>";
                    var query = $('#search').val();
                    url = url.replace('PLACEHODLE',query);
                    window.location.href = url;
                    return false;
                }
            });
        });

        $(".changePassword").click(function() {
            var url =  $(this).data('url');
            var id = $(this).data("id");
            bootbox.prompt("请输入新密码（密码明文显示，注意保密!）", function(result) {
                if(result !== null){
                    if (result) {
                        $.post(
                                url
                                ,
                                {
                                    'password' : result,
                                    'id':id
                                },
                                function(data){
                                    if (data.status) {
                                        okAlert(data.msg);
                                    }else{
                                        errorAlert(data.msg);
                                    }
                                },
                                'json'
                        );
                    } else {
                        errorAlert("密码不能未空");
                    }
                }
            });
        });
    </script>

</body>
</html>