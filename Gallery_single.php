<?php
include_once("connection/coun.php");

$conne = coun();
 $id = $_GET['ID'];

$pil = "SELECT * FROM gallery_list WHERE id = '$id' ";
$stud = $conne->query($pil) or die ($conne->error);
$result = $stud->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hacienda Escudero</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/a.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio - v1.1.1
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="text-white bi bi-pin-map"></i>
        <h1>AR-TOUR</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="user_index.php">Home</a></li>
          <li><a href="About.php">About</a></li>
           <li class="dropdown"><a href="Gallery.php" class="active"><span>Gallery</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
               <li><a href="gallery_AR.php">With 3D View</a></li>
              <li><a href="Gallery.php"class="active">Without 3D View</a></li>
            </ul>
           </li>
          <li><a href="Services.php">Services</a></li>
          <li><a href="Feedback.php">Feed Back</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
      <a href="loginform/login.php" class="btn-visit align-self-start">Log In</a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

    <main id="main" data-aos="" data-aos-delay="1500" >

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center " >
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center ">
                        <h2 class = "blur"><?php echo $result['spot_name']; ?></h2>
                        
                         <a class="cta-btn" href="Gallery.php">Back</a>
                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->
        <!-- ======= Gallery Single Section ======= -->
        <section id="gallery-single" class="gallery-single">
            <div class="container">

                <div class="position-relative h-100 ">
                    <div class="slides-1 portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img  src="../Admin_side/assets/<?php echo $result['pic']; ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                     <video width="100%" height="400" controls>
                     <source src="Admin_side/video/<?php echo $result['video']; ?>" type="video/mp4">
                    </video>
                </div>

                <div class="row justify-content-between gy-4 mt-4">

                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2 class = "text-white"><?php echo $result['spot_name']; ?></h2>
                            <p class = "text-white blur">
                               <?php echo $result['description']; ?>
                            </p>
                        </div>
                    </div>
                      <div class="col-lg-3">
                        <div class="portfolio-info">
                            <h3 class ="text-white">What Can you say?</h3>
                            <ul>
                                <li><strong class ="text-white">Your Feedback</strong></li>
                                <li><a href="spot_review.php" class="btn-visit align-self-start">Review</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Gallery Single Section -->

    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
<footer id="footer" class="footer">
         </footer><!-- End Footer -->   
         <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>