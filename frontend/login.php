<?php
include_once('../controller/loginController.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Style Guide - Calvin</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/vendor.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="login-style.css">

    <style type="text/css" media="screen">
    .s-styles {
        padding-bottom: var(--vspace-4);
    }

    .s-styles>.row {
        max-width: var(--width-max);
    }

    .s-styles .intro h1 {
        margin-top: 0;
    }
    </style>

    <!-- script
    ================================================== -->
    <script src="../assets/js/modernizr.js"></script>
    <script defer src="../assets/js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-16x16.png">

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- content
    ================================================== -->

    <div class="center">
        <section id="content">
            <form action="" style="padding: 10%" method="post">
                <h2 class="h-add-bottom">Log In</h2>
                <p><?php echo $objLogin; ?></p>
                <div>
                    <input class="h-full-width" name="username" type="text" placeholder="Username" required=""
                        id="username" />
                </div>
                <div>
                    <input class="h-full-width" name="password" type="password" placeholder="Password" required=""
                        id="password" />
                </div>
                <div>
                    <input type="submit" name="submit" value="Log in" class="btn--primary h-full-width" />
                    <a href="sign-up.php">Not a member? Register</a>
                </div>
            </form><!-- form -->

        </section><!-- content -->
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="../assets/js/jquery-3.5.0.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>