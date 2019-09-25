<?php

$id = $_GET('id');;

if($_SERVER['REQUEST_METHOD'] == "POST") {

              $name = $_POST["username"];
              $mobile = $_POST["mobile"];
              $dob = $_POST["dob"];
              $gender = $_POST["gender"];             

include "data.php";

$update = "update 'users' set 'username' = '$name', 'mobile' = '$mobile', 'dob' = '$dob', 'gender' = '$gender' where 'id' = '$id' ";
 if(mysqli_query($conn,$update))
 {
    echo "updated successfully";
     } 
     else
     {
        echo "update error".mysqli_connect_error();
     }



}

?>


href="delete.php?id=<?php echo($row['id']); ?>"