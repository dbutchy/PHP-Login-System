<?php 
	// define the __CONFIG__ to use the config.php
	define('__CONFIG__', true);
	require_once "inc/config.php"; 
?>
<DOCTYPE html>

	<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge" />
		<meta name="viewport" content="width=device-width, intial-scale=1" />
		<meta name="robots" content="follow" />
		<title>PHP Login Course</title>
		<base href="/php-login-course/" />
		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />

	</head>
	<body>
		<?php 
			require_once "inc/footer.php"; 
		?>
		<div class="uk-section uk-container">
			<?php 
			echo "Hello,    David!  You are looking spritely today, date: ";
			echo date('Y m d'); 
			?>  
			<a href="login.php">Login</a>
			<a href="register.php">Register</a>
		</div>
	</body>
	</html>