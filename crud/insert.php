<?php
  include 'counter.php';

  $prodname = $_REQUEST['prodname'];
  $price = $_REQUEST['price'];
  $image = $_FILES['image'];

  $imageLocation = $image['tmp_name'];
  $imageName = $image['name'];
  
  $image_des = "image/".$imageName;

  move_uploaded_file($imageLocation,$image_des);

  $insert_product = "INSERT INTO `product`(`prodname`, `price`, `image`) VALUES ('$prodname','$price','$image_des')";

  if(!mysqli_query($conn, $insert_product)){
    echo "<script>alert('Product isn't Inserted')</script>";
    echo "<script>location.href='index.php'</script>";
  }
  else{
    echo "<script>alert('Product inserted')</script>";
    echo "<script>location.href='index.php'</script>";
  }
  


?>