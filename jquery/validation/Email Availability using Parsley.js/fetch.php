<?php

//fetch.php;

if(isset($_POST["email"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=test", "root", "");

 $query = "
 SELECT * FROM tbl_registration 
 WHERE email = '".trim($_POST["email"])."'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $total_row = $statement->rowCount();

 if($total_row == 0)
 {
  $output = array(
   'success' => true
  );

  echo json_encode($output);
 }
}

?>