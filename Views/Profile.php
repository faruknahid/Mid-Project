<?php 
	require '../Controllers/includes/Header.php';
	require '../Controllers/includes/Navigation.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body  align="center" bgcolor="DarkCyan">
	
	<fieldset>
				<legend><h1>Profile</h1></legend>
	<form>
		<label for="username">Username: </label>
		<input type="text" name="username" id="username" value="ofnahid">

		<br><br>

		<label for="newusername">New User Name: </label>
		<input type="newusername" name="newusername" id="newusername" value="">

		<br><br>
		<input type="submit" name="submit" value="Update">

	</fieldset>	
	</form>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
</body>
</html>
<?php 
		require '../Controllers/includes/Footer.php'; 
    ?>
