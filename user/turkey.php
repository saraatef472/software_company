<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>gouniasoft</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
          .img-fluid{
                height:300px !important;
                width:97% !important
            }
        </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



         <!-- Navbar Start -->
         <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="img/al.jpeg"style="width:41%;height:70px">Gouniasoft</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="proj.php" class="nav-item nav-link">projects</a>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Filter By</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="soft.php" class="dropdown-item">software</a>
                        <a href="hard.php" class="dropdown-item">Hardware</a>
                        <a href="filter.php" class="dropdown-item">Price</a>
                        <a href="marketing.php" class="dropdown-item">Marketing</a>
                        <a href="graphic.php" class="dropdown-item">Graphic Design</a>
                        <a href="interior.php" class="dropdown-item">Interior Design</a>
                        <a href="brand.php" class="dropdown-item">Offers</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Branches</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="egypt.php" class="dropdown-item">Egypt</a>
                        <a href="emirates.php" class="dropdown-item">Emirates</a>
                        <a href="turkey.php" class="dropdown-item">Turkey</a>
                        <a href="london.php" class="dropdown-item">London</a>
                        <a href="greece.php" class="dropdown-item">Greece</a>
                    </div>
                </div>

                <a href="../adminn/logout.php" class="nav-item nav-link">LOGOUT</a>
            </div>
            <form class="form-inline my-2 my-lg-0" style="display:flex" action="search.php" method="post">

<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit"  name="submit">Search</button></form>
</div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Turkey Branch</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">turkey</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Phone Numbers</h1>
                <h6 class="text-primary text-uppercase"> 00905438784089 </h6>

            </div>
            <br>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Booking //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// General //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Technical //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3005.990822004209!2d28.65869067562814!3d41.112891512977455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b5581d3ad93559%3A0xbb3e7e509e3922de!2zNE03Nis1RzIsIDM0NTU1IEFybmF2dXRrw7Z5L8Swc3RhbmJ1bCwgVMO8cmtpeWU!5e0!3m2!1sen!2sus!4v1698845011372!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<!-- first team -->
   <!-- Team Start -->
   <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

                    <h1 class="mb-5">Our Expert Technicians</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="../sara2.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href="https://www.facebook.com/profile.php?id=100007341450806"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="https://wa.me/+201127931929"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Sara Atef</h5>
                                <small>Software Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../alaa.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href="https://www.facebook.com/alaa.mahmut.7"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="https://wa.me/+905438784089"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Alaa Mahmoud</h5>
                                <small>CEO</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="../ahmed_atef.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href="https://www.facebook.com/ahmedatefoxmovis"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="https://wa.me/+201013925179"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Ahmed Atef</h5>
                                <small>Interior Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="../mayar.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href="https://www.facebook.com/profile.php?id=100006920229865"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="https://wa.me/+201008171751"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Mayar Amr</h5>
                                <small>Graphic Designer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
<!-- end first team -->

<!-- second team -->
        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="../ahmedamr.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href="https://www.facebook.com/ahmed.amrsawaby"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="https://wa.me/+201111621448"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Ahmed Amr</h5>
                                <small>Marketing Specialist</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../sakr.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href="https://www.facebook.com/profile.php?id=100010760282302"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="https://wa.me/+201113041677"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Mohamed Ashraf</h5>
                                <small>Software Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="../nada.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href="https://www.facebook.com/nada.atef.526438"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="https://wa.me/+201032809532"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Nada Atef</h5>
                                <small>Graphic Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="../hany.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href="https://www.facebook.com/hany.megahed.71"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="https://wa.me/+905438784089"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Hany Mahmoud</h5>
                                <small>Marketing Specialist</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
<!-- end second team -->


        <!-- third team -->
  <!-- Team Start -->
  <div class="container-xxl py-5">
            <div class="container">

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="../mostafa.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href="https://www.facebook.com/mostafa.basem.98"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="https://wa.me/+201141806073"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Mostafa Bassem</h5>
                                <small>Hardware Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../eman.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href="https://www.facebook.com/profile.php?id=100017651710779&mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="https://wa.me/+201126777893"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Eman Gamal</h5>
                                <small>Marketing Specialist</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="../seraj.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="#"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Seraj Eldeen</h5>
                                <small>Hardware Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="../someone.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="#"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Zyad Mohamed</h5>
                                <small>Software Developer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- end third team -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">Diagnostic Test</a>
                    <a class="btn btn-link" href="">Engine Servicing</a>
                    <a class="btn btn-link" href="">Tires Replacement</a>
                    <a class="btn btn-link" href="">Oil Changing</a>
                    <a class="btn btn-link" href="">Vacuam Cleaning</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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
