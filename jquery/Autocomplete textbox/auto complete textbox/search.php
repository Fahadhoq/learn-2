<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM tbl_user WHERE name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["name"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= 'Name Not Found';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>