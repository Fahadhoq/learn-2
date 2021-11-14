<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT * FROM product ORDER BY product_id ASC";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html>
    <head>
      <title>How to return JSON Data from PHP Script using Ajax Jquery</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
        #result {
        position: absolute;
        width: 100%;
        max-width:870px;
        cursor: pointer;
        overflow-y: auto;
        max-height: 400px;
        box-sizing: border-box;
        z-index: 1001;
        }
        .link-class:hover{
        background-color:#f1f1f1;
        }
        </style>
    </head>

<body>
  <br /><br />
 
<div class="container" style="width:900px;">
   
    <h2 align="center">How to return JSON Data from PHP Script using Ajax Jquery</h2>
    <h3 align="center">Search Employee Data</h3><br />   
  
   <div class="row">
      
     <div class="col-md-4">
        <select name="product_list" id="product_list" class="form-control">
        <option value="none">Select product</option>
        <?php 
        while($row = mysqli_fetch_array($result))
        {
        echo '<option value="'.$row["product_id"].'">'.$row["product_name"].'</option>';
        }
        ?>
        </select>
     </div>

      <div class="col-md-4">
        <button type="button" name="search" id="search" class="btn btn-info">Search</button>
      </div>

   </div>
   <br />

    <div class="table-responsive" id="product_details" style="display:none">
    
            <table class="table table-bordered">
                <tr>
                <td width="10%" align="right"><b>Name</b></td>
                <td width="90%"><span id="product_name"></span></td>
                </tr>
                <tr>
                <td width="10%" align="right"><b>price</b></td>
                <td width="90%"><span id="product_price"></span></td>
                </tr>

                <tr>
                <td width="10%" align="right"><b>quantity</b></td>
                <td width="90%"><span id="quantity"></span></td>
                </tr>
                
            </table>
    </div>
   
</div>

 </body>
</html>

<script>
$(document).ready(function(){
 //if want to search button
 //$('#search').click(function()   
 $('#product_list').click(function(){
  var id= $('#product_list').val();
  //console.log(id);
  if(id != 'none')
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{id:id},
    dataType:"JSON",
    success:function(data)
    {
     $('#product_details').css("display", "block");
     $('#product_name').text(data.product_name);
     $('#product_price').text(data.product_price);
     $('#quantity').text(data.quantity);
    }
   })
  }
  else
  {
   //alert("Please Select Employee");
   $('#product_details').css("display", "none");
  }
 });
});
</script>
