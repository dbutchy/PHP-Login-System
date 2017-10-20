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
		<base href="/" />
		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />

	</head>
	<body>
		<?php 
			require_once "inc/footer.php"; 
		?>
		<div class="uk-section uk-container">
			<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
				<form class="uk-form-stacked js-register">

					<h2>Register</h2>

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text">Email</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="joe@gmail.com">
				        </div>
				    </div>

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text">Password</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text" type="password"  required="required" placeholder="your password">
				        </div>
				    </div>

				    <div class="uk-margin">
				        <button class="uk-button uk-button-default" type="submit">Register</button>
				    </div>
				</form>
			</div>
			<!-- <?php echo "Hello,    David!  You are looking spritely today."; ?>  -->
		</div>
	</body>
	</html>