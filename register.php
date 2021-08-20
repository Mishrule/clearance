<?php require_once('scripts/db.php'); ?>
<?php 
	require_once('scripts/datetime.php');

	$signUpMessage = '';
	if(isset($_POST['submit'])){
		$signUpIndexNumber = mysqli_real_escape_string($con, $_POST['signUpIndexNumber']);
		$signUpName = mysqli_real_escape_string($con, $_POST['signUpName']);
		$signUpPassword = mysqli_real_escape_string($con, $_POST['signUpPassword']);
		$signUpEmail = mysqli_real_escape_string($con, $_POST['signUpEmail']);
		$signUpGender = mysqli_real_escape_string($con, $_POST['signUpGender']);
		$signUpContact = mysqli_real_escape_string($con, $_POST['signUpContact']);
		$signUpDepartment = mysqli_real_escape_string($con, $_POST['signUpDepartment']);
		$signUpHall = mysqli_real_escape_string($con, $_POST['signUpHall']);
		$signUpYearGroup = mysqli_real_escape_string($con, $_POST['signUpYearGroup']);
		$accesslevel = "student";
		// $signUpIndexNumber = mysqli_real_escape_string($con, $_POST['signUpIndexNumber']);

		if($signUpIndexNumber == ''){
			$signUpMessage = '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Index Number Field can not be empty.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($signUpName == ''){
			$signUpMessage = '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Name Field can not be empty.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($signUpPassword== ''){
			$signUpMessage = '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Password Field can not be empty.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($signUpEmail == ''){
			$signUpMessage = '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Email Field can not be empty.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($signUpGender == ''){
			$signUpMessage = '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Gender Field can not be empty.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($signUpContact == ''){
			$signUpMessage = '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Contact Field can not be empty.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($signUpDepartment == ''){
			$signUpMessage = '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Student Department cannot be empty.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($signUpHall == ''){
			$signUpMessage = '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Student Hall cannot be empty.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($signUpYearGroup == ''){
			$signUpMessage = '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Year Group can not be empty</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		// }else if($signUpImage == ''){
		// 	$signUpMessage = '
		// 	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		// 		<strong>Image Field can not be empty</strong>
		// 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// 		<span aria-hidden="true">&times;</span>
		// 		</button>
		// 	</div>
		// 	';
		}else {
			$Image = $_FILES['signUpImage']['name'];
    		$Target = "assets/img/faces/" . basename($_FILES['signUpImage']['name']);
			$registerSQL = "INSERT INTO student VALUES('','$signUpIndexNumber','$signUpName','$signUpPassword','$signUpEmail','$signUpGender','$signUpContact','$signUpDepartment','$signUpHall','$signUpYearGroup','$Image','$DateTime','$accesslevel')";

			$registerResult = mysqli_query($con, $registerSQL);
			move_uploaded_file($_FILES['signUpImage']['tmp_name'], $Target);

			if($registerResult){
				$signUpMessage = '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>'.$signUpIndexNumber.' Registered for Clearance Successfully</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			';
			header('Location: index.php');
			}else{
				$signUpMessage = '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>'.mysqli_error($con).' Failed to Register Student</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
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
	<title>SOC : Register </title>

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
				<a href="index.php"><img src="assets/images/logo-white-2.png" alt=""></a>
			</div>
			<div class="account-form-inner">
				<div class="account-container">
					<div class="heading-bx left">
						<h2 class="title-head">Sign Up <span>Now</span></h2>
						<p>Login Your Account <a href="login.php">Click here</a></p>
					</div>

					<?php echo $signUpMessage;?>

					<form method="POST" action="<?php $_PHP_SELF; ?>" enctype="multipart/form-data">
						<div class="row placeani">
							<div class="col-lg-12">
								<div class="form-group">
									<!-- <div class="input-group"> -->
										<label for="signUpIndexNumber">Index Number</label>
										<input name="signUpIndexNumber" id="signUpIndexNumber" type="text" required="" class="form-control">
									<!-- </div> -->
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<!-- <div class="input-group"> -->
										<label>Full Name (Surname first)</label>
										<input name="signUpName" id="signUpName" type="text" required="" class="form-control">
									<!-- </div> -->
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<!-- <div class="input-group"> -->
										<label>Your Password</label>
										<input name="signUpPassword" id="signUpPassword" type="password" class="form-control" required="">
									<!-- </div> -->
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<!-- <div class="input-group"> -->
										<label>Your Email Address</label>
										<input name="signUpEmail" id="signUpEmail" type="email" required="" class="form-control">
									<!-- </div> -->
								</div>
							</div>
							<!-- <div class="row"> -->

							<div class="col-lg-6">
								<div class="form-group">

									<label for="genderSignUp">Gender</label>

									<select class="form-control" required name="signUpGender" id="signUpGender" aria-label="Default select example">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>

								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<!-- <div class="input-group"> -->
									<label>Contact</label>
									<input name="signUpContact" id="signUpContact" type="text" required="" class="form-control">
									<!-- </div> -->
								</div>
							</div>
							<!-- </div> -->

							<div class="col-lg-12">
								<div class="form-group">

									<label for="departmentSignUp">Department</label>

									<select class="form-control" required name="signUpDepartment" id="signUpDepartment" aria-label="Default select example">
										<?php
										$departSQL = "SELECT * FROM department";
										$departResult = mysqli_query($con, $departSQL);
										if (mysqli_num_rows($departResult) > 0) {
											while ($departRow = mysqli_fetch_array($departResult)) {
												echo '
														<option value="' . $departRow['departmant_name'] . '">' . $departRow['departmant_name'] . '</option>
													';
											}
										} else {
											echo '
												<option value="None">No Records Found</option>
												';
										}
										?>
									</select>

								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">

									<label for="hallSignUp">Hall</label>

									<select class="form-control" required name="signUpHall" id="signUpHall" aria-label="Default select example">
										<?php
										$hallSQL = "SELECT * FROM hall";
										$hallResult = mysqli_query($con, $hallSQL);
										if (mysqli_num_rows($hallResult) > 0) {
											while ($hallRow = mysqli_fetch_array($hallResult)) {
												echo '
														<option value="' . $hallRow['hall_name'] . '">' . $hallRow['hall_name'] . '</option>
													';
											}
										} else {
											echo '
												<option value="None">No Records Found</option>
												';
										}
										?>
									</select>

								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">

									<label for="yearGroupSignUp">Year Group</label>

									<select class="form-control" required name="signUpYearGroup" id="signUpYearGroup" aria-label="Default select example">
										<?php
										$yearGroupSQL = "SELECT * FROM yearGroup";
										$yearGroupResult = mysqli_query($con, $yearGroupSQL);
										if (mysqli_num_rows($yearGroupResult) > 0) {
											while ($yearGroupRow = mysqli_fetch_array($yearGroupResult)) {
												echo '
														<option value="' . $yearGroupRow['years_year'] . '">' . $yearGroupRow['years_year'] . '</option>
													';
											}
										} else {
											echo '
												<option value="None">No Records Found</option>
												';
										}
										?>
									</select>

								</div>
							</div>

							<div class="col-lg-12">
								<div class="custom-file">
									<input type="file" required class="form-control" name="signUpImage" id="signUpImage">
									<!-- <label class="custom-file-label" for="customFile">Choose Image</label> -->
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group form-forget">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" name="signUpAgree" id="signUpAgree">
										<label class="custom-control-label" for="customControlAutosizing">I
											Agree</label>
									</div>
									<!-- <a href="forget-password.html" class="ml-auto">Forgot Password?</a> -->
								</div>
							</div>
							<div class="col-lg-12 m-b30">
								<button name="submit" type="submit" value="submit" class="btn button-md col-lg-12 col-md-12">Sign Up</button>
							</div>
							
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