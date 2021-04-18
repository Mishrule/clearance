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
                <h4 class="breadcrumb-title">Create Clearance Type</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li>Create Clearance Type</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 col-md-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Approve Student Clearance</h4>
                        </div>
                        <div class="widget-inner">
                            <div class="widget-inner">
                            <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Student ID</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Clearance Type</th>
                                            <th scope="col">Clearance Status</th>
                                            
                                            <th scope="col">Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                // $hallStudentMsg = '';
                                // $hallStudentID = "5151040051";
                                // $hallClearanceType = "Hall Clearance";
                                $approveClearanceStatusSQL = "SELECT DISTINCT student_id, student_name, clearance_type, clearance_status FROM clearance";

                                $approveClearanceStatusResult = mysqli_query($con, $approveClearanceStatusSQL);
                                    $approveCount = 1;
                                if (mysqli_num_rows($approveClearanceStatusResult) > 0) {
                                    while ($approveClearanceStatusRow = mysqli_fetch_array($approveClearanceStatusResult)) {
                                       
                                      echo '  <tr>
                                            <th scope="row">'.$approveCount.'</th>
                                            <td>'.$approveClearanceStatusRow['student_id'].'</td>
                                            <td>'.$approveClearanceStatusRow['student_name'].'</td>
                                            <td>'.$approveClearanceStatusRow['clearance_type'].'</td>
                                            <td>'.$approveClearanceStatusRow['clearance_status'].'</td>
                                            <td><a href="#" id="library_clearance_Request" name="library_clearance_Request"  class="btn green radius-xl outline">Approve</a></td>
                                            
                                        </tr>
                                        ';
                                        $approveCount++;
                                    }
                                } else {
                                    echo '  <tr>
                                                <th scope="row" colspan="7">No Student Has Requested For Clearance</th>
                                            </tr>
                                        ';
                                }
                                ?>    
                                    </tbody>
                                </table>

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

        })
    });
</script>