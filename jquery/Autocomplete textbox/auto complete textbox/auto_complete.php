<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Autocomplete textbox using jQuery, PHP and MySQL</title>  
          
           <script src="js/jquery-1.10.2.min.js"></script>

          <script src="js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="css/bootstrap.min.css">

           <style>  
           ul{  
                background-color:#eee;  
                cursor:pointer;  
           }  
           li{  
                padding:12px;  
           }  
           </style>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Autocomplete textbox using jQuery, PHP and MySQL</h3><br />  
                <label>Enter Name</label>  
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" />  
                <div id="NameList"></div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#name').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#NameList').fadeIn();  
                          $('#NameList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#name').val($(this).text());  
           $('#NameList').fadeOut();  
      });  
 });  
 </script> 