<?php
include_once('../controller/searchController.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Calvin</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/vendor.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <!-- CSS only -->


    <!-- script
    ================================================== -->
    <script src="../js/modernizr.js"></script>
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


    <!-- header
    ================================================== -->
    <header class="s-header s-header--opaque">

        <div class="s-header__logo">
            <a class="logo" href="../index.php">
                <img src="../assets/images/logo.svg" alt="Homepage">
            </a>
        </div>

        <div class="row s-header__navigation">

            <nav class="s-header__nav-wrap">

                <h3 class="s-header__nav-heading h6">Navigate to</h3>

                <a href="#0" title="Close Menu" class="s-header__overlay-close close-mobile-menu">Close</a>

            </nav> <!-- end s-header__nav-wrap -->

        </div> <!-- end s-header__navigation -->

        <a class="s-header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

        <div class="s-header__search">

            <div class="s-header__search-inner">
                <div class="row wide">

                    <form role="search" method="post" class="s-header__search-form" action="#">
                        <label>
                            <span class="h-screen-reader-text">Search for:</span>
                            <input type="search" class="s-header__search-field" placeholder="Search for..." value=""
                                name="search" title="Search for:" autocomplete="off">
                        </label>
                        <input type="submit" class="s-header__search-submit" name="submit" value="Search">
                    </form>

                    <a href="#0" title="Close Search" class="s-header__overlay-close">Close</a>

                </div> <!-- end row -->
            </div> <!-- s-header__search-inner -->

        </div> <!-- end s-header__search wrap -->

        <a class="s-header__search-trigger" href="profile.php">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.982 17.983">
                <path fill="#010101"
                    d="M12.622 13.611l-.209.163A7.607 7.607 0 017.7 15.399C3.454 15.399 0 11.945 0 7.7 0 3.454 3.454 0 7.7 0c4.245 0 7.699 3.454 7.699 7.7a7.613 7.613 0 01-1.626 4.714l-.163.209 4.372 4.371-.989.989-4.371-4.372zM7.7 1.399a6.307 6.307 0 00-6.3 6.3A6.307 6.307 0 007.7 14c3.473 0 6.3-2.827 6.3-6.3a6.308 6.308 0 00-6.3-6.301z" />
            </svg>
        </a>
        <!-- Login -->
        <a href="profile.php" style="color:white;margin-right: 20px">
            <i class="fas fa-user"></i>
        </a>

    </header> <!-- end s-header -->


    <!-- content
    ================================================== -->
    <section class="s-content s-content--no-top-padding"">

        <!-- masonry
        ================================================== -->
        <div class=" s-bricks">
        <div style="float: left">
            <p style="margin-left: 50px"> <a href="search.php"><i class="fas fa-sync-alt"></i></a></p>

        </div>
        <div style="float:right">
            <p style="margin-right: 50px"> <span style="font-weight: 700"><?php echo $total; ?></span> result(s) found
            </p>
        </div>

        <div class="masonry">
            <div class="bricks-wrapper h-group">

                <div class="grid-sizer"></div>

                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <?php if ($objIndex) { ?>
                <?php while ($row = mysqli_fetch_assoc($objIndex)) { ?>
                <article class="brick entry" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-post.php?id=<?php echo $row['post_id']; ?>" class="thumb-link">
                            <img src="post_image/<?php echo $row['image']; ?>" alt="">
                        </a>
                    </div> <!-- end entry__thumb -->

                    <div class="entry__text">
                        <div class="entry__header">
                            <h1 class="entry__title"><a
                                    href="single-post.php?id=<?php echo $row['post_id']; ?>"><?php echo $row['title']; ?></a>
                            </h1>

                            <div class="entry__meta">
                                <span class="byline"">By:
                    <span class='author'>
                        <?php echo $row['username']; ?>
                </span>
                </span>
            </div>
        </div>
        <div class=" entry__excerpt">
                                    <p>
                                        <?php echo $row['message']; ?>
                                    </p>
                            </div>
                            <a class="entry__more-link" href="single-post.php?id=<?php echo $row['post_id']; ?>">Learn
                                More</a>
                        </div> <!-- end entry__text -->

                </article> <!-- end article -->
                <?php } ?>
                <?php } ?>



            </div> <!-- end brick-wrapper -->

        </div> <!-- end masonry -->

        </div> <!-- end s-bricks -->

    </section> <!-- end s-content -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer" style="padding-top: 0px">

        <div class="s-footer__main">

            <div class="row">

                <div class="column large-6 medium-6 tab-12 s-footer__info">

                    <h5>About Our Site</h5>

                    <p>
                        Lorem ipsum Ut velit dolor Ut labore id fugiat in ut
                        fugiat nostrud qui in dolore commodo eu magna Duis
                        cillum dolor officia esse mollit proident Excepteur
                        exercitation nulla. Lorem ipsum In reprehenderit
                        commodo aliqua irure.
                    </p>

                </div> <!-- end s-footer__info -->

            </div> <!-- end row -->

        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="column">
                    <div class="ss-copyright">
                        <span>© Copyright Calvin 2020</span>
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
                    </div> <!-- end ss-copyright -->
                </div>
            </div>

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                        <path
                            d="M7.5 1.5l.354-.354L7.5.793l-.354.353.354.354zm-.354.354l4 4 .708-.708-4-4-.708.708zm0-.708l-4 4 .708.708 4-4-.708-.708zM7 1.5V14h1V1.5H7z"
                            fill="currentColor"></path>
                    </svg>
                </a>
            </div> <!-- end ss-go-top -->
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="../assets/js/jquery-3.5.0.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>