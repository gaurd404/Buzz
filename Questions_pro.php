<?php 
include 'common.php';
include 'swfserver.php';
include 'dp.php';
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
			  <form  method="get" action="Questions_pro.php" enctype="multipart/form-data">
	  <input  value="" type="text" name="user_query"/>
	  <input type="submit" name="search" />
</form>
        </div>
		<hr>
      
<hr>
<div id="Latest" class="w3-container city">
         <?php 
			if(isset($_GET['search']))
		{
              $search_query=$_GET['user_query'];			
				$get_pro="select * from question_ans as q join answer as a on q.question_id=a.question_id where Subject like '%$search_query%' ";
				$run_pro=mysqli_query($con,$get_pro);
				while($row=mysqli_fetch_assoc($run_pro))
									{
		
	?>
	           
  	  	 <div class="tabu-1">
            <div class="col-sm-8">
			<?php $qid=$row['question_id'];?>
             <B><a href="allqu.php?qid=<?php echo $qid?>" method="POST"><?php $que=$row['question_text']; echo $que?></a></B> <br>
			 <?php $que=$row['answer_text']; echo $que?><br><br>
			<br>
			 Written by<?php $uname=$row['user_name']; echo $uname?>
			 <?php $aid=$row['answer_id'];?>
			 <br><br>
			 <form action="upvote.php?nid=1&answer_id=<?php echo "$aid";?>&username=<?php echo "$uname";?>" method="POST">
			 <input type="submit" value="Upvote" style="background-color:gray;"/>
			 </form>
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
					answer
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
