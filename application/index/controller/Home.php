<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/23
 * Time: 16:54
 */

namespace app\index\controller;


use app\common\controller\Base;
use think\facade\Request;

class Home extends Base
{

    public function upLoadImg(){

        $file = request()->file('file');
        return dump($file->getInfo());
    }
}