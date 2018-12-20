<?php
	session_start();
	if(isset($_SESSION['login']) && isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){
		//Hủy phiên làm việc
		session_unset($_SESSION['login']);
		$_SESSION['loggedin'] = false;

		header('location: login.php');
	}else{
		header('location: login.php');
	}	
?>