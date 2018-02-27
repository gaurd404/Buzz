		<?php 	
		        session_start();
				include("dp.php"); 
				
				echo $user = $_SESSION['user'];
				
				$get_customer = "select * from person where username='$user'";
				
				$run_customer = mysqli_query($con, $get_customer); 
				
				$row_customer = mysqli_fetch_array($run_customer); 
                $name=$row_customer['name'];
				$dob=$row_customer['dob'];
				$gender=$row_customer['gender'];
				$email=$row_customer['email'];	
				$mobile_no=$row_customer['mobile_no'];
				$address=$row_customer['address'];
			
				$type=$row_customer['type'];
				$password=$row_customer['password']
				
		?>
			
		<form action="" method="post" enctype="multipart/form-data">
		
				    <table align="center" width="750">
					
					 <tr>
					 	 <td align="right">  Name:</td>
						 <td><input type="text"  name="name" value="<?php echo $name;?>"/ > </td>
					 </tr>
					 <tr>
					 	 <td align="right">  DOB:</td>
						 <td><input type="date" name="dob" value="<?php echo $dob;?>"/></td>
					 </tr>
					 <tr>
					 	 <td align="right">  Gender:</td>
						 <td><input type="text" name="gender" value="<?php echo $gender;?>"/></td>
					 </tr>
					  <tr>
					 	 <td align="right">  Email:</td>
						 <td><input type="text" name="email" value="<?php echo $email;?>"/></td>
					 </tr>
					  <tr>
					 	 <td align="right">  Mobile:</td>
						 <td><input type="text" name="mobile" value="<?php echo $mobile_no;?>"/></td>
					 </tr>
					
					 <tr>
					 	 <td align="right">  address:</td>
						 <td><input type="text" name="address" value="<?php echo $address;?>"/></td>
					 </tr>
					  
					 <tr>
					 	 <td align="right">  type:</td>
						 <td><select name="type" value="<?php echo $type;?>" >
						 <option>Mentor</option>
						  <option>Student</option>
						 </td>
					 </tr>
					  <tr>
					 	 <td align="right"> Customer Password:</td>
						 <td><input type="password" name="password" value="<?php echo $password;?>"/></td>
					 </tr>
					 
					<tr align="center">
						<td colspan="6"><input type="submit" name="update" value="Update Account" /></td>
					</tr>
					
					</table>
				</form>
		
		
		
	
<?php 
    include("dp.php"); 
				
	$user = $_SESSION['user'];
	if(isset($_POST['update']))
	{	
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];	
		$mobile=$_POST['mobile'];
		$address=$_POST['address'];
		$badges=$_POST['badges'];
		$type=$_POST['type'];
		$pass=$_POST['password'];	
	    $update_c = "update person set name='$name',dob='$dob',gender='$gender',email='$email',mobile_no='$mobile_no',adderss='$address',
		badges='$badges',type='$type',password='$pass' where email='$email'";
		$run_update = mysqli_query($con, $update_c); 
		
		if($run_update){
		
		echo "<script>alert('Your account successfully Updated')</script>";
		echo "<script>window.open($order.php','_self')</script>";
		
		}
	}





?>










