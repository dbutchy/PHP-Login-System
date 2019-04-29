<?php 
	// define the __CONFIG__ to use the config.php
	define('__CONFIG__', true);
	require_once "inc/config.php";

//	$passw = 'Freddie';
//	echo $passw . '<hr>';
//    echo  password_hash($passw, PASSWORD_DEFAULT);
//    exit();
?>
<DOCTYPE html>

	<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<meta name="robots" content="follow" />
		<title>PHP Login Course</title>
		<base href="/" />
		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />

	</head>
	<body>

		<div class="uk-section uk-container">
			<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
				<form class="uk-form-stacked js-register" method="post">

					<h2>Register</h2>

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text1">Email</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text1" type="email" required="required" value="joe@gmail.com">
				        </div>
				    </div>

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text2">Password</label>
				        <div class="uk-form-controls">
<!--                            <input class="uk-input" id="form-stacked-text2" type="password"  required="required" value="password">-->
				            <input class="uk-input" id="form-stacked-text2" type="password" name="password1" required="required" placeholder="password">
				        </div>
				    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text3">Confirm Password</label>
                        <div class="uk-form-controls">
<!--                            <input class="uk-input" id="form-stacked-text3" type="password"  required="required" value="password">-->
                            <input class="uk-input" id="form-stacked-text3" type="password" name="password2" required="required" placeholder="password">
                        </div>
                    </div>
                    <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none'></div>
				    <div class="uk-margin">
				        <button class="uk-button uk-button-default" type="submit">Register</button>
				    </div>
				</form>
			</div>
			<!-- <?php //echo "Hello,    David!  You are looking spritely today."; ?>  -->
		</div>
        <?php
        require_once "inc/footer.php";
        ?>
	</body>
	</html>