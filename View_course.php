<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','cms');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Table</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/bootstrap-grid.min.css">
     <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
</head>
<body>
    
        <div class="container">
                <div class="row">
                <div class="col-md-12 mt-4">
                <div class="card">
                        <div class="card-header">
                        <h4 class="title">View Course</h4>
                        </div>

                        <div class="card-body">
                            
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover  mt-4">
                                                 <thead>
                                             <tr>
                                                     <th scope="col">#</th>
                                                     <th scope="col">Subject Name</th>
                                                  
                                                     <th scope="col" colspan="2">Operator</th>

                                             </tr>
                                                 </thead>

                                                        <tbody>
                                                            <?php
                                                                $query="SELECT * FROM `add_course`";
                                                                $data=mysqli_query($conn,$query);
                                                                $i=1;
                                                                if(mysqli_num_rows($data)>0){
                                                                    while($row=mysqli_fetch_array($data)){

                                                                            echo "<tr>
                                                                                  <td>".$i++."</td>
                                                                                  <td>".$row['subject_name']."</td>
                                                                                  <td><a href='Update_course.php?course_id=$row[course_id]'>Edit</a></td>
                                                                                  <td><a href='delete_course.php?course_id=$row[course_id]'>Delete</a></td>
                                                                                </tr>";    

                                                                    }// End Loop

                                                                }else{

                                                                    
                                                                }

                                                            ?>
                                                        </tbody>
                                            </table><!--End Table-->
                                        </div><!--End Table Responsive-->
                             
                      </div><!--Card Body-->  
                        
                </div><!--End Card-->
                </div><!--End Col-->
                </div><!--End Row-->
        
        </div><!--End Container-->
</body>
</html>

