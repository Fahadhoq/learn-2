<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'test');

$input = filter_input_array(INPUT_POST);

$product_name = mysqli_real_escape_string($connect, $input["product_name"]);
$quantity = mysqli_real_escape_string($connect, $input["quantity"]);
$product_price = mysqli_real_escape_string($connect, $input["product_price"]);
if($input["action"] === 'edit')
{
 $query = "
 UPDATE product 
 SET product_name = '".$product_name."', 
 quantity = '".$quantity."',
 product_price = '".$product_price."' 
 WHERE product_id = '".$input["product_id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM product 
 WHERE product_id = '".$input["product_id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
