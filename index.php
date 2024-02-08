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