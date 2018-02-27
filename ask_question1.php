<?php
   include 'common.php';
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

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
    margin-left: 40px;
    width:80%;
    margin-top:20px;
    display: flex;
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
</style>
<body>
<div id="right-content" class="col-sm-9">
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
				<a class="cancel" href="#" id="cancel_que">Cancel</a>
			</span> &nbsp &nbsp
			<input type="submit" value="Add Question" class="sub" name="add"></input>
            <br>
            <br>
	       
		</div>

</body>
</html>