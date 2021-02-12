<?php
include_once('../controller/singlePostController.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Standard Post - Calvin</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/vendor.css">
    <link rel="stylesheet" href="../assets/css/styles.css">

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

            </nav>
            <!-- end s-header__nav-wrap -->

        </div>
        <!-- end s-header__navigation -->

        <a class="s-header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

        <div class="s-header__search">

            <div class="s-header__search-inner">
                <div class="row wide">

                    <form role="search" method="get" class="s-header__search-form" action="#">
                        <label>
                            <span class="h-screen-reader-text">Search for:</span>
                            <input type="search" class="s-header__search-field" placeholder="Search for..." value=""
                                name="s" title="Search for:" autocomplete="off">
                        </label>
                        <input type="submit" class="s-header__search-submit" value="Search">
                    </form>

                    <a href="#0" title="Close Search" class="s-header__overlay-close">Close</a>

                </div>
                <!-- end row -->
            </div>
            <!-- s-header__search-inner -->

        </div>
        <!-- end s-header__search wrap -->

        <a class="s-header__search-trigger" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.982 17.983">
                <path fill="#010101"
                    d="M12.622 13.611l-.209.163A7.607 7.607 0 017.7 15.399C3.454 15.399 0 11.945 0 7.7 0 3.454 3.454 0 7.7 0c4.245 0 7.699 3.454 7.699 7.7a7.613 7.613 0 01-1.626 4.714l-.163.209 4.372 4.371-.989.989-4.371-4.372zM7.7 1.399a6.307 6.307 0 00-6.3 6.3A6.307 6.307 0 007.7 14c3.473 0 6.3-2.827 6.3-6.3a6.308 6.308 0 00-6.3-6.301z" />
            </svg>
        </a>
        <!-- Login -->
        <a href="#" style="color:white;margin-right: 20px">
            <i class="fas fa-user"></i>
        </a>

    </header>
    <!-- end s-header -->


    <!-- content
    ================================================== -->
    <section class="s-content">

        <div class="row">
            <div class="column large-12">

                <article class="s-content__entry format-standard">

                    <div class="s-content__media" style="text-align:center">
                        <div class="s-content__post-thumb">
                            <img src="post_image/<?php echo $row['image']; ?>" sizes="(max-width: 2100px) 100vw, 2100px"
                                alt="">
                        </div>
                    </div>
                    <!-- end s-content__media -->

                    <div class="s-content__entry-header">
                        <h1 class="s-content__title s-content__title--post"><?php echo $row['title']; ?></h1>
                    </div>
                    <!-- end s-content__entry-header -->

                    <div class="s-content__primary">

                        <div class="s-content__entry-content">

                            <p class="lead">
                                <?php echo $row['message']; ?> </p>

                            <!-- <p>
                                Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor
                                sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat
                                enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco
                                magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum
                                adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut
                                laboris in sit minim cupidatat ut dolor voluptate
                                enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim
                                aliqua laborum mollit quis nostrud sed sed.
                            </p> -->
                        </div>
                        <!-- end s-entry__entry-content -->

                        <div class="s-content__entry-meta">

                            <div class="entry-author meta-blk">
                                <div class="author-avatar">
                                    <img class="avatar" src="../assets/images/avatars/mona.jpg" alt="">
                                </div>
                                <div class="byline">
                                    <span class="bytext">Posted By</span>
                                    <a href="#0"><?php echo $row['username']; ?></a>
                                </div>
                            </div>

                            <div class="meta-bottom">

                                <div class="entry-cat-links meta-blk">
                                    <div class="cat-links">
                                        <span>In</span>
                                        <a href="#0">Covid</a>
                                        <a href="#0">Living Forever</a>
                                        <a href="#0">Health</a>
                                    </div>

                                    <span>On</span> <?php echo $row['date']; ?>
                                </div>
                            </div>

                        </div>
                        <!-- s-content__entry-meta -->

                        <div class="s-content__pagenav">
                            <div class="prev-nav">
                                <a href="#" rel="prev">
                                    <span>Previous</span> Tips on Minimalist Design
                                </a>
                            </div>
                            <div class="next-nav">
                                <a href="#" rel="next">
                                    <span>Next</span> A Practical Guide to a Minimalist Lifestyle.
                                </a>
                            </div>
                        </div>
                        <!-- end s-content__pagenav -->

                    </div>
                    <!-- end s-content__primary -->
                </article>
                <!-- end entry -->

            </div>
            <!-- end column -->
        </div>
        <!-- end row -->


        <!-- comments
        ================================================== -->
        <div class="comments-wrap">

            <div id="comments" class="row">
                <div class="column large-12">

                    <h3><?php echo $rowCount['total']; ?> Comments</h3>

                    <!-- START commentlist -->
                    <ol class="commentlist">

                        <?php if ($objShow) { ?>
                        <?php while ($row = mysqli_fetch_assoc($objShow)) { ?>
                        <li class="depth-1 comment">

                            <div class="comment__avatar">
                                <img class="avatar" src="../assets/images/avatars/avatar.png" alt="" width="50"
                                    height="50">
                            </div>

                            <div class="comment__content">

                                <div class="comment__info">
                                    <div class="comment__author"><?php echo $row['username']; ?></div>

                                    <div class="comment__meta">
                                        <div class="comment__time"><?php echo $row['message_date']; ?></div>
                                        <div class="comment__reply">
                                            <a class="comment-reply-link" href="#0">Reply</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment__text">
                                    <p><?php echo $row['message']; ?></p>
                                </div>

                            </div>

                        </li>

                        <?php } ?>

                        <?php } ?>


                        <!-- end comment level 1 -->


                        <!-- end comment level 1 -->

                    </ol>
                    <!-- END commentlist -->

                </div>
                <!-- end col-full -->
            </div>
            <!-- end comments -->


            <div class="row comment-respond">

                <!-- START respond -->
                <div id="respond" class="column">

                    <h3>
                        Add Comment
                        <span>Want to contribute? Leave a comment!</span>
                        <?php echo $objComment; ?>
                    </h3>

                    <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                        <fieldset>

                            <div class="form-field">
                                <input name="username" id="cName" class="h-full-width h-remove-bottom"
                                    placeholder="Your Name"
                                    value="<?php if (isset($_SESSION['username'])) {
                                                                                                                                            echo $_SESSION['username'];
                                                                                                                                        } else {
                                                                                                                                            echo "";
                                                                                                                                        } ?>"
                                    type="text"
                                    <?php if (isset($_SESSION['username'])) {
                                                                                                                                                                echo 'readonly';
                                                                                                                                                            } ?>>
                            </div>

                            <div class="message form-field">
                                <textarea name="message" id="cMessage" class="h-full-width"
                                    placeholder="Your Message"></textarea>
                            </div>

                            <br>
                            <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large h-full-width"
                                value="Add Comment" type="submit">

                        </fieldset>
                    </form>
                    <!-- end form -->

                </div>
                <!-- END respond-->
            </div>
            <!-- end comment-respond -->
            <!-- <div class="row"> -->
            <div style="padding-left: 40%; padding-right: 40%">
                <div class="alert-box alert-box--error">
                    <p>Error. Comment was not posted. Retry.</p>
                    <span class="alert-box__close"></span>
                </div>
                <!-- end error -->

                <div class="alert-box alert-box--success">
                    <p>Success! Comment was posted.</p>
                    <span class="alert-box__close"></span>
                </div>
                <!-- end success -->
            </div>
            <!-- </div> -->
        </div>
        <!-- end comments-wrap -->

    </section>
    <!-- end s-content -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">

            <div class="row">

                <div class="column large-6 medium-6 tab-12 s-footer__info">

                    <h5>About Our Site</h5>

                    <p>
                        Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu
                        magna Duis cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum
                        In reprehenderit commodo aliqua irure.
                    </p>

                </div>
                <!-- end s-footer__info -->

            </div>
            <!-- end row -->

        </div>
        <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="column">
                    <div class="ss-copyright">
                        <span>© Copyright Calvin 2020</span>
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
                    </div>
                    <!-- end ss-copyright -->
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
            </div>
            <!-- end ss-go-top -->
        </div>
        <!-- end s-footer__bottom -->

    </footer>
    <!-- end s-footer -->



    <!-- Java Script
    ================================================== -->
    <script src="../assets/js/jquery-3.5.0.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>