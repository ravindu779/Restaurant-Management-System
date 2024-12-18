<?php
	$conn=new mysqli("Localhost","root","","restaurant");

	$sql = "SELECT * FROM foods where id='$_REQUEST[id]'";
	$result = $conn->query($sql);

	while($row=$result->fetch_assoc())
		{
?>
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"><?php echo $row["name"] ?></h3>
              <div class="col-12">
                <img src="action/images/<?php echo $row["Image1"] ?>" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="action/images/<?php echo $row["Image1"] ?>" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="action/images/<?php echo $row["Image2"] ?>" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="action/images/<?php echo $row["Image3"] ?>"></div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?php echo $row["name"] ?></h3>
              <h5><?php echo $row["category"] ?></h5>
              <p><?php echo $row["descriptions"] ?></p>

              <hr>
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                   $<?php echo $row["price"] ?>.00
                </h2>
                <h4 class="mt-0">
                  <small>Max Price: $<?php echo $row["maxprice"] ?>.00 </small>
                </h4>
              </div>

              <div class="mt-4">
                <a class="btn btn-info btn-lg" href="editfood.php?id=<?php echo $row["id"] ?>">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>
                <a class="btn btn-danger btn-lg" href="action/deletefood.php?id=<?php echo $row["id"] ?>">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
              </div>

            </div>
          </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
<?php } ?>