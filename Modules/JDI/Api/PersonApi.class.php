<?php
/**
 * Created by PhpStorm.
 * User: haoli
 * Date: 15/1/27
 * Time: 下午3:27
 */

namespace Modules\JDI\Api;

/**
 * 此文档提供功能:
 * 1.获得公司资料<br/>
 * 2.获得公司列表<br/>
 * 3.获得用户通知,以及删除和标置为已读<br/>
 * @package Modules\Person\Api
 * @author lh
 * @time 2015-03-07 09:52:02
 */
class PersonApi {
    /**
     * 获得指定公司的资料
     * @param int $uid 用户id 不写则表示获得当前登录用户的资料
     * @param string $type 方式 uid则表示uid获取,id则表示id获取
     * @return  array 企业信息
     */
    public static  function company($uid,$type="uid"){
        if(!isset($uid)){
              $uid = UID;
            if($uid <= 0){
                api_msg("没有指定uid而且用户尚未登录!");
                return false;
            }
        }
        $result = M('Company')->where(array($type=>$uid))->find();
        if($result){
            $result['picture'] = get_cover_path($result['logo']);
            $result['comment_num'] = CommentApi::commentNum("company",$result['id']);
            $result['is_collect'] = StaffApi::hasStaff("company",$result['id']);
            return $result;
        }else{
            api_msg("企业资料还未填写!");
            return false;
        }
    }

    public static function companyPosition(){
        $map['status'] = 1;
        $result = M('Company')->where($map)->field("name,id,point")->select();
        if(!$result){
            api_msg("暂无结果!!");
            return false;
        }
        return $result;
    }

    /**
     * 添加或者修改学生资料(<strong>需要传递参数!如果参数中有id则为修改否则为添加</strong>)<br/>
     * 传递资料参考模型定义
     */
    public static function modifyStudent(){
        $Model  =   checkAttr(M('Student'),"Student");
        $has_image = false;
        if(!empty($_FILES)){
            $has_image = true;
            $images = upload_image();
            if($images['status'] == 0){// 图片上次失败
                api_msg($images['msg']);
                return false;
            }
        }
        $_POST['uid'] = UID;
        if($Model->create()){
            if($_POST['id']){
                $result = $Model->save();
            }else{
                $result = $Model->add();
            }
            if($has_image){
                $data['id'] = $result;
                $imagesData = $images['data'];
                $ids = array_column($imagesData,"id");
                $data['picture'] =   arr2str($ids);
                M('Student')->save($data); //保存上传的图片
            }
            if($result){
                return true;
            }else{
                return false;
            }
        } else {
            api_msg($Model->getError());
            return false;
        }
    }


    /**
     *获取指定配置<br/>
     * CAT_JOB 代表行业类别<br/>
     * CAT_UN 代表学校<br/>
     * 其他配置参照网站后台配置设定
     * @param string $key  形如a,b,c 则获取a,b,c的配置
     * @return mixed
     */
    public static function getConfig($key){
        $array = str2arr($key);
        $data =array();
        foreach($array as $k){
            if($k == "CAT_JOB"){
                $map = array('status'=>array('gt',0));
                $map['type'] = 0;
                $list = M('Tree')->where($map)->field('pid,id,name')->select();
                //得到栏目树形结构
                $tree =list_to_tree($list,'id','pid','children');
                $data['CAT_JOB'] =$tree;
            }elseif($k == "CAT_UN"){
                $map = array('status'=>array('gt',0));
                $map['type'] = 1;
                $list = M('Tree')->where($map)->field('pid,id,name')->select();
                //得到栏目树形结构
                $tree =list_to_tree($list,'id','pid','children');
                $data['CAT_UN'] =$tree;
            }else{
                $data[$k] = C($k);
            }
        }
        return $data;
    }

    public static function getConfigVersion(){
            return "1";
    }

    /**
     * 添加或者修改学生资料(<strong>需要传递参数!如果参数中有id则为修改否则为添加</strong>)<br/>
     * 传递资料参考模型定义
     */
    public static function modifyCompany(){
        $Model  =   checkAttr(M('Company'),"Company");
        $has_image = false;
        if(!empty($_FILES)){
            $has_image = true;
            $images = upload_image();
            if($images['status'] == 0){// 图片上次失败
                api_msg($images['msg']);
                return false;
            }
        }
        $_POST['uid'] = UID;
        if($Model->create()){
            if($_POST['id']){
                $result = $Model->save();
            }else{
                $result = $Model->add();
            }
            if($has_image){
                $data['id'] = $result;
                $imagesData = $images['data'];
                $ids = array_column($imagesData,"id");
                $data['logo'] =   arr2str($ids);
                M('Company')->save($data); //保存上传的图片
            }
            if($result){
                return true;
            }else{
                return false;
            }
        } else {
            api_msg($Model->getError());
            return false;
        }
    }


    /**
     * 编辑学生资料
     */
    public static function editCompany(){
        $Model  =   checkAttr(M('Student'),"Student");
        if($Model->create() && $Model->save()!==false){
            return true;
        } else {
            api_msg($Model->getError());
            return false;
        }
    }


    /**
     * 公司列表
     * @param int $page 页码
     * @param int $page_size 页面大小
     * @param array $where
     * @param string $order
     * @param int $width  图片压缩宽度 只有当width 和 height都不为0时才进行压缩
     * @param int $height 图片压缩高度
     * @return bool
     */
    public static function companyLists($page=1,$page_size=10,$where=array(),$order = '',$width=200,$height=100){
        $map['status'] = 1;
        if(is_string($where)){
            $map["_string"] = $where;
        }else{
            $map = array_merge($where,$map);
        }
        $model = M('Company')->field(true)->where($map)->order($order);
        $model->page($page,$page_size);
        $result = $model->select();
        if(!$result){
            if($page == 1){
                api_msg("暂时还未有公司资料!");
            }else{
                api_msg("一共就这么多,没有更多的公司了!");
            }
            return false;
        }else{
            for($i=0;$i<count($result);$i++){
                $result[$i]['picture_id'] = $result[$i]['picture'];
                if($width !=0 && $height!=0){
                    $result[$i]['picture'] = thumb(get_cover_path($result[$i]['picture']),$width,$height);
                }else{
                    $result[$i]['picture'] = get_cover_path($result[$i]['picture']);
                }
                $result[$i]['is_collect'] = StaffApi::hasStaff("company",$result[$i]['id']);
            }
            return $result;
        }
    }

    /**
     * 获取指定用户的通知信息<br/>
     * <hr/>
     * <h5>返回结果说明:</h5>
     * uid:通知用户<br/>
     * status:通知状态 0是已读 1是未读<br/>
     * title:通知标题<br/>
     * bundle:附加信息<br/>
     * flag:标志
     * @return array 通知列表
     */
    public static  function get_notices(){
        $uid = UID;
        if($uid<=0){
            api_msg("没有指定uid而且用户尚未登录!");
            return false;
        }
        $result = M('Notice')->where(array('uid'=>$uid,'status'=>array('gt',-1)))->select();
        if($result){
            return $result;
        }else{
            api_msg("暂无通知!");
            return false;
        }
    }

    /**
     * 发送通知
     * @param int $uid 通知用户
     * @param string $title 通知标题
     * @param string $bundle 附加信息
     * @param int $flag 通知标识
     */
    static public function notice($uid,$title,$bundle='',$flag=0){

        return notice($uid,$title,$bundle,$flag);
    }

    /**
     * 获取未读通知
     * @return bool|int
     */
    public static function getUnReadNotice(){
        $uid = UID;
        if($uid<=0){
            api_msg("没有指定uid而且用户尚未登录!");
            return false;
        }
        $result = M('Notice')->where(array('uid'=>array('like'=>$uid.','),'status'=>0))->count();
        if($result){
            return $result;
        }else{
            api_msg("暂无通知!");
            return 0;
        }
    }

    /**
     * 获得职位类别
     * @return string 树形结构
     */
    public static function get_cate_job(){
        $map = array('status'=>array('gt',0));
        $list = M('Tree')->where($map)->select();
        //得到栏目树形结构
        $tree =list_to_tree($list,'id','pid','children');
        return json_encode($tree);
    }

    /**
     * 把通知设为已读
     * @param int $id 通知id
     * @return bool
     */
    public static function readNotice($id){
        if(!is_numeric($id)){
            api_msg('参数非法!');
            return false;
        }

        $_POST['status'] = 1;
        if(D('Notice')->update() !== false){
            api_msg("操作成功!");
            return true;
        }else{
            api_msg("操作失败!");
            return false;
        }
    }

    /**
     * 把通知删除
     * @param int $id 通知id
     * @return bool
     */
    public static function deleteNotice($id){
        if(!is_numeric($id)){
            api_msg('参数非法!');
            return false;
        }
        $_POST['status'] = -1;
        if(D('Notice')->update() !== false){
            api_msg("操作成功!");
            return true;
        }else{
            api_msg("操作失败!");
            return false;
        }
    }
}