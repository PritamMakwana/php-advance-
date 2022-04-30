<html>
    <body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

Name: <input type ="text" name="fname">
<br>
Age: <input type="text" name="age">
<br>
<input type="submit" name="save">
</form>

<?php
 if (isset($_POST['save'])){
     echo $_POST['fname']."<br>";
     echo $_POST['age']."<br>";
 }
 ?>
 </body>
 </html>