<?php
namespace Common\Model;
use Think\Model;

/**
 * 用户通知
 * Class NoticeModel
 * @package Common\Model
 * @author lihao <lh@tiptime.com>
 */
class NoticeModel extends Model{
    protected  $_auto = array(
        array('create_time',NOW_TIME,self::MODEL_INSERT),
        array('update_time',NOW_TIME,self::MODEL_BOTH),
        array('uid','parse_uid',self::MODEL_BOTH,'callback')
    );

    public function parse_time($uid){
        if(substr($uid,-1) != ','){
            return $uid.',';
        }
    }

    public function update($post=null){
        if(is_null($post)){
            $data = $this->create();
        }else{
            $data = $this->create($post);
        }
        if(!$data){
            return false;
        }
        /* 添加或更新数据 */
        if(empty($data['id'])){
            $res = $this->add();
        }else{
            $res = $this->save();
        }
        return $res;
    }
}
