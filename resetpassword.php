<?php
session_start();
include("db.php");

$userid = $_GET['userid'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $p1 = $_POST['p1'];
  $p2 = $_POST['p2'];

  if ($p1 != $p2) {
      echo "<script type='text/javascript'>alert('Password and Confirm Password do not match');</script>";
      return;
  }

  $query = "UPDATE tblregister SET `password`='$p1' WHERE `userid`='$userid'";
  if (mysqli_query($con, $query)) {
      echo "<script type='text/javascript'>alert('Password reset successfully'); window.location.href='login.php';</script>";
  } else {
      echo "<script type='text/javascript'>alert('Password reset failed');</script>";
  }
}
?>




  <!DOCTYPE html>
  <!-- Coding By CodingNepal - codingnepalweb.com -->
    <html lang="en" dir="ltr">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login form in HTML CSS | CodingLab </title> 
        <link rel="stylesheet" href="style.css">
  </head>
  <body>
        <div class="wrapper">
        <div class="title-wrapper">
        <h2>Reset Password</h2>
        </div>


    <form method="POST">
      <!-- <div class="role-select">
        <select name="role" required>
            <option value="" disabled selected>Select Role</option>
            <option value="Caregiver">Caregiver</option>
            <option value="Care Recipient">Care Recipient</option>
        </select>
     </div> -->
      <div class="input-box">
        <input type="password" placeholder="New Password" name="p1" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Re-enter Password" name="p2" required>
      </div>
      <div class="input-box button">
        <input type="submit" value="OK">
      </div>
      <!-- <div class="text">
        <h3>Haven't signed up as a member? <a href="signup.php">Join Us Now</a></h3>
      </div> -->
    </form>

    </div>

  </body>
  
</html>



<style>
 @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #4070f4;
  background-image: url('./img/backgroundlogin.jpg'); /* Add your image URL here */
  background-size: cover; /* Make the background cover the entire area */
  background-repeat: no-repeat; /* Prevent the background from repeating */
  background-position: center; /* Center the background image */
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}

.role-select {
  position: absolute;
  top: 40px; /* Adjust as needed */
  right: 20px; /* Adjust as needed */
}

.role-select select {
  padding: 8px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.title-wrapper {
  display: flex;
  align-items: center;
}

.wrapper {
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}

.wrapper h2 {
  font-size: 22px;
  font-weight: 600;
  color: #333;
  margin-right: 20px;
}

.role-select {
  margin-left: auto;
}

.role-select select {
  padding: 8px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.input-box {
  margin-top: 20px;
}

.input-box input[type="text"],
.input-box input[type="password"] {
  padding: 8px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 100%;
}

.input-box.button input[type="submit"] {
  color: #fff;
  background: #4070f4;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
}

.text h3 {
  margin-top: 20px;
  color: #333;
}

.text h3 a {
  color: #4070f4;
  text-decoration: none;
}

.text h3 a:hover {
  text-decoration: underline;
}


</style>
