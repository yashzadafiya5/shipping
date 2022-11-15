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
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Certificates </h1>
            <!-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">404</li>
                </ol>
            </nav> -->
        </div>
    </div>
    <!-- Page Header Start -->
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
    <!-- 404 End -->


<?php
require_once("inc/footer.php");
?>
<?php
require_once("inc/script.php");
?>
</body>

</html>