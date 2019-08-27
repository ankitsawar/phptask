<?php
session_start();
include "data.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$email = $_SESSION['email'];
	$name = $_FILES["uploadImage"]["name"];
	$type = $_FILES["uploadImage"]["type"];
	$tmp_name = $_FILES["uploadImage"]["tmp_name"];
	$size = $_FILES["uploadImage"]["size"];
	if(move_uploaded_file($tmp_name,"uploads/".$name)) {

		$sql = "update users set picture = 'uploads/".$name."' where email = '$email' ";
		// print_r($sql);
		// die();
		$execute = mysqli_query($conn,$sql);
		echo "saved successfully";
	}
	else
	{
		echo "failed to load image";

	}
}

	?>







<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
		<input type="file" name="uploadImage" id="uploadImage">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>