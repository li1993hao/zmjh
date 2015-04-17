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
 * 招聘信息相关
 * @package Modules\Person\Api
 * @author lh
 * @time 2015-03-07 09:52:02
 */
class RecruitmentApi {
    /**
     * 获取招聘内容列表
     * @param mixed $where 筛选
     * @param int $page 页数
     * @param string $order 排序
     * @param int $status 状态
     * @return array|bool|mixed|string 结果
     */
    public static function lists($page=1,$where=array(),$order = '`weight` DESC, `update_time` DESC',$status = 1){
        $map = \Common\Api\DocumentApi::listMap(1, $status);
        $cat=  \Common\Api\CategoryApi::get_category(1);
        $model_id = $cat['model_id'];
        if(empty($model_id)){//分类不存在或者被禁用
            return false;
        }
        $model_name = \Common\Api\ModelApi::get_model_by_id($model_id,'name');
        if(empty($model_name)){//模型不存在或者被禁用
            return false;
        }
        if(is_string($where)){ //字符串查询
            $map["_string"] = $where;
        }else{
            $map = array_merge($map,$where);
        }
        $model = M($model_name)->field(true)->where($map)->order($order);
        if(is_numeric($page)){
            $model->page($page,$cat['list_num']);
        }else{
            $model->limit($page);
        }
        $result = $model->select();

        if($result){
            $result = content_url($result,function(&$e){
                $e['is_collect'] = StaffApi::hasStaff('recruitment',$e['id']);
            });
            return $result;
        }else{
            api_msg("暂无数据~~");
            return false;
        }
    }


}