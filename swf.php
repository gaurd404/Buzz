<?php
session_start();
include("dp.php");
include 'common.php';
include("function.php");
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
        
		<form  method="get" action="swf.php" enctype="multipart/form-data">
	  <input  value="" type="text" name="user_query"/>
	  <input type="submit" name="search" />
</form>
</div>
		<hr>
        <div class="tabular">
  <button class="tablinks" onclick="openCity('Latest')">Latest</button>
  <button class="tablinks" onclick="openCity('Votes')">Votes</button>
  <button class="tablinks" onclick="openCity('Unanswered')">Unanswered</button>
  	<?php cart(); ?>
</div>
<hr>
<div id="Latest" class="w3-container city">
  	  
<?php
$email= $_SESSION['email']; 
$get_pro="select * from person where email='$email'";
$run_pro=mysqli_query($con,$get_pro);
while($row_pro5=mysqli_fetch_array($run_pro))
	{
		 $person_id=$row_pro5['person_id'];
		 $type=$row_pro5['type'];
		 if($type=="Student")
		   {
			$insert_c1 ="select * from  student where person_id='$person_id' ";
			$run_c2=mysqli_query($con,$insert_c1); 
			while($row_pro5=mysqli_fetch_array($run_c2))
				{
					$student_id=$row_pro5['student_id'];
					$insert_c2 ="select * from  interested_sub_details where student_id='$student_id'";
					$run_c8=mysqli_query($con,$insert_c2); 
					while($row_pro9=mysqli_fetch_array($run_c8))
				        {
					       $subject_id=$row_pro9['subject_id'];
						   $subject_id=$row_pro9['subject_id'];
						   $insert_c5 ="select * from  subject where subject_id='$subject_id'";
							$run_c11=mysqli_query($con,$insert_c5); 
							while($row_pro9=mysqli_fetch_array($run_c11))
								{
								   $subject_name=$row_pro9['name'];
								   $insert_c3 ="select * from  question_ans where subject_name='$subject_name'";
								   $run_c10=mysqli_query($con,$insert_c3); 
								   while($row_pro10=mysqli_fetch_array($run_c10))
									 { 
										      $question_id=$row_pro10['question_id'];
										      $question_text=$row_pro10['question_text'];
										      $username1=$row_pro10['User_name'];
												 $get_pro1="select * from answer where question_id='$question_id'";
												 $run_pro1=mysqli_query($con,$get_pro1);
												 echo "
													 <div class='tabu-1'>
														<div class='col-sm-4'>
														 <B> $question_text </B> <br>
														  $username1 <br><br>
														 </div>
														 ";
												while($row_pro1=mysqli_fetch_array($run_pro1))
												 {
													 $answer_id=$row_pro1['answer_id'];
													 $answer_text=$row_pro1['answer_text'];
												     $username=$row_pro1['user_name'];
												      $time=$row_pro1['time']; 
													echo"
													<div class='tabu-1'>
													    <div class='col-sm-4'>
														  <B> $answer_text </B> <br>
														  $username <br><br>
														  $time<br><br>
														</div>
												<button><a href='swf.php?pro1_id=$answer_id' >upvote</a></button>
												<button><a href='function.php?pro2_id=$answer_id' >devote </a></button>
												<button><a href='function?pro3_id=$answer_id' >follow</a></button>
												<button><a href='function?pro4_id=$answer_id' >follower</a></button>
                                             
                                              </div> 
													</div>;
													";
												
												 }
												 
						              } 
						        }  
						}    
							 }
						}
	}
	?>
		

</body>
</html>
<?php 
			if(isset($_GET['search']))
		{
              $search_query=$_GET['user_query'];			
				$get_pro="select * from question_ans where question_keywords like  '%$search_query%'";
				$run_pro=mysqli_query($con,$get_pro);
				while($row_pro=mysqli_fetch_array($run_pro))
									{
									    echo $question_id=$row_pro['question_id'];
										echo $question_text=$row_pro['question_text'];
										 echo $username=$row_pro['User_name'];
										 $get_pro1="select * from answer where question_id='$question_id'";
				                         $run_pro1=mysqli_query($con,$get_pro1);
										while($row_pro1=mysqli_fetch_array($run_pro1))
									     {
											echo $answer_id_id=$row_pro1['answer_id'];
											echo $answer_text=$row_pro1['answer_text'];
											echo $username=$row_pro1['user_name']; 
											echo $time=$row_pro1['time']; 
										 }
										
									}
		}
									