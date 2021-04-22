<?php 
	include_once('scripts/db.php');
	session_start();
	$loginMsg=''; $loginSQL=''; $loginResult='';
	$dzIndex = '';
$dzPassword = '';
$dzAccessLevel = '';
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$dzIndex = mysqli_real_escape_string($con, $_POST['dzIndex']);
		$dzPassword = mysqli_real_escape_string($con, $_POST['dzPassword']);
		$dzAccessLevel = mysqli_real_escape_string($con, $_POST['dzAccessLevel']);

		if($dzIndex == ''){
			$loginMsg='
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Name Field can not be empty</strong> .
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($dzPassword == ''){
			$loginMsg='
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Password Field can not be empty</strong> .
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else{
			if($dzAccessLevel == 'admin'){
			/*	$loginSQL = "SELECT student_index FROM student WHERE student_index='$dzIndex' AND student_password='$dzPassword' AND access_level='$dzAccessLevel'";
				$loginResult = mysqli_query($con, $loginSQL);
				$row = mysqli_fetch_array($loginResult);
				$count = mysqli_num_rows($loginResult);
				if ($count == 1) {
					$_SESSION['user_login'] = $dzIndex;
					$_SESSION['user_accessLevel'] = $dzAccessLevel;
					header("location:admin/index.php");
				}else {
					$loginMsg='
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Invalid ID or Password</strong> .
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					';
				} */
			}else if($dzAccessLevel == 'student'){
				$loginSQL = "SELECT student_index FROM student WHERE student_index='$dzIndex' AND student_password='$dzPassword' AND access_level='$dzAccessLevel'";
				$loginResult = mysqli_query($con, $loginSQL);
				$row = mysqli_fetch_array($loginResult);
				$count = mysqli_num_rows($loginResult);
				if ($count == 1) {
					$_SESSION['user_login'] = $dzIndex;
					$_SESSION['user_accessLevel'] = $dzAccessLevel;
					header("location:student/dashboard.php");
				}else {
					$loginMsg='
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Invalid ID or Password</strong> .
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					';
				}
			}else if($dzAccessLevel == 'Financial Clearance (Including SRC)'){
			/*	$loginSQL = "SELECT student_index FROM student WHERE student_index='$dzIndex' AND student_password='$dzPassword' AND access_level='$dzAccessLevel'";
				$loginResult = mysqli_query($con, $loginSQL);
				$row = mysqli_fetch_array($loginResult);
				$count = mysqli_num_rows($loginResult);
				if ($count == 1) {
					$_SESSION['user_login'] = $dzIndex;
					$_SESSION['user_accessLevel'] = $dzAccessLevel;
					header("location:finance/index.php");
				}else {
					$loginMsg='
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Invalid ID or Password</strong> .
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					';
				} */
			}else if($dzAccessLevel == 'Department Clearance (Departmental Dues)'){
			/*	$loginSQL = "SELECT student_index FROM student WHERE student_index='$dzIndex' AND student_password='$dzPassword' AND access_level='$dzAccessLevel'";
				$loginResult = mysqli_query($con, $loginSQL);
				$row = mysqli_fetch_array($loginResult);
				$count = mysqli_num_rows($loginResult);
				if ($count == 1) {
					$_SESSION['user_login'] = $dzIndex;
					$_SESSION['user_accessLevel'] = $dzAccessLevel;
					header("location:department/index.php");
				}else {
					$loginMsg='
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Invalid ID or Password</strong> .
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					';
				}*/
			}else if($dzAccessLevel == 'Library Clearance (Lost of Books)'){
			/*	$loginSQL = "SELECT student_index FROM student WHERE student_index='$dzIndex' AND student_password='$dzPassword' AND access_level='$dzAccessLevel'";
				$loginResult = mysqli_query($con, $loginSQL);
				$row = mysqli_fetch_array($loginResult);
				$count = mysqli_num_rows($loginResult);
				if ($count == 1) {
					$_SESSION['user_login'] = $dzIndex;
					$_SESSION['user_accessLevel'] = $dzAccessLevel;
					header("location:library/index.php");
				}else {
					$loginMsg='
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Invalid ID or Password</strong> .
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					';
				}*/
			}else if($dzAccessLevel == 'Hall Clearance'){
			/*	$loginSQL = "SELECT student_index FROM student WHERE student_index='$dzIndex' AND student_password='$dzPassword' AND access_level='$dzAccessLevel'";
				$loginResult = mysqli_query($con, $loginSQL);
				$row = mysqli_fetch_array($loginResult);
				$count = mysqli_num_rows($loginResult);
				if ($count == 1) {
					$_SESSION['user_login'] = $dzIndex;
					$_SESSION['user_accessLevel'] = $dzAccessLevel;
					header("location:hall/index.php");
				}else {
					$loginMsg='
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Invalid ID or Password</strong> .
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					';
				}*/
			}
		}
	}


?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />

	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>SOC: Login </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

</head>

<body id="bg">
	<div class="page-wraper">
		<!-- <div id="loading-icon-bx"></div> -->
		<div class="account-form">
			<div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">
				<a href="index.html"><img src="assets/images/logo-white-2.png" alt=""></a>
			</div>
			<div class="account-form-inner">
				<div class="account-container">
					<div class="heading-bx left">
						<h2 class="title-head">Login to your <span>Account</span></h2>
						<p>Don't have a clearance account yet <a href="register.php">Create one here</a></p>
					</div>
					<form class="contact-bx" method="POST" action="<?php $_PHP_SELF; ?>">
						<?php echo $loginMsg; ?>
						<div class="row placeani">
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Index Number/Staff Number</label>
										<input name="dzIndex" id="dzIndex" type="text" required class="form-control">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Your Password</label>
										<input name="dzPassword" id="dzPassword" type="password" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label>Login As</label>
									<select class="form-control" name="dzAccessLevel" id="dzAccessLevel" aria-label="Default select example">
										<option value="student">Student</option>
										<option value="admin">Administrator</option>
										<option value="Financial Clearance (Including SRC)">Financial Clearance</option>
										<option value="Department Clearance (Departmental Dues)">Department </option>
										<option value="Library Clearance (Lost of Books)">Library</option>
										<option value="Hall Clearance">Hall</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group form-forget">
									<div class="custom-control custom-checkbox">
										<!-- <input type="checkbox" class="custom-control-input"
											id="customControlAutosizing">
										<label class="custom-control-label" for="customControlAutosizing">Remember
											me</label> -->
									</div>
									<!-- <a href="forget-password.html" class="ml-auto">Forgot Password?</a> -->
								</div>
							</div>
							<div class="col-lg-12 col-md-12 m-b30">
								<button name="submit" type="submit" value="Submit" class="btn button-md col-md-12">Login</button>
							</div>
							<!-- <div class="col-lg-12">
								<h6>Login with Social media</h6>
								<div class="d-flex">
									<a class="btn flex-fill m-r5 facebook" href="#"><i
											class="fa fa-facebook"></i>Facebook</a>
									<a class="btn flex-fill m-l5 google-plus" href="#"><i
											class="fa fa-google-plus"></i>Google Plus</a>
								</div>
							</div> -->
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- External JavaScripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendors/counter/waypoints-min.js"></script>
	<script src="assets/vendors/counter/counterup.min.js"></script>
	<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="assets/vendors/masonry/masonry.js"></script>
	<script src="assets/vendors/masonry/filter.js"></script>
	<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
	<script src="assets/js/functions.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>