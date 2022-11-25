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
$result=mysqli_fetch_assoc($data);
    
    
    // echo "<br><br>".$result['ts'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/bootstrap-grid.min.css">
     <link rel="stylesheet" href="css/bootstrap-reboot.min.css">

     <!--Custom CSS-->

     <style>
         select{
             width: 100%;
             height: 35px;
         }
     </style>

</head>
<body>
        
<div class="container-fluid">
               
               <div class='row py-3'>
                       <div class='col'>

                               <nav class='navbar navbar-expand-lg navbar-dark bg-danger'>
                                       <a href="" class='navbar-brand'><img src="Image/admin.PNG" width='33px' height='33px' alt="" class='mr-2'><?php echo "Welcome  ".$result['name']; ?></a>

                                       <button class='navbar-toggler' data-toggle='collapse' data-target='#CMS'>
                                               <span class='navbar-toggler-icon'></span>
                                       </button>
                                       <div class='collapse navbar-collapse' id='CMS'>
                                       <ul class='navbar-nav'>
                                               <li class='nav-item'><a href="HomePage.php" class='nav-link'>Home</a></li>
                                              
                                               
                                               <li class='nav-item'><a href="add_course.php" class='nav-link'>Add Course</a></li>
                                               <li class='nav-item'><a href="Add_Student.php" class='nav-link'>Add Student</a></li>
                                               <li class='nav-item'><a href=" View_Teacher_Record.php" class='nav-link'>View Teacher</a></li>
                                              
                                       </ul>
                                       <li class='navbar-text'><a href="logout.php" class='nav-link'>Logout</a></li>
                                       
                                       </div>
                               </nav><!--End Nav-->
                       
                       </div><!--End Col-->
               
               </div><!--End Row-->
       </div><!--End Fluid Container-->

                    <div class="container">
                            <div class="row mt-5 mb-5">
                            <div class="col">
                                <div class="card ">
                                    <div class="card-header">Add Teacher Data</div>
                                    <div class="card-body p-5">
                                    <form action="#" method='post'>
                                        <div class="form-group">
                                            <input type="text" name="t_name" id="t_name" class="form-control" placeholder="Name" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="t_caste" id="t_caste" class="form-control" placeholder="Caste" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="t_CNIC" id="t_CNIC" class="form-control" placeholder="CNIC No#" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="t_address" id="t_address" class="form-control" placeholder="Address" autocomplete="off">
                                        </div>
                                        <div>
                                            <!--Start Select-->
                                        <select  name="select_course" id="select_course">
                                                <option>Select Course</option>
                                                <?php 
                                                    $query_course="SELECT * FROM `add_course`";
                                                    $dta=mysqli_query($conn,$query_course);
                                                    

                                                    while($show=mysqli_fetch_assoc($dta))
                                                    {
                                                        echo "<option>".$show['subject_name']."</option>";
                                                    }

                                                ?>
                                        </select>
                                        <!--End Select-->
                                        </div>
                                            <br>
                                        <div class="form-group">
                                            <input type="submit" name="Add_teacher" id="Add_teacher" class="form-control btn-primary" value="Add Teacher">
                                        </div>
                                        </form><!--End Form-->
                                    </div>
                                    </div><!--end col-->
                                </div>
                            </div>
                    </div><!--end container-->



                    <?php

                        if(isset($_POST['Add_teacher'])){
                                
                            $name=$_POST['t_name'];
                            $caste=$_POST['t_caste'];
                            $cnic=$_POST['t_CNIC'];
                            $address=$_POST['t_address'];
                            $subject=$_POST['select_course'];
                            
                            $query="INSERT INTO `add_teacher`(`name`,`caste`,`cnic`,`address`,`subject`) VALUES ('$name','$caste','$cnic','$address','$subject')";
                            $data=mysqli_query($conn,$query);

                            if($data){
                                echo "<script>
                                    alert('Data Submitted Successfully');
                                </script>";
                            }else{
                                echo "<script>
                                alert('Data Not Inserted');
                            </script>";
                            }
                        }
                    ?>

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
