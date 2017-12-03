<?php
session_start();
require_once("../config.php");
require_once("../functions.php");
if (is_admin_login()) {header("Location: index.php", true, 301);exit();}
if (@$_POST['user']) {
	if ($_POST['user'] <> ADMIN_USERNAME) {
		echo "<script>alert('Account is incorrect, please re-enter!');</script>";
	}elseif ($_POST['password'] <> ADMIN_PASSWORD) {
		echo "<script>alert('The password is incorrect, please re-enter!');</script>";
	}else{
		echo "<script>alert('Login successful, is redirecting ...');";
		//echo session_id();
		$_SESSION['admin'] = 1;
		echo "document.location = 'index.php';</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo SITE_TITLE; ?> | Administrator</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
		.container{
			margin-top: 150px;
		}
		.login{
			width: 300px;
			margin-left: auto;
			margin-right: auto;
			border:1px solid #ccc;
			padding: 20px;
			box-shadow:0 0 8px rgba(3,126,202,.5);
		}
		input[type='text']{
			background: url(icon/username.png);
		}
		input[type='password']{
			background: url(icon/password.png);
		}
		input[type='text'],input[type='password']{
			margin-bottom: 20px;
			height: 35px;
			width: 100%;
			padding:0 5px 0 26px;
			font-size: 16px;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			border:1px solid #ccc;
			background-repeat: no-repeat;
			background-position: 9px 11px;
		}
		input:focus{
			transition:border linear .3s,box-shadow linear .5s;
	 		-moz-transition:border linear .3s,-moz-box-shadow linear .5s;
	 		-webkit-transition:border linear .3s,-webkit-box-shadow linear .5s;
	 		outline:none;
	 		border-color:rgba(3,126,212,.5);
	 		box-shadow:0 0 8px rgba(3,126,202,.5);
	 		-moz-box-shadow:0 0 8px rgba(3,126,212,.5);
	 		-webkit-box-shadow:0 0 8px rgba(3,126,212,.3);
		}
		button{
			padding: 8px 15px;
			background-color: #6CA7DF;
			transition:background-color linear .3s;
			border:0;
			color: #fff;
			font-weight: bold;
		}
		button:hover{
			background-color: #4169E1;
			transition:background-color linear .3s;
		}
	</style>
</head>
<body>
<section class="container">
	<form class="login" method="post">
		<h2>Login</h2>
		<input type="text" placeholder="Username" name="user" value="<?php echo @$_POST['user'] ?>">
		<input type="password" placeholder="Password" name="password">
		<button>OK</button>
	</form>
</section>
</body>
</html>