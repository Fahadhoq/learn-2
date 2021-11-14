<?php 
$connect = mysqli_connect("localhost", "root", "", "test");

$user_name = $_POST["Name"];

if(isset($user_name)){
    $sql ="SELECT * FROM tbl_user WHERE name = '$user_name'";
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result)>0){
        echo '<span class="text-danger">User name is available</span>';
    }
    else{
        echo '<span class="text-success">User name is not available</span>';
    }
        
}

?>