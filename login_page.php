<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Comapatible" content="IE=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

        <!---Navigation BAR just for main page-->
        <header>
            <h2 class="logo">Logo</h2>
            <nav class="navigation">
                <button class="buttonnav">Helpline</button>
                <button class="buttonnav"><a href="Register_page.php">Register</a></button>
                <button class="buttonnav"><a href="login_page.php">Login</a></button>
            </nav>
                </header>



    <!-----Login PAGE----->
    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form action="includes/login.inc.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="people"></ion-icon></span>
                    <input type="text" name="username" >
                    <label for="">Username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock"></ion-icon></span>
                    <input type="password" name="pwd" >
                    <label for="">Password</label>
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox">Remember me
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="login-button">
                    Login
                </button>
                <div class="login-register">
                    <p>Don't have an account?
                        <a href="Register_page.php" class="register-link">
                            Register
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    
 

   <!-- Site Footer-->
   <footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Contact Info-->
                <section class="widget widget-light-skin">
                    <h3 class="widget-title">Get In Touch</h3>
                    <p class="mb-1"><strong>Address: </strong> Gazipur, Dhaka</p>
                    <p class="mb-1"><strong>Phone: </strong> +8801921837244</p>
                    <p class="mb-3"><strong>Email: </strong> <a href="">email.com</a></p>
                    <ul class="list-unstyled text-sm">
                        <li><span class=""><strong>Monday-Friday: </strong></span>8:00 AM
                            - 11:00 PM</li>
                        <li><span class=""><strong>Saturday: </strong></span>8:00 AM
                            - 11:00 PM</li>
                    </ul>
                                        <div class="footer-social-links">
                                                    <a href="https://www.facebook.com"><span><ion-icon name="logo-facebook"></ion-icon></span></a>
                                                    <a class="hum" href="https://www.twitter.com"><span><ion-icon name="logo-twitter"></ion-icon></span></a>
                                                    <a class="hum" href="https://www.youtube.com"><span><ion-icon name="logo-youtube"></ion-icon></span></a>
                                                    <a class="hum" href="https://www.linkedin.com"><span><ion-icon name="logo-linkedin"></ion-icon></span></a>
                                            </div>
                </section>
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Customer Info-->
                <div class="widget widget-links widget-light-skin">
                    <h3 class="widget-title">Usefull Links</h3>
                    <ul>
                        <li><a href="about_us.html">About Us</a></li>

                        <li><a href="privacy_policy.html">Privacy Policy</a></li>

                        <li><a href="terms_service.html">Terms &amp; Service</a></li>

                        <li><a href="return_policy.html">Return Policy</a></li>

                        <li><a href="howit_works.html">How It Works</a></li>

                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Subscription-->
                <section class="widget">
                    <h3 class="widget-title">Newsletter</h3>
                    <form class="row subscriber-form" action="https://shopx100.pro/subscriber/submit" method="post">
                        <input type="hidden" name="_token" value="XqWvMQiFbUqTz59PxPsn27wyNoSoZnED8xWZBiLO">                        <div class="col-sm-12">
                            <div class="input-group">
                                <input class="form-control" type="email" name="email"
                                       placeholder="Your e-mail">
                                <span class="input-group-addon"><i class="icon-mail"></i></span></div>
                            <div aria-hidden="true">
                                <input type="hidden" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary btn-block mt-2" type="submit">
                                <span>Subscribe</span>
                            </button>
                        </div>
                        <div class="col-lg-12">
                            <p class="text-sm opacity-80 pt-2">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</p>
                        </div>
                    </form>
                    <div class="pt-3"><img class="d-block gateway_image"
                                           src="img/1691484512bkash nagad rocket.jpg">
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
</footer>

        <!-- Copyright-->
        <div class="copyright">
            Copyright 2022 &copy; <strong><a href="https://www.facebook.com/profile.php?id=100013146253677" target="_blank">Ebrahim</a></strong>
          </div>
          <!-- back to top -->
<a href="#" class="back-to-top"><ion-icon name="arrow-up"></ion-icon></a>



<script src="js/script.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
</body>

</html>