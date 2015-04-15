<?php
/**
 * Created by PhpStorm.
 * User: haoli
 * Date: 15/1/27
 * Time: 下午3:27
 */

namespace Modules\JDI\Api;

/**
 * 此文档提供功能<br/>
 * 简历相关信息
 * @package Modules\Person\Api
 * @author lh
 * @time 2015-03-07 09:52:02
 */
class ResumeApi {
    /**
     *获取某个学生的简历
     * 返回数据
     * string name 学生姓名<br/>
     * birthday int 出生日期(时间戳)<br/>
     * school int 所在学校<br/>
     * graduation_time int 毕业时间<br/>
     * evaluation string 自我评价<br/>
     * intension string 求职意向<br/>
     * create_time int 创建时间<br/>
     * update_time int 更新时间<br/>
     * head int 头像(图片)
     * @param int $uid 用户的uid默认为当前登录用户
     * @return array
     */
    public static function getResumes($uid){
        if(empty($uid)){
            $uid = UID;
        }
        $result = M('Resume')->where(array('uid'=>$uid))->select();
        return $result;
    }

    /**
     * 获取某个简历的详情<br/>
     * 返回数据：参照getResumes接口
     * @param $id
     */
    public static function getResumeById($id){
        return  M('Resume')->where(array('id'=>$id))->find();
    }

    /**
     * 添加简历<br/>
     * 具体添加参数,请自行查看后台resume模型数据定义
     *
     */
    public static function addResumes(){
        if(!UID){
            api_msg("用户必须先登录!");
            return false;
        }
        $_POST['uid'] = UID;
        $Model  =   checkAttr(D('Resume'),"Resume");
        $has_image = false;
        if(!empty($_FILES)){
            $has_image = true;
            $images = upload_image();
            if($images['status'] == 0){// 图片上次失败
                api_msg($images['msg']);
                return false;
            }
        }
        if($Model->create()){
            $result = $Model->add();
            if($has_image){
                $data['id'] = $result;
                $imagesData = $images['data'];
                $ids = array_column($imagesData,"id");
                $data['head'] =   arr2str($ids);
                D('Resume')->save($data); //保存上传的图片
            }
           return true;
        } else {
            api_msg($Model->getError());
            return false;
        }
    }

}