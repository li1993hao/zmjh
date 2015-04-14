<?php

namespace Modules\XiaoTuanWei;
use Common\Controller\Module;

/**
 *
 */
class XiaoTuanWeiModule extends Module{
    public $info = array(
        'name'=>'XiaoTuanWei',
        'title'=>'校团委',
        'description'=>'校团委管理模块',
        'status'=>1,
        'author'=>'tp',
        'version'=>'0.1'
    );

    public function install(){
        return true;
    }

    public function uninstall(){
        return true;
    }

    public function update(){

    }
}