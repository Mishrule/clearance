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
                <h4 class="breadcrumb-title">Create Department</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li>Create Department</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-8 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Create A Department</h4>
                        </div>
                        <div class="widget-inner">
                            <div class="widget-inner">
                                <form class="edit-profile m-b30">
                                    <div class="">
                                        <div class="form-group row">
                                            <div class="col-sm-10  ml-auto">
                                                <h3>1. Department Details</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Department Name</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" id="DepartmentName" name="DepartmentName" type="text">
                                                <p class="text-danger" id="DepartmentNameError">Department Name Cannot be empty</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                </div>
                                                <div class="col-sm-7">
                                                    <button type="button" id="saveDepartment" name="saveDepartment" class="btn">Save Department</button>
                                                    <button type="reset" class="btn-secondry">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Your Profile Views Chart END-->
                <div class="col-lg-4 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Created Department</h4>
                        </div>
                        <div class="widget-inner">
                            <div class="noti-box-list">
                                <ul>
                                    
                                    <?php 
                                        $showDepartmentDetailSQL = "SELECT * FROM department";
                                        $showDepartmentDetailResult = mysqli_query($con, $showDepartmentDetailSQL);
                                        if(mysqli_num_rows($showDepartmentDetailResult)>0){
                                            while($showDepartmentDetailRow = mysqli_fetch_array( $showDepartmentDetailResult)){
                                                
                                                echo '<li>
                                                <span class="notification-icon dashbg-gray">
                                                <i class="fa fa-check"></i>
                                                </span>
                                                <span class="notification-text">
                                                    '.$showDepartmentDetailRow['departmant_name'].'
                                                </span>
                                                <span class="notification-time">
                                                    <a href="#" class="fa fa-close"></a>
                                                    <span>'.$showDepartmentDetailRow['created_date'].'</span>
                                                </span></li>
                                                ';
                                            }
                                        }else{
                                            echo '<li>
                                            <span class="notification-icon dashbg-gray">
                                            <i class="fa fa-check"></i>
                                            </span>
                                            <span class="notification-text">
                                                NO Department Created Yet'.mysqli_error($con).'
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
            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>

    <?php require_once('inc/footerjs.php'); ?>

</body>

</html>
<script>
    $(document).ready(function() {
        $('#DepartmentNameError').hide();

        function showMessage(title, text, icon){
            swal({
                title: title,
                text: text,
                icon: icon
            });
        }


        $('#saveDepartment').click(function() {
            let departmentName = $('#DepartmentName').val();
            if(departmentName==''){
                $('#DepartmentNameError').show();
            }else{
              $('#saveDepartment').text('Please Wait...');
              $('#saveDepartment').attr('disabled',true);
                $.ajax({
                    url:'../scripts/departmentScripts.php',
                    method:'POST',
                    data:{departmentName},
                    dataType: 'json',
                    success:function(data){
                        setTimeout(() => {
                            showMessage(data.title, data.text, data.icon)
                            $('#saveDepartment').text('Save Department');
                            $('#saveDepartment').attr('disabled',false);
                            $('#DepartmentName').val('');
                        }, 3000);
                    }
                })
            }
            
        })
    });
</script>