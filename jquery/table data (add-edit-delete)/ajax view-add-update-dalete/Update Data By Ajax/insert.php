 
  <?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $name = mysqli_real_escape_string($connect, $_POST["name"]); 
     
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE tbl_user   
           SET name='$name'   
           WHERE id='".$_POST["employee_id"]."'";  
           $message = 'Data Updated';  
           //echo $query;
      }  
      else  
      {  
           $query = "  
           INSERT INTO tbl_user(id ,name)  
           VALUES('', '$name');  
           ";  
           $message = 'Data Inserted';  
      }  
      
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM tbl_user ORDER BY id DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Employee Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["name"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>