<?php
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "test");
 $query = "SELECT * FROM product WHERE product_id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["product_name"] = $row["product_name"];
  $data["product_price"] = $row["product_price"];
  $data["quantity"] = $row["quantity"];
 }

 echo json_encode($data);
}
?>
