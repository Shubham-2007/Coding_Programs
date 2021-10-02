<!DOCTYPE html>
<html>
<head>	
	<title>Payment Page</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');
		*{
			margin: 0px;
			padding: 0px;
			font-family: 'Acme', sans-serif;
			box-sizing: border-box;
		}
		body{
			font-family: 'Acme', sans-serif;
			padding:0px;
			background-color: #f0f5f5;	
		}
		div.container{
			width: 1000px;
			margin: 0 auto;
			font-family: 'Acme', sans-serif;
		}
		div.main{
			width: 520px;
			margin: 40px auto 0px;
			padding: 20px 50px 50px;
			background-color: #e0ebeb;
			border: 15px solid #008080;
			box-shadow: 0 0 10px;
			border-radius: 2px;
			font-size: 13px;
		}	
		.det{
			width: 400px;
			margin:20px auto 0px;
			color: black;
			text-align: center;
		}	
		.form{
			margin: 15px auto 0px; 
			color: #464646;
		}		
		.form table{
			margin: auto;
		}
		.form td{
			padding: 10px 0px;
		}
		.ipbox{
			padding: 8px 20px;
			font-size: 14px;
			border-radius: 6px;
		}
		input[type=text],[type=number]{
			box-shadow: 0 0 4px #004d4d;
			border: 2px solid #00cccc;
			color: #4f4f4f;
		}
		.btn{	
			background: linear-gradient(#00b3b3 10%, #006666 100%);
			border: 1px solid #0F799E;
			font-size: 20px;
			margin-top: 25px;
			padding: 8px 30px;
			font-weight: bold;
			cursor: pointer;
			color: white;
			text-shadow: 0px 1px 0px #13506D;
		}
		.btn:hover{
			background: linear-gradient(#006666 10%,#00b3b3 100%);
		}
	</style>
</head>
<body background="sp.jpg" align="center">
	<div class="container">
		<div class="main">
			<div class="det"><h1>FILLUP ALL DETAILS</h1></div>	
			<br>
			<form action="sign.php" method="POST" name="Payment" class="form">
				<table>
					<tr>
						<td><h3>FIRST NAME <font color="red">*</font></h3></td>
						<td><input class="ipbox" type="text" name="first" required></td>
					</tr>
					<tr>
						<td><h3>LAST NAME <font color="red">*</font></h3></td>
						<td><input class="ipbox" type="text" name="last" required></td>
					</tr>
					<tr>
						<td><h3>ACCOUNT NO <font color="red">*</font></h3></td>
						<td><input class="ipbox" type="number" name="ACC-NO" required></td>
					</tr>
					<tr>
						<td><h3>MOBILE NO <font color="red">*</font></h3></td>
						<td><input class="ipbox" type="number" name="mob" required></td>
					</tr>
					<tr>
						<td><h3>AMOUNT <font color="red">*</font></h3></td>
						<td><input class="ipbox" type="number" name="amount"required></td>
					</tr>	
					<tr>
						<td colspan="2">
							<button class="btn" type="submit" name="submit" >Make Payment</button>
						</td>
					</tr>																			
				</table>				
			</form>	
		</div>
	</div>
	<!--<div class="loginbox">	
	</div>	-->
</body>
</html>