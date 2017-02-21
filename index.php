<?php
    include 'db/connect_db.php';
    include_once 'header.php';

    //number format
    $jumlah_desimal   = "2";
    $pemisah_desimal  = ",";
    $pemisah_ribuan   = ".";
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
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
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
                                <td><?php echo "Rp ".(number_format($row['price'],$jumlah_desimal, $pemisah_desimal, $pemisah_ribuan));?></td>
                                <td>
                                    <a href ="editProduct.php?edit_id=<?php echo $row['id_product'];?>" type="button" class="btn btn-sm btn-info">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                         Edit
                                    </a>
                                    <a href="deleteProduct.php?delete_id=<?php echo $row['id_product'];?>" type="button" class="btn btn-sm btn-danger">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
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
    <?php include_once 'footer.php';?>
    <!-- /.Footer-->
  </body>
</html>