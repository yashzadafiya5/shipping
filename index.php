<?php
require_once("inc/header.php")
?>
<style>
    .slidetext
    {
        font-size: larger;    }
    @media (min-width: 767px) and (max-width: 990px) {

    }
    @media (min-width: 320px) and (max-width: 767px) {
        .imgi>img
        {
            height: 500px;
            width: 400px;
        }
        .slidetext
        {
            font-size: small;
        }
        .h1
        {
            font-size: x-large;
            text-align: left;
        }
    }
    .click>h6
    {
        color: #FF3E41;
    }
    .click>h6:hover
    {
        color: rgb(9, 232, 232);
    }
</style>
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
    <!-- slider -->
  <div class="container-fluid  p-0 pb-5">
    <div class="row">
      <div class="col-lg-12" >
        <div
          id="carouselWithCaptions"
          class="carousel slide pointer-event"
          data-bs-ride="carousel"
        >
          <ol class="carousel-indicators indicator">
            <li
              data-bs-target="#carouselWithCaptions"
              data-bs-slide-to="0"
              class=""
            ></li>
            <li
              data-bs-target="#carouselWithCaptions"
              data-bs-slide-to="1"
              class=""
            ></li>
            <li
              data-bs-target="#carouselWithCaptions"
              data-bs-slide-to="2"
              class="active"
              aria-current="true"
            ></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item imgi active ">
              <img
                src="images/ship1 (1).jpg"
                class="d-block w-100 image-fluid mainsliders" 
                alt="Slide 1"
                
                
              />
              
            </div>
            <div class="carousel-item imgi">
              <img
                src="images/ship1 (2).jpg"
                class="d-block w-100 mainsliders "
                alt="Slide 2"
              />
              
            </div>
            <div class="carousel-item imgi">
              <img
                src="images/ship1 (3).jpg"
                class="d-block w-100 mainsliders"
                alt="Slide 3"
              />
              
            </div>
          </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselWithCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselWithCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        
        <div class=" position-absolute top-0 start-0 h-100 w-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);  ">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8" style="margin-left: 30px;">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">SHIP BREAKING</h5>
                                <h1 class="display-2 text-white animated slideInDown mb-4 h1">SAMAIRA GREEN SHIP RECYCLING
                                </h1>
                                <p class="fw-medium text-white mb-4 pb-2 slidetext">Ship breaking is the flagship business activity of RKB Group. With experience of more than 30 years group is the pioneer of the ship breaking industry at Alang-Bhavnagar, Asia's Largest ship breaking yard.</p>
                            </div>
                        </div>
                    </div>
        </div>
        </div>
      </div>
    </div>
</div>
  <!-- slider -->
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
                            <p class="mb-0">With its production facilities and adapted organizational approach in state-of-
                                the-art shipbuilding, Shipbuilding has every reason to look forward to a healthy continue of its long tradition.
                                2004 saw the completion of the cover of Dock 2, in which large vessels, such as
                                Lading Platform Docks can be constructed and overhauled.Since 2006 major
                                investments have been made at the Vlissingen East facility</p>
                            <a href="about_us.php" class="btn btn-primary mt-5 py-3 px-5">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="images/about.jpg"
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
                            <img class="img-fluid" style="height: 198px; width:307px" src="images/enviro.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Enviroment Management</h4>
                        <p>While ships sometimes carry waste materials as cargo, a ship itself is also considered as waste when the decision is made to dismantle .</p>
                        <a class="btn-slide mt-2" href="enviroment_management.php"><i
                                class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="images/helth.jpg" style="height: 198px; width:307px" alt="">
                        </div>
                        <h4 class="mb-3">HEALTH AND SAFETY</h4>
                        <p class="text-center"><br>
                            “Safety First-Then Production”<br>
                            “Ensure to Employ only Trained Workers”</p>
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
                        <p>Train with confidence, believe in yourself <br>Improve yourself, be a better you <br>Best trainers, amazing results </p>
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
                    <p class="mb-5" style="font-family: 'Inter', sans-serif;">

                        ship breaking is the flagship business activity of rkb group. With experience of more than 30 years group is the pioneer of the ship breaking industry at alang-bhavnagar, Asia largest ship breaking yard.
                        <br>
                        rkb group is one the initial companies which started the operations at along at its starting only. With along rkb group seen every phase of the business like initial infrastructure development and struggling of 90s great pick of the industry in the last decade of 20th century and a fast recession in the ship breaking industry in the initial years of 21st century.
                        
                    </p>
                    <div >
                        <a href="contact.php" class="d-flex align-items-center">
                            <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                            <div class="ps-4 click">
                                <h3 style="font-family: 'Inter', sans-serif;">contact for any qutions!</h3>
                                <h6 class=" m-0 ">Click Here >>></h6>
                            </div>
                        </a>
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
                            <div class="bg-success p-4 mb-4 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-certificate fa-2x text-white mb-3" aria-hidden="true"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">122</h2>
                                <p class="text-white mb-0">Certificates</p>
                            </div>
                            <div class="bg-warning p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-star fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">50</h2>
                                <p class="text-white mb-0">Reviews </p>
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
                    <h1 class="mb-5">CHAIRMAN'S MESSAGE</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        
                        <!-- <i class="fa fa-sailboat text-primary fa-3x flex-shrink-0"></i> -->
                        <div class="ms-4">
                            <h5>Green Ship Recycling</h5>
                            <p class="mb-0">
                                ship breaking is the flagship business activity of rkb group. With experience of more than 30 years group is the pioneer of the ship breaking industry at alang-bhavnagar, Asia largest ship breaking yard.</p>
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
                            <p class="mb-0">Don't believe in just yourself, believe in your team.
                                <ul>
                                    <li>Fire Fighting Team</li>
                                    <li>Ship Broken team</li>
                                    <li>Trainer Team</li>
                                    <li>Helth & Safty Team</li>
                                </ul>
                            </p>
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