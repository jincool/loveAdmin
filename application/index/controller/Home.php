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
use app\common\model\Setting;
class Home extends Base
{

    public function upLoadImg()
    {

        //获取上传图片信息
        $file=Request::file('file');
        $wid=Request::param('wid');
        if ($file) {
            //文件信息验证，成功上传到指定目录,以public为起始
            $info=$file ->validate([
                'size' => 1000000,
                'ext' =>'jpeg,jpg,png,gif' ,
            ])->move('uploads/');
            if ($info) {
                // 获取服务器中文件的名字
                $url = $info ->getSaveName();
                $user=Setting::where('wid',$wid)->find();
                if (!empty($user)){
                    $user->home_bg=$url;
                    $user->save();
                }else{
                    $setting = new Setting;//实例化Setting表模型
                    $setting->wid = $wid;
                    $setting->home_bg = $url;
                    $setting->save();
                }


            } else {
                $this->error($file ->getError());
            }
        }
    }

    public function bgImg(){
        if (!empty(Request::param('wid'))){
            $wid=Request::param('wid');
            $info=Setting::where('wid',$wid)->find();
            $img=$info->home_bg;
           echo $img;
        }

    }



}