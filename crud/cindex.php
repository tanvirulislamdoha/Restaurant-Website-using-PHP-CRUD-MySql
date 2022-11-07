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

    <title>Yummy Bootstrap Template - Index</title>
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

    <!-- =======================================================
  * Template Name: Yummy - v1.1.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
        /* body{
          background:#B2BEB5;
        } */
        form{
          padding: 15px;
          background: #B2BEB5;
          box-sizing: border-box;
          border-radius: 15px;
          margin-top:50px;
          margin-bottom:30px;
        }
    </style>
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <a
          href="index.html"
          class="logo d-flex align-items-center me-auto me-lg-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1>Lal-Miar Restaurant<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="home.php">Home</a></li>
            <!-- <li><a href="#about">About</a></li> -->
            <li><a href="#menu">Menu</a></li>
            <!-- <li><a href="#chefs">Chefs</a></li> -->
            
            <li class="dropdown">
              <a href="#"
                ><span>Product</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <li><a href="cindex.php">Insert Product</a></li>
                <li><a href="#">Update Product</a></li>
                <li><a href="#">Delete Product</a></li>

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

    
    <!-- End Hero Section -->

    <div class="container-fluid section-bg">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
          
          <form action="insert.php" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <h4 class="text-center p-2">Insert Product</h4>
              </div>
              <div class="mb-3">
                  Product Name:
                  <input type="text" class="form-control" name="prodname">
              </div>
              <div class="mb-3">
                  Price:
                  <input type="text" class="form-control" name="price">
              </div>
              <div class="mb-3">
                  Image:
                  <input type="file" class="form-control" name="image" required>
              </div>
              
            
              <button type="submit" class="btn btn-secondary col-12" name="submit">Insert</button>
        </form>

        </div>
      </div>
    </div>

    
    <div class="container-fluid section-bg">
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Product Name</th>
              <th scope="col">Price</th>
              <th scope="col">Image</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include 'counter.php';
              $allData = mysqli_query($conn,"SELECT * FROM `product`");

              while($row=mysqli_fetch_array($allData)){
                echo "<tr>
                      <td>$row[id]</td>
                      <td>$row[prodname]</td>
                      <td>$row[price]</td>
                      <td><img src='$row[image]' width='100px'></td>
                      <td><a class='btn btn-warning' href='update.php? id=$row[id]'>Update</a></td>
                      <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Delete</a></td>
                    </tr>";
              }
            ?>
          </tbody>
    </table>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>Address</h4>
              <p>
                A108 Adam Street <br />
                New York, NY 535022 - US<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Reservations</h4>
              <p>
                <strong>Phone:</strong> +1 5589 55488 55<br />
                <strong>Email:</strong> info@example.com<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Mon-Sat: 11AM</strong> - 23PM<br />
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
          &copy; Copyright <strong><span>Yummy</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
