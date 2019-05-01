<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/23
 * Time: 16:54
 */

namespace app\index\controller;


use app\common\controller\Base;
use think\File;
use think\facade\Request;

class Home extends Base
{

    public function upLoadImg(){

        //获取上传图片信息
        $file=Request::file('file');
        if ($file) {
            //文件信息验证，成功上传到指定目录,以public为起始
            $info=$file ->validate([
                'size' => 1000000,
//                'ext' =>'jpeg,jpg,png,gif' ,
            ])->move('uploads/');
            if ($info) {
                // 获取服务器中文件的名字并赋予表单信息title_img
                echo $info ->getSaveName();
            } else {
                $this->error($file ->getError());
            }
        }
    }
}