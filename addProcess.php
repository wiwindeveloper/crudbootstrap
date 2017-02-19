<?php 
	include 'db/connect_db.php';

	$pName = $_POST['productName'];
	$pCategory = $_POST['productCategory'];
	$pStock = $_POST['productStock'];
	$pPrice = $_POST['productPrice'];

	$query = "
			INSERT INTO 
				products (
					name, 
					category, 
					stock, 
					price) 
			VALUES (
					'$pName',
					'$pCategory',
					'$pStock',
					'$pPrice'
			 )";
	
	$addData = mysqli_query($connect,$query);

  include_once 'header.php';
?>
  <body>
    <?php include_once 'navbar.php';?>
    <div class="container">
        <div class="page-header">
        	<?php
        		if (!$addData) {
					?>
						<div class="alert alert-danger" role="alert">
					        <strong>Oh Sorry!
					        </strong> 
					         Error when inserted data.
					    </div>
					<?php
				}else{
					?>
						<div class="alert alert-success" role="alert">
					        <strong>
					        	Well done!
					        </strong>
					         Data has inserted.
					      </div>
					<?php
				}
        	?>
            <h1>
              Result
            </h1>
        </div>
        <div class="row">
            <div class="col-md-12">
               	<table class="table">
		            <thead>
		              <tr>
		                <th>Product Name</th>
		                <th>Category</th>
		                <th>Stock</th>
		                <th>Price</th>
		              </tr>
		            </thead>
		            <tbody>
		              <tr>
		                <td><?php echo $pName; ?></td>
		                <td><?php echo $pCategory; ?></td>
		                <td><?php echo $pStock; ?></td>
		                <td><?php echo $pPrice; ?></td>
		              </tr>
		            </tbody>
          		</table> 
          		<a type="button" class="btn btn-primary" href="index.php">
          			Back Home
          		</a>
            </div>
        </div>
    </div>
  </body>
</html>