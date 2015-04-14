<?php
namespace Modules\QuXianTuanWei\Controller;
use Common\Controller\ModuleController;
use Think\Controller;
use Think\Page;


class LuYongController extends ModuleController {
    public function  index(){
        $this->display(T("Modules://Common@LuYong/index"));
    }


}