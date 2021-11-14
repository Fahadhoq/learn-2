<?php

//action.php

include('database_connection.php');

if(isset($_POST["action"]))
{ 
 
 if($_POST["action"] == "add")
 {
  $data = array(
   ':name'  => $_POST["name"],
   ':phone'  => $_POST["phone"]
  );
  
  $query = "
  INSERT INTO tbl_user (name, phone_name) 
  VALUES (:name, :phone)
  ";
  
  $statement = $connect->prepare($query);
  if($statement->execute($data))
  {
   echo 'Data Inserted';
  }
 }
 
 if($_POST["action"] == 'fetch_single')
 {
  $query = "SELECT * FROM tbl_user WHERE id='".$_POST["id"]."'";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $output['name'] = $row["name"];
   $output['phone'] = $row["phone_name"];
  }
  echo json_encode($output);
 }
 
 if($_POST["action"] == "edit")
 {
  $data = array(
   ':name'  => $_POST["name"],
   ':phone'  => $_POST["phone"],
   ':id'  => $_POST["hidden_id"]
  );
  $query = "
  UPDATE tbl_user 
  SET name = :name, phone_name = :phone 
  WHERE id = :id
  ";
  $statement = $connect->prepare($query);
  if($statement->execute($data))
  {
   echo 'Data Updated';
  }
 }
 
}

?>
