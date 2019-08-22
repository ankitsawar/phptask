<!DOCTYPE html>
<html>
<head>
  <title>registration page</title>
    <style type="text/css">
      .error {
        color: red;
        font-size: 15px;
      }
      .sub_sty {
        background-color: #00FF00;
        font-size: 25px;
        color: #fff;
      }
      .lbl_sty {
        background-color: #87CEFA;
        font-size: 25px;
        color: #fff;
      }
      .frm_sty {
        text-align: center;
        margin-top: 70px;
      }
    </style>
</head>
<body>
  <form method="post" action="registration.php" class="frm_sty" onsubmit=" return validation()">
        <label class="lbl_sty">UserName:</label>
        <input type="text" name="username" id="username"> <br> <br>
        <label class="lbl_sty">Email:</label>
        <input type="email" name="email" id="email">  <br><br>
        <label class="lbl_sty">Password:</label>
        <input type="password" name="password" id="password"><br><br>
        <label class="lbl_sty">Mobile Number:</label>
        <input type="text" name="mobile" id="mobile"> <br><br>
        <label class="lbl_sty">DOB:</label>
        <input type="date" name="dob" id="dob"> <br><br>
        <label class="lbl_sty">Gender</label>
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="male"> Male <br> <br>
        <button type="submit" value="submit" id="submit" class="sub_sty">submit</button>
  </form>

      <script src="jquery.min.js"></script>
     <script>
  
    function validation(){
        alert("submitted");
        var name = $("#username").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var number = $("#number").val();
        $(".error").remove();

        if (name.length < 1) {
            $("#username").after("<span class='error'> This field is required  </span>");
            return false;
        }

        // else {
        //   var matchname = /^[A-Za-z]+$/;
        //   var validname = matchname.test("name");
        //   if (!validname) {
        //     $("#username").after("<span class='error'>the name should be valid</span>");
        //     return false;
        //   }
        // }

        if(email.length < 1) {
            $("#email").after("<span class='error'>this field is required</span>");
            return false;
        }

        // else {
        //   var matchemail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+  $/;
        //   var validemail = matchemail.test(email);

        //   if(!validemail) {
        //     $("#email").after("<span class='error'>this is not correct format</span>");
        //     return false;
        //   }
        // }
       
      
       if(password.length < 8) {
          $("#password").after("<span class='error'>password is too short</span>");
          return false;
       }

       // else{
       //   var matchpassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
       //    var validpassword = matchpassword.test(password);
       //      if(!validpassword) {
       //        $("#password").after("<span class='error'>password should contain caps small and special charector</span>");
       //        return false;
       //        }
       //    }

          if(number.length < 9) {
              $("#number").after("<span class='error'>number is not valid</span>");
              return false;
          }      

      }

   </script>

</body>
</html>