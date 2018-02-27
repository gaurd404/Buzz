<?php
include ('./db/db.php');

if(isset($_GET['submit'])){
	 $name=$_GET['name'];
	 $email=$_GET['email'];
	 $subject=$_GET['subject'];
	 $phone=$_GET['phone'];
	 $message=$_GET['message'];
}

	$companymail = 'noreply@collegemitra.com'; //this is optional
	$gmail = 'collegematter12@gmail.com'; //this is optional
	$firm = 'ICE Technologies Pvt. Ltd.';
	$email4user= 'Thank you for contacting us';
	$email4company= "$name trying to contact you..";
	$companyname='ICETL';
	//$hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
	
	$body = 
<<<EOF
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
	<p>Dear <span style="color:#060"><b>$name</b></span>,</p>
	<p>Welcome to our newly redesigned innovative <span style="color:#F00"><i><strong>ICETL!</strong></i></span> It  is in our stature in order for breaking new grounds &amp; by providing  helping hand to develop new innovative ideas  &amp; strengthen skills, policies &amp; practice, we have rebuilt our site to  make it much easier to find &amp; share resources &amp; to enlighten all  accomplishments of knowledge.</p>
	<p>
	<p>Thankyou contacting to us, We will get back to you shortly</p>
	You can visit this link <a href="www.icetl.com">www.icetl.com</a></p>
	<p>
	  Sincerely,<br>
	  Himanshu JAiswal (Founder)<br>
	Team $firm</p>
	</body>
	</html>   
EOF;

$sql=mysql_query("insert into contactus (name,email,subject,phoneno,message) value ('$name','$email','$subject','$phone','$message')" );
 
 if ($sql == 1){
	
	//Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html\r\n"; 
	$headers .= "From: ". $companyname . " <" . $companymail . ">\r\n";
	$headers .= "Return-Path: $companymail\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	$headers .= "Bcc: $gmail" . "\r\n";
	
	$success = mail($email, $email4user, $body, $headers); // this is the main line which will send the mail above mentioned
	//$success = mail($companymail, $email4user, $body, $headers);
	
	//Sending message to collegemitra
	//Always set content-type when sending HTML email
	$headers1 = "MIME-Version: 1.0" . "\r\n";
	$headers1 .= "Content-type:text/html\r\n"; 
	$headers1 .= "From: ". $name . " <" . $email . ">\r\n";
	$headers1 .= "Return-Path: $email\r\n";
	$headers1 .= "X-Mailer: PHP \r\n";
	$headers1 .= "Bcc: $gmail" . "\r\n";
	
	$success1 = mail($companymail, $email4company, $message, $headers1); // this is the main line which will send the mail above mentioned
	 
	 header ("location: contact.php");
 }
 else {
	 echo 'Cannot Proceed due to some Technical problem';
 }
?>
