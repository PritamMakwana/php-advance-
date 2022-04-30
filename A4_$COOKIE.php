<?php

$cookie_name="user";
$cookie_value="pritam";

setcookie($cookie_name,$cookie_value,time()+(86000*30),"/");
?>

<html>
    <body>

    <?php
     if (!isset($_COOKIE[$cookie_name])){
         echo "cookie is not  set ";
     }
     else{
         echo $_COOKIE[$cookie_name];
     }
     ?>
     </body>
     </html>