	<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = $_POST['id'];
}
include "data.php";

$query = "delete from users where id='$id'";
if(mysqli_query($conn,$query)) {

	echo json_encode(array(
		'message' => 'success'
	));
}
else
{
	echo json_encode(array(
		'message' => 'failure'
	));
}


?>




