<<<<<<< HEAD
<?php   
<<<<<<<< HEAD:shop.php
$title = "Shopping Cart";
 session_start(); 
 include 'header.php'; 
 include 'dbmember.php'; 
//manasha
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_array");  
          
           
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                
                $item_array = array(  
                     'item_id'=>$_GET["id"],  
                     'item_name'=>$_POST["hidden_name"],  
                     'item_price'=>$_POST["hidden_price"],  
                     'item_quantity'=>$_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
     
                echo '<script>window.location="process.php"</script>';  
           }  
      }  
      else  
      {  
========
=======
<?php  
$title = "Shop here";
>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4
session_start(); 
include 'header.php'; 
include 'dbshop.php'; // calling the database connection.
?>

<?php
     if(isset($_POST["add_to_cart"])) {  // checking if the 'add_to_cart' form has been submitted.
<<<<<<< HEAD
>>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4:process.php
=======
>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4
         
          if(isset($_SESSION["shopping_cart"])) {  //checking for 'shopping cart session variable.
               $item_array_id = array_column($_SESSION["shopping_cart"], "item_array"); //creates an array containing all the "item_array" values in the shopping cart.      
               
               if(!in_array($_GET["hidden_name"], $item_array_id)) {  //check for the id of the current item added to the arry.
                    $count = count($_SESSION["shopping_cart"]);   //counting the items in the cart.
                   //creating a new array 
                    $item_array = array(  
                         'item_id'=>$_GET["hidden_name"],  
                         'item_name'=>$_POST["hidden_name"],  
                         'item_price'=>$_POST["hidden_price"],  
                         'item_quantity'=>$_POST["quantity"]  
                    );  
                    //adds the new item array to the $_SESSION["shopping_cart"] array at the index of $count.
                    $_SESSION["shopping_cart"][$count] = $item_array; 
<<<<<<< HEAD
                    echo '<script>window.location="process.php"</script>';  //redirects the user to "process.php.
=======
                    echo '<script>window.location="shop.php"</script>';  //redirects the user to "process.php.
>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4
               }  
             
          }  
          //If session variable $_SESSION["shopping_cart"] does not exist(meaning it is the first item being added), 
          //it creates a new item array and adds  array at index 0.
          else  {          
               $item_array = array( 
                    'item_id'=>$_GET["hidden_name"],  
                    'item_name'=>$_POST["hidden_name"],  
                    'item_price'=>$_POST["hidden_price"],  
                    'item_quantity'=>$_POST["quantity"]  
               );  
               $_SESSION["shopping_cart"][0] = $item_array;  
          }  
     }

//  checks if the "action" parameter is set.
     if(isset($_GET["action"])) {  
          if($_GET["action"] == "delete") { //It loops through $_SESSION["shopping_cart"] array and assign each item to the $values variable. 
               foreach($_SESSION["shopping_cart"] as $keys => $values) {  
                    
                    if($values["item_id"] == $_GET["pid"]) {  //It checks $values["item_id"] is equal to the ID passed through ($_GET["id"]). 
                         $key = array_search($_GET['pid'], $_SESSION['shopping_cart']);	
                         unset($_SESSION["shopping_cart"][$key]);   //removes the item from the $_SESSION["shopping_cart"].                   
<<<<<<< HEAD
                         echo '<script>window.location="process.php"</script>';  //redirect
=======
                         echo '<script>window.location="shop.php"</script>';  //redirect
>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4
                    }  
               } 
               $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']); 
          }  
     }  
?>  
<html>  
<body>
     <div class="container" >  
          <div class="row">
               <div class="col-6">
               <h2 align ="center">Select Your favourite Here!</h2><br>   
                    <?php 
                         $query = "SELECT * FROM Product ORDER BY pid ASC";                 
                         $result = $conn->query($query); //connect with the database.The results of the query are stored in $result.
                         //if there are any products in the  variable $result, it displays products through this loop.
                         if(mysqli_num_rows($result) > 0){  
                              $col=1;
                              while($row = mysqli_fetch_array($result)) { 
                                   if ($col== 1){
                                        echo "<div class='row'>";
                                   }                             
                    ?>            
                                   <!-- generating the form to display products.
                                   when the form is submitted(clicked on add to cart button) selected product 
                                    will be added to the shopping cart.<-->
                                   <div class="col-sm-6"> 
<<<<<<< HEAD
                                        <form method="post" action="process.php?action=add&id="<?php echo $row["pid"]; ?> >  
=======
                                        <form method="post" action="shop.php?action=add&id="<?php echo $row["pid"]; ?> >  
>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4
                                             <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                                                  <img src="<?php echo $row["image"]; ?>" width="150" height="auto" /><br />  
                                                  <h4 class="text-basic" ><?php echo $row["name"]; ?></h4>  
                                                  <h4 class="text-primary">€ <?php echo $row["price"]; ?></h4>  
                                                  <input type="number" name="quantity" class="form-control" value="1" min="1" />                                                  
                                                  <input type="hidden" name="hiddenid" value="<?php echo $row["pid"]; ?>" /> 
                                                  <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                                                  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />                                                              
                                                  <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                                             </div>  
                                        </form>  
                                   </div>  

<<<<<<< HEAD
<<<<<<<< HEAD:shop.php
                              }
                            
                              
                    ?>   
                        <div class="col-sm-6">

                         <form method="post" action="shop_process.php"<?php echo $row["id"]; ?> >  
                              <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                                   <img src="<?php echo $row["image"]; ?>" width="150" height="auto" /><br />  
                                   <h4 class="text-basic" ><?php echo $row["name"]; ?></h4>  
                                   <h4 class="text-primary">€ <?php echo $row["price"]; ?></h4>  
                                   <input type="number" name="quantity" class="form-control" value="1" />  
                                   <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                                   <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                                   <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                              </div>  
                         </form>  
                    </div>  

                    <?php  
                         $col++;
                         if ($col==3)
                         {
                             $col=1;
                         }
                 
                         if ($col==1)
                         {
                         echo "</div>"; 
                         } 
                         
                        
                    }   
                    }  
                    ?>
========
=======
>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4
                                   <?php  
                                        $col++;
                                        if ($col==3) {
                                        $col=1;
                                        }
                                        if ($col==1) { 
                                        echo "</div>"; 
                                        }                         
                              }   
                         }  
                                   ?>
<<<<<<< HEAD
>>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4:process.php
=======
>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4

               </div>
               
               <div class="col-6">
<<<<<<< HEAD
<<<<<<<< HEAD:shop.php

               <h3 align="center">Order Details</h3>  
                <div class="table-responsive">  
                <table class="table table-bordered">  
    <tr>  
        <th width="40%">Item Name</th>  
        <th width="10%">Quantity</th>  
        <th width="20%">Price</th>  
        <th width="15%">Total</th>  
        <th width="5%">Action</th>  
    </tr>  
    <?php   
    if(!empty($_SESSION["shopping_cart"]))  
    {  
        $total = 0;
        $totalCount = 0; // Initialize total count variable
        foreach($_SESSION["shopping_cart"] as $keys => $values)  
        {  
            ?>  
            <tr>  
                <td><?php echo $values["item_name"]; ?></td>  
                <td><?php echo $values["item_quantity"]; ?></td>  
                <td>€ <?php echo $values["item_price"]; ?></td>  
                <td>€ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                <td><a href="process.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
            </tr>  
            <?php  
            $total += ($values["item_quantity"] * $values["item_price"]);
            $totalCount += $values["item_quantity"]; // Increment total count by item quantity
        }  
        ?>  
        <tr>  
            <td colspan="3" align="right">Total</td>  
            <td align="right">€ <?php echo number_format($total, 2); ?></td>  
            <td></td>  
        </tr>  
        <tr>
            <td colspan="4" align="right">Total Count</td>
            <td><?php echo $totalCount; ?></td>
        </tr>

        
        <?php  
    }  
    ?>  
</table> 

          </div>

                <button type="submit" class="btn btn-primary" name="Submitorder">Submit</button>
        </div>
                     </div>
             

               </div>
          </div>  
     </div>  

     
<br />  
<?php require_once 'footer.php'; 
========
=======
>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4
                    <h4 align="center">Your Order Details</h4>  <br>
                    <div class="table-responsive">  
                         <table class="table table-bordered">  
                              <tr> 
                                   <th width="40%">Item Name</th>  
                                   <th width="10%">Quantity</th>  
                                   <th width="20%">Price</th>  
                                   <th width="15%">Total</th>  
                                   <th width="5%">Action</th>  
                              </tr>  
                                   <?php   
                                        if(!empty($_SESSION["shopping_cart"])) //checking for any items in the shopping cart. 
                                        {  
                                             $total = 0;
                                             $totalCount = 0; // Initialize total count variable
                                             foreach($_SESSION["shopping_cart"] as $keys => $values) {  
                                   ?>  
                              <tr>  
                                   <td><?php echo $values["item_name"]; ?></td>  
                                   <td><?php echo $values["item_quantity"]; ?></td>  
                                   <td>€ <?php echo $values["item_price"]; ?></td>  
                                   <td>€ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
<<<<<<< HEAD
                                   <td><a href="process.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td> 
=======
                                   <td><a href="shop.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td> 
>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4
                              </tr>  
                                   <?php  
                                        $total += ($values["item_quantity"] * $values["item_price"]);// calculating total price.
                                        $totalCount += $values["item_quantity"]; // Incrementing the total item quantity
                                   }  
                                   ?>  
                              <tr>  
                                   <td colspan="3" align="right">Total</td> 
                                   <td align="right">€ <?php echo number_format($total, 2); ?></td>  
                                   <td></td>  
                              </tr>  
                              <tr>
                                   <td colspan="4" align="right">Total Items</td>
                                   <td><?php echo $totalCount; ?></td>
                              </tr>
                              <?php  
                                        }  
                              ?>  
                         </table>                                                 
                    </div>
                    <button type="submit" class="btn btn-primary" name="Submitorder">Confirm Your Order</button>
               </div>
          </div>  
     </div> <br />  
</body>

<?php 
mysqli_close($conn);
include 'footer.php';
<<<<<<< HEAD
>>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4:process.php
=======
>>>>>>> 24d5b111afac590c21e86d2be0449c0b4a2076b4
?>


  
         
      
              
               
                       

                     
              

                
               
                