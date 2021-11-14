<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "test");
$city = '';
$query = "SELECT id,name FROM city GROUP BY name ORDER BY name ASC";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
 $city .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Webslesson Tutorial | Dynamic Dependent Select Box using JQuery Ajax with PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   <h2 align="center">Dynamic Dependent Select Box using JQuery Ajax with PHP</h2><br /><br />
   
   <select name="city" id="city" class="form-control action">
    <option value="">Select city</option>
    <?php echo $city; ?>
   </select>
   <br />
   
   <select name="thana" id="thana" class="form-control action">
    <option value="">Select thana</option>
   </select>
   <br />
   
   <select name="ward" id="ward" class="form-control">
    <option value="">Select ward</option>
   </select>
  
</div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('.action').change(function(){
  
  if($(this).val() != '')
  {
    var action = $(this).attr("id");
    var query = $(this).val();
    //console.log(query);
    var result = '';
   if(action == "city")
   {
     result = 'thana';
   }
   else
   {
     result = 'ward';
   }

   $.ajax({
       url:"fetch.php",
       method:"POST",
       data:{action:action, query:query},
            success:function(data){
            $('#'+result).html(data);
            }
       })
  }
 
 });
});
</script>