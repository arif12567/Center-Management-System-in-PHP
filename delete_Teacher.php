<?php
session_start();
$conn = mysqli_connect('localhost','root','','cms');

$uername=$_SESSION['username'];
if($uername==true){

}else{
    header("location:RegistrationForm.php");
}

$student_id = $_GET['teacher_id'];
$query="DELETE  FROM `add_teacher` WHERE `teacher_id`='$student_id'";
$data = mysqli_query($conn,$query);
if($data){
    ?>
        <script>
            alert('Deleted Successfully!');
            window.location.href='View_Teacher_Record.php';
        </script>
    <?php
}


?>