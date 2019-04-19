<?php
/**
 * Created by PhpStorm.
 * User: jincool
 * Date: 2019/4/16
 * Time: 14:14
 */

namespace app\index\controller;

use app\common\controller\Base;
use app\common\model\Plan as PlanModel;
use think\facade\Request;


class Plan extends Base
{
    public function planInfo()
    {
        $data = Request::post();//获取数据
        $page=$data['page'];
        $res = PlanModel:: where('is_deleted', 0)->page($page,5)->select();
        return json_encode($res);
    }

}