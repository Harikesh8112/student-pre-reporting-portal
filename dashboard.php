<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<style>
        .header{
            position: fixed;
            text-align:center;
            width:100%;
        }
        .content
        {
            padding-top:120px;
        }
       

        img
        {
            height: 200px;
            width: 150px;
        }
        h4 {
            color:orange;
        }
        button{
            margin-top:20px;
            background-color:orangered;
            border-radius:8px;
        }
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
        .well
        {
            padding: 25px;
            background-color:#a52a2a;
        }
        .well1
        {
            padding: 25px;
            background-color:#008000;
        }
        .well2
        {
            padding: 25px;
            background-color:#ff4500;
        }
        .well3
        {
            padding: 25px;
            background-color:#f7fc00;
        }

     </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Student', 'status'],
          ['Approved',     <?php
                                $con=mysqli_connect("localhost","root","","myproject");
                                $sql="select * from tbl_reg";
                                $res=mysqli_query($con,$sql);
                                $date=mysqli_num_rows($res);
                                echo $date;
                                ?>],
          ['Not Approved',      <?php
                                $con=mysqli_connect("localhost","root","","myproject");
                                $sql="select * from tbl_login";
                                $res=mysqli_query($con,$sql);
                                $date=mysqli_num_rows($res);
                                echo $date;
                                ?>]

        ]);

        var options = {
          title: 'Students Detail',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <!-- colums -->
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Register', 'Approved', 'Not Approved'],
          ['2022',              <?php
                                $con=mysqli_connect("localhost","root","","myproject");
                                $query="select * from tbl_reg";
                                $res=mysqli_query($con,$query);
                                $date=mysqli_num_rows($res);
                                echo $date;
                                ?>,  <?php
                                $con=mysqli_connect("localhost","root","","myproject");
                                $sql="select * from tbl_form where status='Y'";
                                $res=mysqli_query($con,$sql);
                                $date=mysqli_num_rows($res);
                                echo $date;
                                ?>,  <?php
                                $con=mysqli_connect("localhost","root","","myproject");
                                $sql="select * from tbl_form where status='N'";
                                $res=mysqli_query($con,$sql);
                                $date=mysqli_num_rows($res);
                                echo $date;
                                ?>]
          
        ]);

        var options = {
          chart: {
            title: 'Reported  ',
       
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</head>
<body>
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
                <button style="margin-top:40px;" onclick="location.href='http://localhost/myproject/Admin.php'">Back</button>
               </div>
            </div>   <!--1st row close -->

            <div class="row">
            <div class="col-sm-3 pt-4" style="background-color:blue;height:600px;">
               
               <li><a href="index.php">Welcome-Admin</a></li>
               <li><a href="dashboard.php">Dashboard</a></li>
               <li><a href="viewallreg.php">View All Registration</a></li>
               <li> <a href="notappreve.php">Not Approved Students</a></li>
               <li><a href="approve.php">View Approved Student</a></li>
               <li><a href="verify.php">Verify Student</a></li>
               <li> <a href="login.php">Logout</a></li>
           </div>
           <div class="col-sm-9 mt-3">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-3" >
                            <div class="well">
                                <h3>Registered</h3>
                                <?php
                                $con=mysqli_connect("localhost","root","","myproject");
                                $query="select * from tbl_reg";
                                $res=mysqli_query($con,$query);
                                $date=mysqli_num_rows($res);
                                echo $date;
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well1">
                                <h3>Approved</h3>
                                <?php
                                $con=mysqli_connect("localhost","root","","myproject");
                                $sql="select * from tbl_form where status='Y'";
                                $res=mysqli_query($con,$sql);
                                $date=mysqli_num_rows($res);
                                echo $date;
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well2">
                                <h3>Not Approved</h3>
                                <?php
                                $con=mysqli_connect("localhost","root","","myproject");
                                $sql="select * from tbl_form where status='N'";
                                $res=mysqli_query($con,$sql);
                                $date=mysqli_num_rows($res);
                                echo $date;
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well3">
                                <h3>Reported</h3>
                                <?php
                                $con=mysqli_connect("localhost","root","","myproject");
                                $sql="select * from tbl_form";
                                $res=mysqli_query($con,$sql);
                                $date=mysqli_num_rows($res);
                                echo $date;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-6">
                        <div id="piechart_3d" style="width: 100%; height: 250px;border:solid #808080 10px;"></div>
                    </div>
                    <div class="col-sm-6">
                    <div id="columnchart_material" style="width: 100%; height: 250px;border:solid #808080 10px;"></div>
                    </div>
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
        
           </div>

        </div>

</body>
</html>