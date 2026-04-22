<?php
session_start();
$usernameError=$_SESSION["usernameErr"] ?? "";
$nameError=$_SESSION["nameErr"] ?? "";
$emailError=$_SESSION["emailErr"] ??"";
$numberError=$_SESSION["numberErr"] ??"";
$username = $_SESSION["username"] ?? "";
$name = $_SESSION["name"] ?? "";
$email = $_SESSION["email"] ?? "";
$number = $_SESSION["number"] ?? "";
unset($_SESSION["usernameErr"]);
unset($_SESSION["nameErr"]);
unset($_SESSION["emailErr"]);
unset($_SESSION["numberErr"]);
unset($_SESSION["username"]) ;
unset($_SESSION["name"])  ;
unset( $_SESSION["email"] );
unset ( $_SESSION["number"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="../Control/loginValidation.php">
     <table>
        <tr>
            <td>UserName</td>
            <td><input type="text" name="username" placeholder="Enter Your UserName"></td>
            <td><span style="color: red;"><?php echo " $usernameError";?></span></td>
        </tr>

        <tr>

            <td>Name</td>
            <td><input type="text" name="name" placeholder="Enter Your Name"></td>
            <td><span style="color: red;"><?php echo "$nameError";?></span></td>

        </tr>

        <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Enter Your Email"></td>
                <td><span style="color: red;"><?php echo "$emailError";?></span></td>
              
        </tr>
        <tr>
            <td>phone</td>
            <td><input type="number" placeholder="Enter Your Phone Number" name="number"></td>
            <td><span style="color: red;"><?php echo  " $numberError";?></span></td>
        </tr>

        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>



    </table>
   </form>
</body>
</html>