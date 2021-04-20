<?php
    require_once('db.php');
    require_once('datetime.php');

    //========Create a Approve
    $approvedStatusShow ='';
    if(isset($_POST['approvedClearanceType'])){
        $approvedClearanceType = mysqli_real_escape_string($con, $_POST['approvedClearanceType']);
        $approvedClearanceYearGroup = mysqli_real_escape_string($con, $_POST['approvedClearanceYearGroup']);
        $clearanceStatus = mysqli_real_escape_string($con, $_POST['clearanceStatus']);

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
                    
                    
                </tr>
            </thead>
            <tbody>
            ';
            $approveClearanceStatusSQL = "SELECT DISTINCT clearance_id, student_id, student_name, clearance_type, clearance_status FROM clearance WHERE clearance_type='$approvedClearanceType' AND year_group='$approvedClearanceYearGroup' AND clearance_status='$clearanceStatus'";

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

  

?>

