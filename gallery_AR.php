<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gallery</title>
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

    <!-- ======= Header ======= -->
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
          <li><a href="user_index.php" >Home</a></li>
          <li><a href="About.php">About</a></li>
            <li class="dropdown"><a href="Gallery.php" class="active"><span>Gallery</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
               <li><a href="gallery_AR.php" class="active">With 3D View</a></li>
              <li><a href="Gallery.php">Without 3D View</a></li>
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


    <main id="main" class="aos-init aos-animate" data-aos="" data-aos-delay="1500">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 class="text-black">Tiaong Quezon</h2>
                        <p class="text-white">Tourist Spots Lists</p>
                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center ">
                    <div class="col-xl-3 col-lg-4 col-md-6 ">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/dona.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/HistoryPlaces/dona.jpg" title="Dona Concha" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="Solo/Concha.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/recto.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/HistoryPlaces/recto.jpg" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="Solo/recto.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/simbahan.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/HistoryPlaces/simbahan.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="Solo/church.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/sunshine.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/HistoryPlaces/sunshine.jpg" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="Solo/sun.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/villa.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/HistoryPlaces/villa.jpg" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="Solo/villa.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/tikub.png" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/HistoryPlaces/tikub.png" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="Solo/tikub.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/pottery.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/HistoryPlaces/pottery.jpg" title="Gallery 7" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="Solo/pottery.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/municipality.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/HistoryPlaces/municipality.jpg" title="Gallery 8" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="Solo/muni.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/citymall.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/HistoryPlaces/citymall.jpg" title="Gallery 9" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="Solo/city.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="white.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="white.jpg" title="Gallery 10" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="Solo/white.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                </div>

            </div>
        </section><!-- End Gallery Section -->

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