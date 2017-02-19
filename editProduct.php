<?php 
include 'db/connect_db.php';

$id = $_GET['edit_id'];

include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Basic Crud System with PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default"><!--Navbar-->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CrudSystem</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                </ul>
            </div>
        </div>
    </nav><!--/.Navbar-->

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
                      <input type="text" class="form-control" name="productName" value="<?php echo $row['name'];?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="productCategory">
                        Category
                      </label>
                      <select class="form-control" name="productCategory">
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
                      <input type="number" class="form-control" name="productStock" value="<?php echo $row['stock'];?>">
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
                          <input type="number" class="form-control" name="productPrice" value="<?php echo $row['price'];?>">
                        <div class="input-group-addon">
                          .00
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="submit" class="btn btn-default" value="Update" name="update">
                  </div>
                </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>