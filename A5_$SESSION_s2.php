<?php
 session_start();

 print_r($_SESSION);

?>
<html>
    <body>

<?php

if(isset($_SESSION["favcolor"])){
    echo "favarite color:".$_SESSION["favcolor"];

}
else{
echo "session is not set !!!";
}
?>

</body>
</html>
