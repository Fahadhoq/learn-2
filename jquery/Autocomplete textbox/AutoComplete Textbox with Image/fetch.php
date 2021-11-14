<?php

//fetch.php;

if(isset($_GET["term"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=test", "root", "");

 $query = "
 SELECT * FROM product 
 WHERE product_name LIKE '%".$_GET["term"]."%' 
 ORDER BY product_name ASC
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $total_row = $statement->rowCount();

 $output = array();
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $temp_array = array();
   $temp_array['value'] = $row['product_name'];
   $temp_array['label'] = '<img src="images/'.$row['product_image'].'" width="70" />&nbsp;&nbsp;&nbsp;'.$row['product_name'].'';
   $output[] = $temp_array;
  }
 }
 else
 {
  $output['value'] = '';
  $output['label'] = 'No Record Found';
 }

 echo json_encode($output);
}

?>
