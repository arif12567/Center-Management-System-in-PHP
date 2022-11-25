<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','cms');

$uername=$_SESSION['username'];
if($uername==true){

}else{
    header("location:RegistrationForm.php");
}

$query="SELECT * FROM `registrationform` WHERE `email`='$uername'";

$data= mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
         <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/bootstrap-grid.min.css">
     <link rel="stylesheet" href="css/bootstrap-reboot.min.css">

     <style>
        a{
            
            color: white;
        }
        a:hover{
            color: white;
            text-decoration: none;
        }
     </style>

</head>
<body>

        <div class="container">
            <div class='row'>
            <div class='col-md-12 mt-4'>
            <div class="card">
                <div class="card-header">
                <h4 class='card-title'>Search Student ID</h4>
                </div>

                <div class="card-body">
                    <div class='row'>
                        <div class='col-md-6'>
                        <form action="#" method='post'>
                            <div class="form-group">
                            <input type="text" name="get_id" id="get_id" class="form-control" placeholder="Enter Student Name" autocomplete="off" required>
                            
                            </div>
                            <button type='submit' name="search_by_id" class='btn btn-primary'>Search</button>
                            <button type='submit' name="search_by_id"  class='btn btn-danger'><a href="Add_Student.php">Go Back</a></button>
                            </form>
                        </div>
                    </div>

                    <?php
                                   
                        
                    ?>

                    <div class="table-responsive" >
                        <table class='table table-bordered table-hover  mt-4' >
                                <thead>
                                        <tr>
                                            <th scope="col">#ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Father's Name</th>
                                            <th scope="col">Caste</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Teacher</th>
                                            <th scope="col">Date Of Admission</th>

                                        </tr>
                                </thead>

                                <tbody>
                                <?php
                                        if(isset($_POST['search_by_id']))
                                        {
            
                                            $student_id=$_POST['get_id'];
                                            $query= "SELECT * FROM `add_student`  WHERE  `name` LIKE '$student_id%' ";
                                            $data=mysqli_query($conn,$query);

                                        if(mysqli_num_rows($data)>0){
                                            while($row = mysqli_fetch_array($data))
                                            {
                                ?>
                                    <tr>
                                        <td><?php echo $row['student_id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['caste']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['subject']; ?></td>
                                        <td><?php echo $row['teacher']; ?></td>
                                        <td><?php echo $row['st']; ?></td>
                                    </tr>  

                                    <?php
                                                 }// end while loops
                                                }// end mysqli_num_rows
                                                else
                                                {
                                                    ?>
                                                        <tr>
                                                            <td colspan="8">No Data Available</td>
                                                        </tr>

                                                    <?php
                                                }// end else
                                            }// end isset if
                                    ?>
                                </tbody>
                        </table>
                    </div><!--Table responsive-->

                    
                </div><!--end card body-->
            </div>

            </div><!--end col-->
            </div><!--End Row-->
        
        </div><!--End Container-->

</body>

     <!--JQuery-->
     <script src="js/jquery-3.5.1.min.js"></script>  

<!--Popper javaScript-->
    <Script src="js/popper.min.js"></SCript>
     <Script src="js/bootstrap.min.js"></SCript>   
    <Script src="js/bootstrap.bundle.min.js"></SCript>
    <!--Font Awesome javaScript-->
    <SCript src="js/all.min.js"></SCript>
</html>

