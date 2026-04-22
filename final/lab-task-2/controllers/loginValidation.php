<?php
session_start();

$username = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$cpassword = $_POST["cpassword"] ?? "";
$hasUsernameError = true;
$hasPasswordError = true;
$hasCpasswordError=true;
if (strlen($username) < 3) {
    $_SESSION["usernameError"] = "minimum 3 character needed";
    $hasUsernameError = true;
} else {
    unset($_SESSION["usernameError"]);
    $hasUsernameError = false;
}
if (strlen($password) < 6) {
    $_SESSION["passwordError"] = "minimum 6 character needed";
    $hasPasswordError = true;
} else {
    unset($_SESSION["passwordError"]);
    $hasPasswordError = false;
}
if($password==$cpassword){
    unset($_SESSION["cpasswordError"]);
    $hasCpasswordError=false;
}else {
    $_SESSION["cpasswordError"]="must match with previous password";
    $hasCpasswordError=true;

}
if ($hasUsernameError || $hasPasswordError || $hasCpasswordError) {
    $_SESSION["username"] = $username;
    $_SESSION["email"]= $email;
    $_SESSION["password"]=$password;
    $_SESSION["cpassword"]=$cpassword;
    Header("Location: ../views/register.php");
}
