<?php 
include 'common.php';
include 'swfserver.php';
include 'function.php';
if(isset($_GET['name']))
{
	$user=$_GET['name'];
}
?>
<!Doctype HTML>
<HEAD>
<TITLE>
Questions
</TITLE>
<style>
#userbox{
    border:1px soilid black;	
}
</style>
</HEAD>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="buzzpage.css">
<body>
<div id="right-content" class="col-sm-9">
	     <div class="tabu">
             <?php echo "$user's Profile"?>
        </div>
		<hr>
        <div id="medium">
		     <div class="col-sm-4">
			        <div id="userbox" class="col-sm-2" style="border:1x solid black;">
					<img src="profile.png" style="height:40px;width:40px;">
					<?php		
					echo "$user\n";
					$c=0;
					$sql="select Points,person_id from student where username='$user'";
					$result=(mysqli_query($conn,$sql));
					$row=mysqli_fetch_assoc($result);
				    $points=$row['Points'];
					$person_id=$row['person_id'];
				    $uname=$_SESSION['user'];		
					?>
					</div >
					<div class="col-sm-8">
					<?php
					   $sql="select * from follow_person where Username='$uname';";
					   $result=mysqli_query($conn,$sql);
					   if(mysqli_num_rows($result)>0)
					   {
						  while($row=mysqli_fetch_assoc($result))
						  {
							  $f_user=$row['Following_Username'];
							  if($f_user==$user)
								  $c++;
						  }							  
					   }
					   if($c==0)
					   {
					?>
					   <a href="new.php?nid=2& username=<?php echo $user?>">Follow</a>
					   <?php
					   }
					   else
						   echo "<a href=\"unfollow.php?username=$user\">Unfollow</a>";
					   ?>
					</div>
			 </div>
			 <div class="col-sm-4">
			     <?php 
				 $sql="select Points from student where username='$user'";
				$result=(mysqli_query($conn,$sql));
				$row=mysqli_fetch_assoc($result);
				 $points=$row['Points'];
				 $sql="select count(answer_id) from answer where user_name='$user'";
				 $result=mysqli_query($conn,$sql);
				 $row=mysqli_fetch_assoc($result);
				 $n=$row['count(answer_id)'];
				 echo "$points Points<br>";
				 ?> 
			 </div>
			 <div class="col-sm-4">
			 <?php
			     echo "Answers=$n";
			 ?>
			 </div>
		</div>
		<br><br><hr>
	<div class="tabular">
  <button class="tablinks" onclick="opentype('Questions')">Questions</button>
  <button class="tablinks" onclick="opentype('Answers')">Answers</button>
</div>
<br>
<div id="Questions" class="w3-container type">

   </div>

<div id="Answers" class="w3-container type" style="display:none">

</div>



<script>
function opentype(typeName) {
    var i;
    var x = document.getElementsByClassName("type");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(typeName).style.display = "block";  
}
</script>
  </div>  
  
  </body>
  </html>