<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
 $connect = mysqli_connect("localhost", "root", "", "test");
 $query = "SELECT * FROM tbl_user WHERE id = '".$_POST["employee_id"]."'";
 $result = mysqli_query($connect, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
        <tr>  
            <td width="30%"><label>id</label></td>  
            <td width="70%">'.$row["id"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Name</label></td>  
            <td width="70%">'.$row["name"].'</td>  
        </tr>
        
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>