<?php
session_start();
include("dp.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>Buzz| Login</title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets\img\favicons\apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets\img\favicons\favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets\img\favicons\favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="assets\img\favicons\manifest.json">
    <link rel="mask-icon" href="assets\img\favicons\safari-pinned-tab.svg">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="assets\css\font-awesome.min.css">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets\css\animate.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="assets\css\owl.carousel.css">
    
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="assets\css\slicknav.min.css">
    
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="assets\css\magnific-popup.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets\css\style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets\css\responsive.css">

</head>
<body>

    <!-- Login Page Area Start -->
    <section class="edulab-login-page-area login-bg">
        <div class="edulab-login-overlay"></div>
        <div class="edulab-login-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="login-box">
                            <div class="edulab-login-logo">
                                <a href="index-1.htm">
                                    <h2>BU<span>ZZ</span></h2>
                                </a>
                            </div>
                            <div class="login-slogan">
                                <h3>Select your subject!</h3>
                            </div>
                           <form action="feed_pro.php"  method="post"  enctype="multipart/form-data">
                            
                                <p class="submit registration">
                                    <button <input type="submit" name="add_feed" value="ADD FEED"/>
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </p>
								 <p class="class=field">
                                     <td align="right">  type:</td>
									 <td><select name="subject">
									 <option>MATH</option>
									 <option>SST</option>
									 <option>HINDI</option>
								   <option>BIO</option>
								   <option>URDU</option>
								   <option>CHEM</option>
									 </td>
                                </p>
                            </form>
							 <form action="feed_pro.php"  method="post"  enctype="multipart/form-data">
							 <input type="submit" name="skip" value="Skip"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Page Area End -->

    
    
    <!-- jQuery -->
    <script src="assets\js\jquery-1.11.3.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="assets\js\bootstrap.min.js"></script>
    
    <!-- Magnific Popup JS -->
    <script src="assets\js\jquery.magnific-popup.min.js"></script>
    
    <!-- OwlCarousel JS -->
    <script src="assets\js\owl.carousel.min.js"></script>

    <!-- Slicknav JS -->
    <script src="assets\js\jquery.slicknav.min.js"></script>
    
    <!-- Counter JS -->
    <script src="assets\js\jquery.counterup.min.js"></script>
    
    <!-- Waypoints JS -->
    <script src="assets\js\waypoints-min.js"></script>
    
    <!-- Isotop Min JS -->
    <script src="assets\js\isotope.pkgd.min.js"></script>
    
    <!-- Sticky JS -->
    <script src="assets\js\jquery.sticky.js"></script>
    
    <!-- Custom JS -->
    <script src="assets\js\active.js"></script>
    
</body>
</html>