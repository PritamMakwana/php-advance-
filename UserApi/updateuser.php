<?php

include "connection.php";

$_id = $_REQUEST['id'];
$username = $_POST['username'];
$email = $_POST['email'];

$update = "UPDATE user SET username = '$username' , email = '$email' WHERE id = '$_id' ";
$result = mysqli_query($con,$update);

if($result > 0 ){
    $response['error'] = "200";
    $response['message'] = "update user success";
}
else{
   $response['error'] = "400";
   $response['message'] = "update user failed ";
}

echo json_encode($response);

?>