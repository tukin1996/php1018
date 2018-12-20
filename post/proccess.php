<?php
	session_start();
	//Tạo mới CSDL giả lập chưa các TK người dùng
	$account = array(
		'admin'	=> '123456',
		'manager'	=> '123',
		'member'	=> 'abc123'
	);


	
	 
	 
	//Kiểm tra người dùng có click vào nút 'btnLogin' hay không
	if (isset($_POST['btnLogin'])) {
		//Tiến hành lấy dữ liệu trên form và xử lý đăng nhập
		$user = $_POST['txtUser'];
		$pass = $_POST['txtPass'];
	$status = 0;
	foreach ($account as $key => $value) {
	 	if ($user == $key && $pass == $value) {
	 		$status = 1;
	 		break;

	 	}else{
	 		$status = 0;
	 	}
	 }	

	 if($status == 1){
	 	//Cấp phiên làm việc cho user và điều hướng về index
	 	$_SESSION['login'] = $user;
	 	$_SESSION['loggedin'] = true;
	 	//Điều hướng về index
	 	header("location: index.php");

	 }else{
	 	header("location: login.php");
	 }
	
	}else{
		header("location: login.php");
	}
?>