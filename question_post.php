<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cdcol";
 $conn = mysqli_connect($servername, $username, $password, $dbname);


  session_start();

  include 'swfserver.php';
  $question=$_POST['question'];
  $subject=$_POST['subject'];
  $tag=$_POST['tag'];
  $user=$_SESSION['user'];
  $user_requested=$_POST['user_requested'];
  echo "hello";
  if (isset($_POST['add'])){
        $user=$_POST['user_requested'];
        $sql2="SELECT * FROM person WHERE username='$user_requested'";
        $result=mysqli_query($conn,$sql2);
        $rows=mysqli_num_rows($result);
       // if (strlen($user_requested)>0){
        if ($rows < 1){
			echo "bye";
        	?>
            <script type="text/javascript">
			alert("User not Found .!!!");
			window.Location="ask_question1.php";
			</script>
			<?php
        }
        else{
        	$sql1="INSERT INTO question_ans(question_text,User_name,Subject,Tags) VALUES('$question','$user','$subject','$tag'); ";
  			mysqli_query($conn,$sql1);
			echo "hi";
            $sql3="INSERT INTO request_for_ans(Username) VALUES('$user_requested');";
            mysqli_query($conn,$sql3);
            header("Location: ask_question1.php?sucess");
        }
    }
?>
