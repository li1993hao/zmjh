<?php
namespace Modules\XiaoTuanWei\Controller;
use Common\Controller\ModuleController;
use Think\Controller;
use Think\Page;


class IndexController extends ModuleController {
    public function  index(){
        $this->display(T("Modules://JDI@LuYong/index"));
    }
}