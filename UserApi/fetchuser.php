<?php

include "connection.php";

$user = "SELECT username,email FROM user ";

$result = mysqli_query($con,$user);
if(mysqli_num_rows($result) > 0){
 
    while($row = $result -> fetch_assoc())
    {
       $response['user'] [] = $row;
    }

}
else{
    $response['error'] = "400";
}

echo json_encode($response);

?>