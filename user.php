<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("location: login.php");
	}else{
		$username = $_SESSION['username'];
		$image_path = $_SESSION['image_path'];

	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3>Welcome to your page</h3>
	<h5><a href='logout.php'>Log out</a></h5>
	<hr>
	<img src="<?php echo $image_path; ?>" width='250'>




</body>
</html>