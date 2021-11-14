<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--bootstrap css -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    
    <title>Document</title>
</head>

<body>    
    
      <div class="container box">
              <div class="form-group">
                <label>Enter User Name </label>  
                <input type="text" name="UserName" id="UserName" class="form-control" placeholder="Enter User Name">          
                <span id="availability"></span>
              </div>
      </div>

</body>
</html>

<script>
          $(document).ready(function(){
          
        $('#UserName').blur(function(){
          var $UserName = $(this).val();
          
          
          $.ajax({
            url:"check.php",
            method:"POST",
            data:{Name:$UserName},
            dataType:"text",
            success:function (data) {
              //console.log(html);
              $('#availability').html(data);
  
              
            }

          });
        
        });  

      });    
          
</script>