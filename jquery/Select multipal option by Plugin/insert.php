<?php
//insert.php
/*echo $_POST["framework"];
echo '<br />';
echo $_POST["hidden_framework"];*/

$connect = mysqli_connect("localhost", "root", "", "test");
$query = "INSERT INTO tbl_tweet(tweet) VALUES ('".$_POST["hidden_framework"]."')";
if(mysqli_query($connect, $query))
{
 echo 'Data Inserted';
}
?>