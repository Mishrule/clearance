<?php
    require_once('db.php');
    require_once('datetime.php');

    //========Create a Hall
    if(isset($_POST['hallName'])){
        $hallMessageArray = array();
        $hallName = mysqli_real_escape_string($con, $_POST['hallName']);
        $createHallSQL = "INSERT INTO hall VALUES('','$hallName','$DateTime')";
        $createHallResult = mysqli_query($con, $createHallSQL);
        if($createHallResult){
            $hallMessageArray['title'] = "Success";
            $hallMessageArray['text'] = $hallName." Hall Created Successfully";
            $hallMessageArray['icon'] = "success";
        }else{
            $hallMessageArray['title'] = "Error";
            $hallMessageArray['text'] = "Oops Failed to Save a Hall ".mysqli_error($con);
            $hallMessageArray['icon'] = "warning";
        }
        echo json_encode($hallMessageArray);
    }
?>