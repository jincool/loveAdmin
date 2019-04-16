<?php
/**
 * Created by PhpStorm.
 * User: jincool
 * Date: 2019/4/15
 * Time: 14:16
 */

namespace app\common\model;

use think\Model;

class User extends Model
{
    protected $pk = 'id';//默认主键
    protected $table = 'user';//绑定数据表
    protected $autoWriteTimestamp = true;
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';

//    protected function getSexAttr($value = '')
//    {
//        $status = [
//            '0' => '女',
//            '1' => '男',
//        ];
//        return $status[$value];
//    }

}