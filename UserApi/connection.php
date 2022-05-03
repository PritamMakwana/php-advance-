<?php
 $hostName = "localhost";
 $userName = "root";
 $userPass = "";
 $DBname = "userdata";

 $con = mysqli_connect($hostName,$userName,$userPass,$DBname);

 if(!$con)
  echo "connection OFF";
  else 
  echo "connection ON";
?>