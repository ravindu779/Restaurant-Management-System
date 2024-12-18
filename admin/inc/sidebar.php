<?php

    $email=$_SESSION["adminemail"];

	  $conn=new mysqli("Localhost","root","","restaurant");


		$sql = "SELECT * FROM admins where email='$email'";
		$result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $admin_id = $row["id"];
            $admin_name = $row["name"];
            $admin_email = $row["email"];

            $conn->close();
        } else {

            header("Location: login.php"); 
            exit();    
        }

?>
    
    
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $admin_name  ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-gift"></i>
              <p>
                Orders Details
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="allorders.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="neworders.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="delivery_order.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delivery Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="completedorders.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Completed Orders</p> 
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-pizza-slice"></i>
              <p>
                Foods Details
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="allfoods.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Foods</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addfood.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Food</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="action/logout.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
