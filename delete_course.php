<?php
session_start();
$conn = mysqli_connect('localhost','root','','cms');

$uername=$_SESSION['username'];
if($uername==true){

}else{
    header("location:RegistrationForm.php");
}

$course_id = $_GET['course_id'];
$query="DELETE  FROM `add_course` WHERE `course_id`='$course_id'";
$data = mysqli_query($conn,$query);
if($data){
    ?>
        <script>
            alert('Deleted Successfully!');
            window.location.href='View_course.php';
        </script>
    <?php
}


?>