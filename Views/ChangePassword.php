<?php 
	require '../Controllers/includes/Header.php';
	require '../Controllers/includes/Navigation.php';
	require '../Controllers/PasswordChangeAction.php'; 
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password</title>
</head>
<body align="center" bgcolor="Plum">

	<br/>
	

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<fieldset>
				<legend><h1>Change Password</h1></legend>
			<label for="currentpass">Current Password<span style="color: red">*</span>: </label>
			<input type="text" name="currentpass" id="currentpass">
			<span style="color: red"><?php echo $currentpassErr; ?></span>
			<br><br>
			<label for="newpass">New Password<span style="color: red">*</span>: </label>
			<input type="text" name="newpass" id="newpass">
			<span style="color: red"><?php echo $newpassErr; ?></span>
			<br><br>
			<label for="confirmnewpass">Confirm New Password<span style="color: red">*</span>: </label>
			<input type="text" name="confirmnewpass" id="confirmnewpass">
			<span style="color: red"><?php echo $confirmnewpassErr; ?></span>
			<br><br>
			<input type="submit" name="submit" value="Confirm">
			</fieldset>
			
		</form>

			<br>

			<span style="color: green"><?php echo $successfulMessage; ?></span>
			<span style="color: red"><?php echo $errorMessage; ?></span>



			

		<br><br><br><br><br><br><br><br><br><br><br>


		


</body>
</html>

<?php
			require '../Controllers/includes/Footer.php'; 
    	?>

