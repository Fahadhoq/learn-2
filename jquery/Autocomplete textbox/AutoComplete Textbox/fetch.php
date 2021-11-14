<?php

//fetch.php;

$connect = new PDO("mysql:host=localhost; dbname=test", "root", "");

if(isset($_POST['query']))
{
 $query = "
 SELECT DISTINCT email FROM tbl_registration 
 WHERE email LIKE '%".trim($_POST["query"])."%'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $output = '';

 foreach($result as $row)
 {
  $output .= '
  <li class="list-group-item contsearch">
   <a href="javascript:void(0)" class="gsearch" style="color:#333;text-decoration:none;">'.$row["email"].'</a>
  </li>
  ';
 }

 echo $output;
}

if(isset($_POST['email']))
{
 $query = "
 SELECT * FROM tbl_registration 
 WHERE email = '".trim($_POST["email"])."' 
 LIMIT 1
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $output = '
 <table class="table table-bordered table-striped">
  <tr>
   <th>First Name</th>
   <th>Last Name</th>
   <th>Email</th>
   <th>Gender</th>
  </tr>
 ';

 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["first_name"].'</td>
   <td>'.$row["last_name"].'</td>
   <td>'.$row["email"].'</td>
   <td>'.$row["gender"].'</td>
  </tr>
  ';
 }
 $output .= '</table>';

 echo $output;
}

?>