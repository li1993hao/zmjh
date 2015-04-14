<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Common\Controller;

/**
 * 前台模块控制器父类
 */
class JDIController extends BaseController {

	/* 空操作，用于输出404页面 */
	public function _empty(){
		echo '404';
	}

    protected function _initialize(){
        parent::_initialize();
        if(!C('WEB_SITE_CLOSE')){
            $this->error('站点已经关闭，请稍后访问~');
        }
        C('VIEW_PATH',temp_path().'/');
        C('TMPL_PARSE_STRING.__THEME__', __ROOT__.substr(C('TEMP_PATH'),1).'/'.C('JDI_THEME').'/asset');//模版资源路径
        C('TMPL_PARSE_STRING.__MODULE_THEME__', __ROOT__.substr(C('TEMP_PATH'),1).'/'.C('JDI_THEME').'/'.MODULE_NAME.'/asset');//模块私有资源路径
        // 获取当前用户ID
        define('UID',is_login());
    }

    /**
     * 下载
     * @param $id
     * @return bool
     */
    protected  function download($id){
        $File = D('File');
        $root = C('DOWNLOAD_UPLOAD.rootPath');
        if(false === $File->download($root, $id)){
             $this->error($File->getError());
        }
    }

    /**
     * 模块内资源视图展示
     * @author lihao <lh@tiptime.com>
     * @param $s
     */
    protected function _display($s=''){
        $base_path = temp_path().'/';
        if(empty($s)){
            $s = $base_path.MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
        }else{
            if(!strpos($s,'/')){ //当前控制器
                $s = $base_path.MODULE_NAME.'/'.CONTROLLER_NAME.'/'.$s;
            }
        }
        $s .=  C('TMPL_TEMPLATE_SUFFIX');
        if(!is_file($s)){
            $this->error('衣服丢了- -');
        }else{
            $this->display($s);
        }
    }
}
