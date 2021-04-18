<?php
    require_once('db.php');
    require_once('datetime.php');

    //========Create a Department
    if(isset($_POST['departmentName'])){
        $departmentMessageArray = array();
        $departmentName = mysqli_real_escape_string($con, $_POST['departmentName']);
        $createdepartmentSQL = "INSERT INTO department VALUES('','$departmentName','$DateTime')";
        $createdepartmentResult = mysqli_query($con, $createdepartmentSQL);
        if($createdepartmentResult){
            $departmentMessageArray['title'] = "Success";
            $departmentMessageArray['text'] = $departmentName." Department Created Successfully";
            $departmentMessageArray['icon'] = "success";
        }else{
            $departmentMessageArray['title'] = "Error";
            $departmentMessageArray['text'] = "Oops Failed to Save a Department ".mysqli_error($con);
            $departmentMessageArray['icon'] = "warning";
        }
        echo json_encode($departmentMessageArray);
    }
?>