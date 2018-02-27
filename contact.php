<?php
include "./db/db.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>BUZZ | Contact</title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>

    <?php include "./includes/fotter2.php"; ?>
    
    <!-- Main Header Area Start -->
    <?php include "./includes/header.php"; ?>
    <!-- Main Header Area End -->
    
    
    <!-- Breadcromb Area Start -->
    <section class="edulab-breadcromb-area section_50">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb">
                        <h2>contact us</h2>
                        <ul>
                            <li><a href="index-1.htm">Home</a></li>
                            <li><a href="#">/</a></li>
                            <li>contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->

    
    <!-- Contact Page Area Start -->
    <section class="edulab-contact-page-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="edulab-contact-desc">
                        <h3>You can Contact with us Alwayes</h3>
                        </div>
                </div>
            </div>
            <div class="edulab-contact-form-bottom">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-form-left">
                            <div class="single-contact-left">
                                <div class="contact-icon">
                                    <i class="fa fa-phone text-center"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>phone</h4>
                                    <p>9408594205</p>
                                    <p>9408594205</p>
                                </div>
                            </div>
                            <div class="single-contact-left">
                                <div class="contact-icon">
                                    <i class="fa fa-envelope text-center"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Email</h4>
                                    <p> info@buzz.com</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="edulab-contact-form-right">
                            <form action="./contact_pro.php" method="get">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <input type="text" name="name" placeholder="Enter Your Name">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <input type="email" name="email" placeholder="Enter Your Email">
                                        </p>
                                    </div>
									
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <input type="text" name="subject" placeholder="Your Subject">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <input type="tel" name="phone" placeholder="Your Phone">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <textarea placeholder="Message..." name="message"></textarea>
                                        </p>
                                        <p>
                                            <input value="Send Message" type="submit" name="submit">
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Page Area End -->

     <!-- Footer Area Start -->
    <?php include "./includes/fotter1.php"; ?>
    <!-- Footer Area End -->
    
    <!-- Footer Area Start -->
    <?php include "./includes/footer.php"; ?>
    <!-- Footer Area End -->

    
    
    <!-- jQuery -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- Magnific Popup JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!-- OwlCarousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Slicknav JS -->
    <script src="assets/js/jquery.slicknav.min.js"></script>
    
    <!-- Counter JS -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    
    <!-- Waypoints JS -->
    <script src="assets/js/waypoints-min.js"></script>
    
    <!-- Isotop Min JS -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <!-- Sticky JS -->
    <script src="assets/js/jquery.sticky.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/active.js"></script>

    
</body>
</html>