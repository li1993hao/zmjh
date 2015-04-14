<?php
namespace Modules\TuanShiWei\Controller;
use Common\Controller\ModuleController;
use Common\Controller\ThinkController;
use Common\Model\AuthGroupModel;
use Common\Model\MemberModel;
use Think\Controller;
use Think\Page;

/**
 * 区县用户管理
 * Class IndexController
 * @package Modules\TuanShiWei\Controller
 */
class IndexController extends ModuleController {

    public function  index(){
        $map['status'] = array('gt',-1);
        $map['extend'] = array('gt',0);
        if(!empty($_GET['nickname'])){
            $map[] ="BINARY `nickname` LIKE '%{$_GET['nickname']}%'";
        }
        $model =D('Member');
        $list   = $this->p_lists($model, $map,'id desc');
        if($list){
            int_to_string($list,array('status' => array
            (1 => '<span class="label label-success ">正常</span>',
                -1 => '删除', 0 => '<span class="label label-danger ">禁用</span>'),'extend'=>C('QUXIAN')));
        }
        $this->assign('list', $list);
        $this->meta_title = '区县用户信息';
        $this->_display('index');
    }

    public function add(){
        if(IS_POST){
            $username = I('post.username');
            $password = I('post.password');
            $repassword = I('post.repassword');
            $quxian = I('post.quxian'); //区县代码
            $email = I('post.email');
            /* 检测密码 */
            if($password != $repassword){
                $this->error('密码和重复密码不一致！');
            }
            $nickname = $username;
            $member = D('Member');
            $uid    =   $member->register($username, $password,$nickname,0,$status=1,$email,'',$quxian);
            if(0 < $uid){ //注册成功
                $model_access = D('AuthGroup');
                $model_access->addToGroup($uid,16); //赋予区县市委角色
                $this->success("新增成功!");
            } else { //注册失败，显示错误信息
                $this->error(MemberModel::showRegError($uid));
            }
        } else {
            $this->meta_title = '新增区县市委用户';
            $this->_display("add");
        }
    }

    public function changePassword(){
        $uid = I('post.id');
        $password = I('post.password');
        $map['id'] = $uid;
        $map['extend'] = array('gt',0);//只能修改区县账号的密码
        if(strlen($password)<6){
            $this->error("新密码必须大于6个字符");
        }
        $data['password'] = user_encrypt($password);
        if( M('Member')->where($map)->save($data) !== false){
            $this->success("修改成功!");
        }else{
            $this->error("修改失败!");
        }

    }

    /**
     * 删除数据
     */
    public function  del(){
        parent::editRow('member',array('status'=>-1),null);
    }
    /**
     * 禁用数据
     */
    public function  forbid(){
        parent::editRow('member',array('status'=>0),null);
    }
    /**
     * 恢复数据
     */
    public function resume(){
        parent::editRow('member',array('status'=>1),null);
    }

}