<?php
session_start();
if(empty($_SESSION)) {
	header("location: login.php");
}

include "data.php";
// $email = $_SESSION['email'];

$query = "select * from users";
$sql = mysqli_query($conn,$query);
 
?>


<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
	    <script src="jquery.min.js"></script>
		<script src="bootstrap.js"></script>
		<style type="text/css">
			.tab_sty {
				width: 100%;
			}

			table,th,td {
				border: 1px solid black;
			}
		</style>
</head>
<body>
<table class="tab_sty">
	<tr>
	<th>id</th>
	<th>username</th>
	<th>email</th>
	<th>created_at</th>
	<th>Number</th>
	<th>gender</th>
	<th>actions</th>
	</tr>
	<?php
		while ( $row = mysqli_fetch_assoc($sql)) {
	?>
		<tr>
		<td><?php echo($row['id']); ?></td>
		<td><?php echo($row['username']); ?></td>
		<td><?php echo($row['email']); ?></td>
		<td><?php echo($row['created_at']); ?></td>
		<td><?php echo($row['mobile']); ?></td>
		<td><?php echo($row['gender']); ?></td>
		<td><a href="update.php?id=<?php echo($row['id']); ?>">edit</a> <a dataId="<?php echo($row['id']); ?>">delete</a> </td>
	</tr> <?php
		 										} 
		  ?>
	

</table>
</body>
</html>