/*
$username_pattern = "/[A-Za-z .]+/";
$mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$email_pattern = "/(cse|eee|civil|law|bba|eng)_\d{10}@lus\.ac\.bd/";
$pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/";

*/

function formValidation() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var pass = document.getElementById("pass").value;
  var conpass = document.getElementById("conpass").value;
  var phone = document.getElementById("phone").value;

  var nPattern = /[A-Za-z .]+/;
  var phonePattern = /(\+88)?-?01[3-9]\d{8}/;
  var ePattern = /(cse|eee|civil|law|bba|eng)_\d{10}@lus\.ac\.bd/;
  var passPattern = /((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/;

  //name
  if (name.length < 3 || name.length > 20) {
    document.getElementById("errname").innerHTML = "length(3-20)";
    return false;
  } else if (!name.match(nPattern)) {
    document.getElementById("errname").innerHTML = "length(3-20)";
    return false;
  } else {
    document.getElementById("errname").innerHTML = "";
  }

  //email
  if (!email.match(ePattern)) {
    document.getElementById("erremail").innerHTML = "Wrong email pattern";
    return false;
  } else {
    document.getElementById("erremail").innerHTML = "";
  }

  //pass
  if (!pass.match(passPattern)) {
    document.getElementById("errpass").innerHTML = "wrong pass pattern";
    return false;
  } else {
    document.getElementById("errpass").innerHTML = "";
  }

  //conpass
  if (!pass.match(conpass)) {
    document.getElementById("errconpass").innerHTML = "pass didn't match";
    return false;
  } else {
    document.getElementById("errconpass").innerHTML = "";
  }

  //phone
  if (!phone.match(phonePattern)) {
    document.getElementById("errphone").innerHTML = "Wrong number";
    return false;
  } else {
    document.getElementById("errphone").innerHTML = "";
  }
}
