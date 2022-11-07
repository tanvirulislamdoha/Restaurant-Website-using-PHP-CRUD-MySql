<?php
include 'storing.php';

$b_name = $_REQUEST['b_name'];
$b_email = $_REQUEST['b_email'];
$b_phone = $_REQUEST['b_phone'];
$b_person = $_REQUEST['b_person'];
$b_time = $_REQUEST['b_time'];

$username_pattern = "/[A-Za-z .]+/";
$mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";

$duplicate_checker = mysqli_query($conn, "SELECT * FROM `book` WHERE name = '$b_name' AND phone='$b_phone'");

if(mysqli_num_rows($duplicate_checker)>0){
  echo "<script>alert('You already booked')</script>";
  echo "<script>location.href='book.php'</script>";
}
else if(!preg_match($username_pattern,$b_name)){
  echo "<script>alert('Invalid name..!!')</script>";
  echo "<script>location.href='book.php'</script>";
}
else if(!preg_match($mobile_pattern,$b_phone)){
  echo "<script>alert('Invalid mobile number..!!')</script>";
  echo "<script>location.href='book.php'</script>";
}

else{
  $insert_query = "INSERT INTO `book`(`name`, `email`, `phone`, `person`, `time`) VALUES ('$b_name', '$b_email','$b_phone','$b_person','$b_time')";
  if(!mysqli_query($conn, $insert_query)){
    echo "<script>alert('Not Inserted')</script>";
    echo "<script>location.href='book.php'</script>";
  }
  else{
    echo "<script>alert('Congratulations..! Your resevation is complete.')</script>";
    echo "<script>location.href='index.php'</script>";
  }
}