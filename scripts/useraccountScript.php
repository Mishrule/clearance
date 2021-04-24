<?php
    require_once('db.php');
    require_once('datetime.php');

    //========Create a Hall
    if(isset($_POST['updateBtn'])){
        $userAccountMessageArray = array();
        $staffID =  mysqli_real_escape_string($con, $_POST['staffID']);
        $fullName =  mysqli_real_escape_string($con, $_POST['fullName']);
        $staffPassword =  mysqli_real_escape_string($con, $_POST['staffPassword']);
        $staff_email =  mysqli_real_escape_string($con, $_POST['staff_email']);
        $staffGender =  mysqli_real_escape_string($con, $_POST['staffGender']);
        $staffContact =  mysqli_real_escape_string($con, $_POST['staffContact']);
        $staffAccessLevel =  mysqli_real_escape_string($con, $_POST['staffAccessLevel']);

        $createuserAccountSQL = "INSERT INTO account VALUES('','$staffID','$staffPassword','$fullName','$staff_email','$staffGender','$staffContact','$staffAccessLevel','$DateTime')";
        $createuserAccountResult = mysqli_query($con, $createuserAccountSQL);
        if($createuserAccountResult){
            $userAccountMessageArray['title'] = "Success";
            $userAccountMessageArray['text'] = $fullName." Account Created Successfully";
            $userAccountMessageArray['icon'] = "success";
        }else{
            $userAccountMessageArray['title'] = "Error";
            $userAccountMessageArray['text'] = "Oops Failed to Save a Account ".mysqli_error($con);
            $userAccountMessageArray['icon'] = "warning";
        }
        echo json_encode($userAccountMessageArray);
    }

   
?>