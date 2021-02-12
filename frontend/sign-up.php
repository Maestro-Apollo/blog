<?php
include_once('../controller/signUpController.php');
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
        <section id="content" style="width: 700px">
            <form action="" style="padding: 5%" method="post">
                <h2 class="h-add-bottom">Sign Up</h2>
                <?php echo $objSignUp; ?>
                <div class="row">
                    <div style="width: 50%; padding-right: 5%">
                        <input class="h-full-width" name="fname" type="text" placeholder="First Name" required=""
                            id="username" />
                    </div>
                    <div style="width: 45%">
                        <input class="h-full-width" name="lname" type="text" placeholder="Last Name" required=""
                            id="username" />
                    </div>
                </div>
                <div class="row">
                    <input class="h-full-width" type="email" placeholder="Email" name="email" required=""
                        id="username" />
                </div>
                <div class="row">
                    <input class="h-full-width" type="text" placeholder="Username" name="username" required=""
                        id="username" />
                </div>
                <div class="row">
                    <input class="h-full-width" type="password" placeholder="Password" name="password" required=""
                        id="password" />
                </div>
                <div class="row">
                    <input type="submit" name="submit" value="Register" class="btn--primary h-full-width" />
                    <a href="login.php" style="text-align:right">Already a member? Log in</a>
                </div>
            </form>
            <!-- form -->

        </section>
        <!-- content -->
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="../assets/js/jquery-3.5.0.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>