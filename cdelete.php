<?php
  include 'counter.php';
  $id = $_GET['id'];

  $deleteQuery = "DELETE FROM `product` WHERE id='$id'";

  mysqli_query($conn, $deleteQuery);
  
  header("location:cindex.php");  //it another mehod to send index page
?>