<?php 
    require '../Controllers/includes/Header.php';
    require '../Controllers/RegistrationAction.php'; 
?>
<!DOCTYPE html>
<html>
<center>
<head>
<meta charset="utf-8">
<title>Registration</title>
</head>
<body bgcolor="Aqua">
    <fieldset>
                <legend><h1>Registration</h1></legend>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="firstname">First Name<span style="color: red">*</span>: </label>
    <input type="text" name="firstname" id="firstname">
    <span style="color: red"><?php echo $firstNameErr; ?></span>
    <br><br>
    <label for="lastname">Last Name<span style="color: red">*</span>: </label>
    <input type="text" name="lastname" id="lastname">
    <span style="color: red"><?php echo $lastNameErr; ?></span>
    <br><br>
    <label for="username">User Name<span style="color: red">*</span>: </label>
    <input type="text" name="username" id="username">
    <span style="color: red"><?php echo $usernameErr; ?></span>
    <br><br>
    <label for="password">Password<span style="color: red">*</span>: </label>
    <input type="text" name="password" id="password">
    <span style="color: red"><?php echo $passwordErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Register">

    </fieldset>
    <td>
        Already a Member? <a href="Login.php">Login</a>
    </td>
        
</form>



<br>



<span style="color: green"><?php echo $successfulMessage; ?></span>
<span style="color: red"><?php echo $errorMessage; ?></span>



<?php



function read() {
$file = fopen(filepath, "r");
$fz = filesize(filepath);
$fr = "";
if($fz > 0) {
$fr = fread($file, $fz);
}
fclose($file);
return $fr;
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
    

</body>
</center>
</html>
<?php 
        require '../Controllers/includes/Footer.php'; 
    ?>