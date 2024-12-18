<!-- general form elements -->
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add Foods Table</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="post" action="action/addfood_action.php" enctype="multipart/form-data">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name">
      </div>
      <div class="form-group">
        <label for="exampleSelectBorder">Category</label>
        <select class="custom-select form-control-border" id="exampleSelectBorder" name="category">
            <option value="Burger">Burger</option>
            <option value="Pressure">Pressure</option>
            <option value="Pizza">Pizza</option>
            <option value="Diabetic">Diabetic</option>
        </select>
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="price">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Max Price</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="maxprice">
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Image 1</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="Image1">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Image 2</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="Image2">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Image 3</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="Image3">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      </div>
      <div class="form-group">
            <label>Descriptions</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..." name="descriptions"></textarea>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
 <!-- /.card -->