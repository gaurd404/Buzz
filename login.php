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
    <title>Edulab | Login</title>
    
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
                                    <h2>BU<span>zz</span></h2>
                                </a>
                            </div>
                            <div class="login-slogan">
                                <h3>login to your Buzz account!</h3>
                            </div>
                            <form method="post" action="login.php">
                                <p class="field">
                                    <input  type="text" name="user_name" placeholder="enter email"/>
                                    <i class="fa fa-user"></i>
                                </p>
                                <p class="field">
                                    <input  type="password" name="pass" placeholder="enter password"/>
                                    <i class="fa fa-lock"></i>
                                </p>
                                <p class="submit">
                                    <button <input  type="submit" name="login" placeholder="Login"/>
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </p>
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
 <?php
			
			     if(isset($_POST['login']))
				 {  
			          $student=array();
					 $c_user=$_POST['user_name'];
					 $c_pass=$_POST['pass'];
					 
					 $sel_c="select * from person where password='$c_pass' AND username='$c_user' ";
					 $run_c=mysqli_query($con,$sel_c);
					
					 while($row_pro=mysqli_fetch_array($run_c))
			          {
			              $type=$row_pro['type'];
						  $person_id=$row_pro['person_id'];
						if($type=="Student")
						  {
							  $insert_c1 ="select * from student where person_id='$person_id'";
							  $run_c2=mysqli_query($con,$insert_c1); 
							 
							  while($row_pro8=mysqli_fetch_array($run_c2))
								   {
									 
									   $student_id=$row_pro8['student_id'];
									 $insert_c5 ="select * from interested_sub_details where student_id='$student_id'";
									  $run_c5=mysqli_query($con,$insert_c5);
									   
										$i = 0;									  
									  while($row_pro9=mysqli_fetch_array($run_c5))
								       {
										    $subject_id=$row_pro9['subject_id'];
										   $student[$i++]=$subject_id;
										   print_r($student);
                                            									  
									   }
								   }
						  }
						  else
						  {
							 $insert_c1 ="select * mentor where person_id='$person_id'";
							 $run_c2=mysqli_query($con,$insert_c1);
                             while($row_pro8=mysqli_fetch_array($run_c))
								  {
									 $mentor=array();
									 $mentor_id=$row_pro8['mentor_id'];
									 $insert_c5 ="select * from feed where mentor_id='$mentor_id'";
									  $run_c5=mysqli_query($con,$insert_c5); 
									  while($row_pro9=mysqli_fetch_array($run_c5))
								       {
										   $subject_id=$row_pro9['subject_id']; 
									   }
								  }							 
						  }
						 
						   $check_customer=mysqli_num_rows($run_c);
						 if($check_customer>0 )
							 
						  { 
							  $_SESSION['user']=$c_user; 
							
							
							echo "<script>alert('You logged in successfully, Thanks!')</script>";
							
							echo "<script>window.open('Questions.php','_self')</script>";
												  
							
						  }
						   else
						 {
							 echo "<script> alert('password or email is not correct')</script>";
						 }
					
				 }
			 }
			   ?>