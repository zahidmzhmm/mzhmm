<?php
$server_php_self = $_SERVER["PHP_SELF"];
$explode_php_selft = explode("/",$server_php_self);
$php_self_end = end($explode_php_selft);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Zahid Mzhmm | Admin Panel</title>
    <link rel="stylesheet" href="assets/styles/style.min.css">
	<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">
	<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
    <link rel="stylesheet" href="assets/plugin/dropify/css/dropify.min.css">
	<link rel="stylesheet" href="assets/plugin/percircle/css/percircle.css">
	<link rel="stylesheet" href="assets/plugin/chart/chartist/chartist.min.css">
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>
    <link rel="stylesheet" href="assets/plugin/datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/plugin/daterangepicker/daterangepicker.css">
    <script src="assets/plugin/tinymce/tinymce.min.js"></script>
	<link rel="stylesheet" href="assets/styles/style-dark.min.css">
</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="index.php" class="logo">Zahid Mzhmm</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="profile.php" class="avatar"><img src="img/<?php echo $admin_only["img"]; ?>" alt="Image"><span class="status online"></span></a>
			<h5 class="name"><a href="profile.php"><?php echo $admin_only["name"];; ?></a></h5>
			<h5 class="position">Administrator</h5>
		</div>
	</header>
	<div class="content">
		<div class="navigation">
			<h5 class="title">Navigation</h5>
			<ul class="menu js__accordion">
				<li class="<?= $php_self_end=='index.php' ? 'current active' : '' ?>">
					<a class="waves-effect" href="index"><i class="menu-icon fa fa-home"></i><span>Home</span></a>
                </li>
				<li class="<?= $php_self_end=='profile.php' ? 'current active' : '' ?> <?= $php_self_end=='edit-profile.php' ? 'current active' : '' ?>">
					<a class="waves-effect" href="profile"><i class="menu-icon fa fa-user"></i><span>Profile</span></a>
				</li>
				<li class="<?= $php_self_end=='about.php' ? 'current active' : '' ?> <?= $php_self_end=='edit-about.php' ? 'current active' : '' ?>">
					<a class="waves-effect" href="about"><i class="menu-icon fa fa-info-circle"></i><span>About</span></a>
				</li>
				<li class="<?= $php_self_end=='image.php' ? 'current active' : '' ?>">
					<a class="waves-effect" href="image"><i class="menu-icon fa fa-picture-o"></i><span>Image</span></a>
				</li>
				<li class="<?= $php_self_end=='skill.php' ? 'current active' : '' ?>">
					<a class="waves-effect" href="skill"><i class="menu-icon fa fa-key"></i><span>Skill</span></a>
				</li>
				<li class="<?= $php_self_end=='works.php' ? 'current active' : '' ?>">
					<a class="waves-effect" href="works"><i class="menu-icon fa fa-code"></i><span>Works</span></a>
				</li>
				<li class="<?= $php_self_end=='service.php' ? 'current active' : '' ?>">
					<a class="waves-effect" href="service"><i class="menu-icon fa fa-headphones"></i><span>Services</span></a>
				</li>
				<li class="<?= $php_self_end=='portfolio.php' ? 'current active' : '' ?>">
					<a class="waves-effect" href="portfolio"><i class="menu-icon fa fa-paragraph"></i><span>Portfolio</span></a>
				</li>
				<li class="<?= $php_self_end=='short-review.php' ? 'current active' : '' ?>">
					<a class="waves-effect" href="short-review"><i class="menu-icon fa fa-clipboard"></i><span>Short Review</span></a>
				</li>
				<li class="<?= $php_self_end=='category.php' ? 'current active' : '' ?>">
					<a class="waves-effect" href="category"><i class="menu-icon fa fa-caret-up"></i><span>Category</span></a>
				</li>
				<li class="<?= $php_self_end=='blog.php' ? 'current active' : '' ?><?= $php_self_end=='edit-blog.php' ? 'current active' : '' ?><?= $php_self_end=='add-blog.php' ? 'current active' : '' ?>">
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-rss"></i><span>Blog</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li class="<?= $php_self_end=='add-blog.php' ? 'current' : '' ?>"><a href="add-blog">Add</a></li>
						<li class="<?= $php_self_end=='blog.php' ? 'current' : '' ?>"><a href="blog">View</a></li>
					</ul>
				</li>
				<li class="<?= $php_self_end=='gallery.php' ? 'current active' : '' ?><?= $php_self_end=='add-gallery.php' ? 'current active' : '' ?>">
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-adn"></i><span>Gallery</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li class="<?= $php_self_end=='add-gallery.php' ? 'current' : '' ?>"><a href="add-gallery">Add</a></li>
						<li class="<?= $php_self_end=='gallery.php' ? 'current' : '' ?>"><a href="gallery">View</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title"><?= $php_self_end=='index.php' ? 'Dashboard' : '' ?> <?= $php_self_end=='edit-data.php' ? 'Edit Data' : '' ?> <?= $php_self_end=='view-data.php' ? 'View Data' : '' ?> <?= $php_self_end=='add-data.php' ? 'Add Data' : '' ?> <?= $php_self_end=='edit-profile.php' ? 'Edit Profile' : '' ?> <?= $php_self_end=='profile.php' ? 'Profile' : '' ?></h1>
	</div>
	<div class="pull-right">
		<a href="#" class="ico-item"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
		<a href="logout" class="ico-item text-danger fa fa-power-off"></a>
	</div>
</div>
<div id="notification-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Your Notifications</h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">10 min</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- /.content -->
</div>
<div id="wrapper">
	<div class="main-content">