<?php 
// $id = ($_GET['id']);

// include "data.php";
// $query = "select * from users where id='$id'";
//  $sql = mysqli_query($conn,$query);
//  	$row = mysqli_fetch_assoc($sql);

$row = array(
    "username" => "Ankit",
    "email" => "ankit@gmail.com",
    "mobile" => "8691950839",
    "dob" => "",
    "gender" => "female"
);
 

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#" class="frm_sty" onsubmit=" return validation()">
        <label class="lbl_sty">UserName:</label>
        <input type="text" name="username" id="username" value="<?php echo($row['username']); ?>"> <br> <br>
        <label class="lbl_sty">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo($row['email']); ?>" disabled>  <br><br>
        <label class="lbl_sty">Mobile Number:</label>
        <input type="text" name="mobile" id="mobile" value="<?php echo($row['mobile']); ?>"> <br><br>
        <label class="lbl_sty">DOB:</label>
        <input type="date" name="dob" id="dob" value="<?php echo($row['dob']); ?>"> <br><br>
        <label class="lbl_sty">Gender</label>
        <input type="radio" name="gender" value="female" <?php echo ($row['gender'] == 'female')?'checked':'' ?> > Female
        <input type="radio" name="gender" value="male" <?php echo ($row['gender'] == 'male')?'checked':'' ?>> Male <br> <br>
        <button type="submit" value="submit" id="submit" class="sub_sty">submit</button>
  </form>
</body>
</html>