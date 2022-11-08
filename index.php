<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KONTRAKO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

     

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
         
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div id="logo" class="me-auto  ms-auto">
      
        <a href="index.html" class="scrollto"><img src="assets/img/" alt="" title="">KONTRAKO</a>
      </div>
      <a class="buy-tickets scrollto" href="#">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-md-8">
          <h3 class="mb-4 pb-0">Easy way to find the property according to your choice</h3>
          <p class="mb-4 pb-0">We provide variouse property models for you and affortable price and the best quality</p>
          <a href="" class="glightbox  mb-4"></a>
          
        </div>
        <div class="col-md-4">

        </div>
      </div>
      
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

  


    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Property</h2>
          <p>We provide variouse property models for you and affortable price and the best quality</p>
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Popular</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">All Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Minimalist</a>
          </li>
        </ul>

       

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

          

            <div class="row row-cols-1 row-cols-md-4  schedule-item">
                <?php 
                  $con = mysqli_connect("localhost", "root", "", "vali");
                  //$get = $_GET["id"];
                  $sel = "SELECT * FROM data_table";
                  $que = mysqli_query($con, $sel);
                  while ($z = mysqli_fetch_array($que)) {
                       
               ?>
             <div class="col">
               
              <div class="card">
               
                <div class="">
                  <img src="propert_images/<?php echo $z["file_name"]; ?>" alt="img" class="img-fluid">
                </div>
               
                <div class="card-body">

                  <h4><?php echo $z["property_name"]; ?></h4>
                  <p><?php echo $z["property_loc"]; ?></p>
                  <p><?php echo $z["pro_price"]; ?></p>
                </div>
               
              </div>
            
             </div>
            
               <?php } ?>
            </div>

   

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
             
              <div class="col-md-3">
               <div class="card">
                 <div class="">
                   <img src="assets/img/1.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="card-body">
                   <h4>Keynote <span>Brenden Legros</span></h4>
                   <p>Facere provident incidunt quos voluptas.</p>
                 </div>
                
               </div>
              </div>
              <div class="col-md-3">
               <div class="card">
                 <div class="">
                   <img src="assets/img/1.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="card-body">
                   <h4>Keynote <span>Brenden Legros</span></h4>
                   <p>Facere provident incidunt quos voluptas.</p>
                 </div>
                
               </div>
              </div>
              <div class="col-md-3">
               <div class="card">
                 <div class="">
                   <img src="assets/img/1.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="card-body">
                   <h4>Keynote <span>Brenden Legros</span></h4>
                   <p>Facere provident incidunt quos voluptas.</p>
                 </div>
                
               </div>
              </div>
              <div class="col-md-3">
               <div class="card">
                 <div class="">
                   <img src="assets/img/1.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="card-body">
                   <h4>Keynote <span>Brenden Legros</span></h4>
                   <p>Facere provident incidunt quos voluptas.</p>
                 </div>
                
               </div>
              </div>
             </div>

          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
             
              <div class="col-md-3">
               <div class="card">
                 <div class="">
                   <img src="assets/img/1.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="card-body">
                   <h4>Keynote <span>Brenden Legros</span></h4>
                   <p>Facere provident incidunt quos voluptas.</p>
                 </div>
                
               </div>
              </div>
              <div class="col-md-3">
               <div class="card">
                 <div class="">
                   <img src="assets/img/1.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="card-body">
                   <h4>Keynote <span>Brenden Legros</span></h4>
                   <p>Facere provident incidunt quos voluptas.</p>
                 </div>
                
               </div>
              </div>
              <div class="col-md-3">
               <div class="card">
                 <div class="">
                   <img src="assets/img/1.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="card-body">
                   <h4>Keynote <span>Brenden Legros</span></h4>
                   <p>Facere provident incidunt quos voluptas.</p>
                 </div>
                
               </div>
              </div>
              <div class="col-md-3">
               <div class="card">
                 <div class="">
                   <img src="assets/img/1.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="card-body">
                   <h4>Keynote <span>Brenden Legros</span></h4>
                   <p>Facere provident incidunt quos voluptas.</p>
                 </div>
                
               </div>
              </div>
             </div>

          </div>
          <!-- End Schdule Day 2 -->

        </div>

      </div>

    </section><!-- End Schedule Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong></strong>. All Rights Reserved
      </div>
      <div class="credits">

      
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>