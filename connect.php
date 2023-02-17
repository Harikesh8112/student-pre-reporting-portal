<?php
$name=$_POST["name"];
$college=$_POST["college"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$con=mysqli_connect("localhost","root","","myproject");
$query="insert into tbl_reg (name,college,email,mobile) values('$name','$college','$email','$mobile')";
$res=mysqli_query($con,$query);
echo "<script>alert('Resister Successfully');window.location.href='Admin.php';</script>";
?>