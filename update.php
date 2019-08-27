<?php 

// if($_SERVER['REQUEST_URI']) {
//         $parts = parse_url($_SERVER['REQUEST_URI']);
//         parse_str($parts['query'], $query);
//         echo $query['id'];
//   echo($_SERVER['REQUEST_URI']);
// }



// $id = '';  

// if($_GET){
  $id = $_GET['id'];

// }

include "data.php";
$query = "select * from users where id='$id'";
 $sql = mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($sql);



if($_SERVER['REQUEST_METHOD'] == "POST") {
                  // echo $id;  
                  // die();  
              $name = $_POST["username"];
              $mobile = $_POST["mobile"];
              $dob = $_POST["dob"];
              $gender = $_POST["gender"];         

$update = "UPDATE users SET username = '$name', mobile = $mobile, dob = '$dob', gender = '$gender' WHERE id = $id ";  


 if(mysqli_query($conn,$update))
 {
    echo "updated successfully". mysqli_affected_rows($conn);
    header("location: edit.php");
     } 
     else
     {
        echo "update error".mysqli_connect_error();
     }



}



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=". $row['id']; ?>" class="frm_sty">
        <label class="lbl_sty">UserName:</label>
        <input type="text" name="username" id="username" value="<?php echo($row['username']); ?>"> <br> <br>
        <label class="lbl_sty">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo($row['email']); ?>" disabled>  <br><br>
        <label class="lbl_sty">Mobile Number:</label>
        <input type="text" name="mobile" id="mobile" value="<?php echo($row['mobile']); ?>"> <br><br>
        <label class="lbl_sty">DOB:</label>
        <input type="date" name="dob" id="dob" value="<?php echo($row['dob']); ?>"> <br><br>
        <label class="lbl_sty">Gender</label>
        <input type="radio" name="gender" value="female" <?php echo ($row['gender'] == 'female') ? 'checked': '' ?> > Female
        <input type="radio" name="gender" value="male" <?php echo ($row['gender'] == 'male') ? 'checked': '' ?>> Male <br> <br>
        <button type="submit" value="submit" id="submit" class="sub_sty">save</button>
  </form>
</body>
</html>