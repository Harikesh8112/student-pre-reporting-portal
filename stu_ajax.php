<?php
header('content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: POST');
$stu_mobile=$_POST['mobile'];
$con = mysqli_connect('localhost', 'root', '', 'myproject');
$query = "select * from tbl_registered where mobile='$stu_mobile'";
$result=mysqli_query($con,$query) or die("SQL query failed");
if(mysqli_num_rows($result)>0){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    echo json_encode($output);
}else{
   
    echo json_encode(array('msg' => "You are not eligible to fill this form!", 'status' => false));
}

?>
