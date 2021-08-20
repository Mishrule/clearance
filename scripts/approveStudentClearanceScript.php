<?php
    require_once('db.php');
    require_once('datetime.php');
    $approvedClearanceType = '';
    $approvedClearanceYearGroup = '';
    //========Create a Approve
    $approvedStatusShow ='';
    if(isset($_POST['approvedClearanceType'])){
        $approvedClearanceType = mysqli_real_escape_string($con, $_POST['approvedClearanceType']);
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
            $approveClearanceStatusSQL = "SELECT DISTINCT clearance_id, student_id, student_name, clearance_type, clearance_status FROM clearance WHERE clearance_type='$approvedClearanceType' AND year_group='$approvedClearanceYearGroup'";

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
                                <td><button type="button" id="'.$approveClearanceStatusRow['clearance_id'].'" name="'.$approveClearanceStatusRow['clearance_id'].'" class="btn green radius-xl outline approve">Approve</button></td>                                     
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
        $approveMessageArray = array();
        $approveId = mysqli_real_escape_string($con, $_POST['approveId']);
        // $student_index = mysqli_real_escape_string($con, $_POST['student_index']);
        $getName = mysqli_real_escape_string($con, $_POST['getName']);
        $approvedClearanceYearGroup = mysqli_real_escape_string($con, $_POST['approvedClearanceYearGroup']);
        $appove = "Approved";

        
        //$approveName = mysqli_real_escape_string($con, $_POST['approveName']);
        $createapproveSQL = "UPDATE clearance SET clearance_status='$appove', approved_date='$DateTime', approved_by='$getName' WHERE clearance_id='$approveId' AND year_group='$approvedClearanceYearGroup'";
        $createapproveResult = mysqli_query($con, $createapproveSQL);
        // print_r($createapproveSQL);
       if($createapproveResult){
            $approveMessageArray['title'] = "Success";
            $approveMessageArray['text'] = "Clearance is Approved";
            $approveMessageArray['icon'] = "success";
        }else{
            $approveMessageArray['title'] = "Error";
            $approveMessageArray['text'] = "Oops Failed to Approve Request ".mysqli_error($con);
            $approveMessageArray['icon'] = "warning";
        }
        echo json_encode($approveMessageArray);
    }

?>

