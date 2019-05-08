<?php
/**
 * Created by PhpStorm.
 * User: jincool
 * Date: 2019/4/15
 * Time: 14:26
 */

namespace app\index\controller;

use app\common\controller\Base;
use app\common\model\User;
use think\facade\Request;


class Login extends Base
{

    /**
     * 用户登录验证与查询
     * @return array
     */
    public function loginCheck()
    {
//        if (Request::isAjax()) {
//使用模型来创建数据
            $data = Request::post();//获取数据
            $rule = [
                'username|姓名' => 'require|length:2,12|chsAlphaNum',
                'password|密码' => 'require|alphaNum',

            ];//验证规则
            $res = $this->validate($data, $rule);
            if (true !== $res) {
//                return ['status' => -1, 'message' => $res];
                echo json_encode(['status' => -1, 'message' => $res]);
            } else {
                $result = User::get(function ($query) use ($data) {
                    $query->where('username', '=', $data['username'])
                        //   ->where('password','=',md5($data['password']));
                        ->where('password', '=', $data['password']);
                });
                if (null == $result) {
//                    return [
//                        'status' => 0,
//                        'message' => '密码错误，请检查'];

                    echo json_encode([
                        'status' => 0,
                        'message' => '密码错误，请检查']);

                } else {

//                    return [
//                        'status' => 1,
//                        'message' => '登录成功',
//                        'user' => ['uid' => $result->id,
//                            'sex' => $result->sex]
//                    ];
                    echo json_encode([
                        'status' => 1,
                        'message' => '登录成功',
                        'user' => ['uid' => $result->id,
                            'sex' => $result->sex,
                            'wid' => $result->wid,
                            ]
                    ]);
                }
            }
//        } else {
//            return [
//                'status' => 2,
//                'message' => '请求类型错误'
//            ];
//        }
    }

}