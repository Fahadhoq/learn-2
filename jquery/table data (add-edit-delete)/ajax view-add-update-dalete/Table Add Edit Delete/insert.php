<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 $sql = "INSERT INTO tbl_user(name) VALUES('".$_POST["name"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 