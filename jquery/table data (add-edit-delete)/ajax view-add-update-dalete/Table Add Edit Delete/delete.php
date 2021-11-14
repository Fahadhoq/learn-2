<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 $sql = "DELETE FROM tbl_user WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>