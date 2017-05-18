var resigter = {
	add : function() {
		var username = $("input[name='username']").val();
		var password  = $("input[name='password']").val();

		if(!username){
			dialog.error("用户名不能为空");
		}
		if(!password){
			dialog.error("密码不能为空");
		}

		var url = "/admin.php?c=resigter&a=add";
		var data = {"username":username,"password":password};
		$.post(url,data, function(rs) {
			if(rs.status == 0){
				return dialog.error(rs.message);
			}
			if(rs.status == 1){
				return dialog.success(rs.message,"/admin.php");
			}
		},"JSON");
	}
}