<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Controller;

class IndexController extends CommonController {
    
    public function index(){
    	if (!session('adminUser')) {
    		$this->redirect('/admin.php?c=login&a=loginout');
    	}
    	$this->display();
    }

    public function main() {
    	$this->display();
    }
}
