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
            <div class="row" style="min-height:150px;background-color:#808080; width:100%;">
                <div class="col-sm-1"></div>
                <div class="col-sm-3 mt-5">
                    <img src="image/spilogo.png"/>
                </div>
                <div class="col-sm-5">
                    <h2 class="mt-4">Softpro Learning Center</h2>
                    <h3>A Unit Of Softpro Group Of Companies</h3>
                </div>
                <div class="col-sm-2">
                    <button  onclick="location.href='http://localhost/myproject/Admin.php'" class="mt-5">Back</button>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-2 bg-light" >
        <div class="row">
            <div class="col-sm-12">

          
         <table class="table table-stripped" style="width:100%;">
           <tr>
            <th> Sr. no</th>
            <th>Mobile no</th>
            <th>Email </th>
            <th>Name</th>
            <th>College Nmae</th>
            <th>Gurdin Nmae</th>
            <th>Gurdin Mobile</th>
            <th>Course</th>
            <th>branch</th>
            <th>Year</th>
            <th>Gender</th>
            <th>technology</th>
            <th>reppointing Date</th>
            <th>Accommodation</th>
            <th>Mess</th>
            <th>Profile pic</th>
            <th>Aadhar</th>
            <th>Marksheet</th>
            <th>District</th>
            <th>Pincode</th>
            <th>Address</th>
            <th>Checkbox</th>
            </tr>
            <tbody>
                <?php
                $con=mysqli_connect('localhost','root','','myproject');
                $query="select * from tbl_form where status='N'";
                $result= mysqli_query($con,$query);
                
                $i=1;
                while($row  = mysqli_fetch_assoc($result))
                {
                ?>
                <tr>
                    <td><?php echo $i;?><input type="hidden" name="id" value="<?php echo $row['id'];?>"></td>
                    <td><?php echo $row['mobile']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['college']?></td>
                    <td><?php echo $row['gname']?></td>
                    <td><?php echo $row['gmobile']?></td>
                    <td><?php echo $row['course']?></td>
                    <td><?php echo $row['branch']?></td>
                    <td><?php echo $row['year']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['technology']?></td>
                    <td><?php echo $row['rdate']?></td>
                    <td><?php echo $row['accommodation']?></td>
                    <td><?php echo $row['mess']?></td>
                    <td><?php echo $row['photo_name']?></td>
                    <td><?php echo $row['aadhar_name']?></td>
                    <td><?php echo $row['marksheet_name']?></td>
                    <td><?php echo $row['district']?></td>
                    <td><?php echo $row['pincode']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['checkbox']?></td>
                </tr>
                <?php 
              $i++;
            }?>;
            </tbody>
         </table>
         </div>
        </div>
    </div>
    </body>
    </html>