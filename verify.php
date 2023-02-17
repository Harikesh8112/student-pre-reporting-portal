<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>
    <?php
    include("haeder.php");
    ?>
    <div class="container-fluid">
        <table>
            <tr>
                <th>ID</th>
                <th>Nmae</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>technology</th>
                <th>photo</th>
                <th>Aadhar</th>
                <th>Marksheet</th>
                <th>Status</th>
            </tr>
            <tbody>
                <?php
                    $con=mysqli_connect("localhost","root","","myproject");
                    $query="select * from tbl_form";
                    $res=mysqli_query($con,$query);
                    $id=1;
                    while($data=mysqli_fetch_assoc($res))
                    {
                ?>
                <tr>
                    <td><?php echo $id; ?><input type="hidden" name="id" value="<?php echo $data['id']; ?>"></td>
                    <td><?php echo $data["name"] ?></td>
                    <td><?php echo $data["email"] ?></td>
                    <td><?php echo $data["mobile"] ?></td>
                    <td><?php echo $data["technology"] ?></td>
                    <td><img src="./upload/photo/<?php echo $data["photo_name"]?>" style="height:200px; width:200px"  alt="no"></td>
                    <td><img src="./upload/aadhar/<?php echo $data["aadhar_name"]?>" style="height:200px; width:200px" alt="not" ></td>
                    <td><a href="http://localhost/myproject/upload/marksheet/<?Php echo $data["marksheet_name"] ;?>">Download/Marksheet</a></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="status.php?id=<?php echo $data['id'];?>"><?php echo $data["status"]; ?></a></td>
                </tr>
                <?php
                $id++;
                    }

                ?>
            </tbody>
        </table>
    </div>
</body>
</html>