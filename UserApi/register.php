<?php

include "connection.php";

$username = $_POST['username'];
$useremail = $_POST['email'];
$userpassword = md5($_POST['password']);

$check_user ="SELECT * FROM user WHERE email = '$useremail' ";
$check_QUERY = mysqli_query($con,$check_user);

if(mysqli_num_rows($check_QUERY ) > 0){
    $response['error'] = "002";
    $response['message'] = "user already exist";
}
else{
$insertQuery = "INSERT INTO user(username,email,password) VALUES ('$username' , '$useremail' ,'$userpassword' )";
$result = mysqli_query($con,$insertQuery);

if($result){
 $response['error'] = "000";
 $response['message'] = "Register successful";
}
 else
{
    $response['error'] = "001";
   $response['message'] = "Register Failed";
}
}
echo json_encode($response);
//d41d8cd98f00b204e9800998ecf8427e
?>
