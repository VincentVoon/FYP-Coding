<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Physiotherapy | HarmonyCare - Elderly Care And Service Booking System</title>
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
                    session_start(); // Start the session

                     if(isset($_SESSION['userid'])) {
                        echo '<span class="text-primary me-1">Welcome Back!</span>';
                        } else {
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
                <a href="service.php" class="nav-item nav-link active">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Health</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="chronic.php" class="dropdown-item">Chronic Conditions</a>
                        <a href="symptoms.php" class="dropdown-item">Symptoms</a>
                        <a href="procedures.php" class="dropdown-item">Procedures & Treatments</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Booking</a> 
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="img/physiotherapy1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/physiotherapy2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Services</p>
                    <h1 class="mb-4">Why Many Skip Physiotherapy Sessions</h1>
                    <p>Often, physiotherapy does not cross our minds until a medical professional refers us to one after an injury. However, physiotherapy is not only for those injured. From a neck sprain while sleeping to chronic pain and conditions such as cerebral palsy and Parkinson’s, physiotherapy can help children, adults and seniors maintain and regain mobility and strength, alleviate pain, and improve their quality of life.</p>
                    <p>While many Malaysians know the benefits of physiotherapy, many of us delay, skip or are tempted to skip these sessions. This may be due to cost or discomfort during and after performing the exercises.</p>
                    <p>In most cases, several sessions of physiotherapy will be required for a full recovery or visible results. This can be discouraging for those expecting a quick recovery. We may also find the frequent travelling to and fro time-consuming, costly and troublesome especially for those already facing mobility issues.</p>
                    <h1 class="mb-4">What Can Physiotherapy Help With?</h1>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Injury</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Chronic Pain</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Arthritis</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Cerebral Palsy</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Parkinson’s</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Stroke</p>

                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h1 class="text-white mb-4">Recover with Physiotherapy in the Comfort of Home</h1>
                        <p class="text-white mb-4 pb-2">Many Malaysians who need physiotherapy don’t realise that physiotherapy can be done at home.</p>
                        <p class="text-white mb-4 pb-2">By having qualified physiotherapists conduct the session one-to-one in the comfort of your home, you can feel more at ease, receive personalised care and recover better, without having to travel or wait at hospitals or clinics. This can be a more convenient and safer alternative, especially for those who face obstacles getting to therapy facilities or have limited mobility. Skipping the commute means that you can save cost on transport as well.</p>
                        <p class="text-white mb-4 pb-2">With the option of home therapy, more will be able and encouraged to continue physiotherapy sessions and prevent potential health complications from developing.</p>
                      </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/physiotherapy3.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                  <div class="position-relative h-100">
                      <img class="position-absolute img-fluid w-100 h-100" src="img/physiotherapy4.jpg" style="object-fit: cover;" alt="Homecare Image">
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                      <h1>Get the Physiotherapy Now !!!</h1>
                      <p><i class="far fa-check-circle text-primary me-3"></i>Promoting Recovery from Injury or Surgery</p>
                      <p><i class="far fa-check-circle text-primary me-3"></i>Improving Mobility and Function</p>
                      <p><i class="far fa-check-circle text-primary me-3"></i>Preventing Injuries and Falls</p>
                      <p><i><strong>"By investing in physiotherapy services, you're investing in your future mobility and independence, ensuring that you can continue to enjoy an active and fulfilling lifestyle."</strong></i></p>
                      <a class="btn" href="appointment.php"><i class="fa fa-plus text-primary me-3"></i>Get Physiotherapy Now</a>
                    </div>
              </div>
          </div>
      </div>
    </div>  
    <!-- Team End -->
        

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
                        <a class="btn btn-outline-light btn-social rounded-circle" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
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
                        <a href="signup.php"><button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button></a>
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