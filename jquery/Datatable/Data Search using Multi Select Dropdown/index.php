<?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");

$query = "SELECT DISTINCT brand_id FROM product ORDER BY brand_id ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Ajax Live Data Search using Multi Select Dropdown in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  
  <link href="bootstrap-select.min.css" rel="stylesheet" />
  <script src="bootstrap-select.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">Ajax Live Data Search using Multi Select Dropdown in PHP</h2><br />
   
   <select name="multi_search_filter" id="multi_search_filter" multiple class="form-control selectpicker">
   <?php
   foreach($result as $row)
   {
    echo '<option value="'.$row["brand_id"].'">'.$row["brand_id"].'</option>'; 
   }
   ?>
   </select>
   <input type="hidden" name="hidden_country" id="hidden_country" />
   <div style="clear:both"></div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>product Name</th>
       <th>product price</th>
       <th>quantity</th>
       <th>brand_id</th>
      </tr>
     </thead>
     <tbody>
     </tbody>
    </table>
   </div>
   <br />
   <br />
   <br />
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();
 
 function load_data(query='')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('tbody').html(data);
   }
  })
 }

 $('#multi_search_filter').change(function(){
  $('#hidden_country').val($('#multi_search_filter').val());
  var query = $('#hidden_country').val();
  load_data(query);
 });
 
});
</script>