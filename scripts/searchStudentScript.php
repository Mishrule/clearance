<?php
    require_once('db.php');
    require_once('datetime.php');

    //========Create a Approve
    $approvedStatusShow ='';
    if(isset($_POST['searchStudent'])){
        $searchStudent = mysqli_real_escape_string($con, $_POST['searchStudent']);
        $approvedClearanceYearGroup = mysqli_real_escape_string($con, $_POST['approvedClearanceYearGroup']);

        // $hallStudentMsg = '';
                                // $hallStudentID = "5151040051";
                                // $hallClearanceType = "Hall Clearance";
            $approvedStatusShow ='
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Clearance Type</th>
                    <th scope="col">Clearance Status</th>
                    
                    <th scope="col">Control</th>
                </tr>
            </thead>
            <tbody>
            ';
            $approveClearanceStatusSQL = "SELECT DISTINCT clearance_id, student_id, student_name, clearance_type, clearance_status FROM clearance WHERE student_id LIKe '%$searchStudent%' AND year_group='$approvedClearanceYearGroup'";

            $approveClearanceStatusResult = mysqli_query($con, $approveClearanceStatusSQL);
             $approveCount = 1;
            if (mysqli_num_rows($approveClearanceStatusResult) > 0) {
                while ($approveClearanceStatusRow = mysqli_fetch_array($approveClearanceStatusResult)) {
                    $approvedStatusShow .='  <tr>
                                <th scope="row">'.$approveCount.'</th>
                                <td>'.$approveClearanceStatusRow['student_id'].'</td>
                                <td>'.$approveClearanceStatusRow['student_name'].'</td>
                                <td>'.$approveClearanceStatusRow['clearance_type'].'</td>
                                <td>'.$approveClearanceStatusRow['clearance_status'].'</td>
                                <td><button type="button" id="'.$approveClearanceStatusRow['clearance_id'].'" name="'.$approveClearanceStatusRow['clearance_id'].'"  class="btn green radius-xl outline approve">Approve</button></td>                                     
                            </tr>
                        ';
                    $approveCount++;
                }
            }else{
                $approvedStatusShow .='  <tr>
                                           <th scope="row" colspan="6"><marquee><span class="text-dander">No Student Has Requested For Clearance</span></marquee></th>
                                        </tr>
                                        ';
            }

            $approvedStatusShow .='
                </tbody>
            </table>
            ';
            echo $approvedStatusShow;
    }

  
    //========Update  Approve
    if(isset($_POST['approveId'])){
        $approveId = mysqli_real_escape_string($con, $_POST['approveId']);
        // $student_index = mysqli_real_escape_string($con, $_POST['student_index']);
        // $approvedClearanceType = mysqli_real_escape_string($con, $_POST['approvedClearanceType']);
        $approvedClearanceYearGroup = mysqli_real_escape_string($con, $_POST['approvedClearanceYearGroup']);
        $appove = "Approved";

        $approveMessageArray = array();
        //$approveName = mysqli_real_escape_string($con, $_POST['approveName']);
        $createapproveSQL = "UPDATE clearance SET clearance_status='$appove', approved_date='$DateTime' WHERE clearance_id='$approveId' AND year_group='$approvedClearanceYearGroup'";
        $createapproveResult = mysqli_query($con, $createapproveSQL);
        if($createapproveResult){
            $approveMessageArray['title'] = "Success";
            $approveMessageArray['text'] = " Clearance is Approved";
            $approveMessageArray['icon'] = "success";
        }else{
            $approveMessageArray['title'] = "Error";
            $approveMessageArray['text'] = "Oops Failed to Save a approve ".mysqli_error($con);
            $approveMessageArray['icon'] = "warning";
        }
        echo json_encode($approveMessageArray);
    }

?>

