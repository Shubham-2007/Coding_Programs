<!DOCTYPE html>
<html>
<head>
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css">-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body >
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>

	<script type="text/javascript">
		$(function()
		{
			swal({
				icon:"success",
				title:"Payment Successfull",
				text:"Thank You",
				type:"success",
				confirmButtonText: "OK"
			}/*,
			function(isConfirm){
  				if (isConfirm) {
   					window.location.href = "";
  				}
			}*/
			);
		});
	</script>
</body>
</html>
<?php
	include_once 'connect.php';
	$first=$_POST['first'];
	$last=$_POST['last'];
	$acc_no=$_POST['ACC-NO'];
	$mobile_no=$_POST['mob'];
	$Amount=$_POST['amount'];

	$sql = "INSERT INTO payment(user_first,user_last,user_accno,mobile_no,user_amount) VALUES ('$first','$last','$acc_no','$mobile_no','$Amount');";
	mysqli_query($conn, $sql);
	//header("Location:../payment.php?signup=success");
?>