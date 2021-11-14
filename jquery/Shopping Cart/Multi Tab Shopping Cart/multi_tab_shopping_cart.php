<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Multi Tab Shopping Cart By Using PHP Ajax Jquery Bootstrap Mysql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:800px;">  
                <h3 align="center">Multi Tab Shopping Cart By Using PHP Ajax Jquery Bootstrap Mysql</h3><br />  
                <ul class="nav nav-tabs">  
                     <li class="active"><a data-toggle="tab" href="#products">Product</a></li>  
                     <li><a data-toggle="tab" href="#cart">Cart <span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></a></li> 
                     <li><a data-toggle="tab" href="#allOrder">Order List</a></li> 
                </ul>  
                <div class="tab-content">  
                     <div id="products" class="tab-pane fade in active">  
                     <?php  
                     $query = "SELECT * FROM product ORDER BY product_id ASC";  
                     $result = mysqli_query($connect, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                     <div class="col-md-4" style="margin-top:12px;">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:380px;" align="center">  
                               <img src="images/<?php echo $row["product_image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info">Name : <?php echo $row["product_name"]; ?></h4>  
                               <h4 class="text-danger">Price: $ <?php echo $row["product_price"]; ?></h4>
                               <h4 class="text-danger">Available Quantity : <?php echo $row["quantity"]; ?></h4>  
                               <input type="text" name="quantity" id="quantity<?php echo $row["product_id"]; ?>" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" id="name<?php echo $row["product_id"]; ?>" value="<?php echo $row["product_name"]; ?>" />  
                               <input type="hidden" name="hidden_price" id="price<?php echo $row["product_id"]; ?>" value="<?php echo $row["product_price"]; ?>" />  
                               <input type="button" name="add_to_cart" id="<?php echo $row["product_id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />  
                          </div>  
                     </div>  
                     <?php  
                     }  
                     ?>  
                     </div>

                    <!-- show all order  -->
                    <div id="allOrder" class="tab-pane fade">  
                          <div class="table-responsive" id="allOrder_table">  
                               <table class="table table-bordered">  
                                    <tr> 
                                         <th width="40%">SL</th> 
                                         <th width="40%">Product Name</th>  
                                         <th width="10%">Quantity</th>  
                                         <th width="20%">Price</th>  
                                         <th width="15%">Total</th>  
                                         <th width="5%"> Status</th> 
                                         <th width="5%"> Action</th> 
                                    </tr>  
                                    <?php 

                                  //  $query = "SELECT * FROM tbl_order Where customer_id= '14' Group BY customer_id ASC"; 
                                    $query = '  
                                                SELECT * FROM tbl_order  
                                                INNER JOIN tbl_order_details  
                                                ON tbl_order_details.order_id = tbl_order.order_id  
                                                INNER JOIN tbl_user  
                                                ON tbl_user.id = tbl_order.customer_id  
                                                WHERE tbl_order.customer_id = "14"  
                                                ';  
                                    $result = mysqli_query($connect, $query); 
                                      
                                         $total =0 ; $id = 1;  
                                         while($row = mysqli_fetch_array($result))  
                                         {                                              
                                    ?>  
                                    <tr> 
                                         <td> <?php echo $id++; ?></td> 
                                         <td> <?php echo $row["product_name"] ; ?></td>  
                                         <td> <?php echo $row["product_quantity"] ; ?></td>
                                         <td> <?php echo $row["product_price"] ; ?></td>
                                         <td> <?php echo number_format($row["product_quantity"] * $row["product_price"], 2) ; ?></td>  
                                         <td> <?php echo $row["order_status"]; ?></td> 
                                         <td> <button name="Payment" class="btn btn-warning btn-xs Payment" id="<?php echo $values["product_id"]; ?>">Payment</button></td> 
                                    </tr>  
                                    <?php  
                                              $total = $total + ($row["product_quantity"] * $row["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="4" align="right">Total</td>  
                                         <td align="right"> <?php echo number_format($total, 2); ?></td>  
                                         <td></td>
                                         <td></td>
                                           
                                    </tr>  
                                    <tr>  
                                         <td colspan="7" align="center">  
                                              <form method="post" action="cart.php">  
                                                   <input type="submit" name="place_order" class="btn btn-warning" value="Payment All" />  
                                              </form>  
                                         </td> 
                                          
                                    </tr>  
                                    <?php  
                                     
                                    ?>  
                               </table>  
                          </div>  
                     </div>
                    <!-- show all order end  -->

                        <div id="cart" class="tab-pane fade">  
                          <div class="table-responsive" id="order_table">  
                               <table class="table table-bordered">  
                                    <tr>  
                                         <th width="40%">Product Name</th>  
                                         <th width="10%">Quantity</th>  
                                         <th width="20%">Price</th>  
                                         <th width="15%">Total</th>  
                                         <th width="5%">Action</th>  
                                    </tr>  
                                    <?php  
                                    if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                         {                                               
                                    ?>  
                                    <tr>  
                                         <td><?php echo $values["product_name"]; ?></td>  
                                         <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
                                         <td align="right">$ <?php echo $values["product_price"]; ?></td>  
                                         <td align="right">$ <?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>  
                                         <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
                                    </tr>  
                                    <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="3" align="right">Total</td>  
                                         <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                                         <td></td>  
                                    </tr>  
                                    <tr>  
                                         <td colspan="5" align="center">  
                                              <form method="post" action="cart.php">  
                                                   <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />  
                                              </form>  
                                         </td>  
                                    </tr>  
                                    <?php  
                                    }  
                                    ?>  
                               </table>  
                          </div>  
                     </div> 

                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          alert("Product has been Added into Cart");  
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      });  
 });  
 </script>

