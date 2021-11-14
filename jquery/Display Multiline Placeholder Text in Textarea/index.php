<!DOCTYPE html>
<html>
 <head>
  
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />  
 </head>

 <body>
  <div class="container">
    <textarea rows="10" class="form-control"></textarea>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

var placeholder_text = "email 1 \nemail 2 \nemail 3";

$('textarea').attr('placeholder' , placeholder_text);

$('textarea').focus(function(){
 $('textarea').attr('placeholder' , '');
});

$('textarea').blur(function(){
 $('textarea').attr('placeholder' , placeholder_text);
});
 
});
</script>
