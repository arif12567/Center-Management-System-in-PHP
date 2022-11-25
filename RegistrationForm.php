<?php
    session_start();

  $conn = mysqli_connect('localhost','root','','cms')
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/bootstrap-grid.min.css">
     <link rel="stylesheet" href="css/bootstrap-reboot.min.css">

     <!--Custom CSS-->
     <link rel="stylesheet" href="style.css">
     <style>
             body{
                background-color:  whitesmoke;
             }
             marquee{
                     background-color: rgb(60, 131, 131);
                     color: white;
             }
     </style>

</head>
<body>




        <div class="container-fluid">
               
                <div class='row py-3'>
                        <div class='col'>

                            <nav class='navbar navbar-expand-lg navbar-dark bg-primary'>
                                        <a href="" class='navbar-brand'><img src="Image/admin.PNG" width='33px' height='33px' alt="" class='mr-2'> A Khaliq Brohi.....</a>

                                        <button class='navbar-toggler' data-toggle='collapse' data-target='#CMS'>
                                                <span class='navbar-toggler-icon'></span>
                                        </button>
                                        <div class='collapse navbar-collapse' id='CMS'>
                                        <ul class='navbar-nav'>
                                                <li class='nav-item'><a href="" class='nav-link'>Home</a></li>
                                                <li class='nav-item'><a href="" class='nav-link'>About</a></li>
                                                <li class='nav-item'><a href="" class='nav-link'>Contact Us</a></li>
                                                
                                                <li class='nav-item'><a href="#loginForm" class='nav-link'>Login</a></li>
                                        </ul>

                                        
                                        </div>
                                </nav><!--End Nav-->
                        
                        </div><!--End Col-->
                
                </div><!--End Row-->
        </div><!--End Fluid Container-->

    

        <div class='container'>

        <h1 class='py-1 text-center'>Center Management System</h1><br>

                                        
                               
                        
                        <div class='row'>
                        <div class='col-12'>
                                <div class='card'>
                                                <img src='Image/slide(1).jpeg' alt="" id="slideImage" style="height:385px">
                                </div>

                        </div>
                        </div><!--End Row-->
                        <br><br>
                        <script>
                                var a=2;
                                function Slider(){
                                 var src = "Image/slide("+a+").jpeg";
                                        document.getElementById("slideImage").src=src;

                                a++;
                                if(a>6){
                                 a=1;
                                }
                                }
                                setInterval('Slider()',3000);
                        </script>
        

               <div id='marqu'>
                <marquee behavior="" direction="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, dolorum quod dolores laborum asperiores atque neque nemo cupiditate, eaque ratione incidunt minus error? Eaque, vero deserunt suscipit molestiae numquam eos!</marquee>
                </div><br><br>

                <div class='row mb-5 mt-5'>
                        <div class='col-12'>

                        <div class='card ml-3 mr-3 p-5  bg-light' id="loginForm" >
                                        <div class="card-header bg-success p-3  ">
                                        <h2 class="card-title">Login Form</h2>
                                        </div><!--end card header-->

                                        <div class='card-body p-5 '>
                                        <form action="index.php" method='post'>
                                        
                                <div class='form-group'>
                                <input type="text" name="email" id="name" class='form-control' placeholder='Email' autocomplete='off'>
                                </div>
                                <div class='form-group'>
                                <input type="text" name="password" id="password" class='form-control' placeholder="Password" autocomplete='off'>
                                </div><br>

                                <input type='submit' name='login' class='form-control btn btn-primary'  value='Login'>

                                         </form><!--end form-->
                                        </div><!--end card body-->
                        </div><!--end card-->
                        
                        </div><!--End Col-->
                </div><!--End Row-->




        </div><!-- End Container-->
        
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