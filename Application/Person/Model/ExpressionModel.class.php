<?php
/**
 * Created by PhpStorm.
 * User: caipeichao
 * Date: 14-3-10
 * Time: PM9:01
 */

namespace Common\Model;

use Think\Model;

class ExpressionModel extends Model
{
    public  function _initialize()
    {
        parent:: _initialize();
    }

    public function getExpression($pkg = 'miniblog'){
        $filepath =  temp_path()."/asset/atwho/image/expression/" . $pkg;
        $list = $this->myreaddir($filepath);
        $res = array();
        foreach ($list as $value) {
            $file = explode(".", $value);
            $temp['title'] = $file[0];
            $temp['emotion'] = $pkg=='miniblog'?'['.$file[0].']': '[' . $file[0] . ':' . $pkg . ']';
            $temp['filename'] = $value;
            $temp['type'] = $pkg;
            $temp['src'] = C('TMPL_PARSE_STRING.__THEME__'). '/atwho/image/expression/' . $pkg.'/'. $value;
            $res[$temp['emotion']] = $temp;
        }

        return $res;
    }

    /**
     * getAll 获取所有主题的所有表情
     * @return array
     * @author:xjw129xjt xjt@ourstu.com
     */
    public function getAll()
    {
        $res = $this->getExpression();
        $filepath =  temp_path()."/asset//atwho/image/expression/";
        $pkgList = $this->myreaddir($filepath);
        foreach ($pkgList as $v) {
            $res =array_merge($res,$this->getExpression($v));
        }
        return $res;
    }

    private  function myreaddir($dir)
    {
        $file = scandir(realpath($dir), 0);
        $i = 0;
        foreach ($file as $v) {
            if (($v != ".") and ($v != "..")) {
                $list[$i] = $v;
                $i = $i + 1;
            }
        }
        return $list;
    }


    /**
     * 将表情格式化成HTML形式
     * @param string $data 内容数据
     * @return string 转换为表情链接的内容
     */
    public function parse($data)
    {
        $data = preg_replace("/img{data=([^}]*)}/", "<img src='$1'  data='$1' >", $data);
        return $data;
    }


    public function getCount($dir){
        $list = $this->myreaddir($dir);
        return count($list);
    }
}















