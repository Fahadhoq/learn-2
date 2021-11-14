<?php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "test");
 $output = '';
 $query = "SELECT * FROM product WHERE product_id='".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $output = '
  <p><img src="images/'.$row['product_image'].'" class="img-responsive img-thumbnail" /></p>
  <p><label>Name : '.$row['product_name'].'</label></p>
  <p><label>price : </label> '.$row['product_price'].'</p>
  ';
 }
 echo $output;
}
?>