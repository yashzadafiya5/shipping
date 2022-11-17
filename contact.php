<?php
require_once("inc/header.php")
?>
<style>
      
    @media (min-width: 1300px) and (max-width: 1600px) {
        #map
        {
        box-shadow: 5px 5px 10px gray;
        height: 380px;
        width: 720px;
        }

      }
    @media (min-width: 1280px) and (max-width: 1300px)
    {
        #map
        {
        margin-top: 10px;
        height: 350px;
        width: 640px;
        }
    }
      @media (min-width: 990px) and (max-width: 1281px) {
        #map
        {
            margin-top: 10px;
            height: 310px;
            width: 550px;
        }
      }
    @media (min-width: 767px) and (max-width: 990px) {

        #map
        {
        margin-top: 10px;
        height: 380px;
        width: 690px;
        }
      
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
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">CONTACT US </h1>
            <h5 class='text-white'>Explain why someone should contact your business. </h5>
            <!-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">404</li>
                </ol>
            </nav> -->
        </div>
    </div>
   <!-- Contact Start -->
   <div class="container mt-5 ">
    <div class="row">
      <div class="col-12 text-center  ">
        <h1>Contact For Any Query</h1>
        <p>
        In order to improve your experience, please select the most accurate connection to your booking office location: 
      <br>
          Email: demo@gmail.com<br>
          Phone: + 1 469 937 2470
        </p>
        
      </div>
    </div>
  </div>
  <section class="text-center mt-4">
    <div class="container-fluid border  border-5 new">
      <div class="row">
        <div class="col-lg-7 col-12 py-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.399269153597!2d-96.54829588511637!3d32.966866381588694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c030e2b99032d%3A0x63934c0ba1dd49ee!2s2362%20Elm%20Grove%20Rd%2C%20Wylie%2C%20TX%2075098%2C%20USA!5e0!3m2!1sen!2sin!4v1665827480542!5m2!1sen!2sin" id="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    
        <div class="col-lg-5 crd py-5" id="forms">
          <form>
            <div class="row">
              <div class="col-md-9">
                <div class="row mb-4">
                  <div class="col-md-6 mb-1 mb-md-0">
                    <div class="form-outline">
                        
                      <input type="text" id="form3Example1" class="form-control mt-3 rounded-3" placeholder="Firstname" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-outline">
                      <input type="email" id="form3Example2" class="form-control mt-3 rounded-3" placeholder="Email" />
                    </div>
                  </div>
                </div>
                <div class="form-outline mb-4">
                 
                  <input type="tel" id="form3Example3" class="form-control rounded-3" placeholder="Mobile Number" />
                </div>
                <div class="form-outline mb-4">
                  
                  <textarea class="form-control rounded-3" id="form4Example3" rows="4" placeholder="Message"></textarea>
                </div>
                <div class="d-grid gap-2">
                  <button class="btn btn-primary mb-5 rounded-3" type="submit" id="send">Send</button>
                </div>
                
                </div>
              </div>
              
            </div>
          </form>
    
        </div>
      </div>
    </div>
  
  
  </section>
    <!-- <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container contact-page py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                    <h1 class="mb-4">Contact For Any Query</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ad voluptatibus temporibus nobis, totam alias, vel voluptas ducimus omnis et repellat ullam maiores quod fuga error est facilis molestiae culpa.
                        
                    <div class="bg-light p-4">
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
                                        <textarea class="form-control" placeholder="Leave a message here" id="message"
                                            style="height: 100px"></textarea>
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
                <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29644.85119134916!2d72.14406688051757!3d21.75677979007666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1652504437399!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Contact End -->
    <?php
require_once("inc/footer.php");
?>
    <?php
require_once("inc/script.php");
?>
</body>

</html>