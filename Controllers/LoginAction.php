
	<?php 
	$username = $password = "";
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$username = "ofnahid";
		$password = "12345";

		if($username === $_POST['username'] && $password === $_POST['password']) {

			if(isset($_POST['rememberme'])) {
				setcookie("username", $username, time() + 60*60*24);
				setcookie("password", $password, time() + 60*60*24);
				setcookie("rememberme", "1", time() + 60*60*24);
			}

			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

			header("Location: home.php");
		}
	}

	if(isset($_COOKIE['rememberme'])) {
		$username = $_COOKIE['username'];
		$password = $_COOKIE['password'];
	}
	?>
