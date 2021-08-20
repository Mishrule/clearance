<?php require_once('../scripts/db.php'); ?>
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
				<h4 class="breadcrumb-title">Clearance</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Clearance</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Request for Clearance <span id="hdStudentID"><?php echo $login_Session_studentID;?></span></h4>
						</div>
						<div class="widget-inner">
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="../assets/img/confirm.jpg" alt="" />
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4 id="financial_clearance_Title" name="financial_clearance_Title">Financial Clearance (Including SRC)</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
												<img src="../assets/img/confirm.jpg" alt="" />
												</div>
												<div class="card-courses-user-info">
													<h5></h5>
													<h4>Curent Status</h4>
												</div>
											</li>
											<!-- <li class="card-courses-categories">
												<h5>3 Categories</h5>
												<h4>Backend</h4>
											</li> -->
											<!-- <li class="card-courses-review">
												<h5>3 Review</h5>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</li> -->
											<!-- <li class="card-courses-stats">
												<a href="#" class="btn button-sm green radius-xl">Not Request</a>
											</li> -->
											<?php
											$financialStudentMsg = '';
											$financialStudentID = $login_Session_studentID;
											$financialClearanceType = "Financial Clearance (Including SRC)";
											$financialClearanceStatusSQL = "SELECT DISTINCT(clearance_status) FROM clearance WHERE student_id='$financialStudentID' AND clearance_type = '$financialClearanceType'";

											$financialClearanceStatusResult = mysqli_query($con, $financialClearanceStatusSQL);

											if (mysqli_num_rows($financialClearanceStatusResult) > 0) {
												while ($financialClearanceStatusRow = mysqli_fetch_array($financialClearanceStatusResult)) {
													$financialStudentMsg = $financialClearanceStatusRow['clearance_status'];
												}
											} else {
												$financialStudentMsg = "No Request Made";
											}
											?>
											<li class="card-courses-price">

												<h5 class="text-primary btn button-sm green radius-xl" id="financial_clearance_status" name="financial_clearance_status"><?php echo $financialStudentMsg; ?></h5>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Financial Clearance Description</h6>
											<p>Financial Clearance is to Testify the each student do not owe any Fee of any sort including Student Representative Councel (SRC) Dues.<br><strong>NB. If any students owe these clearance statement will not be graduated until it is paid.</strong></p>
										</div>
										<div class="col-md-12">
											<button type="button" id="financial_clearance_Request" name="financial_clearance_Request" class="btn green radius-xl outline" data-toggle="modal" data-target="#financialModal">Request</button>
											<a href="#" class="btn red outline radius-xl ">Cancel</a>
										</div>
									</div>

								</div>
							</div>
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
								<img src="../assets/img/confirm.jpg" alt="" />
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4 id="department_clearance_Title" name="department_clearance_Title">Department Clearance (Departmental Dues)</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
												<img src="../assets/img/confirm.jpg" alt="" />
												</div>
												<div class="card-courses-user-info">
													<h5></h5>
													<h4>Curent Status</h4>
												</div>
											</li>
											<!-- <li class="card-courses-categories">
												<h5>3 Categories</h5>
												<h4>Backend</h4>
											</li> -->
											<!-- <li class="card-courses-review">
												<h5>3 Review</h5>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</li> -->
											<!-- <li class="card-courses-stats">
												<a href="#" class="btn button-sm green radius-xl">Not Request</a>
											</li> -->
											<?php
											$departmentStudentMsg = '';
											$departmentStudentID = $login_Session_studentID;
											$departmentClearanceType = "Department Clearance (Departmental Dues)";
											$departmentClearanceStatusSQL = "SELECT DISTINCT(clearance_status) FROM clearance WHERE student_id='$departmentStudentID' AND clearance_type = '$departmentClearanceType'";

											$departmentClearanceStatusResult = mysqli_query($con, $departmentClearanceStatusSQL);

											if (mysqli_num_rows($departmentClearanceStatusResult) > 0) {
												while ($departmentClearanceStatusRow = mysqli_fetch_array($departmentClearanceStatusResult)) {
													$departmentStudentMsg = $departmentClearanceStatusRow['clearance_status'];
												}
											} else {
												$departmentStudentMsg = "No Request Made";
											}
											?>
											<li class="card-courses-price">

												<h5 class="text-primary btn button-sm green radius-xl" id="department_clearance_status" name="department_clearance_status"><?php echo $departmentStudentMsg; ?></h5>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Department Clearance Description</h6>
											<p>Department Clearance is to Testify the each student belong to a deparment must be approved and that he/she do not owe the Department.<br><strong>NB. If any students owe these clearance statement will not be graduated until it is paid.</strong></p>
										</div>
										<div class="col-md-12">
											<a href="#" id="department_clearance_Request" name="department_clearance_Request" class="btn green radius-xl outline" data-toggle="modal" data-target="#departmentModal">Request</a>
											<a href="#" class="btn red outline radius-xl ">Cancel</a>
										</div>
									</div>

								</div>
							</div>
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
								<img src="../assets/img/confirm.jpg" alt="" />
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4 id="library_clearance_Title" name="library_clearance_Title">Library Clearance (Lost of Books)</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
												<img src="../assets/img/confirm.jpg" alt="" />
												</div>
												<div class="card-courses-user-info">
													<h5></h5>
													<h4>Curent Status</h4>
												</div>
											</li>
											<!-- <li class="card-courses-categories">
												<h5>3 Categories</h5>
												<h4>Backend</h4>
											</li> -->
											<!-- <li class="card-courses-review">
												<h5>3 Review</h5>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</li> -->
											<!-- <li class="card-courses-stats">
												<a href="#" class="btn button-sm green radius-xl">Not Request</a>
											</li> -->
											<?php
											$libraryStudentMsg = '';
											$libraryStudentID = $login_Session_studentID;
											$libraryClearanceType = "Library Clearance (Lost of Books)";
											$libraryClearanceStatusSQL = "SELECT DISTINCT(clearance_status) FROM clearance WHERE student_id='$libraryStudentID' AND clearance_type = '$libraryClearanceType'";

											$libraryClearanceStatusResult = mysqli_query($con, $libraryClearanceStatusSQL);

											if (mysqli_num_rows($libraryClearanceStatusResult) > 0) {
												while ($libraryClearanceStatusRow = mysqli_fetch_array($libraryClearanceStatusResult)) {
													$libraryStudentMsg = $libraryClearanceStatusRow['clearance_status'];
												}
											} else {
												$libraryStudentMsg = "No Request Made";
											}
											?>
											<li class="card-courses-price">

												<h5 class="text-primary btn button-sm green radius-xl" id="library_clearance_status" name="library_clearance_status"><?php echo $libraryStudentMsg; ?></h5>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Library Clearance Description</h6>
											<p>Library Clearance is to check if students has return all the books collected from the school library. If you have collected any book from the school Library submit it before you can cleared<br><strong>NB. If any students owe these clearance statement will not be graduated until it is paid.</strong></p>
										</div>
										<div class="col-md-12">
											<a href="#" id="library_clearance_Request" name="library_clearance_Request" class="btn green radius-xl outline"  data-toggle="modal" data-target="#libraryModal">Request</a>
											<a href="#" class="btn red outline radius-xl ">Cancel</a>
										</div>
									</div>

								</div>
							</div>

							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
								<img src="../assets/img/confirm.jpg" alt="" />
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4 id="hall_clearance_Title" name="hall_clearance_Title">Hall Clearance</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
												<img src="../assets/img/confirm.jpg" alt="" />
												</div>
												<div class="card-courses-user-info">
													<h5></h5>
													<h4>Curent Status</h4>
												</div>
											</li>
											<!-- <li class="card-courses-categories">
												<h5>3 Categories</h5>
												<h4>Backend</h4>
											</li> -->
											<!-- <li class="card-courses-review">
												<h5>3 Review</h5>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</li> -->
											<!-- <li class="card-courses-stats">
												<a href="#" class="btn button-sm green radius-xl">Not Request</a>
											</li> -->
											<?php
											$hallStudentMsg = '';
											$hallStudentID = $login_Session_studentID;
											$hallClearanceType = "Hall Clearance";
											$hallClearanceStatusSQL = "SELECT DISTINCT(clearance_status) FROM clearance WHERE student_id='$hallStudentID' AND clearance_type = '$hallClearanceType'";

											$hallClearanceStatusResult = mysqli_query($con, $hallClearanceStatusSQL);

											if (mysqli_num_rows($hallClearanceStatusResult) > 0) {
												while ($hallClearanceStatusRow = mysqli_fetch_array($hallClearanceStatusResult)) {
													$hallStudentMsg = $hallClearanceStatusRow['clearance_status'];
												}
											} else {
												$hallStudentMsg = "No Request Made";
											}
											?>
											<li class="card-courses-price">

												<h5 class="text-primary btn button-sm green radius-xl" id="hall_clearance_status" name="hall_clearance_status"><?php echo $hallStudentMsg; ?></h5>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Hall Clearance Description</h6>
											<p>Hall Clearance checks and see if student has paid all is Halls and also has not damaged anything purtaining to the Hall.<br> <strong>NB. If any students owe these clearance statement will not be graduated until it is paid.</strong></p>
										</div>
										<div class="col-md-12">
											<a href="#" id="hall_clearance_Request" name="hall_clearance_Request" class="btn green radius-xl outline"  data-toggle="modal" data-target="#hallModal">Request</a>
											<a href="#" class="btn red outline radius-xl ">Cancel</a>
										</div>
									</div>

								</div>
							</div>
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
		var hdfullName = $('#hdfullName').text();
		var hdStudentID = $('#hdStudentID').text();

		$('#financialRequest').click(function() {
			let financial_title = $('#financial_clearance_Title').text();
			let financial_status = 'Pending';
			let financialRequestBTN = $('#financialRequest').val();
			let financialYear = $('#financialYear').val();
			/*alert(hdStudentID);
			alert(financial_status);
			alert(financialRequestBTN);
			alert(financialYear);*/

			$.ajax({
					url: '../scripts/clearanceRequestScripts.php',
					method: 'POST',
					data: {
						financial_title,
						financial_status,
						financialRequestBTN,
						financialYear,
						hdfullName,
						hdStudentID
					},
					dataType: 'json',
					success: function(data) {
						// $('#financialModal').hide();
						showMessage(data.title, data.text, data.icon);
						setTimeout(() => {
							
							// $('#financial_clearance_status').text('Pending');
							window.location.reload();
						}, 3000);
					}
				}) 
		});


		// =============================== Department
		$('#departmentRequest').click(function() {
			let department_title = $('#department_clearance_Title').text();
			let department_status = 'Pending';
			let departmentRequestBTN = $('#departmentRequest').val();
			let departmentYear = $('#departmentYear').val();

			$.ajax({
				url: '../scripts/clearanceRequestScripts.php',
				method: 'POST',
				data: {
					department_title,
					department_status,
					departmentRequestBTN,
					departmentYear,
					hdfullName,
					hdStudentID
				},
				dataType: 'json',
				success: function(data) {
					showMessage(data.title, data.text, data.icon);
					setTimeout(() => {
						
						// $('#department_clearance_status').text('Pending');
						window.location.reload();
					}, 3000);
				}
			})
		});

		// =============================== Library
		$('#libraryRequest').click(function() {
			let library_title = $('#library_clearance_Title').text();
			let library_status = 'Pending';
			let libraryRequestBTN = $('#libraryRequest').val();
			let libraryYear = $('#libraryYear').val();

			$.ajax({
				url: '../scripts/clearanceRequestScripts.php',
				method: 'POST',
				data: {
					library_title,
					library_status,
					libraryRequestBTN,
					libraryYear,
					hdfullName,
					hdStudentID
				},
				dataType: 'json',
				success: function(data) {
					showMessage(data.title, data.text, data.icon);
					setTimeout(() => {
						
						// $('#library_clearance_status').text('Pending');
						window.location.reload();
					}, 3000);
				}
			})
		});

		// =============================== Hall
		$('#hallRequest').click(function() {
			let hall_title = $('#hall_clearance_Title').text();
			let hall_status = 'Pending';
			let hallRequestBTN = $('#hallRequest').text();
			let hallYear = $('#hallYear').val();


			$.ajax({
				url: '../scripts/clearanceRequestScripts.php',
				method: 'POST',
				data: {
					hall_title,
					hall_status,
					hallRequestBTN,
					hallYear,
					hdfullName,
					hdStudentID
				},
				dataType: 'json',
				success: function(data) {
					showMessage(data.title, data.text, data.icon);
					setTimeout(() => {
						
						window.location.reload();
					}, 3000);
				}
			})
		});


	})
</script>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" d>
  Launch static backdrop modal
</button> -->

<!-- Modal for Financial Clearance -->

<div class="modal fade" id="financialModal" tabindex="-1" aria-labelledby="financialModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Financial Clearance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <label for="financialYearGroup">Select Year Group</label>
				<select class="form-control" id="financialYear" name="financialYear">

					<?php
					$showyearGroupDetailSQL = "SELECT * FROM yearGroup ORDER BY created_date DESC";
					$showyearGroupDetailResult = mysqli_query($con, $showyearGroupDetailSQL);
					if (mysqli_num_rows($showyearGroupDetailResult) > 0) {
						while ($showyearGroupDetailRow = mysqli_fetch_array($showyearGroupDetailResult)) {

							echo '<option value="' . $showyearGroupDetailRow['years_year'] . '">' . $showyearGroupDetailRow['years_year'] . '</option>
                           ';
						}
					} else {
						echo '
						<option>NO yearGroup Created Yet' . mysqli_error($con) . '</option>
            	        ';
					}
					?>

				</select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="financialRequest" name="financialRequest" class="btn btn-primary" value="request">Request</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for Financial Clearance -->

<div class="modal fade" id="departmentModal" tabindex="-1" aria-labelledby="departmentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Department Clearance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <label for="departmentYearGroup">Select Year Group</label>
				<select class="form-control" id="departmentYear" name="departmentYear">

					<?php
					$showyearGroupDepartDetailSQL = "SELECT * FROM yearGroup ORDER BY created_date DESC";
					$showyearGroupDepartDetailResult = mysqli_query($con, $showyearGroupDepartDetailSQL);
					if (mysqli_num_rows($showyearGroupDepartDetailResult) > 0) {
						while ($showyearGroupDepartDetailRow = mysqli_fetch_array($showyearGroupDepartDetailResult)) {

							echo '<option value="' . $showyearGroupDepartDetailRow['years_year'] . '">' . $showyearGroupDepartDetailRow['years_year'] . '</option>
                           ';
						}
					} else {
						echo '
						<option>NO yearGroup Created Yet' . mysqli_error($con) . '</option>
            	        ';
					}
					?>

				</select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="departmentRequest" name="departmentRequest" class="btn btn-primary" value="request">Request</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal for Financial Clearance -->

<div class="modal fade" id="libraryModal" tabindex="-1" aria-labelledby="libraryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Library Clearance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <label for="libraryYearGroup">Select Year Group</label>
				<select class="form-control" id="libraryYear" name="libraryYear">

					<?php
					$showyearGroupLibraryDetailSQL = "SELECT * FROM yearGroup ORDER BY created_date DESC";
					$showyearGroupLibraryDetailResult = mysqli_query($con, $showyearGroupLibraryDetailSQL);
					if (mysqli_num_rows($showyearGroupLibraryDetailResult) > 0) {
						while ($showyearGroupLibraryDetailRow = mysqli_fetch_array($showyearGroupLibraryDetailResult)) {

							echo '<option value="' . $showyearGroupLibraryDetailRow['years_year'] . '">' . $showyearGroupLibraryDetailRow['years_year'] . '</option>
                           ';
						}
					} else {
						echo '
						<option>NO yearGroup Created Yet' . mysqli_error($con) . '</option>
            	        ';
					}
					?>

				</select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="libraryRequest" name="libraryRequest" class="btn btn-primary" value="request">Request</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for Hall Clearance -->

<div class="modal fade" id="hallModal" tabindex="-1" aria-labelledby="hallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hall Clearance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <label for="hallYearGroup">Select Year Group</label>
				<select class="form-control" id="hallYear" name="hallYear">

					<?php
					$showyearGrouphallDetailSQL = "SELECT * FROM yearGroup ORDER BY created_date DESC";
					$showyearGrouphallDetailResult = mysqli_query($con, $showyearGrouphallDetailSQL);
					if (mysqli_num_rows($showyearGrouphallDetailResult) > 0) {
						while ($showyearGrouphallDetailRow = mysqli_fetch_array($showyearGrouphallDetailResult)) {

							echo '<option value="' . $showyearGrouphallDetailRow['years_year'] . '">' . $showyearGrouphallDetailRow['years_year'] . '</option>
                           ';
						}
					} else {
						echo '
						<option>NO yearGroup Created Yet' . mysqli_error($con) . '</option>
            	        ';
					}
					?>

				</select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="hallRequest" name="hallRequest" class="btn btn-primary" value="request">Request</button>
      </div>
    </div>
  </div>
</div>