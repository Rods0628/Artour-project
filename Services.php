<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Services</title>
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
          <li><a href="user_index.php">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li class="dropdown"><a href="Gallery.php"><span>Gallery</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="gallery_AR.php">With 3D View</a></li>
              <li><a href="Gallery.php">Without 3D View</a></li>
            </ul>
          </li>
          <li><a href="Services.php" class="active">Services</a></li>
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

  <main id="main" data-aos="" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center ">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 class="text-black">Services</h2>
            <p></p>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row gy-4">

          <div class="container1">
            <main role="main" class="inner cover">
              <h1 class="cover-heading">Download Now!</h1>
              <p class="lead">You can download the AR App through here. Just Click the download button below.</p>
              <h4><a href="https://dl.dropboxusercontent.com/s/5ztwyv5xicvm3zd/Art_Tour.apk"   class="btn btn-lg btn-secondary" target="_blank">Download</a></h4>
            </main>
          </div>

          <!-- <div class="col-xl-3 col-md-6 d-flex">
                        <div class="service-item position-relative">
                            <h1 class = "text-black">Click Now!!!</h1>
                            <i class="bi bi-download text-black bg-primary"></i>
                            <h4><a href="https://www.dropbox.com/s/5ztwyv5xicvm3zd/Art_Tour.apk" class="stretched-link text-black" download>Download</a></h4>
                            <p class = "text-black">You can download the AR App through here just click the download button!</p>
                        </div>
                    </div> -->
          <!-- End Service Item -->

        </div>
      </div>

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer ">
  </footer>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- End Footer -->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<style>
.container { 
  display: flex;
  justify-content: center;
  align-items: center;
}

.container1 {
  color: #254d71;
  justify-content: center;
  align-items: center;
  text-align: center;
  width: fit-content;
  background-color: rgba(248, 248, 207, .7);  
  border: 2px solid #20496a;
  border-radius: 10px;
  margin-top: 30px;
  padding: 20px;
}

.container1 a {
  background: #20496a;
  color:#fff;

}
/*
 * Cover
 */
.cover {
  padding: 0 1.5rem;
  font-weight: 600;
  text-shadow: 0 .05rem .1rem rgba(255, 255, 255, .5);

}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


</style>
</html>