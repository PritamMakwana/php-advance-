<?php

include "connection.php";

$useremail = $_POST['email'];
$userpassword = md5($_POST['password']);

$checkEmail = "SELECT * FROM user WHERE email = '$useremail' ";
$check_query_Email = mysqli_query($con,$checkEmail);
echo $userpassword;
echo $useremail;
if(mysqli_num_rows($check_query_Email) > 0){

            $checkuser = "SELECT id,username,email FROM user WHERE email = '$useremail' AND password = '$userpassword' ";
            $check_query = mysqli_query($con,$checkuser);

            if(mysqli_num_rows($check_query) > 0){

                while($row = $check_query -> fetch_assoc())
                {
                $response['user'] = $row;
                }
                $response['error'] = "200";
                $response['message'] = "login success";
            }else{
                $response['user'] = (Object)[];
                $response['error'] = "200";
                $response['message'] = "Wrong credentials";
            }

}else{
    $response['user'] = (Object)[];
    $response['error'] = "400";
    $response['message'] = "User not exist";
}

echo json_encode($response);

?>