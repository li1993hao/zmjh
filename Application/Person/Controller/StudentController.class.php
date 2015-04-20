<?php
namespace Person\Controller;
use Common\Api\UserApi;
use Common\Controller\JDIController;
use Modules\JDI\Api\PersonApi;
/**
 * 学生个人中心
 * Class StudentController
 * @package Person\Controller
 */
class StudentController extends JDIController {
    /**
     * 基本信息
     */
    public function index(){
        if(IS_POST){

        }else{
            $info = PersonApi::student();
            $this->assign("info",$info);
            $this->_display('index');
        }
    }

    /**
     * 我的简历
     */
    public function resume(){

    }

    /**
     * 我关注的企业
     */
    public function followCompany(){

    }

    /**
     * 通知中心
     */
    public function noticeCenter(){

    }

    /**
     * 公司评价
     */
    public function companyComment(){

    }
}