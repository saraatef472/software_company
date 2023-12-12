<?PHP
include('connect.php');
// if(!empty($_SESSION['userID'])){
//     $id = $_SESSION['userID'];
//     $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
//     // $row = mysqli_fetch_array($result);
//     // header("location:index.php");
// }else{
//     header("Location:../index.php");
// }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>gouniasoft cars</title>
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
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <a href="../adminn/index2.php" class="nav-item nav-link">login</a>
            </div>
            <form class="form-inline my-2 my-lg-0" action="search.php" method="post">

<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit"  name="submit">Search</button></form>
</div>
    </nav>
    <!-- Navbar End -->












        <!-- About Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 pt-4" style="min-height: 400px;">
                        <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                            <img class="position-absolute img-fluid w-100 h-100" src="img/lap1.jpg" style="object-fit: cover;" alt="">
                            <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                                <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                                <h4 class="text-white">Experience</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="text-primary text-uppercase">// About Us //</h6>
                        <h1 class="mb-4"><span class="text-primary">Electronics</span> Is The Best Place For Your Auto Care</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-4 mb-3 pb-3">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">01</span>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Professional & Expert</h6>
                                        <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">02</span>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Quality Servicing Center</h6>
                                        <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">03</span>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Awards Winning Workers</h6>
                                        <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- About End -->


        <!-- Fact Start -->
        <div class="container-fluid fact bg-dark my-5 py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-check fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Years Experience</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Expert Technicians</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Satisfied Clients</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-desktop fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Compleate Projects</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->






   <!--  first Testimonial Start -->
   <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="text-primary text-uppercase">See All</h5>
                    <h1 class="mb-5">Mobile Phones</h1>
                </div>
                <div class="owl-carousel testimonial-carousel position-relative">
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/iphone.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">iphone</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/phone.jpg"style="width: 230px; height: 160px;">
                        <h5 class="mb-0">Oppo</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/phone2.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">Iphone</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/oppophone.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">Samsung</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- first Testimonial End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                    <h1 class="mb-5">Laptops</h1>
                </div>
                <div class="owl-carousel testimonial-carousel position-relative">
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/lap2.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">HP Laptop</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/lap3.jpg"style="width: 230px; height: 160px;">
                        <h5 class="mb-0">HP Laptop</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/lap4.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">DELL Laptop</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/lap6.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">mac </h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

    <!-- second testimensional -->
            <!-- Testimonial Start -->
            <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                <h5 class="text-primary text-uppercase">See All</h5>

                    <h1 class="mb-5">AirPods</h1>

                </div>
                <div class="owl-carousel testimonial-carousel position-relative">
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/airpods1.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">Apple Airpods</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/airpods2.jpg"style="width: 230px; height: 160px;">
                        <h5 class="mb-0">Joy Room</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/airpods3.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">Airpods</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/airpods1.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">Joy Room </h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

    <!-- #end second testimensional -->

    <!-- third testimensional -->
            <!-- Testimonial Start -->
            <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                <h5 class="text-primary text-uppercase">See All</h5>

                    <h1 class="mb-5">tablets</h1>

                </div>
                <div class="owl-carousel testimonial-carousel position-relative">
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/ipad1.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">Apple Ipad</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/ipad2.jpg"style="width: 230px; height: 160px;">
                        <h5 class="mb-0">ipad</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/ipad3.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">Apple Ipad</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/ipad4.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">ipad </h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

    <!-- #end third testimensional -->

       <!--  fourth Testimonial Start -->
   <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="text-primary text-uppercase">See All</h5>
                    <h1 class="mb-5">Accessories</h1>
                </div>
                <div class="owl-carousel testimonial-carousel position-relative">
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/powerbank.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">PowerBank</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/applewatch.jpg"style="width: 230px; height: 160px;">
                        <h5 class="mb-0">APPLE WATCH</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/charger.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">CHARGER</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img alt="noimg" class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/headphone.jpg" style="width: 230px; height: 160px;">
                        <h5 class="mb-0">HeadPhone</h5>
                        <p>DESC</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fourth Testimonial End -->





        <!-- Team Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase">// Our Technicians //</h6>
                    <h1 class="mb-5">Our Expert Technicians</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Team End -->

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
                                <a href="../adminn/index2.php">Admin</a>
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
