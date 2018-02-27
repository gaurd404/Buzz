<?php
$page_title = "booking_page";
include('header_home.php');
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="signup.css">

  
</head>

<body>
  <div class="form">
          <form action="register2.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="first_name" style="width:520px;" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="last_name" style="width:520px;" required autocomplete="off"/>
            </div>
              <div class="field-wrap">
              <label>
                Address<span class="req">*</span>
              </label>
              <input type="text" name="address" style="width:520px;" required autocomplete="off"/>
            </div>
              
              

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>

              
			 <div class="field-wrap">
              <label>
                Mobile No.<span class="req">*</span>
              </label>
              <input type="text" name="mobile_no" required autocomplete="off"/>
            </div>
              
            <div class="field-wrap">
              <label>
                Set a Username<span class="req">*</span>
              </label>
              <input type="text" name="user_name" required autocomplete="off"/>
            </div>
              
              
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <input type="submit" name="submit" value="Submit"/ >
          
          </form>

        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="urgent.js"></script>      

</body>
</html>