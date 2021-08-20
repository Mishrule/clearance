<?php
error_reporting(0);

    if(!empty($_FILES['fileUpload']['name'])){
        $connect = mysqli_connect("localhost","root","","soc");
        $output = "";
        $allowed_ext = array("csv");
        $fileName = $_FILES["fileUpload"]["name"];
        $extension = end(explode(".", $fileName));
        try {
            if(in_array($extension, $allowed_ext)){
                $file_data = fopen($_FILES["fileUpload"]["tmp_name"], "r");
                fgetcsv($file_data);
                while($row = fgetcsv($file_data)){
                            $student_index = mysqli_real_escape_string($connect, $row[0]);
                            $student_name = mysqli_real_escape_string($connect, $row[1]);
                            $student_password = mysqli_real_escape_string($connect, $row[2]);
                            $student_email = mysqli_real_escape_string($connect, $row[3]);
                            $student_gender = mysqli_real_escape_string($connect, $row[4]);
                            $student_contact = mysqli_real_escape_string($connect, $row[5]);
                            $student_department = mysqli_real_escape_string($connect, $row[6]);
                            $student_hall = mysqli_real_escape_string($connect, $row[7]);
                            $student_yeargroup = mysqli_real_escape_string($connect, $row[8]);
                            $student_image = mysqli_real_escape_string($connect, $row[9]);
                            $registered_date = mysqli_real_escape_string($connect, $row[10]);
                            $access_level = mysqli_real_escape_string($connect, $row[11]);
                        
                        $query = "INSERT INTO student VALUES('','$student_index','$student_name', '$student_password','$student_email','$student_gender','$student_contact','$student_department','$student_hall', '$student_yeargroup','$student_image','$registered_date','$access_level')";
    
                           $result = mysqli_query($connect, $query);
                           if($result){
                              
                               echo '
                               <div class="alert alert-success alert-dismissible fade show" role="alert">
                               <strong>'.$student_name.'</strong> Records Updated Successfully.
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                             </div>
                               ';
                           }else{
                               echo '
                               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                               <strong>'.mysqli_error($connect).'</strong> Records Updated Successfully.
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                             </div>
                               ' ;
                           }
                }
            }else{
                echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Invalid File Extension:</strong> File Extension must be csv and must have the Columns in the project.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                ';
            }
        } catch (Exception $e) {
           
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Caught exception:</strong> '.$e->getMessage().'.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            ';
        }
        
    }else{
       
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>File Not Supported</strong> Please use the template from the project.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        ';
    }
?> 