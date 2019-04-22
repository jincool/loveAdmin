<?php
/**
 * Created by PhpStorm.
 * User: jincool
 * Date: 2019/4/15
 * Time: 14:09
 */

namespace app\common\controller;

use think\Controller;
use think\Hook;


class Base extends Controller
{
    /**
     * 初始化
     */
    protected function initialize()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token,Origin, X-Requested-With, Content-Type, Accept,Authorization");
        header('Access-Control-Allow-Methods: POST,GET');
    }
}