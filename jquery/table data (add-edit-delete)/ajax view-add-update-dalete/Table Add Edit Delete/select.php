<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 $output = '';  
 $sql = "SELECT * FROM tbl_user ";  
 $result = mysqli_query($connect, $sql);  

 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="40%"> Name</th>    
                     <th width="10%">Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td>
                     <input class="name" data-id1="'.$row["id"].'" type="text" value="'.$row["name"].'" />'.
                     '</td>    
                     <td>
                         <button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button>
                        
                     </td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name" contenteditable></td>    
                <td>
                    <button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button>
                </td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 
      echo $output;  
 ?>