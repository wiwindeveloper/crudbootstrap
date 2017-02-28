<?php 
include 'db/connect_db.php';

$id = $_GET['edit_id'];

include_once 'header.php';
?>
  <body>
    <?php include_once 'navbar.php';?>
    <div class="container">
        <div class="page-header">
            <h1>Edit Products</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
            	<form method="POST" action="editProcess.php">
		            <?php
		            	$show  = "SELECT 
		                        	`name`, 
		                        	`category`, 
		                        	`stock`, 
		                        	`price` 
		                         FROM 
		                        	`products` 
		                         WHERE 
		                        	id_product = '$id'
		                        "; 

		              $result = mysqli_query($connect, $show);
		              $row    = mysqli_fetch_assoc($result);
		            ?>
                  <input type="hidden" name="productId" value="<?php echo $id;?>">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="productName">
                        Product Name
                      </label>
                      <input type="text" class="form-control" name="productName" value="<?php echo $row['name'];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="productCategory">
                        Category
                      </label>
                      <select class="form-control" name="productCategory" required>
                        <option value="<?php echo $row['category'];?>">
                          <?php echo $row['category'];?>
                        </option>
                        <option value="Accessories">
                          Accessories
                        </option>
                        <option value="Handphone">
                          Handphone
                        </option>
                        <option value="Modem">
                          Modem
                        </option>
                        <option value="Phablet">
                          Phablet
                        </option>
                        <option value="Tablet">
                          Tablet
                        </option>
                        <option value="Wearable Device">
                          Wearable Device
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="productStock">
                        Stock
                      </label>
                      <input type="number" class="form-control" name="productStock" value="<?php echo $row['stock'];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="productPrice">
                        Price
                      </label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          Rp
                        </div>
                          <input type="number" class="form-control" name="productPrice" value="<?php echo $row['price'];?>" required>
                        <div class="input-group-addon">
                          .00
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="submit" class="btn btn-default" value="Update" name="update" onClick="return confirm('Sure to update this product?')">
                  </div>
                </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>