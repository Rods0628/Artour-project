<?php
include_once("connection/map_connection.php");

$conne = coun();

$pil = "SELECT * FROM map_tbl  ORDER BY id DESC";
$stud = $conne->query($pil) or die ($conne->error);
$result = $stud->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
     integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
     crossorigin=""/>

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/a.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

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

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="text-white bi bi-pin-map"></i>
        <h1>AR-TOUR</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="user_index.php" class="active">Home</a></li>
          <li><a href="About.php">About</a></li>
            <li class="dropdown"><a href="Gallery.php"><span>Gallery</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
               <li><a href="gallery_AR.php">With 3D View</a></li>
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

 
     <!-- ======= End Page Header ======= -->
         <a name="top"><div class="page-header d-flex align-items-center ">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                          <h2 class="text-white blur">Welcome To Tiaong, Quezon </h2>
                          
                          <a class="cta-btn" href="#bot">View Map</a>

                          

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style = "background: rgb(253, 250, 216);">
      <div class="modal-header">
        <h5 class="modal-title text-black" id="exampleModalLongTitle"><i class="bi bi-question"></i></h5>


        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1 class= "text-black">HOW IT WORKS?</h1>
                       
                        
                        <p align="justify" class="text-black">
                           Accessing 3D<br>
                            1. Click the menu Bar<br>
                            2. Click the "Gallery button" and then choose "With 3D"<br>
                            3. Click any image u want to see<br>
                            4. Click more details on the right corner button<br>
                            5. Scroll down to see "View 3D" button<br>
                            6. You can now see the 3D model<br>
                            7. Scroll down to view the sound panel to hear the information about the tourist spot<br>
                        </p><br>
                        <p class="text-black">STEP 1: Click to Start no need to sign in.</p><br>
                        <img src="tutorial/1.jpg"  width="200" height="300" class="img-fluid"  alt=""><br>
                        <p class="text-black">STEP 2: In this part is the home where you can see the map that is available to scan and see the 3d in AR with                                                          infos using the application that is free to download</p><br>
                        <img src="tutorial/2.jpg"  width="200" height="300" class="img-fluid"  alt=""><br>
                        <p class="text-black">STEP 3: This is the menu bar which contain gallery and downloadable app for you</p><br>
                        <img src="tutorial/3.jpg"  width="200" height="300" class="img-fluid"  alt=""><br>
                        <p class="text-black">STEP 4: In gallery you can view and see the details of tourist spot without scanning it also this is for those                                                          who have only 1 device at hand</p><br>
                        <img src="tutorial/4.jpg"  width="200" height="300" class="img-fluid"  alt=""><br>
                        <p class="text-black">STEP 5: Lastly the 3d is available in gallery with it's sound for information.</p><br>
                        <img src="tutorial/5.jpg"  width="200" height="300" class="img-fluid"  alt=""><br>

                        <p align="justify" class="text-black">
                          <h3 class="text-black">Guide</h3>
                          <p align="justify" class="text-black">
                          Here's are some guide for new users of Artour
                          The homepage will shown the Map of tiaong Quezon with pinned Location of tourist spots
                          If u click the pin location, you can see the name of the spot including the picture of it
                          In the upper right corner, u can see the menu bar of the artour web page. You can see 5 different panels of the web, the homepage,                              the about button which u can see the brief history of tiaong Quezon, tiaong Gallery which u can view the 3d models with soundtrack                              information about the area, the service which u can download the Augmented reality scanner, and also the last one which is the                                  website ratings or feedback. If u want to view the 3d model of the certain tourist spot. Just click gallery and choose with 3d. After                           that click the tourist spot u want to view then tap the pictures and see more details. Scroll down and click view 3D. You can now see                           the 3D model of the tourist spot and if u scroll down, u can access the soundtrack information about the tourist spot
                        </p>
                        </p><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->
 

  <main id="main" class="aos-init aos-animate" data-aos="" data-aos-delay="1500">
    <!---->
    <!-- ======= Gallery Section ======= -->
         <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center ">
                    <div class="col-xl-3 col-lg-4 col-md-6 ">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/dona.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                               <div class="sketchfab-embed-wrapper xl-3 lg-4 md-6"> <iframe title="Ghost" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/6f2f901c65e348c4bea126f6b06c6fe3/embed?autospin=1&autostart=1"
      height="400px" width="100%"> </iframe> </div>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/recto.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                 <div class="sketchfab-embed-wrapper xl-3 lg-4 md-6">  <iframe title="rekto" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/c4afc0cbb24e44cf9af7043b3555193d/embed?autospin=1&autostart=1"  height="400px" width="100%"> </iframe></div>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/simbahan.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                 <div class="sketchfab-embed-wrapper xl-3 lg-4 md-6"> <iframe title="church" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/7e6e6caa13474de084336e8ed473280a/embed?autospin=1&autostart=1"  height="400px"   width="100%"> </iframe> </div>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/sunshine.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <div class="sketchfab-embed-wrapper xl-3 lg-4 md-6"><iframe title="sunflower" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/be8ca266f06e4475b08e44eee0a3ef72/embed?autospin=1&autostart=1"  height="400px" width="100%"> </iframe> </div>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/villa.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <div class="sketchfab-embed-wrapper xl-3 lg-4 md-6"> <iframe title="Carabao" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/bb56cea6b7514f39a1fa8a0e75016fb7/embed?autospin=1&autostart=1"  height="400px" width="100%"> </iframe> </div>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/tikub.png" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <div class="sketchfab-embed-wrapper xl-3 lg-4 md-6"> <iframe title="tikub" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/ff7be59c327a4fb9bdf6738dc4d7d6c9/embed?autospin=1&autostart=1" height="400px" width="100%"></iframe> </div>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/pottery.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                               <div class="sketchfab-embed-wrapper xl-3 lg-4 md-6"> <iframe title="Pottery" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/b8e1716b1b2d48b59cdd28586743a615/embed?autospin=1&autostart=1" height="400px" width="100%"> </iframe> </div>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/municipality.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <div class="sketchfab-embed-wrapper"> <iframe title="Gateway" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/b3ee8f73251c46eb920e3730d2d2e220/embed?autospin=1&autostart=1"  height="400px" width="100%"> </iframe> </div>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/HistoryPlaces/citymall.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <div class="sketchfab-embed-wrapper"> <iframe title="Manequin1" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/d29845fc35924b4895d6cd1a16a2e003/embed?autospin=1&autostart=1"  height="400px" width="100%"> </iframe> </div>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="white.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <<div class="sketchfab-embed-wrapper"> <iframe title="Whitehouse" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/6cf8da5afc454320a02114ae5b3e9d68/embed?autospin=1&autostart=1"  height="400px" width="100%"> </iframe> </div>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                </div>

            </div>
        </section><!-- End Gallery Section -->   

        <a name="bot"><div class="page-header d-flex align-items-center ">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                    <p class="text-white blur">You can view the Augmented Reality by using the app that you can download in Services section.</p>
                          <a class="cta-btn" href="#top">Back to Top</a>
                    </div>
                </div>
            </div>
        </div

        <section id="gallery" class="gallery">

        <div class = "container-center">
            <div class="container-fluid" id = "map"></div>
     </div> 
 </section>

  </main><!-- End #main -->




  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      
    </div>
  </footer><!-- End Footer -->

  <button type="button" class=" scroll-top d-flex align-items-center justify-content-center" data-toggle="modal" data-target="#exampleModalLong"><i class="bi bi-question"></i></button>
  <div id="preloader">
    <div class="line"></div>
  </div>

  

  <!-- Template Main JS File -->
   <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"></script>
  
   
<script>
            
 const apikey = 'pk.eyJ1IjoiYnVzeXJpZ2h0bm93LTAxIiwiYSI6ImNsYTkzZ3Y0YTAxd2Qzbm85bmRqc2t3eWUifQ._QPe37GOJ9igbnS0MaaU3Q';
 const mymap = L.map('map').setView([13.954943926211863, 121.33740411327733], 13);


L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 50,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(mymap);




<?php do{?>
//marker na tayo lods
marker = new L.marker ([<?php echo $result['lat']; ?>, <?php echo $result['lng']; ?>]).addTo(mymap)
    .bindPopup('<h1><?php echo $result['name_spot']; ?></h1> <img  src="../Admin_side/assets/<?php echo $result['imahe']; ?>" width="150"  height="150">')
    .addTo(mymap);
 <?php }while($result = $stud->fetch_assoc()); ?>


    

</script>

 <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 <!-- Template Main JS File -->
   
  <script src="assets/js/main.js"></script>
</body>

</html>