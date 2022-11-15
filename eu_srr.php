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
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">EU SRR</h1>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Eu</h6>
                    <h1 class="mb-5">EU SRR</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        
                        <!-- <i class="fa fa-sailboat text-primary fa-3x flex-shrink-0"></i> -->
                        <div class="ms-4">
                            
                            <p class="mb-0">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit clita duo justo magna erat amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem possimus cum vel ducimus dicta corporis reprehenderit delectus saepe tempora, aperiam explicabo hic a illo sapiente! Asperiores illo nobis sequi perferendis!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="images/ship11.png" style="object-fit: cover;" alt="">
                    </div>
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