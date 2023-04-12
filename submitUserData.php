<?php
$test ="Hello";
$name = $gender=$birth =$email =$status =$phoneNumber = $password ="";
$nameErr = $genderErr =$birthErr =$emailErr =$statusErr =$phoneNumberErr = $passwordErr ="";
function matchName($name){
    if(preg_match("/[a-zA-Z-' ]/",$name)) {
        return true;
      }
      return false;
}
function validatePhoneNumber($num){
    if(preg_match("/[0-9]/",$num)){
        return true;
    }
    return false;
}
  if(isset($_POST['submit'])){
    //validating name
    if(isset($_POST['fname'])){
       if( matchName($_POST['fname']) ){ 
        $name = $_POST['fname'];
    }
       else{ 
        $nameErr="Only letters and white space allowed";
    }
    }
    else{
        $nameErr = "Name is required"; 
    }

    //validating gender
    if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
    }
    else{
        $genderErr = "Select an option";
    }

    //validating dob
    $birth = $_POST['birth'];
    //validating email
    if(isset($_POST['email'])){
      $check1 = filter_var($_POST['email'] ,FILTER_SANITIZE_EMAIL );
      if(filter_var($check1,FILTER_VALIDATE_EMAIL)){
        $email = $check1;
      }
      else{
        $emailErr = "Enter a valid email address";
      }
    }
    else{
        $emailErr = "Email field is required";
    }
    //validating email
    if(isset($_POST['email'])){
        $status = $_POST['email'];
    }
    else{
        $statusErr = "Select an option";
    }
    //validating email
    if(isset($_POST['phoneNumber'])){
        if(validatePhoneNumber($_POST['phoneNumber'])){
            $phoneNumber = $_POST['phoneNumber'];
        }
        else{
            $phoneNumberErr = "Enter a valid phone number";
        }
    }
    else{
        $phoneNumberErr = "Please enter your contact number.";
    }
    if($name !="" && $gender !="" && $birth !="" && $email !="" && $status !="" && $phoneNumber !=""){
        header("Location: http://localhost:8012/phpForCMS/Beginning/project/dreamDance/setPassword.html"); 
        exit;
    }
  }

  if(isset($_POST['submitPassword'])){
    if(isset($_POST['cPassword'])){
        $password = $_POST['cPassword'];
        header("Location: http://localhost:8012/phpForCMS/Beginning/project/dreamDance/ThankYou.html"); 
        exit;
    }
    else{
        $passwordErr = "Enter password";
    }
}
?>