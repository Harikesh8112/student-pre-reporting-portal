<?php
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$name=$_POST["name"];
$college=$_POST["college"];
$gname=$_POST["gname"];
$gmobile=$_POST["gmobile"];
$course=$_POST["course"];
$branch=$_POST["branch"];
$year=$_POST["year"];
$gender=$_POST["gender"];
$technology=$_POST["technology"];
$rdate=$_POST["rdate"];
$accommodation=$_POST["accommodation"];
$mess=$_POST["mess"];
$photo_name=$_FILES["photo"]["name"];
$photo_type=$_FILES["photo"]["type"];
$photo_tmp=$_FILES["photo"]["tmp_name"];
$location="upload/photo/";
move_uploaded_file($photo_tmp,$location . $photo_name);
$aadhar_name=$_FILES["aadhar"]["name"];
$aadhar_type=$_FILES["aadhar"]["type"];
$aadhar_tmp=$_FILES["aadhar"]["tmp_name"];
$location="upload/aadhar/";
move_uploaded_file($aadhar_tmp,$location . $aadhar_name);
$marksheet_name=$_FILES["marksheet"]["name"];
$marksheet_type=$_FILES["marksheet"]["type"];
$marksheet_tmp=$_FILES["marksheet"]["tmp_name"];
$location="upload/marksheet/";
move_uploaded_file($marksheet_tmp,$location . $marksheet_name);
$district=$_POST["district"];
$pincode=$_POST["pincode"];
$address=$_POST["address"];
$checkbox=$_POST["checkbox"];
$date=date("m/d/y");

$con=mysqli_connect("localhost","root","","myproject");
$query="INSERT INTO tbl_form (`mobile`, `email`, `name`, `college`, `gname`, `gmobile`, `course`, `branch`, `year`, `gender`, `technology`, `rdate`, `accommodation`, `mess`, `photo_name`, `photo_type`, `photo_tmp`, `aadhar_name`, `aadhar_tmp`, `aadhar_type`, `marksheet_name`, `marksheet_tmp`, `marksheet_type`, `district`, `pincode`, `address`, `checkbox`,`status`, `date`) VALUES ('$mobile', '$email', '$name', '$college', '$gname', '$gmobile', '$course', '$branch', '$year', '$gender', '$technology', '$rdate', '$accommodation', '$mess', '$photo_name', '$photo_type', '$photo_tmp', '$aadhar_name', '$aadhar_tmp', '$aadhar_type', '$marksheet_name', '$marksheet_tmp', '$marksheet_type', '$district', '$pincode', '$address', '$checkbox','Y', 'CURRENT_DATETIME()')";


mysqli_query($con,$query);
echo "<script>alert('Final ragistration is done');window.location.href='index.php';</script>";

?>