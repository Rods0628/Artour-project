<?php
include_once("connection/coun.php");

$conne = coun();

$pil = "SELECT * FROM gallery_list ORDER BY id DESC";
$stud = $conne->query($pil) or die ($conne->error);
$result = $stud->fetch_assoc();

?>
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
              <li><a href="Gallery.php" class="active">Without 3D View</a></li>
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

    <main id="main" class="aos-init aos-animate " data-aos="" data-aos-delay="1500">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center ">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 class="text-black">Tiaong Quezon</h2>
                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->



        <!-- ======= Gallery Section ======= -->
    
        <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center ">
             <?php do{?>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
             <img  src="../Admin_side/assets/<?php echo $result['pic']; ?>" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="../Admin_side/assets/<?php echo $result['pic']; ?>" title="<?php echo $result['spot_name']; ?>" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="Gallery_single.php?ID=<?php echo $result['id']; ?>" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
           <?php }while($result = $stud->fetch_assoc()); ?>
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