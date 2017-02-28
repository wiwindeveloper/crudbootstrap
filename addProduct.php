<?php 
include 'db/connect_db.php';
include_once 'header.php';
?>
  <body>
    <?php include_once 'navbar.php';?>
    <div class="container">
        <div class="page-header">
            <h1>
              Add Products
            </h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="addProcess.php">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="productName">
                        Product Name
                      </label>
                      <input type="text" class="form-control" name="productName" placeholder="Type product name here...." required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="productCategory">
                        Category
                      </label>
                      <select class="form-control" name="productCategory" required>
                        <option value="">
                          -Select a category-
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
                      <input type="number" class="form-control" name="productStock" required>
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
                          <input type="number" class="form-control" name="productPrice" required>
                        <div class="input-group-addon">
                          .00
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="submit" class="btn btn-default" value="Submit" name="submit">
                  </div>
                </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>