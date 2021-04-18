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
                <div class="col-lg-8 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Create A Clearance Type</h4>
                        </div>
                        <div class="widget-inner">
                            <div class="widget-inner">
                                <form class="edit-profile m-b30">
                                    <div class="">
                                        <div class="form-group row">
                                            <div class="col-sm-10  ml-auto">
                                                <h3>1. Clearance Type Details</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Clearance Title</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" id="clearanceTitle" name="clearanceTitle" type="text">
                                                <p class="text-danger" id="clearanceTitleError">Clearance Title Cannot be empty</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                </div>
                                                <div class="col-sm-7">
                                                    <button type="button" id="saveHall" name="saveHall" class="btn">Save Hall</button>
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
                            <h4>Created Hall</h4>
                        </div>
                        <div class="widget-inner">
                            <div class="noti-box-list">
                                <ul>
                                    
                                    <?php 
                                        $showHallDetailSQL = "SELECT * FROM hall";
                                        $showHallDetailResult = mysqli_query($con, $showHallDetailSQL);
                                        if(mysqli_num_rows($showHallDetailResult)>0){
                                            while($showHallDetailRow = mysqli_fetch_array( $showHallDetailResult)){
                                                
                                                echo '<li>
                                                <span class="notification-icon dashbg-gray">
                                                <i class="fa fa-check"></i>
                                                </span>
                                                <span class="notification-text">
                                                    '.$showHallDetailRow['hall_name'].'
                                                </span>
                                                <span class="notification-time">
                                                    <a href="#" class="fa fa-close"></a>
                                                    <span>'.$showHallDetailRow['created_date'].'</span>
                                                </span></li>
                                                ';
                                            }
                                        }else{
                                            echo '<li>
                                            <span class="notification-icon dashbg-gray">
                                            <i class="fa fa-check"></i>
                                            </span>
                                            <span class="notification-text">
                                                NO Hall Created Yet'.mysqli_error($con).'
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
        $('#clearanceTitleError').hide();

        function showMessage(title, text, icon){
            swal({
                title: title,
                text: text,
                icon: icon
            });
        }


        $('#saveHall').click(function() {
            let clearanceTitle = $('#clearanceTitle').val();
            if(clearanceTitle==''){
                $('#clearanceTitleError').show();
            }else{
              $('#saveHall').text('Please Wait...');
              $('#saveHall').attr('disabled',true);
                $.ajax({
                    url:'../scripts/hallScripts.php',
                    method:'POST',
                    data:{clearanceTitle},
                    dataType: 'json',
                    success:function(data){
                        setTimeout(() => {
                            showMessage(data.title, data.text, data.icon)
                            $('#saveHall').text('Save Hall');
                            $('#saveHall').attr('disabled',false);
                            $('#clearanceTitle').val('');
                        }, 3000);
                    }
                })
            }
            
        })
    });
</script>