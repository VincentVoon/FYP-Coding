<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start();
include_once("db.php");

$servername = `http://localhost`;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    

    if (!empty($email) && !is_numeric($email)) {
      $userid = isEmailExist($email); 

      if($userid == -1){
        echo "<script type='text/javascript'>alert('Email not exists')</script>";
      }
      
      sendMail($email,$userid);
    } else {
        echo "<script type='text/javascript'>alert('Please enter valid email')</script>";
    }
}

function isEmailExist($email) {
  global $con; // Make sure to use the global $con variable
  $query = "SELECT userid FROM tblregister WHERE email = '$email'";
  $result = mysqli_query($con, $query);

  if ($result && mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      return $row['userid'];
  } else {
      return -1;
  }
}

function sendMail($email,$userid){
  global $servername;
  $subject = 'Forgot Password';
  $body = "
            <!DOCTYPE html>
            <html>
              <body>
                <a href=`http://localhost/fyp%20coding/resetpassword.php?userid=$userid`>Reset Password</a>
              </body>
            </html>
          ";

  $mail = new PHPMailer(true);
  try {
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                  //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'gideon7217@gmail.com';         //SMTP username
      $mail->Password   = 'pfhdquckseyxurrg';                         //SMTP password
      // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
  

      //Recipients
      $mail->setFrom('gideon7217@gmail.com');
      $mail->addAddress($email);     //Add a recipient
     
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $subject;
      $mail->Body    = $body;
      $mail->send();
      echo "<script type='text/javascript'>alert('Email sent')</script>";
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
        <h2>Forgot Password</h2>
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
        <input type="text" placeholder="Email" name="email" required>
      </div>
      <!-- <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
      </div> -->
      <div class="input-box button">
        <input type="submit" value="Confirm">
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
