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
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
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
	<th>dob</th>
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
		<td><?php echo(date('d F, Y',strtotime($row['dob']))); ?></td>
		<td><?php echo($row['mobile']); ?></td>
		<td><?php echo($row['gender']); ?></td>
		<td><a href="update.php?id=<?php echo($row['id']); ?>"><i class="fa fa-pencil pl-3" aria-hidden="true"></i></a> <a onclick="deleteFunc(<?php echo $row['id']; ?>)"><i class="fa fa-trash pl-5" aria-hidden="true"></i></a> </td>
	</tr> <?php
		 										} 
		  ?>
	

</table>
<script>
	function deleteFunc(id) {	
		if(confirm('are you sure you want to delete?') ) {
			console.log(id);
			$.ajax({
				type: 'post',
				url: 'delete.php',
				data: {id:id},
				dataType: 'json',
				success: function(data) {
					console.log(data);
					if(data.message == 'success') {
						window.location.href = 'edit.php';

					}
					else
					{
						alert ("something went wrong");
					}
				}
			});
		}
	}    
</script>


</body>
</html>



