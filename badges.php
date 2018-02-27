<?php
include 'common.php';
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@import url('https://fonts.googleapis.com/css?family=Source+Code+Pro');
h3,h2{
	font-family: Source Code Pro;
	margin:1px;
	color: #404040;
}

#right-content{
	float:right;
	margin:4px;
	padding: 9px;
	font-weight: 300;
	color: #404040;
}
#one_plus{
	border: dashed 1px #47d1d1; 
	top:160px;
	left:70px;
	border-radius: 5px;	
	color: #404040;
	width: 263px;
	padding:3px;
	padding-left: 5px; 
}
#two_plus{
	border: dashed 1px #0099ff;
	top:160px;
	left:380px;
	border-radius: 5px;
	color: #404040;
	width: 267px;
	padding:3px;
}
#three_plus{
	border-radius: 5px;
	border: dashed 1px #9966ff;
	top:160px;
	left:760px;
	
	color: #404040;
	width: 270px;
	padding:3px;
}
#four_plus{
	border-radius: 5px;
	border: dashed 1px #cc00ff;
	top:160px;
	right:70px;
	
	color: #404040;
	width: 282px;
	padding:3px;
}
#lt
{
	margin-top:10px;
	height: 130px;
	background-color: white;
}

#lt{
list-style-type: none;
  -webkit-column-count: 4;
       -moz-column-count: 4;
            column-count: 4;
  padding: 10px;
}
#lt li {
    display: inline-block; /*necessary*/
}
#professor{
	border: solid 1px #00cc66;
	
	margin-left: 7%;
	border-radius: 17px;
	color: #404040;
	width: 700px;
	padding:10px;
}
.page_footer{
	background-color: #2C3E50;
	height: 100px;
}
.contact_details{
	padding: 20px;
	color: white;
	text-align: center;
	
}
</style>
<body>
	<div id="right-content" clas="col-sm-9">

<h2>Badges</h2>
<br>
<hr style="border: none; height: 1px; color: blue; background: #b3ffe6;;"/>
<h3>Points System</h3>
<p>You earn reputation when people Vote on your Post.</p> 
<br>
	<ul id="lt">
		<li>
<div id="one_plus">
	<h3  style="font-weight: 1200 ;color:#66ff1a;">+2<h3>
		
		<font style="color:#47d1d1;">&#160 Create a question</font>
</div>

</li>
<li>
<div id="two_plus">
	<h3  style="font-weight: 1200 ;color:#66ff1a;">+5<h3>
		<font style="color:#0099ff;"> &#160 Answer is Upvoted</font>
</div>
</li>
<li>
<div id="three_plus">
	<h3  style="font-weight: 1200 ;color:#66ff1a;">+5<h3>
		
		<font style="color:#9966ff;">&#160 Answer is Upvoted</font>
</div>
</li>
<li><div id="four_plus">
	<h3  style="font-weight: 1200 ;color:#66ff1a;">+15<h3>
	<font style="color:#ff66ff;"> &#160Answer is Accepted</font>	
</div>
</li>
</ul>
<hr style=" border: none; height: 1px; color: blue; background: black;"/>
<h3>Badge System</h3>
<p>You earn title when people Vote on your Post.</p> 
<br>

<div id="professor">
	
	<h3><font style="background-color: #00ff00;color: white">Professor</font></h3>
	<font style="font-weight: 100"><h3  style="font-weight: 1200 ;color:blue;">+1500<h3>Points Required</font>
	</br>
		you can:
	<ul class="columns" data-columns="3">
		<li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;"> Edit other people's questions </font></li>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Vote down (costs 1 point on answers and questions) </font></li>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;"> Edit other people's answers </font></li>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Vote up </font></li></br>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Leave comments </font></li>
        
    </ul>
</div></br></br>
<div id="professor">
	
	<h3><font style="background-color: #eae71a;color: white">Vice Professor</font></h3>
	<font style="font-weight: 100"><h3  style="font-weight: 1200 ;color:blue;">+500<h3>Points Required</font>
	</br>
		you can:
	<ul class="columns" data-columns="3">
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;"> Edit other people's questions </font></li>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Vote down (costs 1 point on answers and questions) </font></li>
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;"> Edit other people's answers </font></li>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Vote up </font></li></br>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Leave comments </font></li>
        
    </ul>
</div>
</br>
</br>
<div id="professor">
	
	<h3><font style="background-color: #086f66;color: white"">Doctor</font></h3>
	<font style="font-weight: 100"><h3  style="font-weight: 1200 ;color:blue;">+200<h3>Points Required</font>
	</br>
		you can:
	<ul class="columns" data-columns="3">
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;"> Edit other people's questions </font></li>
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;">Vote down (costs 1 point on answers and questions) </font></li>
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;"> Edit other people's answers </font></li>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Vote up </font></li></br>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Leave comments </font></li>
        
    </ul>
</div>
</br></br>
<div id="professor">
	
	<h3><font style="background-color: #49ce0f;color: white"">Reviewer</font></h3>
	<font style="font-weight: 100"><h3  style="font-weight: 1200 ;color:blue;">+150<h3>Points Required</font>
	</br>
		you can:
	<ul class="columns" data-columns="3">
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;"> Edit other people's questions </font></li>
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;">Vote down (costs 1 point on answers and questions) </font></li>
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;"> Edit other people's answers </font></li>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Vote up </font></li></br>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Leave comments </font></li>
        
        
    </ul>
</div>
</br></br>
<div id="professor">
	
	<h3><font style="background-color: #830fce; color: white">Supporter</font></h3>
	<font style="font-weight: 100"><h3  style="font-weight: 1200 ;color:blue;">+100<h3>Points Required</font>
	</br>
		you can:
	<ul class="columns" data-columns="3">
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;"> Edit other people's questions </font></li>
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;">Vote down (costs 1 point on answers and questions) </font></li>
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;"> Edit other people's answers </font></li>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Vote up </font></li></br>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Leave comments </font></li>
        
        
    </ul>
</div>
</br></br>
<div id="professor">
	
	<h3><font style="background-color: #ce4c0f;color: white">Train</font></h3>
	<font style="font-weight: 100"><h3  style="font-weight: 1200 ;color:blue;">10<h3>Points Required</font>
	</br>
		you can:
	<ul class="columns" data-columns="3">
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;"> Edit other people's questions </font></li>
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;">Vote down (costs 1 point on answers and questions) </font></li>
        <li class="fa fa-close" style="color: red"><font style="font-family: Source Code Pro;"> Edit other people's answers </font></li>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Vote up </font></li></br>
        <li class="fa fa-check-circle" style="color: green"><font style="font-family: Source Code Pro;">Leave comments </font></li>
        
        
    </ul>
</div>
</br></br>
<div class="page_footer">
		<div class="contact_details">
			<p>
				<font style="color:white;">
			Contact Us:-
			<br>

			email : info@buzz.com<br>
			phone no : 0755 - 274476
			</font>
			</p>
		</div>
	</div>
</div>
</body>

</html>  
