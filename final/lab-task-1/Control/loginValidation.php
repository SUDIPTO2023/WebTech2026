<?php
session_start();

$username = $_POST["username"] ?? "";
$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$number = $_POST["number"] ?? "";
$isUserNameError = true;
$isNameError = true;
$isEmailError = true;
$isNumberError = true;
if (!$username) {
    $_SESSION["usernameErr"] = "Username is Required";
    $isUserNameError = true;
} else {
    unset($_SESSION["usernameErr"]);
    $isUserNameError = false;
}
if (!$name) {
    $_SESSION["nameErr"]="Name is Required";
    $isNameError=true;
}else{
    unset($_SESSION["nameErr"]);
    $isNameError=false;
}
if (!$email) {
    $_SESSION["emailErr"]="Email is Required";
    $isEmailError=true;
}else{
    unset($_SESSION["emailErr"]);
    $isEmailError=false;
}
if (!$number) {
    $_SESSION["numberErr"]="Number is Required";
    $isNumberError=true;
}else{
    unset($_SESSION["numberErr"]);
    $isNumberError=false;
}
if ($isUserNameError || $isNameError || $isEmailError || $isNumberError) {
    $_SESSION["username"]=$username;
    $_SESSION["name"]=$name;
    $_SESSION["email"]=$email;
    $_SESSION["number"]=$number;
    Header("Location: ../view/login.php");
    
}