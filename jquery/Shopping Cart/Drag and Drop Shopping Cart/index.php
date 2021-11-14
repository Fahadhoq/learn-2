<?php   
 //index.php  
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | PHP Shopping Cart by jQuery Drag and Drop</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style>  
           .product_drag_area{  
                width:600px;  
                height:200px;  
                border:2px dashed #ccc;  
                color:#ccc;  
                line-height:200px;  
                text-align:center;  
                font-size:24px;  
           }  
           .product_drag_over{  
                color:#000;  
                border-color:#000;  
           }  
           </style>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">PHP Shopping Cart by jQuery Drag and Drop</h3><br />  
                <?php  
                $query = "SELECT * FROM product ORDER BY product_id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; cursor:move" align="center">  
                          <img src="<?php echo $row["product_image"]; ?>" data-id="<?php echo $row['product_id']; ?>" data-name="<?php echo $row['product_name']; ?>" data-price="<?php echo $row['product_price']; ?>" class="img-responsive product_drag" />  
                          <h4 class="text-info"><?php echo $row["product_image"]; ?></h4>  
                          <h4 class="text-danger">$ <?php echo $row["product_price"]; ?></h4>  
                     </div>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <div align="center">  
                     <div class="product_drag_area">Drop Product Here</div>  
                </div>  
                <div id="dragable_product_order">  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(data){  
      $('.product_drag_area').on('dragover', function(){  
           $(this).addClass('product_drag_over');  
           return false;  
      });  
      $('.product_drag_area').on('dragleave', function(){  
           $(this).removeClass('product_drag_over');  
           return false;  
      });  
      $('.product_drag').on('dragstart', function(e){  
           e.originalEvent.dataTransfer.setData("id", $(this).data("id"));  
           e.originalEvent.dataTransfer.setData("name", $(this).data("name"));  
           e.originalEvent.dataTransfer.setData("price", $(this).data("price"));  
      });  
      $('.product_drag_area').on('drop', function(e){  
           e.preventDefault();  
           $(this).removeClass('product_drag_over');  
           var id = e.originalEvent.dataTransfer.getData('id');  
           var name = e.originalEvent.dataTransfer.getData('name');  
           var price = e.originalEvent.dataTransfer.getData('price');  
           var action = "add";  
           $.ajax({  
                url:"action.php",  
                method:"POST",  
                data:{id:id, name:name, price:price, action:action},  
                success:function(data){  
                     $('#dragable_product_order').html(data);  
                }  
           })  
      });  
      $(document).on('click', '.remove_product', function(){  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                var id = $(this).attr("id");  
                var action="delete";  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     data:{id:id, action:action},  
                     success:function(data){  
                          $('#dragable_product_order').html(data);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
 });  
 </script>