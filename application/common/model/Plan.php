<?php
/**
 * Created by PhpStorm.
 * User: jincool
 * Date: 2019/4/16
 * Time: 14:16
 */

namespace app\common\model;
use think\Model;

class Plan extends Model
{
    protected $pk = 'id';//默认主键
    protected $table = 'plan';//绑定数据表
    protected $autoWriteTimestamp = true;
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';

}