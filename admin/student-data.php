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
                <h4 class="breadcrumb-title">Load Student Data</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li>Upload Student Credentials</li>
                </ul>
            </div>

            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 col-md-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Upload Credentials</h4>
                            <p><strong>Note:</strong> The File to Upload is a template file which is part of this project. The file is a CSV file open the file and add you data after that save and close the file.</p>
                            <p><strong>Instruction:</strong> Browse the file from project direct root directory to click uploap.</p>
                            <p><strong><i>Take Note from the Template, The Access level field should student and in lowercase.</i></strong></p>
                        </div>
                        <div class="row">
                            <form id="exportCSV" class="form" enctype="multipart/form-data" method="post">
                            <table class="table m-3">
                                <tr>
                                    <td><input type="file" id="fileUpload" name="fileUpload" class="form-control"/></td>
                                    <td> <input type="submit" id="uploadBTN" name="uploadBTN" value="Upload Data" class="btn btn-success "/></td>
                                </tr>
                            </table>
                            
                            </form>
                        </div>
                        <hr/>
                        <div id="result">

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
        
        
        $('#exportCSV').on('submit', function(event){
            event.preventDefault();
            
            $.ajax({
                url: '../scripts/export.php',
                method: 'POST',
                data: new FormData(this),
                contentType:false,
                processData: false,
                cache: false,
                success:function(data){
                    $('#result').html(data);
                    
                    setTimeout(() => {
                        $(".alert").alert('close')
                    }, 5000);
                   
                }
            })
        });      
    });
</script>