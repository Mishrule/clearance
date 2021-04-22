<?php
require_once('../scripts/db.php');
include('../session.php');
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
				<h4 class="breadcrumb-title">Dashboard</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Dashboard</li>
					<!-- <li><?php //echo  $login_Session_studentID; 
								?></li> -->
				</ul>
			</div>
			<!-- Card -->
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg1">
						<div class="wc-item">
							<?php
							$financialStatus = '';
							$financialApprove = '';
							$financeVal = 'Financial Clearance (Including SRC)';

							$financialSQL = "SELECT DISTINCT(clearance_status) FROM clearance WHERE student_id='$login_Session_studentID' AND clearance_type='$financeVal'";

							$financialResult = mysqli_query($con, $financialSQL);
							if (mysqli_num_rows($financialResult) > 0) {
								while ($financialRow = mysqli_fetch_array($financialResult)) {
									$financialStatus = $financialRow['clearance_status'];
									// $financialApprove = $financialRow['approved_date'];
								}
							} else {
								$financialStatus = "Not Requested";
							}
							?>

							<h4 class="wc-title">
								Financial Clearance
							</h4>
							<span class="wc-des">
								Status <?php echo $financialStatus; ?>
							</span>
							<!-- <span class="wc-stats">
								$<span class="counter">18</span>M 
							</span>		 -->
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>

							<span class="wc-progress-bx">
								<span class="wc-change">

								</span>
								<span class="wc-number ml-auto">
									78%
								</span>
							</span>
						</div>
					</div>
				</div>
				<?php
				$departmentStatus = '';
				$departmentApprove = '';
				$departmentVal = 'Department Clearance (Departmental Dues)';

				$departmentSQL = "SELECT DISTINCT(clearance_status) FROM clearance WHERE student_id='$login_Session_studentID' AND clearance_type='$departmentVal'";

				$departmentResult = mysqli_query($con, $departmentSQL);
				if (mysqli_num_rows($departmentResult) > 0) {
					while ($departmentRow = mysqli_fetch_array($departmentResult)) {
						$departmentStatus = $departmentRow['clearance_status'];
						// $departmentApprove = $departmentRow['approved_date'];
					}
				} else {
					$departmentStatus = "Not Requested";
				}
				?>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg2">
						<div class="wc-item">
							<h4 class="wc-title">
								Department Clearance
							</h4>
							<span class="wc-des">
								Status <?php echo $departmentStatus; ?>
							</span>
							<!-- <span class="wc-stats counter">
								120 
							</span>		 -->
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">

								</span>
								<span class="wc-number ml-auto">
									88%
								</span>
							</span>
						</div>
					</div>
				</div>
				<?php
				$libraryStatus = '';
				$libraryApprove = '';
				$libraryVal = 'library Clearance (libraryal Dues)';

				$librarySQL = "SELECT DISTINCT(clearance_status) FROM clearance WHERE student_id='$login_Session_studentID' AND clearance_type='$libraryVal'";

				$libraryResult = mysqli_query($con, $librarySQL);
				if (mysqli_num_rows($libraryResult) > 0) {
					while ($libraryRow = mysqli_fetch_array($libraryResult)) {
						$libraryStatus = $libraryRow['clearance_status'];
						// $libraryApprove = $libraryRow['approved_date'];
					}
				} else {
					$libraryStatus = "Not Requested";
				}
				?>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg3">
						<div class="wc-item">
							<h4 class="wc-title">
								Library Clearance
							</h4>
							<span class="wc-des">
								Status <?php echo $libraryStatus; ?>
							</span>
							<!-- <span class="wc-stats counter">
								772 
							</span>		 -->
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">

								</span>
								<span class="wc-number ml-auto">
									65%
								</span>
							</span>
						</div>
					</div>
				</div>
				<?php
				$hallStatus = '';
				$hallApprove = '';
				$hallVal = 'Hall Clearance';

				$hallSQL = "SELECT DISTINCT(clearance_status) FROM clearance WHERE student_id='$login_Session_studentID' AND clearance_type='$hallVal'";

				$hallResult = mysqli_query($con, $hallSQL);
				if (mysqli_num_rows($hallResult) > 0) {
					while ($hallRow = mysqli_fetch_array($hallResult)) {
						$hallStatus = $hallRow['clearance_status'];
						// $hallApprove = $hallRow['approved_date'];
					}
				} else {
					$hallStatus = "Not Requested";
				}
				?>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4">
						<div class="wc-item">
							<h4 class="wc-title">
								Hall Clearance
							</h4>
							<span class="wc-des">
								Status <?php echo $hallStatus; ?>
							</span>
							<!-- <span class="wc-stats counter">
								350 
							</span>		 -->
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									
								</span>
								<span class="wc-number ml-auto">
									90%
								</span>
							</span>
						</div>
					</div>
				</div>
			</div>
			<!-- Card END -->
			<div class="row">

				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4><?php echo $login_Session_studentID; ?>'s Clearance Activity</h4>
						</div>
						<div class="widget-inner">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Student ID</th>
										<th scope="col">Student Name</th>
										<th scope="col">Clearance Type</th>
										<th scope="col">Clearance Status</th>
										<th scope="col">Requested Date</th>
										<th scope="col">Approved Date</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$studentStatus = '';
									$studentApprove = '';


									$studentSQL = "SELECT * FROM clearance WHERE student_id='$login_Session_studentID'";

									$studentResult = mysqli_query($con, $studentSQL);
									$count = 1;
									if (mysqli_num_rows($studentResult) > 0) {
										while ($studentRow = mysqli_fetch_array($studentResult)) {
											echo '
										<tr>
											<th scope="row">' . $count . '</th>
											<td>' . $studentRow['student_id'] . '</td>
											<td>' . $studentRow['student_name'] . '</td>
											<td>' . $studentRow['clearance_type'] . '</td>
											<td>' . $studentRow['clearance_status'] . '</td>
											<td>' . $studentRow['requested_date'] . '</td>
											<td>' . $studentRow['approved_date'] . '</td>
										</tr>
										';
											$count++;
										}
									} else {
										$studentStatus = "Not Requested";
									}
									?>


								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END
				<div class="col-lg-4 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Notifications</h4>
						</div>
						<div class="widget-inner">
							<div class="noti-box-list">
								<ul>
									<li>
										<span class="notification-icon dashbg-gray">
											<i class="fa fa-check"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 02:14</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-yellow">
											<i class="fa fa-shopping-cart"></i>
										</span>
										<span class="notification-text">
											<a href="#">Your order is placed</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 7 Min</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-red">
											<i class="fa fa-bullhorn"></i>
										</span>
										<span class="notification-text">
											<span>Your item is shipped</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 2 May</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-green">
											<i class="fa fa-comments-o"></i>
										</span>
										<span class="notification-text">
											<a href="#">Sneha Jogi</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 14 July</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-primary">
											<i class="fa fa-file-word-o"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 15 Min</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>New Users</h4>
						</div>
						<div class="widget-inner">
							<div class="new-user-list">
								<ul>
									<li>
										<span class="new-users-pic">
											<img src="assets/images/testimonials/pic1.jpg" alt=""/>
										</span>
										<span class="new-users-text">
											<a href="#" class="new-users-name">Anna Strong </a>
											<span class="new-users-info">Visual Designer,Google Inc </span>
										</span>
										<span class="new-users-btn">
											<a href="#" class="btn button-sm outline">Follow</a>
										</span>
									</li>
									<li>
										<span class="new-users-pic">
											<img src="assets/images/testimonials/pic2.jpg" alt=""/>
										</span>
										<span class="new-users-text">
											<a href="#" class="new-users-name"> Milano Esco </a>
											<span class="new-users-info">Product Designer, Apple Inc </span>
										</span>
										<span class="new-users-btn">
											<a href="#" class="btn button-sm outline">Follow</a>
										</span>
									</li>
									<li>
										<span class="new-users-pic">
											<img src="assets/images/testimonials/pic1.jpg" alt=""/>
										</span>
										<span class="new-users-text">
											<a href="#" class="new-users-name">Nick Bold  </a>
											<span class="new-users-info">Web Developer, Facebook Inc </span>
										</span>
										<span class="new-users-btn">
											<a href="#" class="btn button-sm outline">Follow</a>
										</span>
									</li>
									<li>
										<span class="new-users-pic">
											<img src="assets/images/testimonials/pic2.jpg" alt=""/>
										</span>
										<span class="new-users-text">
											<a href="#" class="new-users-name">Wiltor Delton </a>
											<span class="new-users-info">Project Manager, Amazon Inc </span>
										</span>
										<span class="new-users-btn">
											<a href="#" class="btn button-sm outline">Follow</a>
										</span>
									</li>
									<li>
										<span class="new-users-pic">
											<img src="assets/images/testimonials/pic3.jpg" alt=""/>
										</span>
										<span class="new-users-text">
											<a href="#" class="new-users-name">Nick Stone </a>
											<span class="new-users-info">Project Manager, Amazon Inc  </span>
										</span>
										<span class="new-users-btn">
											<a href="#" class="btn button-sm outline">Follow</a>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Orders</h4>
						</div>
						<div class="widget-inner">
							<div class="orders-list">
								<ul>
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name">Anna Strong </a>
											<span class="orders-info">Order #02357 | Date 12/08/2019</span>
										</span>
										<span class="orders-btn">
											<a href="#" class="btn button-sm red">Unpaid</a>
										</span>
									</li>
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name">Revenue</a>
											<span class="orders-info">Order #02357 | Date 12/08/2019</span>
										</span>
										<span class="orders-btn">
											<a href="#" class="btn button-sm red">Unpaid</a>
										</span>
									</li>
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name">Anna Strong </a>
											<span class="orders-info">Order #02357 | Date 12/08/2019</span>
										</span>
										<span class="orders-btn">
											<a href="#" class="btn button-sm green">Paid</a>
										</span>
									</li>
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name">Revenue</a>
											<span class="orders-info">Order #02357 | Date 12/08/2019</span>
										</span>
										<span class="orders-btn">
											<a href="#" class="btn button-sm green">Paid</a>
										</span>
									</li>
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name">Anna Strong </a>
											<span class="orders-info">Order #02357 | Date 12/08/2019</span>
										</span>
										<span class="orders-btn">
											<a href="#" class="btn button-sm green">Paid</a>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Basic Calendar</h4>
						</div>
						<div class="widget-inner">
							<div id="calendar"></div>
						</div>
					</div>
				</div>  -->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

	<?php require_once('inc/footerjs.php'); ?>

</body>

</html>