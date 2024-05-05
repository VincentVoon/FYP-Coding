<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Get the selected role during login

    if (!empty($email) && !empty($password) && !empty($role) && !is_numeric($email)) {
        $query = "SELECT * FROM tblregister WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data['password'] == $password) {
                // Check if the role matches
                if ($user_data['role'] == $role) {
                      $_SESSION['userid']=$user_data['userid'];
                      $_SESSION['role']=$user_data['role'];
                    // Redirect based on role
                    if ($role == 'Caregiver') {
                    
                        header("location: admindash.php");
                        die;
                    } else if ($role == 'Care Recipient') {
       
                        header("location: index.php");
                        die;
                    }
                } else {
                    echo "<script type='text/javascript'>alert('You cannot login with the selected role')</script>";
                }
            } else {
                echo "<script type='text/javascript'>alert('Wrong Email or Password')</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Wrong Email or Password')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please enter valid information')</script>";
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
    <h2>HarmonyCare</h2>
</div>
<form method="POST">
    <div class="role-select">
        <select name="role" required>
            <option value="" disabled selected>Select Role</option>
            <option value="Caregiver">Caregiver</option>
            <option value="Care Recipient">Care Recipient</option>
        </select>
    </div>
    <div class="input-box">
        <input type="text" placeholder="Email" name="email" required>
    </div>
    <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
    </div>
    <div class="input-box button">
        <input type="submit" value="Login">
    </div>
    <div class="text">
        <h3>Haven't signed up as a member? <a href="signup.php">Join Us Now</a></h3>
    </div>
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
  background: #4070f4;
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
