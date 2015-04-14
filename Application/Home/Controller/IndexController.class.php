<?php
namespace Home\Controller;
use Common\Api\CategoryApi;
use Common\Api\DocumentApi;
use Common\Api\ModelApi;
use Common\Controller\JDIController;
use Think\Controller;
use Think\Page;
class IndexController extends JDIController {

    public function index(){
        $this->assign('index_style','active');
        $this->assign('title',C('WEB_SITE_TITLE'));
        $this->_display();
    }

    //TODO 默认是搜索文章模型,可以给用户选择搜索其他模型或者都搜索
    /**搜索操作
     * @param $search
     * @param int $p
     */
    public function search($search,$p=1){
        $array = preg_split('/[,;\r\n]+/', trim($search, ",;\r\n"));
        if(!$array){
            $this->error('查询条件不能为空!');
        }else{
            $list = api('Document/search',array('search'=>$array,'page'=>$p,'page_num'=>10));
            $total  = api('Document/searchCount',array('search'=>$array));
            $page = new Page($total,10,array('search'=>$search));
            if($total>10){
                $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
            }
            $page->setConfig('div_class','pagination');
            $page->setConfig('current_class','active');
            $show       = $page->home_show();
            $this->assign('list',$list);
            $this->assign('page',$show);
            $nav[] = array('name'=>'首页','url'=>U('Index/index'));
            $nav[] = array('name'=>'搜索:'.$search,'url'=>"#");
            $this->assign('nav',$nav);
            $this->assign('tip','没找到您要的搜索结果,换个关键词试试吧!');
            $this->assign('title',"搜索－$search");
            $this->_display('list'); //TODO 添加搜索模版
        }
    }


    /**
     * 二级页面统一入口
     * @param mixed $cate 栏目
     * @param int $p  页数
     */
    public function  category($cate,$p=1){
        $Category = CategoryApi::get_category($cate);
        $cate = $Category['id'];
        if(!$Category){
            $this->error('没找到该分类~~~');
        }

        $this->assign('cat',$Category);
        $this->assign('title',$Category['name']);
        $this->parse_nav($Category,'');

        if($Category['type']==1){
            //栏目
            if(api('Category/get_children_count',array('id'=>$cate))>0){
                //有子栏目,渲染频道模板
                $this->_display($Category['temp_category']);
            }else{//渲染列表页模版
                $list =  DocumentApi::lists($cate,$p);
                $total = DocumentApi::listCount($cate);
                $page = new Page($total,$Category['list_num'],array('cate'=>$cate));
                if($total>$Category['list_num']){
                    $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
                }
                $page->setConfig('div_class','pagination');
                $page->setConfig('current_class','active');
                $show       = $page->home_show();
                $this->assign('list',$list);
                $this->assign('page',$show);
                $this->assign('cate',$Category);
                $this->_display($Category['temp_list']);
            }
        }elseif($Category['type']==2){
            //单页面
            $model_id =  CategoryApi::get_category($cate,'model_id');
            if(empty($model_id)){//分类不存在或者被禁用
                $this->error('分类不存在或者被禁用!');
            }
            $model_name = ModelApi::get_model_by_id($model_id,'name');


            if(empty($model_name)){//模型不存在或者被禁用
                $this->error('模型不存在或者被禁用!');
            }
            $info =  DocumentApi::record($cate,$model_name);
            $this->assign('cat',$Category);
            $this->assign('info',$info);
            $this->_display($Category['temp_content']);
        }elseif($Category['type']==3){
            //外部链接
            JDIRedirect($Category['url']);
        }
    }

    /**
     * 解析导航
     * @param array $cat 当前栏目id
     * @param string $content_title 内容页标题
     * @param int $pop_num  控制导航显示深度
     */
    private  function  parse_nav($cat,$content_title,$pop_num=1){
        //导航
        $nav =array();
        $cat_name = $cat['name'];
        if(!empty($content_title)){ //内容页导航
            $cat_url = list_url($cat);
            $cat_url = $cat_url['url'];
        }else{ //列表页导航
            $cat_url = "#";
        }

        if($cat['pid']==0){
            array_push($nav,array('name'=>$cat['name'],'url'=>$cat_url));
            $root_nav = $cat['id'];//根栏目,控制导航显示
        }else{
            while(true){
                $cat = CategoryApi::get_category($cat['pid']);
                $cat = list_url($cat);
                array_push($nav,array('name'=>$cat['name'],'url'=>$cat['url']));
                if($cat['pid']==0){
                    $root_nav = $cat['id'];//根栏目,控制导航显示
                    for($i=0; $i<$pop_num;$i++){
                        array_pop($nav); //控制导航显示深度
                    }
                    if(!empty($content_title)){
                        array_push($nav,array('name'=>$content_title,'url'=>'#'));
                    }
                    array_push($nav,array('name'=>$cat_name,'url'=>$cat_url));
                    break;
                }
            }
        }
        array_push($nav,array('name'=>'首页','url'=>U('Index/index')));
        $nav = array_reverse($nav);
        $this->assign('rootNav',$root_nav);
        $this->assign('nav',$nav);
    }

    /**
     * 内容页统一入口
     * @param mixed $cate 栏目
     * @param int $id 对应内容id
     */
    public  function content($cate,$id){
        $Category =  CategoryApi::get_category($cate);
        $cate = $Category['id'];
        $model_id =  $Category['model_id'];
        if(empty($model_id)){//分类不存在或者被禁用
            $this->error('分类不存在或者被禁用!');
        }
        $model_name = api('Model/get_model_by_id',array('id'=>$model_id,'field'=>'name'));
        if(empty($model_name)){//模型不存在或者被禁用
            $this->error('模型不存在或者被禁用!');
        }
        $info = DocumentApi::record($cate,$model_name,$id);
        $this->assign('title',$info['title']);
        if(!$info){
            $this->error('您查询的内容不存在!');
        }else{
            //文件下载
            if(isset($info['file'])){
                if($this->download($info['file'])===false){
                    $this->error('文件找不到了..');
                }
            }else{
                $Category =  CategoryApi::get_category($cate);
                //导航
                $this->parse_nav($Category,$info['title']);
                $this->assign('cat',$Category);
                $this->assign('info',$info);
                $this->_display($Category['temp_content']);
            }
        }
    }

//    /**登陆
//     * @param null $username 用户名
//     * @param null $password 密码
//     * @param null $verify 验证码
//     */
//    public function login($username = null, $password = null, $verify = null){
//        if(IS_POST){
//            if(!check_verify($verify)){
//                $this->error("验证码输入错误");
//            }
//            $Member = D('Member');
//            $uid = $Member->checkLogin($username, $password,1,false);
//            if(0 < $uid){
//                /* 登录用户 */
//                if($Member->login($uid)){ //登录用户
//                    define(UID,$uid);
//                    $this->success("登录成功!");
//                } else {
//                    $this->error("登录失败！");
//                }
//
//            } else { //登录失败
//                switch($uid) {
//                    case -1: $error = '用户不存在或被禁用！'; break; //系统级别禁用
//                    case -2: $error = '密码错误！'; break;
//                    default: $error = '未知错误！'; break; // 0-接口参数错误（调试阶段使用）
//                }
//                $this->error($error);
//            }
//        } else {
//            if(is_login()){
//                $this->redirect('Index/index');
//            }else{
//                $nav[] = array('name'=>'首页','url'=>U('Index/index'));
//                $nav[] = array('name'=>'登陆','url'=>"#");
//                $this->assign('nav',$nav);
//                $this->display();
//            }
//        }
//    }
//
//    /**
//     * 退出登陆
//     */
//    public function logout(){
//        if(is_login()){
//            D('Member')->logout();
//            session('[destroy]');
//            $this->success('退出成功！', U('Index/index'));
//        } else {
//            $this->redirect('Index/index');
//        }
//    }
//
//
//    /**
//     * 验证码获取
//     */
//    public function verify(){
//        $verify = new \Think\Verify(array('imageH'=>30,'imageW'=>100,'length'=>4,'codeSet'=>'23456789','fontSize'  =>  12,'useCurve'  =>  false,'useNoise'  =>  false));
//        $verify->entry(1);
//    }
}