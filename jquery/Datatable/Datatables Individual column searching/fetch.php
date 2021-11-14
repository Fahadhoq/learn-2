<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "test");
$column = array("product.product_id", "product.product_name", "brand.name", "product.product_price");
$query = "
 SELECT * FROM product 
 INNER JOIN brand 
 ON brand.id = product.brand_id 
";
$query .= " WHERE ";
if(isset($_POST["is_brand"]))
{
 $query .= "product.brand_id = '".$_POST["is_brand"]."' AND ";
}
if(isset($_POST["search"]["value"]))
{
 $query .= '(product.product_id LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR product.product_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR brand.name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR product.product_price LIKE "%'.$_POST["search"]["value"].'%") ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY product.product_id  ';
}

$query1 = '';

if($_POST["length"] != 1)
{
 $query1 .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["product_id"];
 $sub_array[] = $row["product_name"];
 $sub_array[] = $row["name"];
 $sub_array[] = $row["product_price"];
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM product";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
