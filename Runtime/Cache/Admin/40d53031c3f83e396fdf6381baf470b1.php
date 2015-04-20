<?php if (!defined('THINK_PATH')) exit();?><div class="btn-group">
    <a class="btn btn-sm btn-primary" href="<?php echo addons_url('Advs://Advs/add');?>">新 增</a>
    <!-- <a class="btn" href="<?php echo addons_url('Advs://Advs/addAdvs');?>">分类</a> -->
    <button class="btn btn-sm btn-primary ajax-post" target-form="ids"
            url="<?php echo addons_url('Advs://Advs/savestatus',array('status'=>1));?>">启 用
    </button>
    <button class="btn btn-sm btn-primary ajax-post" target-form="ids"
            url="<?php echo addons_url('Advs://Advs/savestatus',array('status'=>0));?>">禁用
    </button>
</div>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th class="row-selected row-selected">
                <label>
                    <input class="check-all ace" type="checkbox">
                    <span class="lbl"></span>
                </label>
                </th>
            <th style="text-align: center;">序号</th>
            <?php if(is_array($listKey)): $i = 0; $__LIST__ = $listKey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><th style="text-align: center;"><?php echo ($vo); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
            <th style="text-align: center;">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($_list)): $i = 0; $__LIST__ = $_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lv): $mod = ($i % 2 );++$i;?><tr>
                <td>
                    <label>
                    <input class="ids ace" type="checkbox" name="id[]" value="<?php echo ($lv["id"]); ?>">
                        <span class="lbl"></span>
                        </label>
                </td>
                <td><?php echo ($lv["id"]); ?></td>
                <?php $sing = M('advertising')->find($lv['position']); $lv['positiontext'] = $sing['title']; $lv['statustext'] = $lv['status'] == 0 ? '禁用' : '正常'; $lv['create_time'] =intval($lv['create_time'])!=0? date('Y-m-d H:i', $lv['create_time']):''; $lv['end_time']= intval($lv['end_time'])!=0? date('Y-m-d H:i', $lv['end_time']):''; ?>
                <?php if(is_array($listKey)): $i = 0; $__LIST__ = $listKey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lk): $mod = ($i % 2 );++$i;?><td><?php echo ($lv["$key"]); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
                <td>
                    <a href="<?php echo addons_url('Advs://Advs/edit',array('id'=>$lv['id']));?>">编辑</a>
                    <?php if($lv["status"] == 1): ?><a class="confirm ajax-get"
                           href="<?php echo addons_url('Advs://Advs/forbidden',array('id'=>$lv['id']));?>">禁用</a>
                        <?php else: ?>
                        <a class="confirm ajax-get"
                           href="<?php echo addons_url('Advs://Advs/off',array('id'=>$lv['id']));?>">启用</a><?php endif; ?>
                    <a class="confirm ajax-get" href="<?php echo addons_url('Advs://Advs/del',array('id'=>$lv['id']));?>">删除</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>