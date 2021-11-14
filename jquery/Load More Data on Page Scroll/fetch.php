<?php
if(isset($_POST["limit"], $_POST["start"]))
{
 $connect = mysqli_connect("localhost", "root", "", "test");
 $query = "SELECT * FROM product ORDER BY product_id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  echo '
  <img src="images/'.$row["product_image"].'" class="img-responsive" /><br />
  <h3>'.$row["product_name"].'</h3>
  <p>'.$row["product_price"].'</p>
  <p>'.$row["quantity"].'</p>
  <hr />
  ';
 }
}

?>
