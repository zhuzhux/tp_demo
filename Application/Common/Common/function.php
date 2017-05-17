
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

?>