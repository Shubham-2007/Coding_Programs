<!DOCTYPE html>
<html>
<head>
	<title>Signup Form </title>
	<script src='login.js'></script>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');
		*{
			margin: 0px;
			padding: 0px;
			font-family: 'Acme', sans-serif;
			box-sizing: border-box;
		}
		body{
			background-color: #f0f5f5;
			/*background: linear-gradient(to right,#ffb347,#ffcc33);*/
		}
		h2{
			text-align: center;
			font-size: 26px;
			margin-bottom: 20px;
		}
		div.container{
			width: 1000px;
			margin: 0 auto;
			font-family: 'Acme', sans-serif;
		}
		div.main{
			width: 420px;
			margin: 40px auto 0px;
			padding: 20px 50px 50px;
			background-color: #e0ebeb;
			border: 15px solid #008080;
			box-shadow: 0 0 10px;
			border-radius: 2px;
			font-size: 13px;
		}
		input[type=text],[type=password] {
			width: 97.7%;
			height: 34px;
			padding-left: 5px;
			margin-bottom: 20px;
			margin-top: 8px;
			box-shadow: 0 0 5px #008080;
			border: 2px solid #00cccc;
			color: #4f4f4f;
			font-size: 16px;
		}
		label{
			color: #464646;
			text-shadow: 0 1px 0 #fff;
			font-size: 16px;
			font-weight: bold;
		}
		#signup{
			width: 100%;
			background: linear-gradient(#00b3b3 10%, #006666 100%);
			border: 1px solid #0F799E;
			font-size: 20px;
			margin-top: 15px;
			padding: 8px;
			font-weight: bold;
			cursor: pointer;
			color: white;
			text-shadow: 0px 1px 0px #13506D;
		}
		#signup:hover{
			background: linear-gradient(#006666 10%,#00b3b3 100%);
		}	
	</style>
</head>
<body>
	<div class="container">
		<div class="main">
			<form class="form" name="RegForm" method="post" action="signup-connection.php">
				<h2> Signup Form</h2>

				<label id="cu">Enter Username : <font color="red">*</font></label>
				<input type="text" name="uname" id="uname" value="" required>
				
				<label id="pn">Phone Number : <font color="red">*</font></label>
				<input type="text" pattern="[1-9]{1}[0-9]{9}" name="phn" id="phn"  placeholder="Enter 10 digits mobile number" required  >

				<label id="em" name='em'>Email : <font color="red">*</font></label>
				<input type="text" name="email" id="email" placeholder="e.g:abc@gmail.com" required>

				<label>Password : <font color="red">*</label>
				<input type="password" name="password" id="password" required>

				<button type="submit" name="signup" id="signup" value="Sign Up" onclick="validate()">Sign up</button>
			</form>
		</div>
	</div>
</body>
</html>