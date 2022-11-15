<?php
require_once("inc/header.php")
?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar Start -->
    <?php
require_once("inc/menu.php")
?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="images/ship1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">SHIP BREAKING</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">SAMAIRA GREEN SHIP RECYCLING
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Error ratione quidem natus quia. Fugiat numquam ut quod reiciendis
                                    fugit, nobis architecto odit incidunt quidem, obcaecati beatae, necessitatibus cum
                                    ducimus ratione!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="images/ship2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">SHIP BREAKING</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">SAMAIRA GREEN SHIP RECYCLING</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint atque tenetur, ipsa odio, illo rem amet dolores autem vero iste, tempore id ad. Quia enim alias eos nesciunt, id molestiae.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Carousel End -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">ABOUT US</h6>
                    <h1 class="mb-5">ABOUT US</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">

                        <!-- <i class="fa fa-sailboat text-primary fa-3x flex-shrink-0"></i> -->
                        <div class="ms-4">
                            <h5>Green Ship Recycling</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore rerum minus
                                doloribus! A harum optio dicta ratione nesciunt blanditiis quis animi, laudantium non
                                doloremque. Laborum veniam in delectus dolores temporibus.</p>
                            <a href="about_us.php" class="btn btn-primary mt-5 py-3 px-5">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="images/ship2.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Services</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 198px; width:307px" src="images/ship4.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Enviroment Management</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href="enviroment_management.php"><i
                                class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="images/firstaid3.jpg" style="height: 198px; width:307px" alt="">
                        </div>
                        <h4 class="mb-3">HEALTH AND SAFETY</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href="health_safety.php"><i class="fa fa-arrow-right"></i><span>Read
                                More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 198px; width:307px" src="images/tra4.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Training</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href="training.php"><i class="fa fa-arrow-right"></i><span>Read
                                More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Fact Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <h6 class="text-secondary text-uppercase mb-3">Some Facts</h6> -->
                    <h1 class="mb-5">#1 Ship BREAKING company</h1>
                    <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam sit hic quos, id, nam illo iste fugiat quod adipisci provident blanditiis dolore architecto aliquam beatae tempore qui culpa impedit quidem?
                    </p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0">9514865236</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="bg-primary p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-users fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">12</h2>
                                <p class="text-white mb-0">Ships Broke</p>
                            </div>
                            <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-ship fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
                                <p class="text-white mb-0">Years Experience</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-success p-4 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-star fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">122</h2>
                                <p class="text-white mb-0">Certificates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">CHAIRMAN</h6>
                    <h1 class="mb-5">CHAIR MANS MESSAGE</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        
                        <!-- <i class="fa fa-sailboat text-primary fa-3x flex-shrink-0"></i> -->
                        <div class="ms-4">
                            <h5>Green Ship Recycling</h5>
                            <p class="mb-0">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit clita duo justo magna erat amet</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        <!-- <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i> -->
                        <div class="ms-4">
                            <h5>EXISITANCE</h5>
                            <p class="mb-0">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit clita duo justo magna erat amet</p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                       <!-- <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i> -->
                        <div class="ms-4">
                            <h5>TEAM SUPPORT</h5>
                            <p class="mb-0">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit clita duo justo magna erat amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="images/team2.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Certicates of legal compilance </h6>
                    <!-- <h1 class="mb-5">HEALTH AND SAFETY</h1> -->
                    <h2 class="mb-5" style="text-transform:uppercase;">Certificates</h2>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" style="margin-top:-50px;" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 361px; width: 498px;" src="images/certi.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" style="margin-top:-50px;" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="images/certi2.jpg" style="height: 361px; width: 498px;" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" style="margin-top:-50px;" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="images/certi3.jpg" style="height: 361px; width: 498px;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-0">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="images/team1.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="images/team2.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="images/team4.png" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="images/team3.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>

    <?php
require_once("inc/footer.php");
?>
    <?php
require_once("inc/script.php");
?>
</body>

</html>