<style>
.ask_question {
    border: 2px solid black;
	margin-left: 400px;
	width:700px;
    display: flex;
    flex-direction: column;
	
}
#request{
   border:1px solid black;
   padding:5px 5px;
   width:100px;
   margin-left:40px;
   margin-top:10px;
   margin-bottom:10px;
}
input[type=text] {
    width: 250px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 18px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 210px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 8px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swf";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql="Insert into question_ans(question_text,User_Name)";
?>
<div class="ask_question">
	<div id="request" class="col-sm-3">
	   Request to...
	</div>
	<div class="col-sm-9">
	    <form>
			<input type="text" name="search" placeholder="Search..">
		</form>
	</div>
	</div>