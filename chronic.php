<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chronic | HarmonyCare - Elderly Care And Service Booking System</title>
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
                <a href="service.php" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Health</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.php" class="dropdown-item">Chronic Conditions</a>
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Health</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Health</li>
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
                        <img class="img-fluid rounded w-75 align-self-end" src="img/dementia2.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/dementia1.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Chronic Conditions</p>
                    <h1 class="mb-4">What is Dementia?</h1>
                    <p>As we age, we may find our memory deteriorating. This is known as age-associated memory impairment and is considered part of the normal ageing process.</p>
                    <p>Unlike what most people think, dementia is not a disease, but a syndrome in which there is a deterioration in cognitive functions, including memory, thinking, orientation, comprehension, calculation, learning capacity, language, judgement and the ability to perform everyday tasks.</p>
                    <h1 class="mb-4">Types of Dementia</h1>
                    <p>Oftentimes, we hear people using the terms Alzheimer’s and dementia interchangeably. However, they are not the same. Dementia is an umbrella term used to describe a group of symptoms, and Alzheimer’s is one of the many subtypes of dementia. In fact, there are over 400 types of dementia!</p>
                    <p>Here are 10 of the more common types of dementia:</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Alzheimer’s Disease</p>
                    <p>Alzheimer’s disease is characterised by brain cell death and is the most common form of dementia, making up 60 to 80% of all cases. Older adults are more susceptible to this form of dementia.</p>
                    <p>Early signs include depression and short-term memory loss, and includes confusion, mood changes and trouble speaking and walking as the condition progresses.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Vascular Dementia</p>
                    <p>Vascular dementia is the second most common form of dementia, comprising 20% of all dementia cases, and is caused by a lack of blood flow to the brain. It tends to be more prevalent among older adults and may be related to atherosclerotic disease or stroke. Symptoms may appear progressively or suddenly, depending on the cause.</p>
                    <p>In the early stages, confusion and disorientation are common signs, but in the later stages, people may face trouble concentrating and completing tasks. Problems with vision and hallucinations may occur as well.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Lewy Body Dementia</p>
                    <p>Lewy bodies are small round clumps of protein that build up inside the brain’s nerve cells, disrupting neural signals and communication.</p>
                    <p>This causes memory loss, disorientation and visual hallucination. Sometimes, people may also have trouble falling asleep at night or unexpectedly fall asleep in the day. Many of the symptoms experienced by people with Lewy body dementia are similar to those with Alzheimer or Parkinson diseases.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Parkinson’s Disease</p>
                    <p>Parkinson’s disease, at advanced stages, may lead to dementia. Early symptoms include problems with reasoning and judgement and can develop into confusion, hallucinations, irritability, depression, paranoia and speech difficulties as the condition progresses.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Frontotemporal Dementia</p>
                    <p>Frontotemporal dementia, also known as Pick’s disease, is a term used to describe several types of dementia which affects the front and side of the brain – areas that control language and behaviour. It can affect people as young as 45 years old.</p>
                    <p>Naturally, most of the symptoms of those with frontotemporal dementia revolve around behaviour and language, including loss of inhibitions and motivation, compulsive behaviour and forgetting the meaning of common words.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Creutzfeldt-Jakob Disease</p>
                    <p>Creutzfeldt-Jakob disease is one of the rarest forms of dementia, with only 1 in 1 million being diagnosed with this condition. It progresses rapidly, and people often die within a year of diagnosis.</p>
                    <p>Its symptoms are similar to other forms of dementia, including confusion, memory loss, agitation and depression. Those with Creutzfeldt-Jakob disease may also experience muscle twitching and stiffness.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Wernicke-Korsakoff Syndrome</p>
                    <p>Wernicke’s disease and Korsakoff syndrome are two separate but linked conditions, often grouped together and known as Wernicke-Korsakoff syndrome. Technically, Wernicke-Korsakoff syndrome is not a form of dementia, but has similar symptoms hence is often classified under it.</p>
                    <p>Wernicke disease, also known as Wernicke’s encephalopathy, occurs due to bleeding in the lower sections of the brain caused by a vitamin B-1 deficiency. This vitamin deficiency could arise from malnutrition or chronic infections, but the most common cause is alcoholism.</p>
                    <p>Left untreated, physical symptoms such as double vision and a loss of muscle coordination tend to reduce, as signs of Korsakoff syndrome surface. Symptoms of Korsakoff syndrome include difficulty in processing information, learning new skills and remembering things.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Normal Pressure Hydrocephalus</p>
                    <p>Normal pressure hydrocephalus (NPH) is a condition that causes fluid build-up in the brain’s ventricles, affecting its tissue and leading to dementia symptoms. Some potential causes of this condition include injury, bleeding, infection, brain tumour and previous brain surgeries.</p>
                    <p>Those with the condition may experience poor balance, forgetfulness, mood swings, depression, frequent falls and loss of bowel or bladder control.</p>
                    <p>Thankfully, NPH may be reversed, controlled and cured with surgery, hence it is important to seek treatment as early as possible to reduce brain damage.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Huntington’s Disease</p>
                    <p>Huntington’s disease is a genetic condition and onset of dementia symptoms tend to occur in younger adults. Due to the premature breakdown of the brain’s nerve cells, this condition can cause dementia and impaired movement.</p>
                    <p>There are two types of Huntington’s disease: juvenile and adult-onset, which corresponds to when the symptoms first appear. Symptoms for those with the juvenile form tend to appear during childhood or adolescence, while those with the adult form tend to only experience symptoms in their 30s or 40s.</p>
                    <p>Besides the physical symptoms of jerking, difficulty walking and trouble swallowing, dementia-related symptoms include difficulty focusing on tasks, impulse control problems, trouble speaking clearly and difficulty learning new things.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Mixed Dementia</p>
                    <p>Mixed dementia occurs when a person has more than one form of dementia and is relatively common. In fact, 45% of those with mixed dementia are unaware of it. The most common combination is vascular dementia and Alzheimer’s disease.</p>
                    <p>While the symptoms vary depending on the varying combination, most people will experience difficulty speaking and walking as the condition progresses.</p>                
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
                        <h1 class="text-white mb-4">Dementia Symptoms</h1>
                        <p class="text-white mb-4 pb-2">Dementia is a term used to describe a group of symptoms affecting memory, thinking, and social abilities severely enough to interfere with daily functioning. While symptoms can vary depending on the cause and the individual, common signs and symptoms of dementia include:</p>
                        <p class="text-white mb-4 pb-2">1. Memory loss: Forgetfulness that disrupts daily life, especially forgetting recently learned information or important dates.</p>
                        <p class="text-white mb-4 pb-2">2. Difficulty communicating: Difficulty finding the right words, completing sentences, or following conversations.</p>
                        <p class="text-white mb-4 pb-2">3.Impaired reasoning and judgment: Difficulty making decisions, solving problems, or understanding instructions.</p>
                        <p class="text-white mb-4 pb-2">4. Impaired visual perception: Difficulty with spatial relationships, interpreting visual information, or judging distances.</p>
                        <p class="text-white mb-4 pb-2">5.Impaired ability to focus and pay attention: Difficulty concentrating on tasks, following conversations, or completing projects.</p>
                        <p class="text-white mb-4 pb-2">6. Decline in reasoning and judgment: Changes in judgment or decision-making abilities, leading to poor choices or risky behavior.</p>
                        <p class="text-white mb-4 pb-2">7.Disorientation and confusion: Getting lost in familiar places, forgetting the time or date, or becoming confused about where they are or how they got there.</p>
                        <p class="text-white mb-4 pb-2">8.Difficulty with familiar tasks: Struggling to perform everyday tasks that were once routine, such as cooking, cleaning, or managing finances.</p>
                        <p class="text-white mb-4 pb-2">9.Changes in mood and behavior: Mood swings, irritability, apathy, depression, anxiety, or paranoia may occur.</p>
                        <p class="text-white mb-4 pb-2">10.Loss of initiative: Decreased motivation or interest in activities they used to enjoy.</p>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/dementia3.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


   <!-- About Start -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <img class="img-fluid rounded w-75 align-self-end" src="img/dementia4.jpg" alt="">
                    <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/dementia5.jpg" alt="" style="margin-top: -25%;">
                </div>
            </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">Preventing Dementia</h1>
                <p>There is no sure way to prevent dementia and more research is needed to find out its cause. However, there are some steps we can take to improve our overall health, which may be beneficial in preventing the onset of dementia</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Exercise regularly</p>
                <p>Aerobic exercises, in particular, are great for our heart and circulatory system, boosting brain health. Strength, balance and flexibility exercises can also help seniors stay agile and avoid falls, lowering the risk of brain injury and hence dementia.</p>
                <p>In general, consuming a diet low in sugar and saturated fat, and high in omega fats, vitamins and fibre may prevent dementia. Frequent and regular consumption of tea also helps, due to the bioactive compounds within which contain anti-inflammatory and antioxidant potential, protecting our brains.</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Adopt a healthy diet</p>
                <p>Making the right food choices can keep obesity and diabetes at bay and protect our brain function. For those with dementia, proper nutrition can help to ease behavioural symptoms. It’s also really important to monitor your vitals and keep them under control!</p>
                <p>In the early stages, confusion and disorientation are common signs, but in the later stages, people may face trouble concentrating and completing tasks. Problems with vision and hallucinations may occur as well.</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Quit smoking</p>
                <p>Smoking increases your risk of cardiovascular disease which are risk factors for the two most common types of dementia: Alzheimer’s and vascular dementia. Quitting smoking can be difficult but there are clinics you can attend for smoking cessation therapies.</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Get sufficient and quality sleep</p>
                <p>Poor sleep promotes the buildup of proteins in the brain that can lead to impaired memory and Alzheimer’s.</p>
                <p>For those with poor sleep habits, start by establishing a regular bedtime and commit to it. If you have insomnia or sleep problems such as sleep apnea, consult your doctor and work out a solution that is best for you.</p>              
              </div>
        </div>
    </div>
  </div>
<!-- About End -->


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