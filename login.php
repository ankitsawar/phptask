<?php
session_start();
if(isset($_SESSION["email"])) {
	header("location: welcome.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<style type="text/css">
		.lbl_sty {
			font-size: 25px;
			background-color: #87CEFA;
			color: #fff;
		}
		.sub_sty {
			background-color: #00FF00;
			font-size: 23px;
			color: #fff;
		}
		.frm_sty {
			text-align: center;
			margin-top: 70px;
		}
	</style>
</head>
<body>
	<form method="post" action="login2.php" class="frm_sty">
		<label class="lbl_sty">Email:</label>
			<input type="email" name="email" id="email"> <br><br>
		<label class="lbl_sty">Password:</label>
			<input type="password" name="password" id="password"> <br><br>
	   <button type="submit" id="login" value="submit" class="sub_sty">login</button>
	 <a href="register.php">signup</a>
	</form>
</body>
</html> 