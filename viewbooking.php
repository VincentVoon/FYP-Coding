<?php
// Start session if not already started
session_start();

// Check if user is logged in
if (!isset($_SESSION['userid'])) {
    // Redirect user to login page if not logged in
    header("Location: login.php");
    exit;
} 

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'harmonycare') or die('connection failed');

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

// Retrieve appointments for the logged-in user
$userid = $_SESSION['userid'];

$query = "SELECT * FROM tblappointment WHERE userid = $userid";

$result = mysqli_query($conn, $query);
$appointmentList['appointment'] = array();

// Check if appointments exist
if (mysqli_num_rows($result) > 0) {
    // Display appointments
    while ($row = mysqli_fetch_assoc($result)) {
        $currentAppointment = array();

        $currentAppointment['bookingid'] = $row['bookingid'];
        $currentAppointment['mobile'] = $row['mobile'];
        $currentAppointment['services'] = $row['services'];
        $currentAppointment['date'] = $row['date'];
        $currentAppointment['time'] = $row['time'];
        $currentAppointment['special'] = $row['special'];
        $currentAppointment['status'] = $row['status'];
        array_push($appointmentList['appointment'], $currentAppointment);
        
        // $appointmentList['appointment']['bookingid'];


        // // Output appointment details here
        // echo "<div>";
        // echo "Mobile: " . $row['mobile'] . "<br>";
        // echo "Service: " . $row['services'] . "<br>";
        // echo "Date: " . $row['date'] . "<br>";
        // echo "Time: " . $row['time'] . "<br>";
        // echo "Special: " . $row['special'] . "<br>";
        // echo "</div>";

    }
    // Display appointment data
    /*foreach ($appointmentList['appointment'] as $appointment) {
        echo "<div>";
        echo "Booking ID: " . $appointment['bookingid'] . "<br>";
        echo "Mobile: " . $appointment['mobile'] . "<br>";
        echo "Services: " . $appointment['services'] . "<br>";
        echo "Date: " . $appointment['date'] . "<br>";
        echo "Time: " . $appointment['time'] . "<br>";
        echo "Special: " . $appointment['special'] . "<br>";
        echo "</div>"; 
    }*/
} else {
    // No appointments found
    // echo "No appointments found for this user.";
}

// Close database connection
mysqli_close($conn);
?>
<?php
function deleteRecord(){

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HarmonyCare - Elderly Care And Service Booking System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Miri,Sarawak</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Customer Service: Mon - Fri : 09.00 AM - 09.00 PM
                        <br>
                        Public Holiday/Weekend : 10:00 AM - 11:00 PM
                    </small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+085-654219</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                <?php
                 if(isset($_SESSION['userid'])) {
                    echo '<span class="text-primary me-1">Welcome Back!</span>';
                    } else {
                    echo '<a class=" bg-lightblue text-primary me-1" href="login.php"><i class="fas fa-user me-1"></i>Login</a>';
                     }
                ?>
                </div>

                <div class="h-100 d-inline-flex align-items-center">
                <?php
                if(isset($_SESSION['userid'])) {
                 echo '<a class=" bg-lightblue text-primary me-1" href="login.php"><i class="fas fa-sign-out-alt me-1"></i>Logout</a>';
                 } else {
                echo '<a class=" bg-lightblue text-primary me-1" href="login.php"><i class="fas fa-user me-1"></i>Login</a>';
                echo '<a class=" bg-lightblue text-primary me-1" href="signup.php"><i class="fas fa-user-plus me-1"></i>Register</a>';
                 }
                ?>
                </div>
        </div>
    </div>
    <!-- Topbar End -->



     <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>HarmonyCare</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Health</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="chronic.php" class="dropdown-item">Chronic Conditions</a>
                        <a href="symptoms.php" class="dropdown-item">Symptoms</a>
                        <a href="procedures.php" class="dropdown-item">Procedures & Treatments</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Booking</a> 
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="viewbooking.php" class="dropdown-item">View Service Booking</a>
                </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a> 
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        <a href="team.php" class="dropdown-item">Our Caregiver</a>

                </div>
                </div>
            </div>
            <a href="appointment.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">View Service Booking</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Booking</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">View Service Booking</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Appointment Information Column Start -->
<div class="container mt-5">
    <div class="row">
        <?php if(count($appointmentList['appointment']) <= 0){ ?>
            <div class="col-md-6">
            <div class="card mb-4 border-black"> <!-- Added border-black class -->
                <div class="card-body">
                    <h5 class="card-title">No Appointment found</h5>
                    
                </div>
            </div>
        </div>
        <?php } 
        
        foreach ($appointmentList['appointment'] as $appointment):?>
        <div class="col-md-6">
            <div class="card mb-4 border-black"> <!-- Added border-black class -->
                <div class="card-body">
                    <h5 class="card-title">Appointment Details</h5>
                    <p class="card-text">Mobile: <?php echo $appointment['mobile']; ?></p>
                    <p class="card-text">Services: <?php echo $appointment['services']; ?></p>
                    <p class="card-text">Date: <?php echo $appointment['date']; ?></p>
                    <p class="card-text">Time: <?php echo $appointment['time']; ?></p>
                    <p class="card-text">Special: <?php echo $appointment['special']; ?></p>
                    <p class="card-text">Status: <?php echo $appointment['status']; ?></p>
                </div>
                <!-- delete button -->
                 <!-- Delete form -->
                <form method="post" action="delete_appointment.php" onsubmit="return confirm('Are you sure you want to delete this appointment?');"class="d-flex justify-content-center">
                    <input type="hidden" name="bookingid" value="<?php echo $appointment['bookingid']; ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Appointment Information Column End -->
<style>
    .delete{
        width: 100px;
        height: 50px;
    }
</style>


     <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Address</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Miri,Sarawak</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+085654219</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>harmonycare@hotmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Services</h5>
                        <a class="btn btn-link" href="service1.php">Home Care</a>
                        <a class="btn btn-link" href="service2.php">Home Nursing</a>
                        <a class="btn btn-link" href="service5.php">Physiotherapy</a>
                        <a class="btn btn-link" href="service3.php">Home therapy</a>
                        <a class="btn btn-link" href="service6.php">Respite Care</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Quick Links</h5>
                        <a class="btn btn-link" href="about.php">About Us</a>
                        <a class="btn btn-link" href="feature.php">Health</a>
                        <a class="btn btn-link" href="service.php">Our Services</a>
                        <a class="btn btn-link" href="testimonial.php">Testimonial</a>
                        <a class="btn btn-link" href="team.php">Meet Our Team</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Newsletter</h5>
                        <p>Get the latest information about HarmonyCare. Click the Sign Up now! </p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <a href="loginnsignup.html"><button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button></a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">HarmonyCare</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            </br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<style>
    .border-black {
        border: 1px solid #000000; /* Black border */
    }
</style>
    