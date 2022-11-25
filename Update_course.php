<?php
session_start();

$conn = mysqli_connect('localhost','root','','cms');

    
$uername=$_SESSION['username'];
if($uername==true){

}else{
    header("location:RegistrationForm.php");
}

$course_id = $_GET['course_id'];

$query="SELECT * FROM `add_course` WHERE `course_id`='$course_id'";
$data=mysqli_query($conn,$query);
 $row=mysqli_fetch_assoc($data);


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
    <title>HomePage</title>
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
                                               <li class='nav-item'><a href="Add_Teacher.php" class='nav-link'>Add Teacher</a></li>
                                               <li class='nav-item'><a href="Search_student_data.php" class='nav-link'>Search</a></li>
                                               <li class='nav-item'><a href="View_Student_Record.php" class='nav-link'>View Student Record</a></li>
                                               
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
                                    <div class="card-header">Update Subject</div>
                                    <div class="card-body p-5">
                                    <form action="#" method='post'>
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control"   autocomplete="off" value="<?php echo $row['subject_name'] ?>">
                                        </div>
                   
                                        <div class="form-group">
                                            <input type="submit" name="edt_button" id="edt_button" class="form-control btn-primary" value="Update Course">
                                        </div>
                                        </form><!--End Form-->

                                    </div>
                                    </div><!--end col-->
                             </div>
                            </div>

                            <script src="js/jquery-3.5.1.min.js"></script> 
                                                <!-- Start JQuery and Ajax  -->
                            


                                                <?php // Student edt data start

                                                        if(isset($_POST['edt_button'])){

                                                            $name = $_POST['name'];
                                                           
                                                         
                                                            $course_id = $_GET['course_id'];
                                                            // $query ="INSERT INTO `add_student` (`name`,`fname`,`caste`,`address`) VALUES('$name','$fname','$caste','$address')";
                                                            $query = "UPDATE `add_course` SET `subject_name`='$name' WHERE `course_id`='$course_id'";
                                                            $data=mysqli_query($conn,$query);

                                                            if($data){
                                                                ?>
                                                                    <script>
                                                                        window.location.href='View_course.php';
                                                                    </script>
                                                                <?php
                                                            }else{
                                                                echo "<script>
                                                                alert('Data not Updated');
                                                                </script>";
                                                            }
                                                        }
                                                ?> <!--End student Edt data-->
                    </div><!--end container-->

                    

                       
                    

</body>
     <!--JQuery-->
     

<!--Popper javaScript-->
    <Script src="js/popper.min.js"></SCript>
     <Script src="js/bootstrap.min.js"></SCript>   
    <Script src="js/bootstrap.bundle.min.js"></SCript>
    <!--Font Awesome javaScript-->
    <SCript src="js/all.min.js"></SCript>
</html>