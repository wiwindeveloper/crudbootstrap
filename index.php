<?php
    include 'db/connect_db.php';
    include_once 'header.php';
?>
  <body>
    <?php include_once 'navbar.php';?>
    <div class="container">
        <div class="page-header">
            <h1>Data Products</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a type="button" class="btn btn-primary" href="addProduct.php">
                    Add
                </a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM 
                                    `products` 
                                 ORDER BY 
                                    `id_product` 
                                 ASC";

                        $result = mysqli_query($connect, $query);
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['category'];?></td>
                                <td><?php echo $row['stock'];?></td>
                                <td><?php echo "Rp ".$row['price'];?></td>
                                <td>
                                    <a href ="editProduct.php?edit_id=<?php echo $row['id_product'];?>" type="button" class="btn btn-sm btn-info">
                                        Edit
                                    </a>
                                    <a href="deleteProduct.php?delete_id=<?php echo $row['id_product'];?>" type="button" class="btn btn-sm btn-danger">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php    
                        $no++;
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="footer">
      <div class="container">
        <p class="text-muted">&copy; Wiwin Savitri</p>
      </div>
    </footer>
    <!-- /.Footer-->
  </body>
</html>