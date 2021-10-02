<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css">
</head>
<body >
	
</body>
</html>
<?php
	include 'connect.php';
	
	if (isset($_POST['login'])) {
		$username=$_POST['uname'];
		$password=$_POST['password'];
		$use="select * from users where username ='$username' && password='$password'";

		$result=mysqli_query($conn,$use);
		$num=mysqli_num_rows($result);

		if($num==1){
			echo "<script>alert('Login')</script>";
			header('Location:payment.php');	
		}
		else{
			echo"<script>alert('Username or password not found!')</script>";
		}
	}

	if (isset($_POST['signup'])) {
		$username=$_POST['uname'];
		$mobile_no=$_POST['phn'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$que="select username from users where username ='$username'";
		$result=mysqli_query($conn,$que);
		$num=mysqli_num_rows($result);

		if($num==1){
			echo"<script> alert('Username already taken')</script>";
			header('location:signup.php');
		}
		else{
			$sql = "INSERT INTO users(username,phone_no,email,password)
			VALUES ('$username','$mobile_no','$email','$password');";
			mysqli_query($conn, $sql);
			echo"<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
		    	<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js'></script>
		  		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css'>

				<script type='text/javascript'>
					swal({
			  			title: 'Success!',
			  			text: 'Redirecting in 2 seconds.',
			  			type: 'success',
			  			timer: 2000,
			  			showConfirmButton: false }, 
						function(){
			      			window.location.href = 'payment.php';
						});
				</script>";
		}
	}
?>