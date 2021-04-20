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
                <h4 class="breadcrumb-title">Create Year Group</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li>Create Year Group</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-8 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Create A yearGroup</h4>
                        </div>
                        <div class="widget-inner">
                            <div class="widget-inner">
                                <form class="edit-profile m-b30">
                                    <div class="">
                                        <div class="form-group row">
                                            <div class="col-sm-10  ml-auto">
                                                <h3>1. Year Group Details</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Year Group</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" id="yearGroupName" name="yearGroupName" type="number">
                                                <p class="text-danger" id="yearGroupNameError">Year Group  Cannot be empty</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                </div>
                                                <div class="col-sm-7">
                                                    <button type="button" id="saveyearGroup" name="saveyearGroup" class="btn">Save Year Group</button>
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
                            <h4>Created yearGroup</h4>
                        </div>
                        <div class="widget-inner">
                            <div class="noti-box-list">
                                <ul>
                                    
                                    <?php 
                                        $showyearGroupDetailSQL = "SELECT * FROM yearGroup ORDER BY created_date DESC";
                                        $showyearGroupDetailResult = mysqli_query($con, $showyearGroupDetailSQL);
                                        if(mysqli_num_rows($showyearGroupDetailResult)>0){
                                            while($showyearGroupDetailRow = mysqli_fetch_array( $showyearGroupDetailResult)){
                                                
                                                echo '<li>
                                                <span class="notification-icon dashbg-gray">
                                                <i class="fa fa-check"></i>
                                                </span>
                                                <span class="notification-text">
                                                    '.$showyearGroupDetailRow['years_year'].'
                                                </span>
                                                <span class="notification-time">
                                                    <a href="#" class="fa fa-close"></a>
                                                    <span>'.$showyearGroupDetailRow['created_date'].'</span>
                                                </span></li>
                                                ';
                                            }
                                        }else{
                                            echo '<li>
                                            <span class="notification-icon dashbg-gray">
                                            <i class="fa fa-check"></i>
                                            </span>
                                            <span class="notification-text">
                                                NO yearGroup Created Yet'.mysqli_error($con).'
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
        $('#yearGroupNameError').hide();

        function showMessage(title, text, icon){
            swal({
                title: title,
                text: text,
                icon: icon
            });
        }


        $('#saveyearGroup').click(function() {
            let yearGroupName = $('#yearGroupName').val();
            // alert(yearGroupName);
            
            if(yearGroupName == ''){
                $('#yearGroupNameError').show();
            }else{
              $('#saveyearGroup').text('Please Wait...');
              $('#saveyearGroup').attr('disabled',true);
                $.ajax({
                    url:'../scripts/yearGroupScripts.php',
                    method:'POST',
                    data:{yearGroupName},
                    dataType: 'json',
                    success:function(data){
                        setTimeout(() => {
                            showMessage(data.title, data.text, data.icon)
                            $('#saveyearGroup').text('Save yearGroup');
                            $('#saveyearGroup').attr('disabled',false);
                            $('#yearGroupName').val('');
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        }, 3000);
                    }
                })
            }
           
        })
    });
</script>