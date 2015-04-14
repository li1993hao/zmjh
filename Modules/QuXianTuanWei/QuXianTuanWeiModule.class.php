<?php

namespace Modules\QuXianTuanWei;
use Common\Controller\Module;

/**
 *
 */
class QuXianTuanWeiModule extends Module{
    public $info = array(
        'name'=>'QuXianTuanWei',
        'title'=>'区县团委',
        'description'=>'区县团委管理模块',
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