<!DOCTYPE html>
<html>
<head>
	<title>Trang chi tiết</title>
</head>
<body>
	<?php
	if (isset($_GET['id']) && isset($_GET['catid'])) {
		// Lấy giá trị của tham số trên URL
		$masp = $_GET['id'];
		$madm = $_GET['catid'];

		echo "Mã sản phẩm: ". $masp;
		if($madm = 1){
			echo "<br>Sản phẩm thuộc danh mục Laptop";
		}elseif ($madm = 2) {
			echo "Sản phẩm thuộc danh mục Computer";
		}
	}else{
		header('location:index.php');
	}
	


	?>
</body>
</html>