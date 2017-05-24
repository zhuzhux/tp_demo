
<?php
/*function.php*/
/*共用的方法*/

function show($status,$message,$data=array()){
	// $reuslt = array(
	// 	'status' => $status,
	// 	'message' => $message,
	// 	'data' => $data,
	// );
	// exit(json_encode($reuslt));
	$reuslt = array(
		'status'=>$status,
		'message'=>$message,
		'data'=>$data,
		);
	exit(json_encode($reuslt));
}
function getMd5Password($password){
	return md5($password.C('MD5_PRE'));
}
function getMenuType($type){
	return $type ==1 ?'后台菜单':'前端导航';
}
function status($status)
{
	if($status == 0){
		$str = "关闭";
	}elseif ($status == 1) {
		$str = "正常";
	}elseif ($status == -1) {
		$str = "删除";
	}
	return $str;
}
?>