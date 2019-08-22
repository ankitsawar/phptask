   <?php
     if($_SERVER["REQUEST_METHOD"] == "POST")  {
      	  $name = $_POST["username"];
      	  $email = $_POST["email"];
      	  $password2 = $_POST["password"];
          $password2 = md5($password2);
      	  $mobile = $_POST["mobile"];
      	  $gender =  $_POST["gender"];

      }	
  
     include_once "data.php";

    $sql = "select email from users where email='$email'";
      $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 1 )
    {
    		echo "email should be unique";
    }
    else
    {
    	 $data = "insert into users(username,email,password,created_at,mobile,gender) values('$name','$email','$password2','$mobile','','  $gender')";

      if(mysqli_query($conn,$data)) {
      	echo "data inserted properly";
      }
      else
      {
      	echo "data not inserted ".mysqli_connect_error();
      }
    }

   ?>
