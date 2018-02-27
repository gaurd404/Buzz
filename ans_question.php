<?php
include 'common.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/custom.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
div{
	display: block;
}
div[Attributes Style] {
    -webkit-user-modify: read-write;
    word-wrap: break-word;
    -webkit-line-break: after-white-space;
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
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
a {
    text-decoration: none;
    color: #2b6dad;
	background: transparent;
}
a:-webkit-any-link {
    color: -webkit-link;
    cursor: auto;
    text-decoration: underline;
}
input {
    line-height: normal;
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
input, textarea, button {
    -webkit-writing-mode: horizontal-tb;
}
input:not([type]), input[type="email" i], input[type="number" i], input[type="password" i], input[type="tel" i], input[type="url" i], input[type="text" i] {
    padding: 1px 0px;
}
input[type="checkbox"], input[type="radio"] {
    box-sizing: border-box;
    padding: 0;
}
label {
    cursor: default;
}
button, input, optgroup, select, textarea {
    color: #333;
	color: inherit;
    font: inherit;
    margin: 0;
}
.actionbar{
	font-size: 13px;
	margin-left: 250px;
	margin-right: 250px;
    margin-bottom: -16px;
    padding: 8px 0 16px;
    bottom: 0;
    clear: left;
}
.ans_block{
	margin-left: -16px;
    margin-right: -16px;
    margin-bottom: -16px;
}
.ans_block .ans_inner{
	border: 0;
    border-top: 1px solid #efefef;
    border-radius: 1px;
	position: relative;
}
.ans_block .ans_header{
	position: relative;
}
.ans_posting{
	position: relative;
    background: #f6f6f6;
    padding: 10px 8px;
    border-radius: 3px 3px 0 0;
    min-height: 39px;
}
.ans_posting .ans_header_inner{
	padding-left: 48px;
}
.ans_posting .user{
	font-family: 'q_serif',Georgia,Times,"Times New Roman","Hiragino Kaku Gothic Pro","Meiryo",serif;
	color: #333;
}
.ans_posting .user, .ans_posting #user_details{
	font-size: 15px;
    line-height: 1.4;
}
.ans_posting #user_details{
	font-family: 'q_serif',Georgia,Times,"Times New Roman","Hiragino Kaku Gothic Pro","Meiryo",serif;
}
.ans_block .ans_content_inner{
	 margin-bottom: 0;
}
.ans_content_inner{
	-moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
}
.ans_content_inner>:last-child {
    margin-bottom: 0;
}
.ans_content_inner>:first-child {
    margin-bottom: 0;
}
.inline_editor_form {
    width: 100%;
    float: left;
    clear: both;
}
.editor {
    outline: 0;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    position: relative;
    box-sizing: border-box;
    width: 100%;
    margin: 0 auto;
    padding: 44px 0 0;
    border: 1px solid #e2e2e2;
    -webkit-transition: border-color .2s ease-in-out 0s;
    -o-transition: border-color .2s ease-in-out 0s;
    transition: border-color .2s ease-in-out 0s;
}
.ans_inner .editor{
	border: 0;
    border-top: 1px solid #ddd;
}
.editor .doc{
	-webkit-user-select: auto;
    padding: 16px 16px 32px;
    min-height: 100px;
    background-color: #fff;
    counter-reset: indent0 indent1 indent2 citation;
}
.editor .section:first-child {
    padding-top: 0;
}
.editor .doc div {
    -webkit-user-select: auto;
}
.editor .section {
    position: relative;
    counter-reset: indent0 indent1 indent2;
    padding: 1em 0 0;
}
.editor .span {
    display: inline;
}
.editor .span .ans {
    display: inline;
}
.editor_toolbar {
    width: 100%;
    overflow: hidden;
    position: absolute;
    height: 44px;
    top: 0;
    left: 0;
    background-color: #fff;
    border-bottom: 1px solid #ddd;
    font-size: 19px;
    color: #666;
}
.editor_toolbar .bar {
    clear: both;
    display: table;
    width: 100%;
    height: 30px;
    padding: 7px 0;
}
.editor_toolbar .bar .left {
    padding-left: 7px;
    text-align: left;
}
.editor_toolbar .bar .right {
    padding-right: 7px;
    text-align: right;
}
.editor_toolbar .bar .left, .editor_toolbar .bar .right {
    position: relative;
    display: table-cell;
    vertical-align: middle;
    float: none;
}
.ans_inner .form_buttons{
	margin: 0;
    padding: 8px;
    border-top: 1px solid #e2e2e2;
    text-align: left;
    background: #f6f6f6;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form_buttons {
    margin-top: 16px;
    text-align: right;
    font-size: 13px;
}
.ans_content_inner .form_buttons{
	float: left;
    width: 100%;
    margin-top: 8px;
    text-align: right;
    font-size: 13px;
}
.ans_inner .form_buttons .submit_button {
    float: left;
    margin-top: 4px;
}
.ans_content_inner .form_buttons .inline_editor_buttons {
    margin-left: 8px;
}
.form_buttons .submit_button{
	line-height: 1.4em!important;
}
.form_buttons .submit_button {
    line-height: 27px;
    margin-left: 8px;
}
.inline_editor_buttons{
	padding: 4px;
}
.submit_button{
	width: 15%;
	font-size:15px;
	padding-left:10px;
    border-width: 0px;
    border-style: solid;
    border-radius: 2px;
}
.cancel_button{
	margin-top: 4px;
	margin-left: 15px;
	padding: 10px;
    width: 15%;
    border-width: 0px;
    border-style: solid;
    border-radius: 2px;
}
#right-content{
	float:right;
}
fieldset{
	width:300px;
	height:200px;
	border:1px solid black;
}
</style>
<body>
<?php
$qid=$_GET['qid'];
$_SESSION['qid']=$qid;
?>
<div id="right-content">
	<div class="actionbar">
		<div class="ans_block">
			<div class="ans_inner">
				<div class="ans_header">
					<div class="ans_posting">
						<div class="ans_header_inner">
							<span id="user_ans_posting_detail">
								<span id="username">
									<a class="user"><?php $user=$_SESSION['user']; echo $user?></a>
								</span>
								<span id="user_details"></span>
							</span>
						</div>
					</div>
				</div>
				<form action="answerpost.php" method="POST">
				<textarea name="user-message"  class="form-control" id="user-name" placeholder="Enter ur answer" cols="20" rows="10"></textarea> 
				<div class="form_buttons">
					<div class="inline_editor_buttons">
						<input type="submit" class="submit_button" value="Submit"></input>
						</form>
						<button type="button" class="cancel_button">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>
