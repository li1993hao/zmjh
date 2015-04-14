<?php

namespace Modules\YuanTuanWei;
use Common\Controller\Module;

/**
 *
 */
class YuanTuanWeiModule extends Module{
    public $info = array(
        'name'=>'YuanTuanWei',
        'title'=>'院团委',
        'description'=>'院团委管理模块',
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