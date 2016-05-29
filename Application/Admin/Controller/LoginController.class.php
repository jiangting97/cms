<?php
/**
 * Created by PhpStorm.
 * User: jiangting
 * Date: 16/5/27
 * Time: 下午10:26
 */

namespace Admin\Controller;


use Think\Controller;

class LoginController extends Controller{
    public function index(){
        $this->display();

   }

    public function loginVolidate(){
        $username = I("username");
        $password = I("password");
        dump($username);
        dump($password);
        if(!trim($username)) {
            return show(0,'用户名不能为空');
        }
        if(!trim($password)) {
           return show(0,'密码不能为空');
        }
        $ret = D('Amdin')->getAdminByUsername($username);
        print_r($ret);

    }
}