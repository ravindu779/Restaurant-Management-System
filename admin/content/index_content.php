<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">

        <?php
          $conn=new mysqli("Localhost","root","","restaurant");
          $count=0;

          $sql = "SELECT * FROM orders WHERE status='Pending'";
          //'$_REQUEST[id]'
          $result = $conn->query($sql);
          while($row=$result->fetch_assoc())
          {
            $count++;
          }
        ?>

          <h3><?php echo $count; ?></h3>

          <p>New Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="neworders.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
        <?php
          $conn=new mysqli("Localhost","root","","restaurant");
          $count=0;

          $sql = "SELECT * FROM orders WHERE status='Complete'";
          //'$_REQUEST[id]'
          $result = $conn->query($sql);
          while($row=$result->fetch_assoc())
          {
            $count++;
          }
        ?>

          <h3><?php echo $count; ?></h3>

          <p>Completed Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="completedorders.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
        <?php
          $conn=new mysqli("Localhost","root","","restaurant");
          $count=0;

          $sql = "SELECT * FROM foods ";
          //'$_REQUEST[id]'
          $result = $conn->query($sql);
          while($row=$result->fetch_assoc())
          {
            $count++;
          }
        ?>

          <h3><?php echo $count; ?></h3>

          <p>All Foods</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="allfoods.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    
    <!-- ./col -->
</div>
<!-- /.row -->