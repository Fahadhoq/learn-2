<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");

$query = "SELECT * FROM product WHERE product_price BETWEEN '".$_POST["minimum_range"]."' AND '".$_POST["maximum_range"]."' ORDER BY product_price ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '
<h4 align="center">Total Item - '.$total_row.'</h4>
<div class="row">
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<div class="col-md-2">
			<div >
				<img src="images/'.$row["product_image"].'" class="img-responsive img-thumnai img-circle" />
				<h4 align="center">'.$row["product_name"].'</h4>
				<h3 align="center" class="text-danger">'.$row["product_price"].'</h3>
                <h3 align="center" class="text-danger">'.$row["quantity"].'</h3>
				<br />
			</div>
		</div>
		';
	}
}
else
{
	$output .= '
		<h3 align="center">No Product Found</h3>
	';
}

$output .= '
</div>
';

echo $output;

?>

