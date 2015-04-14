<?php
/**
 * Created by PhpStorm.
 * User: tiptimes
 * Date: 15-4-11
 * Time: 上午11:35
 */


/**
 * @param $field 获取用户字段
 * @return mix
 */
function user_field($field){
    return api('User/user_field',array('field'=>$field));
}

/**获取指定用户字段
 * @param $uid
 * @param $field
 * @return mixed
 */
function get_user_field($uid,$field=''){
    $result = \Common\Api\UserApi::get_user_field($uid,$field);
    return $result;
}
/**获得制定id的用户昵称
 * @param $uid
 * @return mixed
 */
function get_nickname($uid){
    return api('User/get_nickname',array('uid'=>$uid));
}


function get_user_image($uid){
    $result = get_user_field($uid,'head');
    return $result?get_cover_path($result):C('TMPL_PARSE_STRING.__DEFAULT_PERSON_IMAGE__');
}
