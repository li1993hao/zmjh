<?php if (!defined('THINK_PATH')) exit();?>
<!--stats widget-->
<div class="widget widget_stats ">
    <a href="#">
        <?php echo ($today); ?>
        <span>日访问量</span>
    </a>
    <a href="#">
        <?php echo ($month); ?>
        <span>月访问量</span>
    </a>
    <a class="last" href="#">
        <?php echo ($total); ?>
        <span>总访问量</span>
    </a>
</div>