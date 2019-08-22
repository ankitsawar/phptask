<?php 
session_start();
			if(empty($_SESSION)){
				header("location: login.php");
			}
	include "data.php";
	$email = $_SESSION['email'];
	$query = "select * from users where email = '$email'";
	// echo $query;
	$sql = mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($sql);
	// echo "<pre>";
	// print_r($row);
	// die();
		?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome page</title>

		<script src="jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			var banner = $(".animate");
			for(var i=0; i<999; i++) {
				banner.css("opacity","1");
				banner.animate({left:500}, 1000);

			for(var k=0; k<5; k++) {
				banner.animate({opacity:0},600);
				banner.animate({opacity:1},600);
			}

			banner.delay(2000).animate({left:1200},1000);
			banner.animate({left:-600},0);
						}
		});
	</script>
	<style type="text/css">
		.edt_sty {
			color: white;
			text-decoration: none;
			font-size: 25px;

		}

		nav ul li a:hover {
			color: #fff;
		}
		.avtar {
			height: 100px;
			width: 100px;
			vertical-align: middle;
			border-radius: 50%;
		}
		#sliding_text {
			position: relative;
			width: 100%
		}
		.animate {
			position: absolute;
		}

		.wlcm_sty {
			color: #800000;
			font-size: 25px;
			font-style: italic;
			font-weight: 500;
		}
		.user_info {
			height: 30px;
			width: 150px;
			border: 1px solid red;
			text-align: center;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	    <script src="jquery.min.js"></script>
	<script src="bootstrap.js"></script>
</head>	
<body>


	<nav class="navbar navbar-expand-sm bg-dark">
		<ul class="navbar-nav">
			<li class="nav-item"><a href="" class="nav-link edt_sty">edit</a></li>
			<li><a href="logout.php" class="nav-link edt_sty">logout</a></li>
		</ul>
	</nav>





	<div id="sliding_text">
		<P class="animate wlcm_sty">Welcome <?php echo($row['username']); ?></P>
	</div>

	<div class="pt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-lg-7 col-xl-7">
				
				if($_row['gender'] == 'male')
				{
					<img src="images/boy-image.png" alt="male avtar" class="rounded-circle" width="300px" height="300px">
				}
				else {
				<img src="images/girl-image.jpg" alt="female avtar" class="rounded-circle" width="300px" height="300px">
			}
			</div>
			<div class="col-md-5 col-lg-5 col-xl-5">
				<div class="user_info">
					<?php echo ($row['username']); ?>
				</div>
				<div class="user_info mt-3">
					<?php echo ($row['email']); ?>
				</div>
				<div class="user_info mt-3">
					<?php echo ($row['created_at']); ?>
				</div>
				<div class="user_info mt-3">
					<?php echo ($row['mobile']); ?>
				</div>
				<div class="user_info mt-3">
					<?php echo ($row['gender']); ?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>