<?php
include 'storing.php';
$l_username = $_REQUEST['l_username'];
$l_pass = $_REQUEST['l_pass'];

$_outcome = mysqli_query($conn, "SELECT * FROM `register` WHERE username='$l_username' And pass='$l_pass'");

if(mysqli_num_rows($_outcome)){
  session_start();
  $_SESSION['username'] = $l_username;
      echo "<script>location.href='home.php'</script>";
    }
else{
      echo "<script>alert('worng email or pass')</script>";
      echo "<script>location.href='login.php'</script>";
    }

?>