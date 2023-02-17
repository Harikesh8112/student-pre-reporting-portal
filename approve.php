<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Approve page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="project1.css" rel="stylesheet"/>
</head>
<body>
        <?php
            // include("haeder.php");
        ?>
        <div class="header">
        <div class="container-fluid bg-white">
            <div class="row">
                <div class="col-sm-4">
                    <img src="image/spilogo.png" style="width:40%; height:80%"/>

                </div>
                <div class="col-sm-4">
                    <h2 style="margin-top:20px;">Softpro Learning Center</h2>
                    <h4>A Util of Softpro Group of Companies</h4>
                </div>
               <div class="col-sm-4">
                <button style="margin-top:40px;" onclick="location.href='http://localhost/myproject/admin.php'">back</button>
               </div>
            </div>
    <div class="container">
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
                $query="select * from tbl_form";
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
    </div>
</body>
</html>