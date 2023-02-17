

<?php
 include('connection.php');




if(isset($_POST['submit']))

{	
	

	$username = $_POST['username'];
	$email = $_POST['email'];
	$phonenumber  = $_POST['phonenumber'];
	$password = $_POST['password'];

	$mailex = "SELECT email from user where email='$email'";
	$xmail = mysqli_query($conn,$mailex);
	$row = mysqli_num_rows($xmail);

	$nox = "SELECT phonenumber from  user where phonenumber='$phonenumber'";
	$xno = mysqli_query($conn,$nox);
	$row2 = mysqli_num_rows($xno);

	if($row==1 || $row2==1)
	{
		echo '<script>alert("Number || Mail-Id exist"); window.location.href = "register.php"</script>'; 
		
	}
	else
	{
		

		$sql= "INSERT INTO user(username,email,phonenumber,password) VALUES  ('$username','$email','$phonenumber','$password')";
					
	    if(mysqli_query($conn,$sql))
		   {
                
                echo '<script>alert("Register Successfully"); window.location.href = "login.php"</script>'; 
			}
			else
			{
				echo '<script>alert("Register unsuccessfully");window.location.href = "register.php"</script>'; 
			}
		

}

}   
  
?>




