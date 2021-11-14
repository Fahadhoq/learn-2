<?php
//update.php
$connect = mysqli_connect("localhost", "root", "", "test");
$query = "
 UPDATE product SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE id = '".$_POST["pk"]."'";
mysqli_query($connect, $query);
?>