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
                                               <li class='nav-item'><a href="View_Student_Record.php" class='nav-link'>View Student</a></li>
                                               
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
                                    <div class="card-header">Add Student</div>
                                    <div class="card-body p-5">
                                    <form action="#" method='post'>
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control"  placeholder="Name" autocomplete="off">
                                        </div>

                                        <div class='form-group'>
                                        <input type="text" name="F_name" id="F_name" class="form-control" placeholder="Father's Name" autocomplete="off">
                                        </div>

                                        <div class='form-group'>
                                        <input type="text" name="caste" id="caste" class="form-control" placeholder="Caste" autocomplete="off">
                                        </div>

                                        <div class='form-group'>
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Address" autocomplete="off">
                                        </div>

                                        <select name="select_subject" id="course">
                                            <option value='course'>Select Course</option>

                                                <?php
                                                    $query_teacher="SELECT * FROM `add_teacher`";             
                                                    $data=mysqli_query($conn,$query_teacher);
                                                   

                                                    while($result_teacher=mysqli_fetch_assoc($data)){
                                                        echo "<option>".$result_teacher['subject']."</option>";
                                                    }
                                                ?>
                                        
                                        </select>
                                                    <br><br>

                                                    <select name="select_teacher" id="teacher">
                                                    <option value='course'>Select Teacher</option>     
                                                
                                    
                                        </select>
                                                    <br><br>           
                                        <div class="form-group">
                                            <input type="submit" name="Add_button" id="Add_student" class="form-control btn-primary" value="Add Student">
                                        </div>
                                        </form><!--End Form-->

                                    </div>
                                    </div><!--end col-->
                             </div>
                            </div>

                            <script src="js/jquery-3.5.1.min.js"></script> 
                                                <!-- Start JQuery and Ajax  -->
                            <script>
                                             $(document).ready(function(){

                                                    $('#Add_student').click(function(){
                                                            var course=$('#course').val();
                                                            var teacher=$('#teacher').val();

                                                               
                                                                if(course=="course"){
                                                                    alert("Plz Select Course Subject");
                                                                }
                                                               else if(teacher=="teacher"){
                                                                    alert("Plz Select Teacher Name");
                                                                }

                                                            });//end click student button

                                                            $("#course").change(function(){
                                                                var course=$('#course').val();
                                                                
                                                                
                                                                $.ajax({
				                                                type: 'POST',
				                                                url: 'select_teacher.php',
				                                                data: {course1:course},
				                                                success: (function(msg){
                                                                $('#teacher').html(msg)
				                                                    }),
                                                                    
                                                                })// end ajax
                                                                
                                                            })
                                                    })//
                                                </script><!-- End JQuery and Ajax  -->


                                                <?php // Student Insert data start

                                                        if(isset($_POST['Add_button'])){

                                                            $name = $_POST['name'];
                                                            $fname = $_POST['F_name'];
                                                            $caste = $_POST['caste'];
                                                            $address = $_POST['address'];
                                                            $subject = $_POST['select_subject'];
                                                            $teacher = $_POST['select_teacher'];

                                                            $query ="INSERT INTO `add_student` (`name`,`fname`,`caste`,`address`,`subject`,`teacher`) VALUES('$name','$fname','$caste','$address','$subject','$teacher')";
                                                            $data=mysqli_query($conn,$query);

                                                            if($data){
                                                                echo "<script>
                                                                    alert('Data Submit Successfully');
                                                                    </script>";
                                                            }else{
                                                                echo "<script>
                                                                alert('Data not Insert');
                                                                </script>";
                                                            }
                                                        }
                                                ?> <!--End student insert data-->
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