<?php if (!defined('THINK_PATH')) exit();?><div class="btn-group">
    <a class="btn btn-sm btn-primary" href="<?php echo addons_url('Advertising://Advertising/add');?>">新 增</a>
    <button class="btn btn-sm btn-primary ajax-post" target-form="ids" url="<?php echo addons_url('Advertising://Advertising/savestatus',array('status'=>1));?>">启 用</button>
    <button class="btn btn-sm btn-primary ajax-post" target-form="ids" url="<?php echo addons_url('Advertising://Advertising/savestatus',array('status'=>0));?>">禁用</button>
</div>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th class="row-selected row-selected">
                <lable>
                    <input class="check-all ace" type="checkbox">
                <span class="lbl"></span>
                </lable>
            </th>
			<th style="text-align: center;">序号</th>
            <th  style="text-align: center;">标识</th>
            <th  style="text-align: center;">调用代码</th>
			<?php if(is_array($listKey)): $i = 0; $__LIST__ = $listKey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><th style="text-align: center;"><?php echo ($vo); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
			<th style="text-align: center;">操作</th>
		</tr>
	</thead>
	<tbody>
		<?php if(is_array($_list)): $i = 0; $__LIST__ = $_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lv): $mod = ($i % 2 );++$i;?><tr>
			<td>
                <lable>
                    <input class="ace ids" type="checkbox" name="id[]" value="<?php echo ($lv["id"]); ?>">
                    <span class="lbl"></span>
                </lable>
            </td>
			<td><?php echo ($lv["id"]); ?></td>
            <td><?php echo ($lv["pos"]); ?></td>
            <?php
 $lv['code']="<?php echo hook('Advs', '".$lv['pos']."');?>"; echo $lv['code']; ?>
            <td>{:hook('Advs', '<?php echo ($lv['pos']); ?>')}</td>


			<?php if(is_array($listKey)): $i = 0; $__LIST__ = $listKey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lk): $mod = ($i % 2 );++$i;?><td><?php echo ($lv["$key"]); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
			<td>
				<a href="<?php echo addons_url('Advertising://Advertising/edit',array('id'=>$lv['id']));?>">编辑</a>
				<?php if($lv["status"] == 1): ?><a class="confirm ajax-get" href="<?php echo addons_url('Advertising://Advertising/forbidden',array('id'=>$lv['id']));?>">禁用</a>
				<?php else: ?>
				<a class="confirm ajax-get" href="<?php echo addons_url('Advertising://Advertising/off',array('id'=>$lv['id']));?>">启用</a><?php endif; ?>
				<a class="confirm ajax-get" href="<?php echo addons_url('Advertising://Advertising/del',array('id'=>$lv['id']));?>">删除</a>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>
 </div>