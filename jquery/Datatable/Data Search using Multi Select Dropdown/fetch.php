<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");

if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 
 $query = "
 SELECT * FROM product 
 WHERE brand_id IN (".$search_text.") 
 ORDER BY product_id ASC
 ";
}
else
{
 $query = "SELECT * FROM product ORDER BY product_id ASC";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["product_name"].'</td>
   <td>'.$row["product_price"].'</td>
   <td>'.$row["quantity"].'</td>
   <td>'.$row["brand_id"].'</td>
  </tr>
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="5" align="center">No Data Found</td>
 </tr>
 ';
}

echo $output;


?>