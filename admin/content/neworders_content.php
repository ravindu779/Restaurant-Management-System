<div class="card">
    <div class="card-header">
      <h3 class="card-title">New Orders Details</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Order ID</th>
          <th>Customer Name</th>
          <th>Date</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
          $conn=new mysqli("Localhost","root","","restaurant");

          $sql = "SELECT * FROM orders WHERE status='Pending' ORDER BY id DESC";
          //'$_REQUEST[id]'
          $result = $conn->query($sql);
          while($row=$result->fetch_assoc())
          {
        ?>
        <tr>
          <td>#<?php echo $row["ref_number"]; ?></td>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["date"]; ?></td>
          <td><?php echo $row["status"]; ?></td>
          <td>
            <a class="btn btn-block btn-info btn-xs" href="vieworderdetails.php?id=<?php echo $row["ref_number"] ?>">
              <i class="fas fa-eye"></i> View Order
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