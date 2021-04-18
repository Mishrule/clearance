<?php
    require_once('db.php');
    require_once('datetime.php');

    //========Create a yearGroup
    if(isset($_POST['yearGroupName'])){
        $yearGroupMessageArray = array();
        $yearGroupName = mysqli_real_escape_string($con, $_POST['yearGroupName']);
        $createyearGroupSQL = "INSERT INTO yearGroup VALUES('','$yearGroupName','$DateTime')";
        $createyearGroupResult = mysqli_query($con, $createyearGroupSQL);
        if($createyearGroupResult){
            $yearGroupMessageArray['title'] = "Success";
            $yearGroupMessageArray['text'] = $yearGroupName." Year Group Created Successfully";
            $yearGroupMessageArray['icon'] = "success";
        }else{
            $yearGroupMessageArray['title'] = "Error";
            $yearGroupMessageArray['text'] = "Oops Failed to Save a Year Group ".mysqli_error($con);
            $yearGroupMessageArray['icon'] = "warning";
        }
        echo json_encode($yearGroupMessageArray);
    }
?>