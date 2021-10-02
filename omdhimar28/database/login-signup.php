<!DOCTYPE html>
<html>
<head>
<title>Login Form </title>

<link rel="stylesheet" href="login.css">

</head>
<body>
<div class="container">
<div class="main">
<form class="form" method="post" action="signup-connection.php">
<h2> Login Form</h2>
<label id="cu">Enter Username :<font color="red">*</font></label>
<input type="text" name="uname" id="uname" value="" required>
<label id="pn">Phone Number :<font color="red">*</font></label>
<input type="text" name="phn" id="phn" >

<label id="em" name='em'>Email :<font color="red">*</font></label>
<input type="text" name="email" id="email" placeholder="e.g:abc@gmail.com" >

<label>Password:<font color="red">*</label>
<input type="password" name="password" id="password" required>

<button type="submit" name="signup" id="signup" value="Sign Up">Sign up</button>
</form>
</div>
</div>
</body>
</html>