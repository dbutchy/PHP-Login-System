<?php
/**
 * Created by PhpStorm.
 * User: dbutchy
 * Date: 4/24/2019
 * Time: 2:22 PM
 */
define('__CONFIG__', true);
require_once "inc/config.php";
//echo '  your user id is ' . $_SESSION['user_id'];
//exit;
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, intial-scale=1" />
    <meta name="robots" content="follow" />
    <title>PHP Login Course</title>
    <base href="/" />
    <!-- UIkit CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />

</head>
<body>


<div class="uk-section uk-container">
    <?php
    echo "Hello,    David!  You are at your DASHBOARD, on: ";
    echo date('Y m d');
    ?>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
</div>
<!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script> -->
<?php require_once "inc/footer.php";  ?>
</body>
</html>