<?php
include 'storing.php';

$r_username = $_REQUEST['r_username'];
$r_email = $_REQUEST['r_email'];
$r_pass = $_REQUEST['r_pass'];
$r_conpass = $_REQUEST['r_conpass'];
$r_mobile = $_REQUEST['r_mobile'];

$username_pattern = "/[A-Za-z .]+/";
$mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$email_pattern = "/(cse|eee|civil|law|bba|eng)_\d{10}@lus\.ac\.bd/";
$pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/";

$duplicate_checker = mysqli_query($conn, "SELECT * FROM `register` WHERE username = '$r_username'");

if(mysqli_num_rows($duplicate_checker)>0){
  echo "<script>alert('This Username already taken..!!')</script>";
  echo "<script>location.href='register.php'</script>";
}
else if(!preg_match($username_pattern,$r_username)){
  echo "<script>alert('Invalid username..!!')</script>";
  echo "<script>location.href='register.php'</script>";
}
else if(!preg_match($mobile_pattern,$r_mobile)){
  echo "<script>alert('Invalid mobile number..!!')</script>";
  echo "<script>location.href='register.php'</script>";
}
else if(!preg_match($email_pattern,$r_email)){
  echo "<script>alert('Invalid email address..!!')</script>";
  echo "<script>location.href='register.php'</script>";
}
else if(!preg_match($pass_pattern,$r_pass)){
  echo "<script>alert('Invalid password..!!')</script>";
  echo "<script>location.href='register.php'</script>";
}
else if($r_pass !== $r_conpass){
  echo "<script>alert('Unmatched password..!!')</script>";
  echo "<script>location.href='register.php'</script>";
}
else{
  $insert_query = "INSERT INTO `register`(`username`, `email`, `pass`, `mobile`) VALUES ('$r_username','$r_email','$r_pass','$r_mobile')";
  if(!mysqli_query($conn, $insert_query)){
    echo "<script>alert('Not Inserted')</script>";
    echo "<script>location.href='login.php'</script>";
  }
  else{
    echo "<script>alert('inserted')</script>";
    echo "<script>location.href='login.php'</script>";
  }
}

