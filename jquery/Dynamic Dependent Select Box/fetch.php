<?php
//fetch.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "test");
 $output = '';
 if($_POST["action"] == "city")
 {
  $query = "SELECT id,name FROM thana WHERE c_id = '".$_POST["query"]."' GROUP BY name";
  $result = mysqli_query($connect, $query);
  $output .= '<option value="">Select thana</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
  }
 }
 if($_POST["action"] == "thana")
 {
  $query = "SELECT id,name FROM ward WHERE t_id = '".$_POST["query"]."'";
  $result = mysqli_query($connect, $query);
  $output .= '<option value="">Select ward</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
  }
 }
 echo $output;
}
?>