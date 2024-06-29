<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if (!isset($_POST)) {
    $response = array('status' => 'failed', 'data' => null);
    sendJsonResponse($response);
    die();
}

include_once("./db.php");

$bookingid = $_POST['bookingid'];
$status = $_POST['status'];
$name = $_POST['userName'];
$email = $_POST['userEmail'];

$sqlUpdateOTP = "UPDATE tblappointment
                 SET status = '$status'
                 WHERE bookingid = '$bookingid'";
$receiver = $email;
$subject = "Subject";
$body = "Body";
$sender = "gideon7217@gmail.com";

if ($con->query($sqlUpdateOTP) === TRUE) {
    mailNotification($email,$name,$status);
	$response = array('status' => 'success', 'data' => null);
    // sendJsonResponse($response);
    echo "<script type='text/javascript'>alert('Appointment $status'); window.location.href='admindash.php';</script>";


}else{
	$response = array('status' => 'failed', 'data' => null);
	// sendJsonResponse($response);
    echo "<script type='text/javascript'>alert('Request failed'); window.location.href='admindash.php';</script>";

}


function sendJsonResponse($sentArray)
{
    header('Content-Type: application/json');
    echo json_encode($sentArray);
}


function mailNotification($email,$name,$status){
    $subject = 'Notification';
    $body = "Dear Mr/Mrs, please check your appointment status.";

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
        $mail->addAddress($email, $name);     //Add a recipient
       
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>