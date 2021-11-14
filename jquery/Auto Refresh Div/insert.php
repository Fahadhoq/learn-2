<?php 
$connect = mysqli_connect("localhost", "root", "", "test");

$tweet = $_POST["tweet"];
$sql ="INSERT INTO tbl_tweet(id, tweet) VALUES ('', '$tweet')";

mysqli_query($connect, $sql);

?>