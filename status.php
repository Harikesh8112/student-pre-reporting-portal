<?php
$id=$_REQUEST["id"];
$con=mysqli_connect("localhost","root","","myproject");
$query="select * from tbl_form where id='$id'";
$res=mysqli_query($con,$query);
while($data=mysqli_fetch_assoc($res))
{
    $status=$data["status"];
    if($status=='Y')
    {
        $con=mysqli_connect("localhost","root","","myproject");
        $query1="update tbl_form set status = 'N' where id= '$id'";
        mysqli_query($con,$query1);
        header("location:verify.php");

    }
    else 
    {
        $con=mysqli_connect("localhost","root","","myproject");
        $query2="update tbl_form set status = 'Y' where id='$id'";
        mysqli_query($con,$query2);
        header("location:verify.php");
    }
}

?>