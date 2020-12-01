<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="asset/logo_3.ico">
    <title>Find Cafe - Owner Page</title>
    <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/resources/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/resources/css/style.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container-form">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="asset/logo_nav.png" align="klassy cafe html template" width="230" height="50">

                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="<?= base_url(); ?>auth_login/logout">Log out</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h2>Welcome, Ada Apa Dengan Coffee</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                            <li><a href='#tabs-1'><img src="assets/images/reserv2-tab.png" alt="">User Reservation</a></li>
                                            <li><a href='#tabs-2'><img src="assets/images/category-tab.png" alt="">Category</a></a></li>
                                            <li><a href='#tabs-3'><img src="assets/images/product-tab.png" alt="">Product</a></a></li>
                                            <li><a href='#tabs-4'><img src="assets/images/cafe-profil-tab.png" alt="">Cafe Profile</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="left-list">
                                                    <!-- Sign up form -->
                                                    <section class="signup">
                                                        <div class="container-form">
                                                            <div class="signup-content">
                                                                <div class="signup-form">
                                                                    <h2 class="form-title">User Reservation</h2>
                                                                    <form method="POST" class="register-form" id="register-form">
                                                                        <div class="form-group">
                                                                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                                                            <input type="text" name="name" id="name" placeholder="Your Name" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                                                                            <input type="email" name="email" id="email" placeholder="Your Email" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                                                            <input type="password" name="pass" id="pass" placeholder="Password" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                                                            <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                                                                        </div>

                                                                        <div class="form-group form-button">
                                                                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="signup-image">
                                                                    <figure><img src="assets/images/about-video-bg.jpg" alt="sing up image"></figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="left-list">
                                                    <!-- Sign up form -->
                                                    <section class="signup">
                                                        <div class="container-form">
                                                            <div class="signup-content">
                                                                <div class="signup-form">
                                                                    <h2 class="form-title">Category</h2>
                                                                    <form method="POST" class="register-form" id="register-form">
                                                                        <div class="form-group">
                                                                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                                                            <input type="text" name="name" id="name" placeholder="Your Name" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                                                                            <input type="email" name="email" id="email" placeholder="Your Email" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                                                            <input type="password" name="pass" id="pass" placeholder="Password" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                                                            <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                                                                        </div>

                                                                        <div class="form-group form-button">
                                                                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="signup-image">
                                                                    <figure><img src="assets/images/about-video-bg.jpg" alt="sing up image"></figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="left-list">
                                                    <!-- Sign up form -->
                                                    <section class="signup">
                                                        <div class="container-form">
                                                            <div class="signup-content">
                                                                <div class="signup-form">
                                                                    <h2 class="form-title">Product</h2>
                                                                    <form method="POST" class="register-form" id="register-form">
                                                                        <div class="form-group">
                                                                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                                                            <input type="text" name="name" id="name" placeholder="Your Name" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                                                                            <input type="email" name="email" id="email" placeholder="Your Email" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                                                            <input type="password" name="pass" id="pass" placeholder="Password" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                                                            <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                                                                        </div>

                                                                        <div class="form-group form-button">
                                                                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="signup-image">
                                                                    <figure><img src="assets/images/about-video-bg.jpg" alt="sing up image"></figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-4'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="left-list">
                                                    <!-- Sign up form -->
                                                    <section class="signup">
                                                        <div class="container-form">
                                                            <div class="signup-content">
                                                                <div class="signup-form">
                                                                    <h2 class="form-title">Cafe Profile</h2>
                                                                    <form method="POST" class="register-form" id="register-form">
                                                                        <div class="form-group">
                                                                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                                                            <input type="text" name="name" id="name" placeholder="Your Name" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                                                                            <input type="email" name="email" id="email" placeholder="Your Email" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                                                            <input type="password" name="pass" id="pass" placeholder="Password" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                                                            <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                                                                        </div>

                                                                        <div class="form-group form-button">
                                                                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="signup-image">
                                                                    <figure><img src="assets/images/about-video-bg.jpg" alt="sing up image"></figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 

    <div class="main">
        <!-- Sing in  Form -->