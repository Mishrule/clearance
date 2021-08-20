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
                <h4 class="breadcrumb-title">Approved By</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li>Clearance Data</li>
                </ul>
            </div>

            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 col-md-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Clearance Info</h4>
                        </div>
                        <div class="row">
                            <!-- <div class="col-md-1"></div> -->
                            <div class="col-md-11 m-3">
                            <table id="clearinfo">
								<thead>
									<th scope="col">StudentId</th>
									<th scope="col">Status</th>
									<th scope="col">Approved By</th>
									<th scope="col">Requested Date</th>
									<th scope="col">Approved By</th>
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
                            <div class="col-md-1"></div>
                        
                        </div>
                        <div class="widget-inner">
                            <div class="widget-inner">
                                <div id="showApproveStatus"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>

    <?php require_once('inc/footerjs.php'); ?>

</body>

</html>
<script>
    $(document).ready(function() {
        $('#clearanceTitleError').hide();

        function showMessage(title, text, icon) {
            swal({
                title: title,
                text: text,
                icon: icon
            });
        }

        /*
                $('#saveHall').click(function() {
                    let clearanceTitle = $('#clearanceTitle').val();
                    if (clearanceTitle == '') {
                        $('#clearanceTitleError').show();
                    } else {
                        $('#saveHall').text('Please Wait...');
                        $('#saveHall').attr('disabled', true);
                        $.ajax({
                            url: '../scripts/hallScripts.php',
                            method: 'POST',
                            data: {
                                clearanceTitle
                            },
                            dataType: 'json',
                            success: function(data) {
                                setTimeout(() => {
                                    showMessage(data.title, data.text, data.icon)
                                    $('#saveHall').text('Save Hall');
                                    $('#saveHall').attr('disabled', false);
                                    $('#clearanceTitle').val('');
                                }, 3000);
                            }
                        })
                    }

                });*/

        //============================= Show Status
        $('#searchStudent').keyup(function() {
            let searchStudent = $('#searchStudent').val();
            let approvedClearanceYearGroup = $('#approvedClearanceYearGroup').val();
            

            $.ajax({
                url: '../scripts/searchStudentScript.php',
                method: 'POST',
                data: {
                    searchStudent,
                    approvedClearanceYearGroup,
                    
                },

                success: function(data) {
                    $('#showApproveStatus').html(data);
                }
            })
        })

        $(document).on('click', '.approve', function() {
            let approveId = $(this).attr('id');
            // let student_index = '5151040051';
            // let searchStudent = $('#searchStudent').val();
            let approvedClearanceYearGroup = $('#approvedClearanceYearGroup').val();

            if (confirm("Are you sure you want to Approve Clearance\nclick Ok to Approve")) {
                $.ajax({
                    url: '../scripts/searchStudentScript.php',
                    method: 'POST',
                    data: {
                        approveId,
                        // student_index,
                        // searchStudent,
                        approvedClearanceYearGroup
                    },
                    dataType: 'json',
                    success: function(data) {
                        showMessage(data.title, data.text, data.icon);
                        setTimeout(() => {
                            window.location.reload();
                        // $('#saveHall').text('Save Hall');
                        // $('#saveHall').attr('disabled', false);
                        // $('#clearanceTitle').val('');
                        }, 3000);
                    }
                })
            }

        });
        // $(document).ready( function () {
        //     $('#clearinfo').DataTable();
        // });

        $('#clearinfo').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
    });
</script>