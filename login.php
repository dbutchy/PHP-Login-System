<?php
// define the __CONFIG__ to use the config.php
define('__CONFIG__', true);
require_once "inc/config.php";

    // IF ALREADY LOGGED IN, DIRECT TO dashboard.php
    //DirectLoggedInUser();
//    if(isset($_SESSION['user_id']) && ($_SESSION['user_id'] != null)){
//    header("Location : dashboard.php"); exit;
//    //    exit;
//        $test = 'robert@yahoo.com';
//        $pw = 'robert';
//    }else{
//        $test = 'paul@yahoo.com';
//        $pw = 'paul';
//    }
    if(isset($_SESSION['user_id'])){
        $test = 'robert' . $_SESSION['user_id'] . '@yahoo.com';
    } else{
        $test = 'robert@yahoo.com';
    }
        $pw = 'robert';

    ?>
<!DOCTYPE html>

	<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="robots" content="follow" />
		<title>PHP Login Course</title>
		<base href="/" />
		<!-- UIkit CSS -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
        <!-- UIkit JS -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>  -->

	</head>
	<body>
		<div class="uk-section uk-container">
			<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1"  uk-grid="">
				<form class="uk-form-stacked js-login">
					
					<h2>Login</h2>

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text1">Email</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text1" type="email" required="required" value="<?php   echo $test;  ?>">
				        </div>
				    </div>

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text2">Password</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text2" type="password"  required="required" value="<?php   echo $pw;  ?>">
				        </div>
				    </div>
                    <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none'></div>
				    <div class="uk-margin">
				        <button class="uk-button uk-button-default" type="submit">Log-in</button>
				    </div>

				</form>
			</div>
			<!-- <?php echo "Hello,    David!  You are looking spritely today."; ?>  -->
		</div>
        <?php
        // define the __CONFIG__ to use the config.php
         require_once "inc/footer.php";
        ?>        <!-- UIkit JS -->
	</body>
	</html>