<?php
	$conn=new mysqli("Localhost","root","","restaurant");

	$sql = "SELECT * FROM foods where id='$_REQUEST[id]'";
	$result = $conn->query($sql);

	while($row=$result->fetch_assoc())
		{
?>
<!-- general form elements -->
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Food Table</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="post" action="action/update_action.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name" value="<?php echo $row["name"] ?>">
      </div>
      <div class="form-group">
        <label for="exampleSelectBorder">Category</label>
        <select class="custom-select form-control-border" id="exampleSelectBorder" name="category">
            <option value="Burger" <?php if ($row["category"] === "Burger") echo "selected"; ?>>Burger</option>
            <option value="Chicken" <?php if ($row["category"] === "Chicken") echo "selected"; ?>>Chicken</option>
            <option value="Pizza" <?php if ($row["category"] === "Pizza") echo "selected"; ?>>Pizza</option>
            <option value="Dessert" <?php if ($row["category"] === "Dessert") echo "selected"; ?>>Dessert</option>
            <option value="Noodles" <?php if ($row["category"] === "Noodles") echo "selected"; ?>>Noodles</option>
        </select>
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="price" value="<?php echo $row["price"] ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Max Price</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="maxprice" value="<?php echo $row["maxprice"] ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Image 1</label>
        <div class="input-group">
          <div class="product-image-thumb" ><img src="action/images/<?php echo $row["Image1"] ?>"></div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="Image1" >
            <input type="hidden"  name="Image1_old" value="<?php echo $row["Image1"] ?>">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Image 2</label>
        <div class="input-group">
          <div class="product-image-thumb" ><img src="action/images/<?php echo $row["Image2"] ?>"></div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="Image2" >
            <input type="hidden"  name="Image2_old" value="<?php echo $row["Image2"] ?>">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Image 3</label>
        <div class="input-group">
          <div class="product-image-thumb" ><img src="action/images/<?php echo $row["Image3"] ?>"></div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="Image3" >
            <input type="hidden"  name="Image3_old" value="<?php echo $row["Image3"] ?>">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
        </div>
      </div>
      <div class="form-group">
            <label>Descriptions</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..." name="descriptions" ><?php echo $row["descriptions"] ?></textarea>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary"> Update</button>
    </div>
  </form>
</div>
 <!-- /.card -->
 <?php } ?>