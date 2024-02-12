<?php   
 session_start(); 
 include 'header.php'; 
 include 'db.php'; 

 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
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
           $item_array = array(  
                'item_id'=>$_GET["id"],  
                'item_name'=>$_POST["hidden_name"],  
                'item_price'=>$_POST["hidden_price"],  
                'item_quantity'=>$_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>window.location="process.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
  

     <h3 align="left">My Shopping Cart</h3><br />  
     <div class="container" >  
          <div class="row">
               <div class="col-6">
               <?php 
                         $query = "SELECT * FROM Product ORDER BY product_id ASC";                 
                         $result = $conn->query($query);
                         //$result = mysqli_query($connect, $query);  
                         if(mysqli_num_rows($result) > 0)
                         {  
                              $col=1;
                              while($row = mysqli_fetch_array($result))  
                              { 
                              if ($col== 1){
                                   echo "<div class='row'>";

                              }
                            
                              
                    ?>   
                        <div class="col-sm-6">

                         <form method="post" action="process.php?action=add&id="<?php echo $row["product_id"]; ?> >  
                              <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                                   <img src="<?php echo $row["product_name"]; ?>" width="150" height="auto" /><br />  
                                   <h4 class="text-basic" ><?php echo $row["product_name"]; ?></h4>  
                                   <h4 class="text-primary">€ <?php echo $row["price"]; ?></h4>  
                                   <input type="number" name="quantity" class="form-control" value="1" />  
                                   <input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />  
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

               </div>
               <div class="col-6">

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
             

               </div>
          </div>  
     </div>  
<br />  
</body>  
 </html>
   

  
         
      
              
               
                       

                     
              

                
               
                