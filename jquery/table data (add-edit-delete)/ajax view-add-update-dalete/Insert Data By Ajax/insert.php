<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "test");
if(!empty($_POST))
{
 $output = '';
 $name = mysqli_real_escape_string($connect, $_POST["name"]); 
    $query = "
    INSERT INTO tbl_user(id , name)  
     VALUES('', '$name')
    ";
    if(mysqli_query($connect, $query))
    {
     $output .= '<label class="text-success">Data Inserted</label>';
     $select_query = "SELECT * FROM tbl_user ORDER BY id ASC";
     $result = mysqli_query($connect, $select_query);
     $output .= '
      <table class="table table-bordered">  
                    <tr>  
                         <th width="70%">Employee Name</th>  
                         <th width="30%">View</th>  
                    </tr>

     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>  
                         <td>' . $row["name"] . '</td>  
                         <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                    </tr>
      ';
     }
     $output .= '</table>';
    }
    echo $output;
}
?>