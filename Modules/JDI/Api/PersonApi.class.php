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
 * 5.获取公司类别<br/>
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
        $result = M('Notice')->where(array('uid'=>$uid,'status'=>0))->count();
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
     * @param int $id 通知id、
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