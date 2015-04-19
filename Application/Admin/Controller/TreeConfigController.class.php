<?php
namespace Admin\Controller;
use Common\Controller\AdminController;

/**
 * 树形配置管理
 * @author huajie <banhuajie@163.com>
 */
class TreeConfigController extends AdminController
{
    protected  $type = 0; //0代表行业配置,1学院配置
    protected function _initialize()
    {
        parent::_initialize();
        $this->type =  I('get.type',I('post.type',0));
        $this->assign("type",$this->type);
    }

    public function xueyuan(){
        $this->type = 1;
        $this->assign("type",$this->type);
        $this->index();
    }

    public function  index()
    {
        $pid  = I('get.pid',0);
        if($pid){
            $data = M('Tree')->where("id={$pid}")->field(true)->find();
            $this->assign('data',$data);
        }
        $name      =   trim(I('get.name'));
        $all_Tree   =   M('Tree')->getField('id,name');
        $map['pid'] =   $pid;
        $map['status'] =array('gt',-1);
        if($pid == 0){
            $map['type'] = $this->type;
        }
        if($name)
            $map['name'] = array('like',"%{$name}%");
        $list       =   M("Tree")->where($map)->field(true)->order('sort asc,id asc')->select();
        int_to_string($list);
        if($list) {
            foreach($list as &$key){
                if($key['pid']){
                    $key['up_name'] = $all_Tree[$key['pid']];
                }
                $key['children_count']=M('Tree')->where(array('status'=>array('gt',-1),'pid'=>$key['id']))->count();
            }
            $this->assign('list',$list);
        }

        // 记录当前列表页的cookie
        MK();
        if($this->type == 0){
            $this->meta_title = '职位类别配置';
        }else{
            $this->meta_title = '学院类别配置';
        }
        $this->display('index');
    }

    /**
     * 新增
     */
    public function add(){
        if(IS_POST){
            $Tree = D('Tree');
            $data = $Tree->create();
            if($data){
                $sp  = M('Tree')->field('cp_name')->find($_POST['pid']);
                $_POST['cp_name'] = $sp['cp_name'].'/'.$_POST['name'];

                $id = $Tree->add();
                if($id){
                    $this->success('新增成功', LK());
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($Tree->getError());
            }
        } else {
            $pid =  I('pid',0);
            $this->assign('p_id',$pid);
            if($pid){
                $s = M('Tree')->where(array('id'=>$pid))->field('name')->find();
                $this->assign('p_name',$s['name']);
            }else{
                $this->assign('p_name','无');
            }

            $this->meta_title = '新增项目';
            $this->display('edit');
        }
    }

    /**
     * 编辑
     */
    public function edit($id = 0){
        if(IS_POST){
            $sp  = M('Tree')->field('cp_name')->find($_POST['pid']);
            $_POST['cp_name'] = $sp['cp_name'].'/'.$_POST['name'];
            $Menu = D('Tree');
            $data = $Menu->create();
            if($data){
                if($Menu->save()!== false){
                    // S('DB_CONFIG_DATA',null);
                    //记录行为
                    action_log('update_Tree', 'Tree', $data['id'], UID);
                    $this->success('更新成功',LK());
                } else {
                    $this->error('更新失败');
                }
            } else {
                $this->error($Menu->getError());
            }
        } else {
            /* 获取数据 */
            $info = M('Tree')->field(true)->find($id);

            $pid =  $info['pid'];
            if($pid){
                $s = M('Tree')->where(array('id'=>$pid))->field('name')->find();
                $this->assign('p_name',$s['name']);
            }else{
                $this->assign('p_name','无');
            }
            if(false === $info){
                $this->error('获取项目信息错误');
            }
            $this->assign('info', $info);
            $this->assign('p_id',$pid);
            $this->meta_title = '编辑项目';
            $this->display();
        }
    }

    public function exportJs(){
        $map = array('status'=>array('gt',0));
        $map['type'] = $this->type;
        $list = M('Tree')->where($map)->field('pid,id,name')->select();
        //得到栏目树形结构
        $tree =list_to_tree($list,'id','pid','children');
        $content = "var job_cate=".json_encode($tree).";";
        if($this->type == 0){
            $name = 'job_cate';
        }else{
            $name = 'uni_cate';
        }
        $filename = 'Public/jdi/'.$name.NOW_TIME.'.js';
        $dir         =  dirname($filename);
        if(!is_dir($dir))
            mkdir($dir,0777,true);
        if(false === file_put_contents($filename,$content)){
            $this->error("生成失败！");
        }else{
            $this->contents[$filename]=$content;
            $this->success("生成成功！文件已经放在Public/jdi下面了");
        }
    }

    /**
     * 状态修改
     */
    public function changeStatus($method=null){
        $id = array_unique((array)I('ids',0));
        $id = is_array($id) ? implode(',',$id) : $id;
        if ( empty($id) ) {
            $this->error('请选择要操作的数据!');
        }
        $map['id'] =   array('in',$id);
        switch ( strtolower($method) ){
            case 'forbid':
                $this->forbid('Tree', $map );
                break;
            case 'resume':
                $this->resume('Tree', $map );
                break;
            case 'delete':
                $data['status']         =   -1;
                $this->editRow('Tree' ,$data, $map);
                break;
            default:
                $this->error('参数非法');
        }
    }

    public function del(){
        $this->changeStatus('delete');
    }

    private function save_Tree($name,$pid,$level){
        $data['name'] = $name;
        $data['pid'] = $pid;
        $data['level'] = $level;
        $data['status'] = 1;
        $data['type'] = $this->type;
        if($pid==0){
            $data['cp_name'] = $data['name'];
        }else{
            $sp  = M('Tree')->field('cp_name')->find($pid);
            $data['cp_name'] = $sp['cp_name'].'/'.$data['name'];
        }
        return M('Tree')->add($data);
    }

    /**
     * 批量倒入
     */
    public function import(){
        if(IS_POST){
            $tree = I('tree');
            if($tree){
                $array = preg_split('/[,;\r\n]+/', trim($tree, ",;\r\n"));
                $pre0 = 0; //前置根节点
                $pre1 = 0; //前置1级节点
                $pre2 = 0; //前置2级节点
                foreach($array as $str){
                   $level =  substr_count($str, '#');
                   $name = str_replace('#','',$str);
                   if($level==0){//根节点
                      $pre0 = $this->save_Tree($name,0,0); //直接保存
                      $res = $pre0;
                   }elseif($level==1){//1级节点
                       $pre1 = $this->save_Tree($name,$pre0,1); //直接保存
                       $res = $pre0;
                   }elseif($level==2){//2级节点
                       $pre2 = $this->save_Tree($name,$pre1,2); //直接保存
                       $res = $pre0;
                   }else{//叶子节点
                       $this->save_Tree($name,$pre2,3); //直接保存
                   }

                   if(!$res){
                       $this->error('导入失败,请检查导入格式是否正确!');
                   }
                }
                $this->success('导入成功!');
            }else{
                $this->error('输入不能为空!');
            }
        }else{
            $this->display();
        }
    }

    /**
     * 菜单排序
     * @author huajie <banhuajie@163.com>
     */
    public function sort(){
        if(IS_GET){
            $ids = I('get.ids');
            $pid = I('get.pid');
            //获取排序的数据
            $map = array('status'=>array('gt',-1));
            if(!empty($ids)){
                $map['id'] = array('in',$ids);
            }else{
                if($pid !== ''){
                    $map['pid'] = $pid;
                }
            }
            $list = M('Tree')->where($map)->field('id,name')->order('sort asc,id asc')->select();
            $this->assign('list', $list);
            $this->meta_title = '项目排序';
            $this->display();
        }elseif (IS_POST){
            $ids = I('post.ids');
            $ids = explode(',', $ids);
            foreach ($ids as $key=>$value){
                $res = M('Tree')->where(array('id'=>$value))->setField('sort', $key+1);
            }
            if($res !== false){
                $this->success('排序成功！');
            }else{
                $this->eorror('排序失败！');
            }
        }else{
            $this->error('非法请求！');
        }
    }

}
