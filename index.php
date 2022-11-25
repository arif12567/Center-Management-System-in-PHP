<?php
    session_start();

    $conn = mysqli_connect('localhost','root','','cms');
    
    
    $email=$_POST['email'];
    $password1=$_POST['password'];

            $query="SELECT* FROM `registrationform` WHERE `email`='$email' && `password`='$password1'";
           $data= mysqli_query($conn,$query);
           $total=mysqli_num_rows($data);

        
            if($total==1){
                $_SESSION['username']=$email;
                header("location:HomePage.php");
            }else{
                header("location:RegistrationForm.php");
            }
        
?>