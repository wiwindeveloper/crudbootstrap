<?php 
include 'db/connect_db.php';

$id     = $_GET['delete_id'];
$query  = "
          DELETE FROM
              `products` 
          WHERE 
              `id_product` = '$id'
          "; 

$result = mysqli_query($connect, $query);

if (!$result) 
{
  $msg =  "
            <div class='alert alert-danger' role='alert'>
              <strong>Oh Sorry! </strong> 
                Error when deleted data.
            </div>
          ";
}
else
{
  $msg =  "
          <div class='alert alert-success' role='alert'>
            <strong>Success! </strong> 
              Data deleted successfully.
          </div>
          ";
} 

include_once 'header.php';  
?>
  <body>
    <?php include_once 'navbar.php';?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php
                if(!$result)
                {
                  echo $msg;
                }
                else
                {
                  echo $msg;
                }
              ?>
              <div class="col-md-6">
                <a href="index.php" class="btn btn-primary">Back</a>
              </div>
            </div>
        </div>
    </div>
  </body>
</html>