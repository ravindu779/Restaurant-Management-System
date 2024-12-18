<?php
          $conn=new mysqli("Localhost","root","","restaurant");

          $id = $_REQUEST["id"];

          $sql = "SELECT * FROM orders where ref_number=$id";
          //'$_REQUEST[id]'
          $result = $conn->query($sql);
          while($row=$result->fetch_assoc())
          {
 ?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> <?php echo $row["name"]; ?>
                    <small class="float-right">Date: <?php echo $row["date"]; ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong> <?php echo $row["name"]; ?></strong><br>
                    <?php echo $row["address"]; ?><br><br>
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                  <address>
                    Phone: <?php echo $row["phone"]; ?><br>
                    Email: <?php echo $row["email"]; ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Order Status:</b> <?php echo $row["status"]; ?><br>
                  <b>Order ID:</b>#<?php echo $row["ref_number"]; ?><br>
                
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product</th>
                      <th>Serial #</th>
                      <th>Description</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                      $conn=new mysqli("Localhost","root","","restaurant");
                      $AllTotal=0;
                      $count=0;
                      $sql = "SELECT * FROM cart where order_states=$id";
                      //'$_REQUEST[id]'
                      $result = $conn->query($sql);
                      while($row3=$result->fetch_assoc())
                      {
                    ?>

                        <?php

                        $id = $row3["foodid"];

                        $sql2 = "SELECT * FROM foods where id=$id";


                        $total=0;
                        //'$_REQUEST[id]'
                        $result2 = $conn->query($sql2);
                        while($row2=$result2->fetch_assoc())
                        {
                            $count++;
                        ?>

                    <tr>
                      <td><?php echo $count; ?></td>
                      <td>
                          <a href="#"><?php echo $row2["name"]; ?>,</a>
                          <span><?php echo $row3["size"]; ?></span>
                          <?php if($row3["optional1"] != '0'){ echo "<p>coca-cola</p>";}  ?>
                          <?php if($row3["optional2"] != '0'){ echo "<p>7up</p>";}  ?>
                      </td>
                      <td>Rs.<?php echo $row2["price"]; ?>.00</td>
                      <td>
                        <h6><?php if ($row3["size"] == 'small') {
                              echo 'Rs.' . $row2["price"] . '.00 * ' . $row3["f_quentity"];
                              $total=$row2["price"]*$row3["f_quentity"];

                            } elseif ($row3["size"] == 'medium') {
                              echo '(Rs.' . $row2["price"] . '.00 + RS.150.00 )* ' . $row3["f_quentity"];
                              $total=($row2["price"]+150)*$row3["f_quentity"];
                            } elseif ($row3["size"] == 'large') {
                              echo '(Rs.' . $row2["price"] . '.00 + RS.250.00 )* ' . $row3["f_quentity"];
                              $total=($row2["price"]+250)*$row3["f_quentity"];
                            } ?>
                        </h6>
                        <h6><?php if ($row3["optional1"] != '0') { echo 'Rs.10.00 * ' . $row3["d_quentity"];  $total =  $total+ (10*$row3["d_quentity"]); }?></h6>
                        <h6><?php if ($row3["optional2"] != '0') { echo 'Rs.15.00 * ' . $row3["d_quentity"];  $total =  $total+ (15*$row3["d_quentity"]);}?></h6>
                      </td>
                      <td><h6>Rs.<?php echo $total; $AllTotal = $AllTotal+ $total?>.00</h6></td>
                    </tr>

                    <?php } ?>

                    <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th>Total:</th>
                        <td>Rs.<?php echo $AllTotal; ?>.00</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                    <?php
                    if ($row["status"] == "Pending") {
                        echo '<a href="action/delivery.php?id=' . $row["id"] . '" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Order Placed </a>';
                    }
                    ?>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <?php } ?>