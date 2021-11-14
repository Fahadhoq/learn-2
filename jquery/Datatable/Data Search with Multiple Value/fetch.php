<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM product 
 WHERE product_name REGEXP '".$search."' 
 OR product_price REGEXP '".$search."' 
 OR quantity REGEXP '".$search."' 
 ";
}
else
{
 $query = "
 SELECT * FROM product ORDER BY product_id
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);

?>
