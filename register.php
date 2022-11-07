<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Register</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    

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


    <link href="assets/css/main.css" rel="stylesheet" />


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
          href="index.php"
          class="logo d-flex align-items-center me-auto me-lg-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1>Lal-Miar Restaurant<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="index.php">Home</a></li>
           
            <li><a href="index.php">Menu</a></li>
            <li><a href="footer">Contact</a></li>
            <li><a href="login.php">Admin LogIn</a></li>
          </ul>
        </nav>
        <!-- .navbar -->

        <!-- <a class="btn-book-a-table" href="#book-a-table">Book a Table</a> -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header>
    <!-- End Header -->

    <div class="container-fluid section-bg">
    <!-- <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h1 class="text-center bg-primary p-5">Food Menu</h1>
        </div>
      </div> -->
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
          
          <form action="data.php" method="post" onsubmit="return formValidation()">
              <div class="mb-3">
                <h4 class="text-center p-2">Register Yourself..!</h4>
              </div>
              <div class="mb-3">
                  User Name:
                  <input id="name" type="text" class="form-control" name="r_username">
                  <span id="errname"></span>
              </div>
              <div class="mb-3">
                  Email:
                  <input id="email"  type="text" class="form-control" name="r_email">
                  <span id="erremail"></span>
              </div>
              <div class="mb-3">
                  Password:
                  <input id="pass"  type="text" class="form-control" name="r_pass">
                  <span id="errpass"></span>
              </div>
              <div class="mb-3">
                  Confirm Password:
                  <input id="conpass"  type="text" class="form-control" name="r_conpass">
                  <span id="errconpass"></span>
              </div>
              <div class="mb-3">
                  Phone:
                  <input id="phone"  type="text" class="form-control" name="r_mobile">
                  <span id="errphone"></span>
              </div>
            
              <button type="submit" class="btn btn-secondary col-12" name="submit">Register</button>
              <div class="mt-2">Do you have account? <a href="login.php">LogIn Here</a></div>  
             
        </form>

        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

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
