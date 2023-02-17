<?php
session_start();
?>


<?php
error_reporting(0);
$msg= $_REQUEST['msg'];
if($msg==1){
    $err="*invalid emaii or password";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM HAII</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5"><center>
        <div class="col-sm-4 bg-success h-100">
            <h2 style="color:white;">_ Admin Login _</h2>
            <form action="login_data.php"  method="post" class="form-control" enctype="multipart/form-data">
                   <span>
                    <?php
                     echo $err; 
                     ?>
                     </span>
                 <input type="email" name="email" id="email" class="form-control" placeholder="enter email"><br>
                 <input type="password" name="password" id="password" class="form-control" placeholder="enter password"><br><br>
                 <button  type="submit"class="btn btn-primary  FORM-CONTROL  p-2" >
                    LOGIN
                 </button>

            </form>
            <button class="btn bg-w" onclick="location.href='http://localhost/myproject/'"> Back to home</button>
        </div>
</center>
    </div>
               
</body>
</html>