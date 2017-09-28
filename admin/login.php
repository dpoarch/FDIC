<?php
// Start a session
require_once ('../config.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Login - WEBCAST PROJECT</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" />
<style>
.lightblue{
	color: #0da4ff;
}
.lightgray{
	color: #5d5d5d;
}
.b900{
	font-weight:900;
}
.bold{
	font-weight:bold;
}
.signuplink{
	color: #f00;
    font-weight: 800;
}
</style>
</head>
<body>
<div class="container" style="margin-top:200px;">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 text-center">
			<h2><span class="lightblue b900">CMS</span> <span class="lightgray bold"> LOGIN</span></h2>
			<form name="login-form" id="login-form" method="post" action="loginvalidate.php">
				<fieldset class="form-group">
				  <input class="form-control text-center" tabindex="1" placeholder="Enter your username" type="text" maxlength="50" name="username" />
				</fieldset>
				<fieldset class="form-group">
				  <input class="form-control text-center" tabindex="2" placeholder="Enter your password"  name="password" type="password" maxlength="15" name="password" />
				</fieldset>
				<fieldset class="form-group text-center">
				  <input class="btn btn-success" tabindex="3" accesskey="l" type="submit" name="cmdlogin" value="Sign In" />
				</fieldset>
			</form>
		</div>
	</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

