<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $role = $_POST['role'];
    $gender = $_POST['gender'];

    // Check if the password and confirm password match
    if ($password !== $confirmpassword) {
        echo "<script type='text/javascript'>alert('Password and Confirm Password do not match')</script>";
    } else {
        // Check if the email already exists in the database
        $check_query = "SELECT * FROM tblregister WHERE email = '$email'";
        $result = mysqli_query($con, $check_query);
        if (mysqli_num_rows($result) > 0) {
            echo "<script type='text/javascript'>alert('Email is already registered')</script>";
        } else {
            // Insert the new user record if the email is not already registered
            if (!empty($email) && !empty($password) && !is_numeric($email)) {
                $query = "INSERT INTO tblregister (name, email, password, confirmpassword, role, Gender) VALUES ('$name','$email','$password','$confirmpassword','$role','$gender')";
                if (mysqli_query($con, $query)) {
                    echo "<script type='text/javascript'>alert('Successfully Registered')</script>";
                } else {
                    echo "<script type='text/javascript'>alert('Error: " . mysqli_error($con) . "')</script>";
                }
            } else {
                echo "<script type='text/javascript'>alert('Please enter valid information')</script>";
            }
        }
    }
}
?>




<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up Into HarmonyCare </title> 
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>HarmonyCare Registration</h2>
    <form METHOD="POST">
      <div class="input-box">
        <input type="text" placeholder="Name" name = "name" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Email" name = "email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name = "password"required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name = "confirmpassword" required>
      </div>

      <div class="form-group"> 
                    <label class="col-md-4 control-label">Role</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <!-- Add a role selection field to the registration form -->
                        <select name="role" required>
                        <option value="" disabled selected>Select Role</option>
                        <option value="Caregiver">Caregiver</option>
                        <option value="Care Recipient">Care Recipient</option>
                        </select>
                        </div>
                    </div>
                </div>

      <div class="form-group">
                  <label class="col-md-4 control-label">Gender</label>
                  <div class="col-md-4 selectContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                          <select name="gender" class="form-control selectpicker" >
                              <option value="">Gender</option>
                              <option value = "Male">Male</option>
                              <option value = "Female">Female</option>
                              <option value = "Others">Other</option>
                          </select>
                      </div>
                  </div>
              </div>  

      
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>

<<style>
 @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #4070f4;
  overflow: hidden;
}
body::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  z-index: -1;
  animation: slideShow 15s infinite;
}
@keyframes slideShow {
  0% { background-image: url('./img/backgroundlogin.jpg'); }
  33% { background-image: url('./img/backgroundlogin2.jpg'); }
  66% { background-image: url('./img/backgroundlogin3.jpg'); }
  100% { background-image: url('./img/backgroundlogin.jpg'); }
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
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form {
  margin-top: 30px;
}
.wrapper form .input-box {
  height: 52px;
  margin: 18px 0;
}
form .input-box input {
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
.input-box input:valid {
  border-color: #4070f4;
}
form .policy {
  display: flex;
  align-items: center;
}
form h3 {
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input {
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover {
  background: #0e4bf1;
}
form .text h3 {
 color: #333;
 width: 100%;
 text-align: center;
}
a {
  color: #4070f4;
  text-decoration: none;
}
a:hover {
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
</style>
