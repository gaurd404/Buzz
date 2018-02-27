<?php 
include 'common.php';
include 'swfserver.php';
?>
<!Doctype HTML>
<HEAD>
<TITLE>
Questions
</TITLE>
</HEAD>
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
	<div id="right-content" class="col-sm-9">
	     <div class="tabu">
             All Questions
        </div>
		<hr>
        <div class="tabular">
  <button class="tablinks" onclick="openCity('Latest')">Latest</button>
  <button class="tablinks" onclick="openCity('Unanswered')">Unanswered</button>
</div>
<hr>
<div id="Latest" class="w3-container city">
         <?php 
        	   $sql="select answer_text,user_name,b.Tag,b.question_text,b.question_id from answer as a join (SELECT question_text, question_id, Tag FROM question_ans AS q JOIN tags AS t ON t.Tag_id = q.Tags) as b on b.question_id=a.question_id;";
			   $result=mysqli_query($conn,$sql);
			   if(mysqli_num_rows($result)>0)
			   {
				    while($row=mysqli_fetch_assoc($result))
					{ 
		?>	           
  	  	 <div class="tabu-1">
            <div class="col-sm-8">
			<?php $qid=$row['question_id'];?>
             <B><a href="allqu.php?qid=<?php echo $qid?>" method="POST"><?php $que=$row['question_text']; echo $que?></a></B> <br>
			 <?php $que=$row['answer_text']; echo $que?><br><br>
			 Tags <?php $que=$row['Tag']; echo $que?><br>
			 Written by<?php $que=$row['user_name']; echo $que?>
			 </div>
			 <div class="col-sm-4">
			  <div class="col-sm-4">
			      <div id="circle">
				    <div id="circle-content">
					  16
					</div>
					<br>
					views
				  </div>
			  </div>
			  <div class="col-sm-4">
			      <div id="circle">
				    <div id="circle-content">
					  20
					</div>
					<br>
					answers
				  </div>
			  </div>
			  <div class="col-sm-4">
			      <div id="circle">
				    <div id="circle-content">
					  12
					</div>
					<br>
					votes
				  </div>
			  </div>
			 </div>

        </div>
		<hr>
			<?php
					}
			   }
			?>
</div>

<div id="Unanswered" class="w3-container city" style="display:none">
         <?php 
        	   $sql="SELECT q.question_id, answer_id,q.question_text FROM question_ans AS q LEFT JOIN answer AS a ON q.question_id = a.question_id WHERE answer_id IS NULL ";
			   $result=mysqli_query($conn,$sql);
			   if(mysqli_num_rows($result)>0)
			   {
				    while($row=mysqli_fetch_assoc($result))
					{ 
		?>	  
    	  	 <div class="tabu-1">
             <div class="col-sm-8">
                             <B><?php $que=$row['question_text']; echo $que?></B> <br>
			 </div>
			 <div class="col-sm-4">
			  </div>
			 </div>
        </div>
		<hr>
		<?php
		    					}
			   }
        ?> 
</div>

<script>
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}
</script>
	 
	  
	</div>
  </div>  
  
  
</BODY>
</HTML>




<?php
include("swfserver.php");
?><!Doctype HTML>
<HEAD>
<TITLE>
BUZZ
</TITLE>
</HEAD>
<style>
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
						$sql="select * from notifications where Username=\"shweta\";";
						$result=mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0)
						{
							while($row=mysqli_fetch_assoc($result))
							{
								$nid=$row["nid"];
								$not=$row["Notification"];
								echo "$not<br><hr>";
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
				 <li><?php echo $email;?></li>
				 <li><a href="Register.html">Register</li></a>
				 </ul>
			</div>
		</div>
	 </div>
  </DIV>
  <div id="content-container">
    <div id="left-content" class="col-sm-2">
	     <div class="left-sidebar">
    <p>
   		<a href="ask_question1.php"><button type="button" class="btn btn-info btn-lg">
        	<span class="glyphicon glyphicon-plus"> </span>Ask A Question
        </button></a>
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
                        	<a href="#" class="options">
          						<span class="glyphicon glyphicon-list"> </span> Categories
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