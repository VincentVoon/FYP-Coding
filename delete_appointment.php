<?php
session_start();
include_once('db.php');

// Check if user is logged in
if (!isset($_SESSION['userid'])) {
    // Redirect user to login page if not logged in
    header("Location: login.php");
    exit;
}

// Check if bookingid is set
if (!isset($_POST['bookingid'])) {
    header("Location: viewbooking.php");
    exit;
}


// Check connection
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}

// Delete the appointment
$bookingid = intval($_POST['bookingid']);
$query = "DELETE FROM tblappointment WHERE bookingid = $bookingid";
if (mysqli_query($con, $query)) {
    $_SESSION['message'] = "Appointment deleted successfully.";
} else {
    $_SESSION['message'] = "Failed to delete appointment.";
}

// Close database connection
mysqli_close($con);

// Redirect to viewbooking.php
header("Location: viewbooking.php");
exit;
?>
