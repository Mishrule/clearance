<?php
require_once('../scripts/db.php');
require_once('../session.php');

	$userSQL = "SELECT * FROM student WHERE student_index = '$login_Session_studentID' ";
	$userResult = mysqli_query($con, $userSQL);
	$userRow = mysqli_fetch_array($userResult);
	$studentName = $userRow['student_name'];
	$studentPassword = $userRow['student_password'];
	$studentEmail = $userRow['student_email'];
	$studentContact = $userRow['student_contact'];
	$studentYear = $userRow['student_yeargroup'];
	$studentDepartment = $userRow['student_department'];
	$studentHall = $userRow['student_hall'];
	$studentRegisteredDate = $userRow['registered_date'];

	if(isset($_POST['updateBtn'])){
		$stPassword = mysqli_real_escape_string($con, $_POST['stPassword']);
		$userUpdateSQL = "UPDATE student SET student_password='$stPassword' WHERE student_index='$login_Session_studentID'";
		$userUpdateResult = mysqli_query($con, $userUpdateSQL);
		if($userUpdateResult){
			echo '
				<script>
					alert("Update Successfully");
				</script>
			';
			header("Refresh:1");
		}else{
			echo '
				<script>
					alert('.mysqli_error($con).');
				</script>
			';
		}
	}
	
?>
<!DOCTYPE html>
<html lang="en">


<?php require_once('inc/head.php');?>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	<?php require_once('inc/header.php');?>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<?php require_once('inc/aside.php');?>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Student Profile</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Student Profile</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Student Profile</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30">
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10  ml-auto">
											<h3>1. Personal Details</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Full Name</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php echo $studentName;?>" disabled>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php echo $studentEmail;?>" disabled>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Contact</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php echo $studentPassword;?>" disabled>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Year Group</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php echo $studentYear;?>" disabled>
										</div>
									</div>
									
									
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Department</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php echo $studentDepartment;?>" disabled>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Hall</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php echo $studentHall;?>" disabled>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Registered Date</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php echo $studentRegisteredDate;?>" disabled>
										</div>
									</div>	
								</div>
							</form>
							<form class="edit-profile" action="" method="POST">
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>4. Password</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Current Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" value="<?php echo $studentPassword;?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">New Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" id="stPassword" name="stPassword" required>
										</div>
									</div>
									<!-- <div class="form-group row">
										<label class="col-sm-2 col-form-label">Re Type Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" value="">
										</div>
									</div> -->
								</div>
								<div class="row">
									<div class="col-sm-2">
									</div>
									<div class="col-sm-7">
										<button type="submit" id="updateBtn" name="updateBtn" value="updateBtn" class="btn">Update Password</button>
										<!-- <button type="reset" class="btn-secondry">Cancel</button> -->
									</div>
								</div>
									
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
<?php require_once('inc/footerjs.php');?>
</body>


</html>
