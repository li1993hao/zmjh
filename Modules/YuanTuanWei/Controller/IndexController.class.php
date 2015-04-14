<?php
namespace Modules\YuanTuanWei\Controller;
use Common\Controller\ModuleController;
use Think\Controller;
use Think\Page;

class IndexController extends ModuleController {
    /**
     *
     */
    public function  index(){
        $this->_display();
    }

    /**
     * 已通过审核学生
     */
    public function yishen(){
        $this->_display('index');
    }

    /**
     * 未通过审核学生
     */
    public function wei(){
        $this->_display('index');
    }
}