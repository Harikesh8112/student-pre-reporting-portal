<?php
session_start();
if($_SESSION["user"]==""&&($_SESSION["user"]==0)){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admine Zone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="project1.css" rel="stylesheet"/>
    <style>

        li
        {
           height:40px;
           background-color:blue;
           display:block;
           border-bottom:2px solid grey;
           border-radius:50%;
           text-align:center;
        }
        a
        {
         text-decoration:none;
         color:white;
         
        }
        li:hover
        {
            background-color:green;
        }
        a:hover
        {
            color:red;
        }
        input 
        {
            color:red;
        }
        
    </style>
</head>
<body>
    <!-----First Row--->
    <div class="header">
        <div class="container-fluid">
            <div class="row" style="min-height:150px;">
                <div class="col-sm-1"></div>
                <div class="col-sm-3 mt-5">
                    <img src="image/spilogo.png"/>
                </div>
                <div class="col-sm-5">
                    <h2 class="mt-4">Softpro Learning Center</h2>
                    <h3>A Unit Of Softpro Group Of Companies</h3>
                </div>
                <div class="col-sm-2">
                    <button  onclick="location.href='http://localhost/myproject/Admin.php'" class="mt-5">Admin</button>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
    <!--------Second row------>
    <div class="container-fluid">
        <div class="row bg-white">
            <div class="col-sm-3 pt-4" style="background-color:blue;height:600px;">
               
                <li><a href="Admin.php">Welcome-Admin</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="viewallreg.php">View All Registration</a></li>
                <li> <a href="notapprove.php">Not Approved Students</a></li>
                <li><a href="approve.php">View Approved Student</a></li>
                <li><a href="verify.php">Verify Student</a></li>
                <li> <a href="logout.php">Logout</a></li>
            </div>
            <div class="col-sm-9" style="border-top:2px solid red;background-color:#d6d6d6;">
                <div class="row mt-5" style="border-bottom:2px solid red;">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2" style="background-color:#d6d6d6;">
                        <p class="mt-2 text-center mx-4">Name :</p><br/>
                        <p class=" text-center">College :</p><br/>
                        <p class=" text-center">Email :</p><br/>
                        <p class=" text-center">Mobile no :</p><br/>
                    </div>
                    <div class="col-sm-6 " style="width:70%;background-color:#d6d6d6;">
                        <form action="connect.php"style="background-color:#d6d6d6;" method="post" class="form-control">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name"/><br/>
                            <input type="text" name="college" id="college" class="form-control" placeholder="Enter Your College Name"/><br/>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email "/><br/>
                            <input type="number" name="mobile" id="contactno" class="form-control" placeholder="Enter Your Mobile No"/><br/>
                            <input type="submit" value="Submit" style="height:50px;width:150px;border-radius:10px;border:none;background-color:gray;">
                            
                            </form>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                    <table class="table table-stripped">
                        <tr>
                            <th>Name</th>
                            <th>College</th>
                            <th>Email</th>
                            <th>Contact No</th>
                        </tr>
                
                <?php
                $con=mysqli_connect("localhost","root","","myproject");
                $query="select * from tbl_reg";
                $res=mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($res)){
                ?>
                    <tr>
                       <td><?php echo $row["name"];?></td>
                       <td><?php echo $row["college"];?></td>
                       <td><?php echo $row["email"];?></td>
                       <td><?php echo $row["mobile"];?></td>
                    </tr>
                <?php
                   };
                ?>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>