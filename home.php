<?php
 session_start();
 if(isset($_SESSION['username'])){
  $a = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Home</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />

  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <a
          href="home.php"
          class="logo d-flex align-items-center me-auto me-lg-0"
        >
         
          <h1>Lal-Miar Restaurant<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="home.php">Home</a></li>
            <!-- <li><a href="#about">About</a></li> -->
            <li><a href="home.php">Menu</a></li>
            <!-- <li><a href="#chefs">Chefs</a></li> -->
            
            <li class="dropdown">
              <a href="#"
                ><span>Product</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <li><a href="cindex.php">Insert Product</a></li>
                <li><a href="cindex.php">Update Product</a></li>
                <li><a href="cindex.php">Delete Product</a></li>

                <!-- <li><a href="#">Drop Down 4</a></li> -->
              </ul>
            </li>
            <li><a href="logout.php">LOG OUT</a></li>
            <!-- <li><a href="#contact">Contact</a></li> -->
          </ul>
        </nav>
        <!-- .navbar -->

        <a class="btn-book-a-table" href="#book-a-table"><?php echo $a ?></a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
      <div class="container">
        <div class="row justify-content-between gy-5">
          <div
            class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start"
          >
            <h2 data-aos="fade-up">Enjoy Your Healthy<br />Delicious Food</h2>
            <p data-aos="fade-up" data-aos-delay="100">
              Lal Miar Restaurant has been served authentic and delicious food since 1949.
            </p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#menu" class="btn-book-a-table">See Menu</a>

            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
            <img
              src="assets/img/hero-img.png"
              class="img-fluid"
              alt=""
              data-aos="zoom-out"
              data-aos-delay="300"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
      <!-- ======= Menu Section ======= -->
      <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Our Menu</h2>
            <p>Check Our <span>Menu</span></p>
          </div>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade active show" id="menu-starters">

              <div class="row gy-5">
           
                <?php
                include 'counter.php';
                $allData = mysqli_query($conn,"SELECT * FROM `product`");
                while($row=mysqli_fetch_array($allData)){
                  echo  "<div class='col-lg-4 menu-item'>
                          <a href='$row[image]' class='glightbox'
                            >
                            <img
                              src='$row[image]'
                              class='menu-img img-fluid'
                              height='500px'
                            
                          /></a>
                          <h4>$row[prodname]</h4>
                          <p class='price'>৳$row[price]</p>
                        </div>";
                }
                ?>

              </div>
            </div>
            <!-- End Dinner Menu Content -->
          </div>
        </div>
      </section>
      <!-- End Menu Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>Address</h4>
              <p>
                Laldigir-Par Road <br />
               Zindabazar, Sylhet<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Reservations</h4>
              <p>
                <strong>Phone:</strong> 01610654255<br />
                <strong>Email:</strong> lalmiah@gmail.com<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Mon-Sat: 9AM</strong> - 10PM<br />
                Sunday: Closed
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Lal Miar Reastaurant</span></strong
          >. All Rights Reserved
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
