<?php
namespace Test\Controller;
use Common\Controller\JDIController;
class IndexController extends JDIController {

    /**
     * 获取表情列表。
     */
    public function getSmile()
    {
        exit(json_encode(D('Expression')->getExpression()));
    }

    public function atWhoJson()
    {
        exit(json_encode($this->getAtWhoUsersCached()));
    }


    private function getAtWhoUsers()
    {
//        //获取能AT的人，UID列表
//        $uid = get_uid();
//        $follows = D('Follow')->where(array('who_follow' => $uid, 'follow_who' => $uid, '_logic' => 'or'))->limit(999)->select();
//        $uids = array();
//        foreach ($follows as &$e) {
//            $uids[] = $e['who_follow'];
//            $uids[] = $e['follow_who'];
//        }
//        unset($e);
//        $uids = array_unique($uids);
//
//        //加入拼音检索
//        $users = array();
//        foreach ($uids as $uid) {
//            $user = query_user(array('nickname', 'id', 'avatar32'), $uid);
//            $user['search_key'] = $user['nickname'] . D('PinYin')->Pinyin($user['nickname']);
//            $users[] = $user;
//        }
//
//        //返回at用户列表
//        return $users;
    }

    private function getAtWhoUsersCached()
    {
        $cacheKey = 'weibo_at_who_users_' . get_uid();
        $atusers = S($cacheKey);
        if (empty($atusers)) {
            $atusers = $this->getAtWhoUsers();
            S($cacheKey, $atusers, 600);
        }
        return $atusers;
    }

}