
<?php

//fetch.php;

$data = array();

if(isset($_GET["query"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=test", "root", "");

 $query = "
 SELECT product_name FROM product 
 WHERE product_name LIKE '".$_GET["query"]."%' 
 ORDER BY product_name ASC 
 LIMIT 15
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row["product_name"];
 }
}

echo json_encode($data);

?>
