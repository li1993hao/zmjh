<?php if (!defined('THINK_PATH')) exit(); if(!empty($_list)): ?><div class="dialogs">
        <?php if(is_array($_list)): $i = 0; $__LIST__ = $_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemdiv dialogdiv">
                <div class="body">
                    <div class="time">
                        <i class="icon-time"></i>
                        <span class="green"><?php echo (date("Y-m-d H:i",$vo["create_time"])); ?></span>
                    </div>
                    <div class="name">
                        姓名: <a href="#"><?php echo ($vo["name"]); ?></a>
                    </div>
                    <div class="name">
                        邮箱: <a href="#"><?php echo ((isset($vo["email"]) && ($vo["email"] !== ""))?($vo["email"]):"无"); ?></a>
                    </div>
                    <div class="name">
                        电话: <a href="#"><?php echo ((isset($vo["phone"]) && ($vo["phone"] !== ""))?($vo["phone"]):"无"); ?></a>
                    </div>
                    <div class="text">
                        <span style="color:#999">留言内容:</span><br/>
                        <?php echo ($vo["content"]); ?>
                    </div>
                    <div class="tools">
                        <a href="<?php echo addons_url('LiuYan://Liuyan/del?ids='.$vo['id']);?>" class="ajax-get" title="删除"><i class="red icon-trash bigger-150"></i></a>
                    </div>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php else: ?>
    <h1 class="text-center">暂无留言!</h1><?php endif; ?>
<!-- 分页 -->
<div class="page">
    <?php echo ($_page); ?>
</div>
</div>