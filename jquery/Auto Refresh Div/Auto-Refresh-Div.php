<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="js/jquery-1.10.2.min.js"></script>

		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">

   
 
    <title>Document</title>
</head>

<body>    
    
      <div class="container box">
          <form name="add_tweet" method="post">
              <h3 align="center">Tweet page</h3>
              <div class="form-group">  
                <textarea type="text" name="tweet" id="tweet" class="form-control" placeholder="Enter post content"></textarea>
              </div>
              <div class="form-group" align="right">
                    <button type="button" id="btn_tweet" name="btn_tweet" class="form-control">save</button>
              </div>
          </form>
          <br/>
          <br/>
          <div id="load_tweets"></div>
      </div>

      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
          $(document).ready(function(){
          
        $('#btn_tweet').on('click', function(){
          var $text_data = $('#tweet').val();
          
          if($.trim($text_data) != ''){
              $.ajax({
                url:"insert.php",
                method:"post",
                data:{tweet:$text_data},
                dataType:"text",
                success:function (data) {
                    $('#tweet').val("");       
                }
              });
          } 
        });   


        setInterval(function(){
              $('#load_tweets').load("fetch.php").fadeIn();
          }, 1000);

          });
          
      </script>

</body>
</html>