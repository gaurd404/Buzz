

<?php
include("swfserver.php");
session_start();
?><!Doctype HTML>
<HEAD>
<TITLE>
BUZZ
</TITLE>
</HEAD>
<style>
/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.dropbtn {
    background-color: black;
    color: #e0e0e0;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	width: 130px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
	margin-top:60px;
    position: absolute;
    background-color: #f9f9f9;
    width: 230px;
	padding: 12px 16px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
	cursor: pointer;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: black;
}

#background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;   
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
    opacity: 0.9;
    filter:alpha(opacity=80);
}
.ask_question {
    border: 4px solid black;
    margin-left: 3	00px;
    width:50%;
    margin-top:20px;
    display: flex;
	background-color:white;
    flex-direction: column;
    
}
.model_header {
    position: relative;
    border-bottom: 1px solid #e2e2e2;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    background-color: #fff;
    padding: 16px;
}
.model_close {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    text-align: center;
    padding: 12px;
    cursor: pointer;
}
.ask_model_header{
    padding: 10px;
}
.model_content {
    padding: 32px 32px 24px 32px;
    border-radius: 4px 4px 0 0;
}
.ask_question .username, .ask_question .username .user {
    color: #999;
    font-size: 15px;
}
.question_content{
    padding: 10px;
}
.ask_question .question_content .character_count{
    position: absolute;
    top: auto;
    right: 8px;
    bottom: 0;
    z-index: 2;
}
.character_count{
    -webkit-transition: all;
    transition: all;
    -webkit-transition: all 180ms ease-in-out 0s;
    -o-transition: all 180ms ease-in-out 0s;
    transition: all 180ms ease-in-out 0s;
    font-size: 12px;
    font-weight: 500;
    color: #999;
}

.tag_detail{
    padding: 7px;
}
#tags{
    padding: 10px;  
}
.model_footer {
    background: #f6f6f6;
    border-radius: 0 0 4px 4px;
    padding: 10px;
    border-top: 1px solid #e2e2e2;
}
.model_footer .actions {
    float: right;
}
.model_footer .actions .text_links .cancel, .model_footer .actions .text_links .submit_button{
    margin-top: 7px;
}
.model_footer .actions .text_links a{
    color: #999;
    cursor: pointer;
}
input[type=text], textarea{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    min-height: 27px;
    background: #fff;
    outline: 0;
    border: 1px solid #e2e2e2;
    border-radius: 3px;
    box-shadow: inset 0 1px 1px rgba(200,200,200,0.3);
    -webkit-transition: border-color .2s;
    transition: border-color .2s;
    -webkit-transition: border-color .2s 180ms ease-in-out 0s;
    -o-transition: border-color .2s 180ms ease-in-out 0s;
    transition: border-color .2s 180ms ease-in-out 0s;
}
textarea {
    font-family: monospace;
    border-color: rgb(169, 169, 169);
    -webkit-appearance: textarea;
    background-color: white;
    -webkit-rtl-ordering: logical;
    flex-direction: column;
    resize: auto;
    cursor: auto;
    border: 1px solid #e2e2e2;
    white-space: pre-wrap;
    word-wrap: break-word;
    border-width: 1px;
    border-style: solid;
    border-color: initial;
    border-image: initial;
    padding: 2px;
    width: 600px;
    height: 250px;
}
input, textarea, button {
    text-rendering: auto;
    color: initial;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    margin: 0em;
    font: 400 13.3333px Arial;
}
input {
    -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    cursor: auto;
    padding: 1px;
    border-width: 2px;
    border-style: inset;
    border-color: initial;
    border-image: initial;
}
a {
    text-decoration: none;
    color: #2b6dad;
    background: transparent;
}
body {
    height: 100%;
    word-wrap: break-word;
    color: #333;
    font-size: 13px;
    overflow-y: auto;
    overflow-x: auto;
}

html {
    height: 100%;
    font-weight: 400;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 15px;
    line-height: 1.4;
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.sub{
   background-color:#0288d1;
   padding:10px 10px;
   color:#37474f;
   font-size:15px;
   border-radius:5px;
   border-color:#0288d1;   
}

#request{
   border:1px solid black;
   padding:5px 5px;
   width:100px;
   margin-left:40px;
   margin-bottom:10px;
}

#request{
   border:1px solid black;
   padding:5px 5px;
   width:100px;
   margin-left:40px;
   margin-bottom:10px;
}
#tab-right .dropbtn {
    background-color: black;
    color: #e0e0e0;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	width: 130px;
}

#tab-right .dropdown {
    position: relative;
    display: inline-block;
}

#tab-right .dropdown-content {
   display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 130px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

#tab-right .dropdown-content a {
    color: black;
	cursor: pointer;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

#tab-right .dropdown-content a:hover {background-color: #f1f1f1}

#tab-right .dropdown:hover .dropdown-content {
    display: block;
}

#tab-right .dropdown:hover .dropbtn {
    background-color: black;
}

</style>


<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="buzzpage.css">
<BODY>
  <DIV id="top-container">
     <div id="lo">
     <div id="logo">
	    <img src="Logo.png" style="height:40px;width:150px"> 
	 </div>
   <!--<?php $email=$_SESSION['email'];?>-->
	 </div>
	 <div id="tabs">
	    <div id="tab-left">
		    <div id="links">
			     <ul>
				 <li><a href="Questions.php">Home</li></a>
				 <li><div class="dropdown"><a>Notifications</a>
					<div class="dropdown-content">
						<?php 
						$user=$_SESSION['user'];
						$sql="select * from notifications where Username='$user'";
						$result=mysqli_query($conn,$sql);
						
						if(mysqli_num_rows($result)>0)
						{
							while($row=mysqli_fetch_assoc($result))
							{
								$nid=$row["nid"];
								$name=$row["Current_username"];
								switch($nid)
								{
									case 1:
									   $message="upvoted your answer";
									   break;
									   case 2:
									   $message="followed you";
									   break;
								}
								echo "$name  $message <br><hr>";
							}
						}
						?>
					</div>
				</div></li>
			</div>
		</div>
		<div id="tab-right">
		    <div id="links">
			     <ul>
				 <li><a><div class="dropdown"><?php $user=$_SESSION['user']; echo ("$user");?></a>
					<div class="dropdown-content">
						<a href="my_account.php">Profile</a>
						<a href="logout.php">Logout</a>
					</div>
				 </li></a>
				 </ul>
			</div>
		</div>
	 </div>
  </DIV>
  <div id="content-container">
    <div id="left-content" class="col-sm-2">
	     <div class="left-sidebar">
    <p>
   		<button type="button" id="btn" class="btn btn-info btn-lg" onclick="document.getElementById('id01').style.display='block'">
        	<span class="glyphicon glyphicon-plus"> </span>Ask A Question
        </button><br>
    </p>
	<hr>
            <div class="left-sidebar-menus">
            	<ul class="left-menu-details">
                		<li>
                      		<a href="Questions.php" class="options">
          						<span class="glyphicon glyphicon-question-sign"> </span> Questions
       						</a>
                    	</li>
                        <li>
                        	<a href="tags.php" class="options">
          						<span class="glyphicon glyphicon-tags"> </span> Tags
        					</a>
                        </li>
                        <li>
                        	<a href="badges.php" class="options">
          						<i class="fa fa-trophy"> </i> Badges
        					</a>
                        </li>
                        <li>
                        	<a href="allusers.php" class="options">
          						<i class="fa fa-users"> </i> Users 
       			 			</a>
                        </li>
                </ul>
            </div>
  	</div>
	</div>
	</div>
	<div id="id01" class="modal">
  
<div class="ask_question">

	<div class="model_content">
		
		<div class="ask_model_header">
			<div class="username" id="user_asks">
		
				<span class="Id_name">
					<a class="user" href="/profile/username">Username</a>
				</span>
				 asked
		
			</div>
		</div>
		<form method="POST" action="question_post.php">
		<div class="question_content">
			<div class="character_count" id="char_count"></div>
			
			<textarea class="text" type="text" placeholder="What is your question?" name="question" id="que_inp" style="overflow: hidden; word-wrap; break-word; height: 90px;"></textarea>
		</div>
		<div id="tags">
			<div class="tag_detail">
				<div class="glyphicon glyphicon-tags">
					<input type="text" name="subject" placeholder="Enter subject "></input>
					
				</div>
			</div>
		</div> &nbsp
		<div id="tags">
			<div class="tag_detail">
				<div class="glyphicon glyphicon-tags">
					<input type="text" name="tag" placeholder="Enter tags "></input>
					
				</div>
			</div>
		</div>
		
	</div>
	    <div class="request">
    Request to...   
           <input type="text" name="user_requested" placeholder="Search..">
    </div>
	<div class="model_footer">
		
		<div class="actions">
		
			<span class="text_links">
				<a class="cancel" href="Questions.php" id="cancel_que">Cancel</a>
			</span> &nbsp &nbsp
			<input type="submit" value="Add Question" name="add" class="sub"></input>
		
		</div>
		
	</div>
	</form>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>