<?php 
  session_start();

  if(isset($_SESSION['username'])){
    //echo "<script>alert('Welcome .$_SESSION['username']')</script>";
    //echo "<h3>Welcome ".$_SESSION['username']</h3>";
    // echo "<br><a href='product.php'>Products</a>";

    //echo "<br> <a href='logout.php'><input type='button'
    //value='logout' name='logout'></a><br><br>";

    include 'home.php';
    
  }

  ?>