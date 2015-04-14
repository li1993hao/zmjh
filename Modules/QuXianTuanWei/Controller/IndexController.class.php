<?php
namespace Modules\QuXianTuanWei\Controller;
use Common\Controller\ThinkController;
use Common\Model\AuthGroupModel;
use Common\Model\MemberModel;
use Common\Controller\ModuleController;
use Think\Controller;
use Think\Page;


class IndexController extends ModuleController {

    /**
     *
     */
    public function  index($status = 1){
        $map = $this->search_parse();
        $map['status'] =$status;
        $model =D('Company');
        $list   = $this->p_lists($model, $map,'id desc');
        if($list){
            int_to_string($list,array('status' => array
            (1 => '<span class="label label-success ">正常</span>',
                -1 => '删除', 0 => '<span class="label label-danger ">禁用</span>'),'category'=>C('COMPANY_CATEGORY')));
        }
        $this->assign('list', $list);
        $this->_display('index');
    }


    /**
     * 待审核企业
     */
    public function dai(){
        $this->meta_title = '待审核企业信息';
        $this->index(0);
    }

    /**
     * 未通过审核企业
     */
    public function wei(){
        $this->meta_title = '未通过审核企业信息';
        $this->index(2);
    }

    /**
     * 新增企业
     */
    public function add(){
        if(IS_POST){
            $username = I('post.username');
            $password = I('post.password');
            $repassword = I('post.repassword');
            $nickname = I('post.nickname'); //区县代码
            $email = I('post.email');
            /* 检测密码 */
            if($password != $repassword){
                $this->error('密码和重复密码不一致！');
            }
            $member = D('Member');
            $uid    =   $member->register($username, $password,$nickname,0,$status=1,$email);
            if(0 < $uid){ //注册成功
                $data['uid'] = $uid;
                $data['name'] = $nickname;
                $data['quota'] = I('post.quota');
                $data['category'] = I('post.category');
                $data['company_attr'] = I('post.company_attr');
                M('Company')->add($data);
                $this->success("新增成功!");
            } else { //注册失败，显示错误信息
                $this->error(MemberModel::showRegError($uid));
            }
        } else {
            $this->meta_title = '新增企业用户';
            $this->_display("add");
        }
    }
    private function search_parse(){
        $map = array();
        $team_map = array(); //模版赋值
        foreach($_REQUEST as $k => $v){
            $kk = str2arr($k,'_');
            if($kk[0] == 'query'){ //查询字段

                if(trim($_REQUEST[$k]) === ""){
                    continue;
                }
                if($kk[1] == 'username'){//模糊查询
                    $map[] = "username LIKE '%{$v}%'";
                    $team_map[$k] = $v;
                    continue;
                }
                if($kk[1] == "nickname"){
                    $map[] = "nickname LIKE '%{$v}%'";
                    $team_map[$k] = $v;
                    continue;
                }
                if($v == '__whatever__'){ //不限
                    continue;
                }
                $map[$kk[1]] = $v;
                $team_map[$k] = $v;
            }else{
                unset($map[$k]);
            }
        }
        if(I('r')){
            $team_map['r']= I('r');
        }
        $this->assign('where',$team_map);
        return $map;
    }

}