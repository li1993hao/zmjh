<?php

namespace Modules\TuanShiWei;
use Common\Controller\Module;

/**
 *
 */
class TuanShiWeiModule extends Module{
    public $info = array(
        'name'=>'TuanShiWei',
        'title'=>'团市委',
        'description'=>'团市委管理模块',
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