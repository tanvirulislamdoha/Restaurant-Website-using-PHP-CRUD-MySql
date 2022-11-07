<?php
  include 'counter.php';

  $id = $_POST['id'];
  $uProdname = $_POST['prodname'];
  $uPrice = $_POST['price'];
  $uImage = $_FILES['image'];

  $imageLocation = $uImage['tmp_name'];
  $imageName = $uImage['name'];
  
  $image_des = "image/".$imageName;

  move_uploaded_file($imageLocation,$image_des);

  $updateQuery = "UPDATE `product` SET `prodname`='$uProdname',`price`='$uPrice',`image`='$image_des' WHERE id='$id'";

  if(!mysqli_query($conn, $updateQuery)){
    echo "<script>alert('Product isn't updated')</script>";
    echo "<script>location.href='cindex.php'</script>";
  }
  else{
    echo "<script>alert('Product Updated')</script>";
    echo "<script>location.href='cindex.php'</script>";
  }
?>