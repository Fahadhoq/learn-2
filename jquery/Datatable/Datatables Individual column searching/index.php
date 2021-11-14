<?php 
$connect = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT * FROM brand ORDER BY id ASC";
$result = mysqli_query($connect, $query);
?>
<html>
 <head>
  <title>Datatables Individual column searching using PHP Ajax Jquery</title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
 </head>
 <body>
  <div class="container">
   <h1 align="center">Datatables Individual column searching using PHP Ajax Jquery</h1>
   <br />
   
   <div class="table-responsive">
    <table id="product_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Sr. No.</th>
       <th>Product Name</th>
       <th>
        <select name="brand" id="brand" class="form-control">
         <option value="">Category Search</option>
         <?php 
         while($row = mysqli_fetch_array($result))
         {
          echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
         }
         ?>
        </select>
       </th>
       <th>Product Price</th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
 </body>
</html>



<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 load_data();

 $(document).on('change', '#brand', function(){
  var brand = $(this).val();
//  console.log(brand);
  $('#product_data').DataTable().destroy();
  if(brand != '')
  {
   load_data(brand);
  }
  else
  {
   load_data();
  }
 });

 function load_data(brand)
 {
  var dataTable = $('#product_data').DataTable({
   "processing":true,
   "serverSide":true,
   "order":[],
   
   "ajax":{
    url:"fetch.php",
    type:"POST",
    data:{is_brand:brand}
   },

   "columnDefs":[
    {
     "targets":[2],
     "orderable":false,
    },
   ],

  });

 }

});
</script>