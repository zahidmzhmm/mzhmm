<?php
session_start();
if (isset($_COOKIE["admin"])){
    header("location:index");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Registration Admin Panel</title>
	<link rel="stylesheet" href="assets/styles/style.min.css">
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">
</head>
<body>
<div id="single-wrapper">
	<form action="php/admin.php" method="post" class="frm-single">
		<div class="inside">
			<div class="title"><strong>Admin Panel</strong></div>
			<div class="frm-title">Welcome Back</div>
			<a href="#" class="avatar"><img src="../uploads/main.jpg" alt=""></a>
<!--			<p class="text-center">Enter your Name, secure Pin and new Pin</p>-->
            <?php if (isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset ($_SESSION["msg"]);
            } ?>
			<div class="frm-input">
				<input name="name" type="text" placeholder="Type Full Name" class="frm-inp">
				<i class="fa fa-user frm-ico"></i>
			</div>
			<div class="frm-input">
				<input name="secure_pin" type="number" placeholder="Type Secure Pin" class="frm-inp">
				<i class="fa fa-lock frm-ico"></i>
			</div>
			<div class="frm-input">
				<input type="number" name="pin" placeholder="Type New Pin" class="frm-inp">
				<i class="fa fa-lock frm-ico"></i>
			</div>
			<button type="submit" name="register" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
			<a href="login" class="a-link"><i class="fa fa-sign-in"></i>Go to Login Page.</a>
			<div class="frm-footer text-center">Zahid Mzhmmm &copy; 2020.</div>
		</div>
	</form>
</div>
<script src="assets/scripts/jquery.min.js"></script>
<script src="assets/scripts/modernizr.min.js"></script>
<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugin/nprogress/nprogress.js"></script>
<script src="assets/plugin/waves/waves.min.js"></script>
<script src="assets/scripts/main.min.js"></script>
</body>
</html>
    <?php
}
?>