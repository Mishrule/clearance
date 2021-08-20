<?php require_once('../scripts/db.php'); ?>
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
				<h4 class="breadcrumb-title">Dashboard</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Dashboard</li>
				</ul>
			</div>	
			<!-- Card -->
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg1">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Total Halls
							</h4>
							<?php
								$hallMsg = ''; 
								$hallSQL = "SELECT COUNT(*) AS total FROM hall";
								$hallResult = mysqli_query($con, $hallSQL);
								if(mysqli_num_rows($hallResult)>0){
									while($hallRow = mysqli_fetch_array($hallResult)){
										$hallMsg = $hallRow['total'];
									}
								}else{
									$hallMsg = '0';
								}
							?>
							<span class="wc-des">
								Created Halls
							</span>
							<span class="wc-stats">
								<span class="counter"><?php echo $hallMsg;?></span> 
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo $hallMsg;?>%;" aria-valuenow="<?php echo $hallMsg;?>" aria-valuemin="0" aria-valuemax="<?php echo $hallMsg;?>"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Halls
								</span>
								<span class="wc-number ml-auto">
								<?php echo $hallMsg;?>%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg2">					 
						<div class="wc-item">
							<h4 class="wc-title">
								 Registered Students
							</h4>
							<span class="wc-des">
								Total Student
							</span>
							<?php
								$studentMsg = ''; 
								$studentSQL = "SELECT COUNT(*) AS total FROM student";
								$studentResult = mysqli_query($con, $studentSQL);
								if(mysqli_num_rows($studentResult)>0){
									while($studentRow = mysqli_fetch_array($studentResult)){
										$studentMsg = $studentRow['total'];
									}
								}else{
									$studentMsg = '0';
								}
							?>
							<span class="wc-stats counter">
							<?php echo $studentMsg;?> 
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo $studentMsg;?>%;" aria-valuenow="<?php echo $studentMsg;?>" aria-valuemin="0" aria-valuemax="<?php echo $studentMsg;?>"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Total Registered Students
								</span>
								<span class="wc-number ml-auto">
								<?php echo $studentMsg;?>%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg3">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Department 
							</h4>
							<span class="wc-des">
								Total Department 
							</span>
							<?php
								$departmentMsg = ''; 
								$departmentSQL = "SELECT COUNT(*) AS total FROM department";
								$departmentResult = mysqli_query($con, $departmentSQL);
								if(mysqli_num_rows($departmentResult)>0){
									while($departmentRow = mysqli_fetch_array($departmentResult)){
										$departmentMsg = $departmentRow['total'];
									}
								}else{
									$departmentMsg = '0';
								}
							?>
							<span class="wc-stats counter">
							<?php echo $departmentMsg;?> 
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo $departmentMsg;?>%;" aria-valuenow="<?php echo $departmentMsg;?>" aria-valuemin="0" aria-valuemax="<?php echo $departmentMsg;?>"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Registered Department
								</span>
								<span class="wc-number ml-auto">
								<?php echo $departmentMsg;?>%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4">					 
						<div class="wc-item">
							<h4 class="wc-title">
								User Account 
							</h4>
							<span class="wc-des">
								Created Users
							</span>
							<?php
								$accountMsg = ''; 
								$accountSQL = "SELECT COUNT(*) AS total FROM account";
								$accountResult = mysqli_query($con, $accountSQL);
								if(mysqli_num_rows($accountResult)>0){
									while($accountRow = mysqli_fetch_array($accountResult)){
										$accountMsg = $accountRow['total'];
									}
								}else{
									$accountMsg = '0';
								}
							?>
							<span class="wc-stats counter">
							<?php echo $accountMsg;?> 
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo $accountMsg;?>%;" aria-valuenow="<?php echo $accountMsg;?>" aria-valuemin="0" aria-valuemax="<?php echo $accountMsg;?>"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Users
								</span>
								<span class="wc-number ml-auto">
								<?php echo $accountMsg;?>%
								</span>
							</span>
						</div>				      
					</div>
				</div>
			</div>
			<!-- Card END -->
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-8 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Last 5 Approved</h4>
						</div>
						<div class="widget-inner">
							<table class="table table-responsive">
								<thead>
									<th>StudentId</th>
									<th>Status</th>
									<th>Approved By</th>
									<th>Requested Date</th>
									<th>Approved By</th>
								</thead>
							<?php
									$notificationMsg = ''; 
									$notificationSQL = "SELECT * FROM clearance ORDER BY requested_date DESC LIMIT 5";
									$notificationResult = mysqli_query($con, $notificationSQL);
									if(mysqli_num_rows($notificationResult)>0){
										while($notificationRow = mysqli_fetch_array($notificationResult)){
											echo '
											<tr>
												<td class="notification-text">
												'.$notificationRow['student_id'].'
												</td>
												<td class="notification-text">
													'.$notificationRow['clearance_status'].'
												</td>
												<td class="notification-time">
													'. $notificationRow['approved_by'].'
												</td>
												<td class="notification-time">
													 '. $notificationRow['requested_date'].'
												</td>
												<td class="notification-time">
													'. $notificationRow['approved_date'].'
												</td>
											</tr>
											'; 
										}
									}else{
										echo '
											<td class="notification-time">
												'. mysqli_error($con).'
											</td>
											
											'; 
									}
								?>
							</table>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
				<div class="col-lg-4 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Notifications</h4>
						</div>
						<div class="widget-inner">
							<div class="noti-box-list">
							
								<ul>
								<?php
									$notificationMsg = ''; 
									$notificationSQL = "SELECT * FROM clearance ORDER BY requested_date DESC LIMIT 5";
									$notificationResult = mysqli_query($con, $notificationSQL);
									if(mysqli_num_rows($notificationResult)>0){
										while($notificationRow = mysqli_fetch_array($notificationResult)){
											echo '
											<li>
												<span class="notification-icon dashbg-gray">
													<i class="fa fa-check"></i>
												</span>
												<span class="notification-text">
													<span>'.$notificationRow['student_id'].'</span> '.$notificationRow['clearance_status'].'
												</span>
												<span class="notification-time">
													<a href="#" class="fa fa-close"></a>
													<span>Approved by: '. $notificationRow['approved_by'].'</span>
												</span>
											</li>
											'; 
										}
									}else{
										echo '
											<li>
												<span class="notification-icon dashbg-gray">
													<i class="fa fa-check"></i>
												</span>
												<span class="notification-text">
													<span>'.mysqli_error($con).'</span> 
												</span>
												<span class="notification-time">
													<a href="#" class="fa fa-close"></a>
													<span></span>
												</span>
											</li>
											'; 
									}
								?>	
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Last 5 Registered Students</h4>
						</div>
						<div class="widget-inner">
							<div class="new-user-list">
								<ul>
								<?php
								$studentMsg = ''; 
								$studentSQL = "SELECT * FROM student ORDER BY registered_date DESC LIMIT 5";
								$studentResult = mysqli_query($con, $studentSQL);
								if(mysqli_num_rows($studentResult)>0){
									while($studentRow = mysqli_fetch_array($studentResult)){
										echo '
										<li>
											<span class="new-users-pic">
												<img src="../assets/img/faces/'.$studentRow['student_image'].'" alt=""/>
											</span>
											<span class="new-users-text">
												<a href="#" class="new-users-name">'.$studentRow['student_index'].' </a>
												<span class="new-users-info">'.$studentRow['student_department'].' </span>
											</span>
											
										</li>
										';
									}
								}else{
									echo '
										<li>
											<span class="new-users-pic">
												
											</span>
											<span class="new-users-text">
												<a href="#" class="new-users-name">'.mysqli_error($con).' </a>
												<span class="new-users-info"> </span>
											</span>
											
										</li>
										';
								}
							?>
									
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Last 5 User Account</h4>
						</div>
						<div class="widget-inner">
							<div class="orders-list">
								<ul>
								<?php
								$staffMsg = ''; 
								$staffSQL = "SELECT * FROM account ORDER BY registered_date DESC LIMIT 5";
								$staffResult = mysqli_query($con, $staffSQL);
								if(mysqli_num_rows($staffResult)>0){
									while($staffRow = mysqli_fetch_array($staffResult)){
										echo '
										
										<li>
											<span class="orders-title">
												<a href="#" class="orders-title-name">'.$staffRow['staff_name'].' </a>
												<span class="orders-info">'.$staffRow['staff_contact'].' | Date '.$staffRow['registered_date'].'</span>
											</span>
											<span class="orders-btn">
												
											</span>
										</li>
										';
									}
								}else{
									echo '
										<li>
											<span class="new-users-pic">
												
											</span>
											<span class="new-users-text">
												<a href="#" class="new-users-name">'.mysqli_error($con).' </a>
												<span class="new-users-info"> </span>
											</span>
											
										</li>
										';
								}
							?>
									
									
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
				</div> -->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

	<?php require_once('inc/footerjs.php');?>

</body>

</html>