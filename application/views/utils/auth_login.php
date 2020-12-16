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
    <title>Find Cafe - Authentication</title>
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
                            <li class="scroll-to-section"><a class="active" href="<?= base_url(); ?>auth_login">Sign In</a></li>
                            <li class="scroll-to-section"><a href="<?= base_url(); ?>auth_regist">Create Account</a></li>
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
                        <h6>Hang Out Now?</h6>
                        <h2>Welcome again, please sign in here</h2>
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
                                            <li><a href='#tabs-1'><img src="assets/images/icon-user.png" alt="">User</a></li>
                                            <li><a href='#tabs-2'><img src="assets/images/icon-owner.png" alt="">Owner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <section class="sign-in">
                                        <div class="container-form">
                                            <div class="signin-content">
                                                <img src="assets/images/signin_user_img.png" style="min-width: fit-content; height:10%; margin: -10% -5% 0 5%" class="mt-5" width="250" height="50">

                                                <div class="signin-form">
                                                    <h2 class="form-title">User</h2>
                                                    <form method="POST" class="register-form" id="login-form">

                                                        <div class="form-group">
                                                            <label for="your_email"><i class="zmdi zmdi-email"></i></label>
                                                            <input type="email" name="email_user" id="your_email" placeholder="Your Email" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                                            <input type="password" name="pass_user" id="your_pass" placeholder="Password" />
                                                        </div>
                                                        <div class="form-group form-button">
                                                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </article>
                                <article id='tabs-2'>
                                    <section class="sign-in col-md-12">
                                        <div class="container-form">
                                            <div class="signin-content">
                                                <img src="assets/images/signin_owner_img.png" style="min-width: fit-content; height:10%; margin: -10% -5% 0 5%" class="mt-5" width="250" height="50">
                                                <div class="signin-form">
                                                    <h2 class="form-title">Owner</h2>
                                                    <form method="POST" class="register-form" id="login-form">

                                                        <div class="form-group">
                                                            <label for="your_name"><i class="zmdi zmdi-email"></i></label>
                                                            <input type="email" name="email_cafe" id="email_cafe" placeholder="Your Email Company" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                                            <input type="password" name="your_pass" id="your_pass" placeholder="Password" />
                                                        </div>
                                                        <div class="form-group form-button">
                                                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
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