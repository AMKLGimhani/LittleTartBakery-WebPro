<<<<<<< HEAD

<?php
include 'header.php';
?>
<h2>Order Details:</h2>
<form name="order_item form" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
        <div class="col">
                <label for="product_id">Product :</label>
                <select class="form-control" id="product_id" name="product_id">
                    <option value="0001">Huminbird Cake</option>
                    <option value="0002">Chocolate Cake</option>
                    <option value="0003">Vanila Cake</option>
                    <option value="0004">German Chocolate Cake</option>
                    <option value="0005">Valantine's Day Cake</option>
                    <option value="0006">Carrot Cake</option>
                    <option value="0007">Birthday Cupcake</option>
                    <option value="0008">Valantine Cupcake</option>
                    <option value="0009">Classic Cupcake</option>
                    <option value="0010">Confetti Cupcake</option>
                    <option value="0011">Mini Vanila Cupcake</option>
                    <option value="0012">Rose Cupcake</option>
                </select>
            </div>
            <div class="col">
                <label for="quntity">Quntity:</label>
                <input type="text" class="form-control" id="quntity" placeholder="Enter the quntity" name="quntity" required>
            </div>
        </div>
    </div>
            
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Add to Cart</button>
</form>

<?php include 'footer.php'; ?>
=======

<?php 
    $title = "Home";
    include 'header.php'; 
?>


    <div class="row">   
        <div class="col-md-7"> 
            <div class="text">
                </br></br>
                <h1>Confectionery</h1> 
                <h1>&</h1>
                <h1>Bakery Shop</h1> 
                <br>  
                <p>Embark on a delightful journey</p>
                <p>heavenly flavors</p>
                <p>with our exquisite cakes and cupcakes,</p>
                <p> crafted to elevate your moments of joy.</p>
                </br>
                <a href="cake.html" class="btn btn-danger">Shop now</a>
                <br><br>
                <p>Same day delivery in Hämeenlinna</p>
            </div>
        </div>
        <div class="col-md-5"> 
            <div class="photo">
                <img class="img-fluid" src="Pictures/IMAGE4.jpg" alt="Little Tart Bakery main cake">
            </div>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-12">
        <div class="topic"> <h2>What we offer</h2> </div> 
        <div class="text2">
            <div class="card1">
                <a href="cake.html"><img class="img-fluid" src="Pictures/cakecircle.png" 
                    alt="Little Tart Bakery cake Image"></a>
            </div>
            <div class="card2">
                <a href="cupcakes.html"><img class="img-fluid" src="Pictures/cupcakecircle.png  " 
                    alt="Little Tart Bakery cupcake Image"></a>
            </div>
        </div>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-12">
            <div class="text3">
                <h2>Our Story</h2>
                <p>Welcome to Little Tart Bakery, a hevan for those who appreciate the magic of baking.</p>
                <p> Our story is a sweet journey that began with a shared passion for creating delightful moments through irresistible treats.<br>
                    It all started in the heart of Hämeenlinna, where a group of friends united by their love for baking decided to turn their passion into a culinary adventure.</p>
                <p>Come join us as we continue to bake memories, one delightful creation at a time.<br>Explore the enchanting world of Little Tart Bakery, where every detail is a reflection of our passion for baking excellence.<br>Thank you for being a part of our story, and we look forward to sharing many more sweet moments with you!</p>
            </div>
        </div>
    </div>
    
<?php include 'footer.php'; ?>
>>>>>>> 69a57327232efadd7dd13c87d42eb91d9e4764ba
