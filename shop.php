<?php  
$title = "Shop here";
session_start(); 
require_once 'layout/header.php'; 
include 'appointmentdb.php';
?>   

<?php
     if(isset($_POST["add"])) {  // checking if the 'add_to_cart' form has been submitted.
         
          if(isset($_SESSION["shopping_cart"])) {  //checking for 'shopping cart' session variable.
               $item_array_id = array_column($_SESSION["shopping_cart"], "item_array"); //creates an array containing all the "item_array" values in the shopping cart.      
               
               if(!in_array($_GET["id"], $item_array_id)) {  //check for the id of the current item added to the arry.
                    $count = count($_SESSION["shopping_cart"]);   //counting the items in the cart.
                   //creating a new array 
                    $item_array = array(  
                         'item_id'=>$_GET["pid"],  
                         'item_name'=>$_POST["hidden_name"],  
                         'item_price'=>$_POST["hidden_price"],  
                         'item_quantity'=>$_POST["quantity"]  
                    );  
                    //adds the new item array to the $_SESSION["shopping_cart"] array at the index of $count.
                    $_SESSION["shopping_cart"][$count] = $item_array; 
                    echo '<script>window.location="shop.php"</script>';  //redirects the user to "process.php.
               }  
            
          }  
          //If session variable $_SESSION["shopping_cart"] does not exist(meaning it is the first item being added), 
          //it creates a new item array and adds  array at index 0.
          else  {          
               $item_array = array( 
                    'item_id'=>$_GET["pid"],  
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
                         echo '<script>window.location="shop.php"</script>';  //redirect
                    }  
               } 
               $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']); 
          }  
     }  
?> 

<?php


if(isset($_POST["submit_order"])) {
    foreach($_SESSION["shopping_cart"] as $values) {
        $order_id = '';
        $id = $values['item_id'];
        $quantity = $values['item_quantity'];
        $price = $values['item_price'];

        // Insert the data into the "Order_Table"
        $sql = "INSERT INTO Order_Table (order_id, pid, quantity, price) VALUES ('$order_id', '$pid', '$quantity', '$price')";
        $result = mysqli_query($conn, $sql);
        if(!$result) {
            // Error handling if the insert fails
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // Clear the shopping cart session after the order is submitted
    unset($_SESSION["shopping_cart"]);

    // Redirect to a success page or any other desired location
    echo '<script>window.location="shop.php"</script>';
}

?>


<html>  
<body>
     <div class="container" >  
          <div class="row">
               <div class="col-6">
                    <h2 align ="center">Select Your favourite Here!</h2><br>   
                    <?php 
                        $query = "SELECT * FROM Product ORDER BY pid ASC"; // fetching data from db.            
                        $result = $conn->query($query); //connect with the database.The results of the query are stored in $result.
                        //if there are any products in the  variable $result, it displays products through this loop.
                        if(mysqli_num_rows($result) > 0){  
                            $col=1;
                            while($row = mysqli_fetch_array($result)) //result is assigned to $row here.
                            { 
                                if ($col== 1){
                                    echo "<div class='row'>";
                                }                             
                    ?>            
                                <!-- form to display products.
                                when the form is submitted(clicked on add to cart button) selected product 
                                will be added to the shopping cart.<-->
                                   <div class="col-md-6"> 
                                        <form method="post" action="shop.php?action=add&id="<?php echo $row["pid"]; ?> >  
                                             <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                                                  <img src="<?php echo $row["image"]; ?>" width="150" height="auto" /><br />  
                                                  <h4 class="text-basic" ><?php echo $row["name"]; ?></h4>  
                                                  <h4 class="text-primary">€ <?php echo $row["price"]; ?></h4>  
                                                  
                                                  <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                                                  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />                                                              
                                                  <input type="number" name="quantity" class="form-control" value="1" min="1" />                                                  
                                                  <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                                             </div>  
                                        </form>  
                                   </div>  

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

               </div>
               
               <div class="col-6">
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
                                   <td><a href="shop.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td> 
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
                    
                    <form method="post" action="shop_process.php">    
                        <button type="submit" class="btn btn-primary" name="submit_order">Submit Order</button><br><br>
                        <a href="appointment_form.php" class="btn btn-danger" style="width: 200px; height: 50px;">Taste Before you Buy!</a>
                    </form>
               </div>
          </div>  
     </div> <br />  
</body>
</html>   


<?php 
mysqli_close($conn);
include 'layout/footer.php';
?>


  
         
      
              
               
                       

                     
              

                
               
                