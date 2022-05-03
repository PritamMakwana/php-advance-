<?php

include "connection.php";

$current = md5($_POST['current']);
$new = md5($_POST['new']);
$email = $_POST['email'];

$checkuser = "SELECT * FROM  user WHERE  email = '$email' and password = '$current'";
$Result = mysqli_query($con,$checkuser);

if(mysqli_num_rows($Result) > 0){

 $UpdatePass = mysqli_query($con,"UPDATE user SET password = '$new' WHERE email = '$email' ");

  if($UpdatePass){
    $response['error'] = "200";
    $response['message'] = " password update success";
  }else{
    $response['error'] = "400";
    $response['message'] = " password not update";
  }

}
else{
    $response['error'] = "400";
    $response['message'] = "User dose not exist";
}
 
echo json_encode($response);

?>