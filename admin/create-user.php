<?php
require_once('../scripts/db.php');
// require_once('../session.php');
/*
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

if (isset($_POST['updateBtn'])) {
	$stPassword = mysqli_real_escape_string($con, $_POST['stPassword']);
	$userUpdateSQL = "UPDATE student SET student_password='$stPassword' WHERE student_index='$login_Session_studentID'";
	$userUpdateResult = mysqli_query($con, $userUpdateSQL);
	if ($userUpdateResult) {
		echo '
				<script>
					alert("Update Successfully");
				</script>
			';
		header("Refresh:1");
	} else {
		echo '
				<script>
					alert(' . mysqli_error($con) . ');
				</script>
			';
	}
}
*/
?>
<!DOCTYPE html>
<html lang="en">


<?php require_once('inc/head.php'); ?>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

	<!-- header start -->
	<?php require_once('inc/header.php'); ?>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<?php require_once('inc/aside.php'); ?>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Create User</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Create User</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Create User</h4>
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
										<label class="col-sm-2 col-form-label">Staff ID</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" id="staffID" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Full Name</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" id="fullName" password="fullName" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" id="staffPassword" name="staffPassword" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" id="staff_email" name="staff_email">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Gender</label>
										<div class="col-sm-7">

											<select class="form-control" name="staffGender" id="staffGender" aria-label="Default select example">
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Contact</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" id="staffContact" name="staffContact">
										</div>
									</div>


									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Access Level</label>
										<div class="col-sm-7">

											<select class="form-control" name="staffAccessLevel" id="staffAccessLevel" aria-label="Default select example">

												<option value="admin">Administrator</option>
												<option value="Financial Clearance (Including SRC)">Financial Clearance</option>
												<option value="Department Clearance (Departmental Dues)">Department </option>
												<option value="Library Clearance (Lost of Books)">Library</option>
												<option value="Hall Clearance">Hall</option>
											</select>
										</div>
									</div>
									<!-- <div class="form-group row">
										<label class="col-sm-2 col-form-label">Hall</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php echo $studentHall; ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Registered Date</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php echo $studentRegisteredDate; ?>" >
										</div>
									</div>	 -->
								</div>
							</form>
							<!-- <form class="edit-profile" action="" method="POST">
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>4. Password</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Current Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" value="<?php echo $studentPassword; ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">New Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" id="stPassword" name="stPassword" required>
										</div>
									</div> -->
							<!-- <div class="form-group row">
										<label class="col-sm-2 col-form-label">Re Type Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" value="">
										</div>
									</div> -->
							<!-- </div> -->
							<div class="row">
								<div class="col-sm-2">
								</div>
								<div class="col-sm-7">
									<button type="button" id="updateBtn" name="updateBtn" value="updateBtn" class="btn">Create Account</button>
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
	<?php require_once('inc/footerjs.php'); ?>
</body>

</html>
<script>
	$(document).ready(function() {
		function showMessage(title, text, icon) {
			swal({
				title: title,
				text: text,
				icon: icon
			});
		}

		$('#updateBtn').click(function() {
			$('#updateBtn').attr('disabled', true);
			$('#updateBtn').text('Please Wait...');
			let staffID = $('#staffID').val();
			let fullName = $('#fullName').val();
			let staffPassword = $('#staffPassword').val();
			let staff_email = $('#staff_email').val();
			let staffGender = $('#staffGender').val();
			let staffContact = $('#staffContact').val();
			let staffAccessLevel = $('#staffAccessLevel').val();
			let updateBtn = $('#updateBtn').val();

			if(staffID == ''){
				showMessage("Error", "StaffID Field Cannot Be empty", "warning");
				$('#staffID').css('border-color','red');
				$('#updateBtn').attr('disabled', false);
				$('#updateBtn').text('Create Account');
			}else if(fullName == ''){
				showMessage("Error", "Name Field Cannot Be empty", "warning");
				$('#fullName').css('border-color','red');
				$('#updateBtn').attr('disabled', false);
				$('#updateBtn').text('Create Account');
			}else if(staffPassword == ''){
				showMessage("Error", "Password Fields Cannot Be empty", "warning");
				$('#staffPassword').css('border-color','red');
				$('#updateBtn').attr('disabled', false);
				$('#updateBtn').text('Create Account');
			}else{

			$.ajax({
				url: '../scripts/useraccountScript.php',
				method: 'POST',
				data: {
					staffID,
					fullName,
					staffPassword,
					staff_email,
					staffGender,
					staffContact,
					staffAccessLevel,
					updateBtn
				},
				dataType: 'json',
				success: function(data) {
					setTimeout(() => {
						showMessage(data.title, data.text, data.icon)
						$('#updateBtn').text('Create Account');
						$('#updateBtn').attr('disabled', false);
						$('#staffID').val('');
						$('#fullName').val('');
						$('#staffPassword').val('');
						$('#staff_email').val('');		
						$('#staffContact').val('');
						
					}, 3000);
				}
			});
		}
		})
	});
</script>