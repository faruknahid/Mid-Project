
	<?php
		define("filepath", "data.txt");



		$firstName = $lastName = "";
		$firstNameErr = $lastNameErr = "";
		$flag = false;
		$successfulMessage = $errorMessage = "";

		$username = $password = "";
		$usernameErr = $passwordErr = "";
		$flag = false;
		$successfulMessage = $errorMessage = "";


		if($_SERVER['REQUEST_METHOD'] === "POST") {
		$firstName = $_POST['firstname'];
		$lastName = $_POST['lastname'];
		$username = $_POST['username'];
		$password = $_POST['password'];



		if(empty($firstName)) {
		$firstNameErr = "Field can not be empty";
		$flag = true;
		}
		if(empty($lastName)) {
		$lastNameErr = "Field can not be empty";
		$flag = true;
		}
		if(empty($username)) {
		$usernameErr = "Field can not be empty";
		$flag = true;
		}
		if(empty($password)) {
		$passwordErr = "Field can not be empty";
		$flag = true;
		}
		if(!$flag) {
		$fileData = read();



		if(empty($fileData)) {
		$data[] = array("firstname" => $firstName, "lastname" => $lastName, "username" => $username, "password" => $password);

		}
		else {
		$data[] = json_decode($fileData);
		array_push($data, array("firstname" => $firstName, "lastname" => $lastName, "username" => $username, "password" => $password));
		}



		$data_encode = json_encode($data);
		write("");
		$res = write($data_encode);
		if($res) {
		$successfulMessage = "Sucessfully saved.";
		}
		else {
		$errorMessage = "Error while saving.";
		}
		}
		}



		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}



		function write($content) {
		$file = fopen(filepath, "w");
		$fw = fwrite($file, $content . "\n");
		fclose($file);
		return $fw;
		}
	?>
