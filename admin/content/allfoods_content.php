<div class="card">
    <div class="card-header">
      <h3 class="card-title">All Foods Details</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th width="25%">Food Name</th>
          <th width="25%">Category</th>
          <th width="25%">Price</th>
          <th width="25%">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $conn=new mysqli("Localhost","root","","restaurant");
            $sql = "SELECT * FROM foods ORDER BY ID DESC";
            //'$_REQUEST[id]'
            $result = $conn->query($sql);
            while($row=$result->fetch_assoc())
            {
        ?>
        <tr>
          <td><?php echo $row["name"] ?></td>
          <td><?php echo $row["category"] ?></td>
          <td><?php echo $row["price"] ?></td>
          <td>
            <a class="btn btn-primary btn-sm" href="viewfood.php?id=<?php echo $row["id"] ?>">
                <i class="fas fa-folder">
                </i>
                View
            </a>
            <a class="btn btn-info btn-sm" href="editfood.php?id=<?php echo $row["id"] ?>">
                <i class="fas fa-pencil-alt">
                </i>
                Edit
            </a>
            <a class="btn btn-danger btn-sm" href="action/deletefood.php?id=<?php echo $row["id"] ?>">
                <i class="fas fa-trash">
                </i>
                Delete
            </a>
          </td>
        </tr>
        <?php } ?> 
        </tbody>
        <tfoot>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->