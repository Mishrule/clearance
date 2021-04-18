<?php require_once('../scripts/db.php');?>
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
				<h4 class="breadcrumb-title">Clearance Status</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Clearance Status</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Clearance Status</h4>
						</div>
						<div class="widget-inner">
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="assets/images/courses/pic1.jpg" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Financial Clearance (Including SRC)</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
													<img src="assets/images/testimonials/pic3.jpg" alt=""/>
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
												<a href="#" class="btn button-sm green radius-xl">Pending</a>
											</li> -->
											<?php 
												$financialStudentMsg = '';
												$financialStudentID = "5151040051";
												$financialClearanceType = "Financial Clearance (Including SRC)";
												$financialClearanceStatusSQL = "SELECT DISTINCT(clearance_status) FROM clearance WHERE student_id='$financialStudentID' AND clearance_type = '$financialClearanceType'";

												$financialClearanceStatusResult = mysqli_query($con, $financialClearanceStatusSQL);

												if(mysqli_num_rows($financialClearanceStatusResult)>0){
													while($financialClearanceStatusRow = mysqli_fetch_array($financialClearanceStatusResult)){
														$financialStudentMsg = $financialClearanceStatusRow['clearance_status'];
													}
												}else{
													$financialStudentMsg = "No Request Made";
												}
											?>
											<li class="card-courses-stats">
												
												<h5 class="text-primary btn button-sm green radius-xl"><?php echo $financialStudentMsg; ?></h5>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Financial Clearance Description</h6>
											<p>Financial Clearance is to Testify the each student do not owe any Fee of any sort including Student Representative Councel (SRC) Dues.<br><strong>NB. If any students owe these clearance statement will not be graduated until it is paid.</strong></p>	
										</div>
										<!-- <div class="col-md-12">
											<a href="#" class="btn green radius-xl outline">Request</a>
											<a href="#" class="btn red outline radius-xl ">Cancel</a>
										</div> -->
									</div>
									
								</div>
							</div>
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="assets/images/courses/pic1.jpg" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Department Clearance (Departmental Dues)</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
													<img src="assets/images/testimonials/pic3.jpg" alt=""/>
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
												<a href="#" class="btn button-sm green radius-xl">Pending</a>
											</li> --><?php 
												$departmentStudentMsg = '';
												$departmentStudentID = "5151040051";
												$departmentClearanceType = "Department Clearance (Departmental Dues)";
												$departmentClearanceStatusSQL = "SELECT DISTINCT(clearance_status) FROM clearance WHERE student_id='$departmentStudentID' AND clearance_type = '$departmentClearanceType'";

												$departmentClearanceStatusResult = mysqli_query($con, $departmentClearanceStatusSQL);

												if(mysqli_num_rows($departmentClearanceStatusResult)>0){
													while($departmentClearanceStatusRow = mysqli_fetch_array($departmentClearanceStatusResult)){
														$departmentStudentMsg = $departmentClearanceStatusRow['clearance_status'];
													}
												}else{
													$departmentStudentMsg = "No Request Made";
												}
											?>
											<li class="card-courses-stats">
												
												<h5 class="text-primary btn button-sm green radius-xl"><?php echo $departmentStudentMsg; ?></h5>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Department Clearance Description</h6>
											<p>Department Clearance is to Testify the each student belong to a deparment must be approved and that he/she do not owe the Department.<br><strong>NB. If any students owe these clearance statement will not be graduated until it is paid.</strong></p>	
										</div>
										<!-- <div class="col-md-12">
											<a href="#" class="btn green radius-xl outline">Request</a>
											<a href="#" class="btn red outline radius-xl ">Cancel</a>
										</div> -->
									</div>
									
								</div>
							</div>
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="assets/images/courses/pic1.jpg" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Library Clearance (Lost of Books)</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
													<img src="assets/images/testimonials/pic3.jpg" alt=""/>
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
												<a href="#" class="btn button-sm green radius-xl">Pending</a>
											</li> --><?php 
												$libraryStudentMsg = '';
												$libraryStudentID = "5151040051";
												$libraryClearanceType = "Library Clearance (Lost of Books)";
												$libraryClearanceStatusSQL = "SELECT DISTINCT(clearance_status) FROM clearance WHERE student_id='$libraryStudentID' AND clearance_type = '$libraryClearanceType'";

												$libraryClearanceStatusResult = mysqli_query($con, $libraryClearanceStatusSQL);

												if(mysqli_num_rows($libraryClearanceStatusResult)>0){
													while($libraryClearanceStatusRow = mysqli_fetch_array($libraryClearanceStatusResult)){
														$libraryStudentMsg = $libraryClearanceStatusRow['clearance_status'];
													}
												}else{
													$libraryStudentMsg = "No Request Made";
												}
											?>
											<li class="card-courses-stats">
												
												<h5 class="text-primary btn button-sm green radius-xl"><?php echo $libraryStudentMsg; ?></h5>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Library Clearance Description</h6>
											<p>Library Clearance is to check if students has return all the books collected from the school library. If you have collected any book from the school Library submit it before you can cleared<br><strong>NB. If any students owe these clearance statement will not be graduated until it is paid.</strong></p>	
										</div>
										<!-- <div class="col-md-12">
											<a href="#" class="btn green radius-xl outline">Request</a>
											<a href="#" class="btn red outline radius-xl ">Cancel</a>
										</div> -->
									</div>
									
								</div>
							</div>
							
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="assets/images/courses/pic1.jpg" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Hall Clearance</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
													<img src="assets/images/testimonials/pic3.jpg" alt=""/>
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
												<a href="#" class="btn button-sm green radius-xl">Pending</a>
											</li> --><?php 
												$hallStudentMsg = '';
												$hallStudentID = "5151040051";
												$hallClearanceType = "Hall Clearance";
												$hallClearanceStatusSQL = "SELECT DISTINCT(clearance_status) FROM clearance WHERE student_id='$hallStudentID' AND clearance_type = '$hallClearanceType'";

												$hallClearanceStatusResult = mysqli_query($con, $hallClearanceStatusSQL);

												if(mysqli_num_rows($hallClearanceStatusResult)>0){
													while($hallClearanceStatusRow = mysqli_fetch_array($hallClearanceStatusResult)){
														$hallStudentMsg = $hallClearanceStatusRow['clearance_status'];
													}
												}else{
													$hallStudentMsg = "No Request Made";
												}
											?>
											<li class="card-courses-stats">
												
												<h5 class="text-primary btn button-sm green radius-xl"><?php echo $hallStudentMsg; ?></h5>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Hall Clearance Description</h6>
											<p>Hall Clearance checks and see if student has paid all is Halls and also has not damaged anything purtaining to the Hall.<br> <strong>NB. If any students owe these clearance statement will not be graduated until it is paid.</strong></p>	
										</div>
										<!-- <div class="col-md-12">
											<a href="#" class="btn green radius-xl outline">Request</a>
											<a href="#" class="btn red outline radius-xl ">Cancel</a>
										</div> -->
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
<?php require_once('inc/footerjs.php');?>
</body>

</html>