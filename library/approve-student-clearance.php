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
                        <div class="row">
                            <div class="col-md-4 col-lg-4"></div>
                            <div class="col-md-4 col-lg-4">
                                <label for="approvedClearanceType">Clearance Type</label>
                                <select class="custom-select" id="approvedClearanceType" name="approvedClearanceType">
                                    <option selected>Select Clearance Type</option>
                                    <option value="Library Clearance (Lost of Books)">Library Clearance (Lost of Books)</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <label for="approvedClearanceYearGroup">Select Year Group</label>
                                <select class="form-control" id="approvedClearanceYearGroup" name="approvedClearanceYearGroup">
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
        $('#approvedClearanceType').change(function() {
            let approvedClearanceType = $('#approvedClearanceType').val();
            let approvedClearanceYearGroup = $('#approvedClearanceYearGroup').val();

            $.ajax({
                url: '../scripts/approveStudentClearanceScript.php',
                method: 'POST',
                data: {
                    approvedClearanceType,
                    approvedClearanceYearGroup
                },

                success: function(data) {
                    $('#showApproveStatus').html(data);
                }
            })
        })

        $(document).on('click', '.approve', function() {
            let approveId = $(this).attr('id');
            let student_index = '5151040051';
            let approvedClearanceType = $('#approvedClearanceType').val();
            let approvedClearanceYearGroup = $('#approvedClearanceYearGroup').val();

            if (confirm("Are you sure you want to Approve Clearance\nclick Ok to Approve")) {
                $.ajax({
                    url: '../scripts/approveStudentClearanceScript.php',
                    method: 'POST',
                    data: {
                        approveId,
                        student_index,
                        approvedClearanceType,
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

        })
    });
</script>