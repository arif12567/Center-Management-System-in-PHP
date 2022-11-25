<?php
session_start();
$conn = mysqli_connect('localhost','root','','cms');

$uername=$_SESSION['username'];
if($uername==true){

}else{
    header("location:RegistrationForm.php");
}

$student_id = $_GET['student_id'];
$query="DELETE  FROM `add_student` WHERE `student_id`='$student_id'";
$data = mysqli_query($conn,$query);
if($data){
    ?>
        <script>
            alert('Deleted Successfully!');
            window.location.href='View_Student_Record.php';
        </script>
    <?php
}


?>