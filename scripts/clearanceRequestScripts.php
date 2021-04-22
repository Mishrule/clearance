<?php
    require_once('db.php');
    require_once('datetime.php');
    
    
    $studentid = mysqli_real_escape_string($con, $_POST['hdStudentID']);
    $studentname = mysqli_real_escape_string($con, $_POST['hdfullName']);

    //========Create a financialClearance
    if(isset($_POST['financialRequestBTN'])){
        $financialClearanceMessageArray = array();
        $financialClearanceName = mysqli_real_escape_string($con, $_POST['financial_title']);
        $financial_status = mysqli_real_escape_string($con, $_POST['financial_status']);
        $financialYear = mysqli_real_escape_string($con, $_POST['financialYear']);
        

        $createfinancialClearanceSQL = "INSERT INTO clearance VALUES('','$studentid','$studentname','$financialClearanceName','$financial_status','$financialYear','$DateTime','')";

        $createfinancialClearanceResult = mysqli_query($con, $createfinancialClearanceSQL);

        if($createfinancialClearanceResult){
            $financialClearanceMessageArray['title'] = "Success";
            $financialClearanceMessageArray['text'] = $financialClearanceName." Has been set wait for approval";
            $financialClearanceMessageArray['icon'] = "success";
        }else{
            $financialClearanceMessageArray['title'] = "Error";
            $financialClearanceMessageArray['text'] = "Oops Failed to Save a financialClearance ".mysqli_error($con);
            $financialClearanceMessageArray['icon'] = "warning";
        }
        echo json_encode($financialClearanceMessageArray);
    }

    //========Create a departmentClearance
    if(isset($_POST['departmentRequestBTN'])){
        $departmentClearanceMessageArray = array();
        $departmentClearanceName = mysqli_real_escape_string($con, $_POST['department_title']);
        $department_status = mysqli_real_escape_string($con, $_POST['department_status']);
        $departmentYear = mysqli_real_escape_string($con, $_POST['departmentYear']);
        // $studentid = $login_Session_studentID;
        // $studentname = hdfullName;

        $createdepartmentClearanceSQL = "INSERT INTO clearance VALUES('','$studentid','$studentname','$departmentClearanceName','$department_status','$departmentYear','$DateTime','')";

        $createdepartmentClearanceResult = mysqli_query($con, $createdepartmentClearanceSQL);

        if($createdepartmentClearanceResult){
            $departmentClearanceMessageArray['title'] = "Success";
            $departmentClearanceMessageArray['text'] = $departmentClearanceName." Has been set wait for approval";
            $departmentClearanceMessageArray['icon'] = "success";
        }else{
            $departmentClearanceMessageArray['title'] = "Error";
            $departmentClearanceMessageArray['text'] = "Oops Failed to Save a departmentClearance ".mysqli_error($con);
            $departmentClearanceMessageArray['icon'] = "warning";
        }
        echo json_encode($departmentClearanceMessageArray);
    }

     //========Create a Library Clearance
     if(isset($_POST['libraryRequestBTN'])){
        $libraryClearanceMessageArray = array();
        $libraryClearanceName = mysqli_real_escape_string($con, $_POST['library_title']);
        $library_status = mysqli_real_escape_string($con, $_POST['library_status']);
        $libraryYear = mysqli_real_escape_string($con, $_POST['libraryYear']);
        // $studentid = $login_Session_studentID;
        // $studentname = hdfullName;

        $createlibraryClearanceSQL = "INSERT INTO clearance VALUES('','$studentid','$studentname','$libraryClearanceName','$library_status','$libraryYear','$DateTime','')";

        $createlibraryClearanceResult = mysqli_query($con, $createlibraryClearanceSQL);

        if($createlibraryClearanceResult){
            $libraryClearanceMessageArray['title'] = "Success";
            $libraryClearanceMessageArray['text'] = $libraryClearanceName." Has been set wait for approval";
            $libraryClearanceMessageArray['icon'] = "success";
        }else{
            $libraryClearanceMessageArray['title'] = "Error";
            $libraryClearanceMessageArray['text'] = "Oops Failed to Save a libraryClearance ".mysqli_error($con);
            $libraryClearanceMessageArray['icon'] = "warning";
        }
        echo json_encode($libraryClearanceMessageArray);
    }

     //========Create a Hall Clearance
     if(isset($_POST['hallRequestBTN'])){
        $hallClearanceMessageArray = array();
        $hallClearanceName = mysqli_real_escape_string($con, $_POST['hall_title']);
        $hall_status = mysqli_real_escape_string($con, $_POST['hall_status']);
        $hallYear = mysqli_real_escape_string($con, $_POST['hallYear']);
        // $studentid = $login_Session_studentID;
        // $studentname = hdfullName;

        $createhallClearanceSQL = "INSERT INTO clearance VALUES('','$studentid','$studentname','$hallClearanceName','$hall_status','$hallYear','$DateTime','')";

        $createhallClearanceResult = mysqli_query($con, $createhallClearanceSQL);

        if($createhallClearanceResult){
            $hallClearanceMessageArray['title'] = "Success";
            $hallClearanceMessageArray['text'] = $hallClearanceName." Has been set wait for approval";
            $hallClearanceMessageArray['icon'] = "success";
        }else{
            $hallClearanceMessageArray['title'] = "Error";
            $hallClearanceMessageArray['text'] = "Oops Failed to Save a hallClearance ".mysqli_error($con);
            $hallClearanceMessageArray['icon'] = "warning";
        }
        echo json_encode($hallClearanceMessageArray);
    }
?>