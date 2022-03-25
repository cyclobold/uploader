<?php
if(isset($_POST['username']) && isset($_POST['password']) && isset($_FILES['upload_file'])){


	echo "Proceed";

	$user_username = trim($_POST['username']);
	$user_password = trim($_POST['password']);

	require "database.php";


	$query = "INSERT INTO `users`(`username`, `password`, `image_path`) VALUES('$user_username', '$user_password', 'none')";

	$result = mysqli_query($conn, $query);

	if($result){
		$last_id = mysqli_insert_id($conn);

		if(!is_dir("user_files/{$last_id}")){
			mkdir("user_files/{$last_id}");
		}

		$destination = "user_files/{$last_id}/".$_FILES['upload_file']['name'];
		move_uploaded_file($_FILES['upload_file']['tmp_name'], $destination);

		$update_query = "UPDATE `users` SET `image_path` = '$destination' WHERE `id` = $last_id LIMIT 1";

		$update_result = mysqli_query($conn, $update_query);

		if($update_result){
			echo "Account Created";
		}

	}

	

	



}

