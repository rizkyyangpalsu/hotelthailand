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
          color: #353328;
          padding: 0px 10px 40px;
          font-size: -webkit-xxx-large;
        }

      </style>


</head>

<body>


 <div class="container">



      <div id="login">

          <div class="top">
            <div class="login">
              <center>Register<center>
            </div>

        <form method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text"  name="user1" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="pass1"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><span class="fontawesome-user"></span><input type="text"  name="fname" value="First Name" onBlur="if(this.value == '') this.value = 'First Name'" onFocus="if(this.value == 'First Name') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-user"></span><input type="text" name="lname"  value="Last Name" onBlur="if(this.value == '') this.value = 'last Name'" onFocus="if(this.value == 'Last Name') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><span class="fontawesome-adjust"></span><input type="text"  name="email" value="Email" onBlur="if(this.value == '') this.value = 'Email'" onFocus="if(this.value == 'Email') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-adjust"></span><input type="text" name="telp"  value="Telp" onBlur="if(this.value == '') this.value = 'telp'" onFocus="if(this.value == 'Telp') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->

            <p><input type="submit" name="sub" style="background-color: #359c38"  value="Register"></p>

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

      $user1 = $_POST['user1'];
   $pass1 = $_POST['pass1'];
   $fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$telp = $_POST['telp'];



      $sql = "INSERT INTO users (usname, pass,fname,lname,email,telp) VALUES ('$user1', '$pass1', '$fname' , '$lname' ,'$email','$telp')";
      $result = mysqli_query($con,$sql);




      if (! $result) {
              echo "<script>alert('Insert Data GAGAL');</script>";
          } else {
              echo "<script>alert('Insert Data Berhasil'); window.location.href = './users.php';</script>";
          }


   }
?>
