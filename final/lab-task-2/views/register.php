<?php
session_start();
$usernameError=$_SESSION["usernameError"] ??"";
$passwordError=$_SESSION["passwordError"] ??"";
$cpasswordError=$_SESSION["cpasswordError"];

$usename= $_SESSION["username"] ?? "";
$email=$_SESSION["email"] ??"";
$password=$_SESSION["password"] ??"";
$cpassword=$_SESSION["cpassword"] ??"";

unset($_SESSION["username"]);
unset($_SESSION["email"]);
unset($_SESSION["password"]);
unset($_SESSION["cpassword"]);

unset($_SESSION["usernameError"]);
unset($_SESSION["passwordError"]);
unset($_SESSION["cpasswordError"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="../controllers/loginValidation.php">

    <h2>Registration Form</h2>

   <table>
     <tr>
        <td>Username</td>
        <td><input type="text" name="username" placeholder="Enter Your Username" value="<?php echo $usename;?>"required ></td>
        <td><?php echo "$usernameError";?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" placeholder="Enter Your Valid Email" value="<?php echo $email;?>"required></td>
    </tr>

    <tr>
        <td>Password</td>
        <td><input type="password" name="password" placeholder="Enter Your Password" value="<?php echo $password;?>" required></td>
        <td><?php echo "$passwordError";?></td>
    </tr>
    <tr>
        <td>Confirm Password</td>
        <td><input type="password" name="cpassword" placeholder="Enter The Same Password" value="<?php echo $cpassword;?>" ></td>
        <td><?php echo "$cpasswordError";?></td>
    </tr>
    <tr>
        <td><button type="submit" name="submit">submit</button></td>
    </tr>

   </table>






    </form>
</body>
</html>