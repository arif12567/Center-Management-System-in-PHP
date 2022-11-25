<?php
$conn = mysqli_connect('localhost','root','','cms');
    $teacher= $_POST['course1'];

  
    $query="SELECT * FROM `add_teacher` Where `subject`='$teacher'";
     $data=mysqli_query($conn,$query);

        
    while($result_teacher=mysqli_fetch_assoc($data)){
        
     echo "<option>".$result_teacher['name']."</option>";
        
        
     }
    
?>

                                                    

                                               
                                                    


                                                    
                                               