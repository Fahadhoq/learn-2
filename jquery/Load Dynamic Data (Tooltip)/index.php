<?php
$connect = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT * FROM product ORDER BY product_id ASC";
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | PHP AJAX Jquery - Load Dynamic Data in Bootstrap Tooltip</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   <h2 align="center">PHP AJAX Jquery - Load Dynamic Data in Bootstrap Tooltip</h2>
   <h3 align="center">Employee Data</h3>   
   <br /><br />
   
   <div class="table-responsive">
    <table class="table table-bordered">
     <tr>
      <th width="20%">ID</th>
      <th width="80%">Name</th>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
     ?>
     <tr>
      <td><?php echo $row["product_id"]; ?></td>
      <td><label><a href="#" class="hover" id="<?php echo $row["product_id"]; ?>"><?php echo $row["product_name"]; ?></a></label></td>
     </tr>
     <?php 
     }
     ?>
    </table>
   </div>
   
  </div>
 </body>
</html>

<script>
 $(document).ready(function(){

  $('.hover').tooltip({
   title: fetchData,
   html: true,
   placement: 'right'
  });

  function fetchData()
  {
   var fetch_data = '';
   var element = $(this);
   var id = element.attr("id");
   $.ajax({
    url:"fetch.php",
    method:"POST",
    async: false,
    data:{id:id},
    success:function(data)
    {
     fetch_data = data;
    }
   });   
   return fetch_data;
  }
 });
</script>
