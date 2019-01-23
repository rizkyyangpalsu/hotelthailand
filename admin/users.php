<?php
 session_start();
 include('db.php');
 if(isset($_SESSION["users"]))
 {
      header("location:usersbook.php");

 }

 ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>users</title>
  <link rel="stylesheet" href="css/style.css">
  <style media="screen">
    .login{
      font-family: sans-serif;
      color: cornsilk;
      padding: 0px 0px 40px;
      font-size: -webkit-xxx-large;
    }
    .register{
      font-family: sans-serif;
      color: cornsilk;
      padding: 0px 0px 10px;
    }
  </style>
</head>

<body>
  <div class="container">
      <div id="login">
        <div class="top">
          <div class="login">
            <center>User login<center>
          </div>
        </div>
        <div class="top">
          <div class="register">
            <center><a href="reg_act.php">Register Member</a></center>
          </div>
        </div>

        <form method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text"  name="user1" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="pass1"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" name="sub" style="background-color: #359c38" value="Login"></p>

          </fieldset>

        </form>



      </div> <!-- end login -->

    </div>



</body>
</html>

<?php
   include('db.php');


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername1 = mysqli_real_escape_string($con,$_POST['user1']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass1']);

      $sql = "SELECT * FROM users WHERE usname = '$myusername1' and pass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

         $_SESSION['users'] = $myusername1;
         $_SESSION['email'] = $row['email'];
         $_SESSION['fname'] = $row['fname'];
         $_SESSION['lname'] = $row['lname'];
          $_SESSION['telp'] = $row['telp'];

         header("location: usersbook.php");
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
   }
?>
