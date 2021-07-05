<?php 
	require '../Controllers/includes/Header.php'; 
	require '../Controllers/LoginAction.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body  align="center" bgcolor="DarkCyan">
	<fieldset>
				<legend><h1>Login</h1></legend>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		<label for="username">Username: </label>
		<input type="text" name="username" id="username" value="<?php echo $username; ?>">

		<br><br>

		<label for="password">Password: </label>
		<input type="password" name="password" id="password" value="">

		<br><br>

		<input type="checkbox" name="rememberme" id="rememberme" value="1">
		<label for="rememberme">Remember Me</label>

		<input type="submit" name="submit" value="Login">

	</fieldset>	
	</form>

	<br>


	Not yet a Member? <a href="Registration.php">Sign Up</a>

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
</body>
</html>
<?php 
    	require '../Controllers/includes/Footer.php'; 
    ?>