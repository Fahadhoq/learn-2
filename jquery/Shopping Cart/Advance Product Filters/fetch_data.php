<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM product where status = '1' 
 ";
 if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
 {
  $query .= "
   AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
  ";
 }
 if(isset($_POST["brand"]))
 {
  $brand_filter = implode("','", $_POST["brand"]);
  $query .= "
   AND brand_id IN('".$brand_filter."')
  ";
 }
 if(isset($_POST["ram"]))
 {
  $ram_filter = implode("','", $_POST["ram"]);
  $query .= "
   AND product_ram IN('".$ram_filter."')
  ";
 }
 if(isset($_POST["storage"]))
 {
  $storage_filter = implode("','", $_POST["storage"]);
  $query .= "
   AND product_storage IN('".$storage_filter."')
  ";
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
   <div class="col-sm-4 col-lg-3 col-md-3">
    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
     <img src="image/'. $row['product_image'] .'" alt="" class="img-responsive" >
     <p align="center"><strong><a href="#">'. $row['product_name'] .'</a></strong></p>
     <h4 style="text-align:center;" class="text-danger" >'. $row['product_price'] .'</h4>
     
     Brand : '. $row['brand_id'] .' <br />
     RAM : '. $row['product_ram'] .' GB<br />
     Storage : '. $row['product_storage'] .' GB </p>
    </div>

   </div>
   ';
  }
 }
 else
 {
  $output = '<h3>No Data Found</h3>';
 }
 echo $output;
}

?>
