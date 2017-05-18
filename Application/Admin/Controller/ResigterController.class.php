<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * use Common\Model 这块可以不需要使用，框架默认会加载里面的内容
 */
class ResigterController extends Controller {

    public function index(){

    	$this->display();
    }
    public function add()
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if($_POST){
                
                if(!isset($username)||!$username){
                    return show(0,"用户名不能为空");
                }
                if(!isset($password)||!$password){
                    return show(0,"密码不能为空");
                }
                $ret = D('Admin')->getAdminByUsername($username);

                if(!$ret){
                    $User = M("Admin"); // 实例化User对象
                    $data['username'] = $username;
                    $data['password'] = $password;
                    $ret=$User->add($data);
                    if($ret){
                        return show(1,'成功');
                    }else{
                        return show(0,'失败');
                    }
                }else{
                    return show(0,'用户名已存在');
                }
                // return show(0,'新增失败',$ret);
            }else{
                $this->display();
            }
        }

}