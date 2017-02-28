<?php  
	include 'db/connect_db.php';

	$id 		= $_POST['productId'];
	$pName 		= $_POST['productName'];
	$pCategory 	= $_POST['productCategory'];
	$pStock 	= $_POST['productStock'];
	$pPrice 	= $_POST['productPrice'];

	$query = "
			UPDATE 
				products 
			SET 
				name 		= '$pName', 
				category 	= '$pCategory', 
				stock 		= '$pStock', 
				price 		= '$pPrice'
			WHERE 
				id_product = $id
			";

	$result = mysqli_query($connect, $query);

    include_once 'header.php';
?>
  <body>
    <?php include_once 'navbar.php';?>
    <div class="container">
        <div class="page-header">
            <h1>Result</h1>
            <?php
            	if (!$result) 
            	{
            	?>
            		<div class="alert alert-danger" role="alert">
					    <strong>Oh Sorry! </strong> 
					        Error when inserted data.
					</div>
				<?php
            	}
            	else
            	{
            	?>
            		<div class="alert alert-success" role="alert">
					    <strong>Success </strong> 
					        Inserted data Successfully.
					</div>
				<?php
            	}
            ?>
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
                    		<td><?php echo $pPrice;?></td>
                    	</tr>
                    </tbody>
                </table>
                <a type="button" class="btn btn-primary" href="index.php">
                    <span class="glyphicon glyphicon-backward"></span>
                    Back Home
                </a>
            </div>
        </div>
    </div>
  </body>
</html>