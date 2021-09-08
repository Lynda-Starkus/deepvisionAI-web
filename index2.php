<!DOCTYPE html>
<html lang="en">
<!-- preventing code warnings from showing up-->
<?php error_reporting (E_ALL ^ E_NOTICE); ?>  

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Abnormal detection and tracking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  
 

  <!-- ======= Header ======= -->
  
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
     

      <div class="logo">
        <h1><a href="index.html"><span>Test version</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
        
         

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  

    <!-- ======= Details of test Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Detected abnormal activities in the test samples selected</h3>
            <form method="post">
              <input type="number" name="nb_test" min="1" max="36" class="button" id="submit"/>
              <input type="submit" name="validate" class="button" value="Validate"/>
            </form>
            
              
            <?php 
                $nb = $_POST['nb_test'];
                $nb_original = $nb + 1;
                

                          $dir = "detection_only/";
                          $videoW = 320;
                          $videoH = 240;
                          if (is_dir($dir))
                          {
                              if ($dh = opendir($dir)){
                                  
                                  
                                  while ((($file = readdir($dh)) !== false) && ($nb!=0)){

                                      if($file != '.' && $file != '..'){
                                          $tag_nb = $nb_original - $nb;                                       
                                          echo 
                                          "
                                
                                                  
                                                  <video width=\"$videoW\" height=\"$videoH\" controls>
                                                    <source src=\"". $dir . $file ."\" type=\"video/mp4\">
                                                    <source src=\"". $dir . $file ."\" type=\"video/ogg\">
                                                  </video>
                                              
                                          ";
                                          $nb --;
                                      }
                                      

                                  }

                                  closedir($dh);

                                }
                          }
                          
                
            ?>
          

        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Detected abnormal activity with all pedestrians tracked</h3>
            <ul>
              <li><i class="bi bi-check"></i> Different detected pedestrians are labeled using coloured boxes.</li>
              <li><i class="bi bi-check"></i> Abnormal behaviour relative to the dataset is signaled in white boxes.</li>
              
            </ul>
            <?php 
                $nb2 = $_POST['nb_test'];
                

                          $dir = "detection_and_tracking/";
                          $videoW = 320;
                          $videoH = 240;
                          if (is_dir($dir))
                          {
                              if ($dh = opendir($dir)){
                                  
                                  
                                  while ((($file = readdir($dh)) !== false) && ($nb2!=0)){

                                      if($file != '.' && $file != '..'){

                                          echo 
                                          "
                                              
                                                  <video width=\"$videoW\" height=\"$videoH\" controls>
                                                    <source src=\"". $dir . $file ."\" type=\"video/mp4\">
                                                    <source src=\"". $dir . $file ."\" type=\"video/ogg\">
                                                  </video>
                                              
                                          ";
                                          $nb2 --;
                                      }
                                      

                                  }

                                  closedir($dh);

                                }
                          }
                          
                
            ?>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Masks generated for each test sample.</h3>
          
            <p>
              They were extracted using the background substraction algorithm.
            </p>
            <?php 
                $nb2 = $_POST['nb_test'];
                

                          $dir = "mask_videos/";
                          $videoW = 320;
                          $videoH = 240;
                          if (is_dir($dir))
                          {
                              if ($dh = opendir($dir)){
                                  
                                  
                                  while ((($file = readdir($dh)) !== false) && ($nb2!=0)){

                                      if($file != '.' && $file != '..'){

                                          echo 
                                          "
                                              
                                                  <video width=\"$videoW\" height=\"$videoH\" controls>
                                                    <source src=\"". $dir . $file ."\" type=\"video/mp4\">
                                                    <source src=\"". $dir . $file ."\" type=\"video/ogg\">
                                                  </video>
                                              
                                          ";
                                          $nb2 --;
                                      }
                                      

                                  }

                                  closedir($dh);

                                }
                          }
                          
                
            ?>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Statisctics of the model and testing dataset</h3>
            
            <ul>
              <li><i class="bi bi-check"></i> Parler des courbes ROC</li>
              <li><i class="bi bi-check"></i> Parler des stats du nombre de personnes trackées par video </li>
              <li><i class="bi bi-check"></i> other curves or stats </li>
            </ul>
          </div>
        </div>

      </div>
    


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CERIST</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="">Deepvision.ai</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>