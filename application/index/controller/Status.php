<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/23
 * Time: 16:54
 */

namespace app\index\controller;


use app\common\controller\Base;
use app\common\model\Plan;

class Status extends Base
{

    public function planStatus(){
        $map = [];//条件组
        $map[]=['is_deleted','=',0];
        $data=Plan::where($map)->count('id');
        return json_encode($data);
    }
}