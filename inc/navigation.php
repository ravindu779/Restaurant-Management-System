<!--=============================
        TOPBAR START
    ==============================-->
    <section class="tf__topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-6 col-md-8">
                    <ul class="tf__topbar_info d-flex flex-wrap d-none d-sm-flex">
                        <li><a href="mailto:delights@gmail.com"><i class="fas fa-envelope"></i>delights@gmail.com</a>
                        </li>
                        <li class="d-none d-md-block"><a href="callto: 055 2245789"><i class="fas fa-phone-alt"></i>
                                055 2245789</a></li>
                    </ul>
                </div>
                <div class="col-xl-6 col-sm-6 col-md-4">
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TOPBAR END
    ==============================-->

    <!--=============================
        Navigation START
    ==============================-->

    <nav class="navbar navbar-expand-lg main_menu">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="RegFood" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="far fa-bars menu_icon_bar"></i>
                    <i class="far fa-times close_icon_close"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php if($page == 'home'){ echo "active";}  ?>" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($page == 'about'){ echo "active";}  ?>" href="about.php">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($page == 'menu'){ echo "active";}  ?>" href="menu.php">menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($page == 'contact'){ echo "active";}  ?>" href="contact.php">contact</a>
                        </li>
                    </ul>
                    <?php if (isset($_SESSION["email"])): ?>
                        <ul class="menu_icon d-flex flex-wrap">
                            <li>
                                <a class="cart_icon" href="cart_view.php"><i class="fas fa-shopping-basket"></i></a>
                            </li>
                            <li>
                                <a href="dashboard.php"><i class="fas fa-user"></i></a>
                            </li>
                        </ul>
                    <?php else: ?>
                        <ul class="menu_icon d-flex flex-wrap">
                            <li>
                                <a class="cart_icon" href="sign_in.php"><i class="fas fa-shopping-basket"></i></a>
                            </li>
                            <li>
                                <a href="sign_in.php"><i class="fas fa-user"></i></a>
                            </li>
                        </ul>
                        <ul style="margin-left:10px;">   
                            <li>
                                <a href="sign_in.php" class="btn btn-block btn-warning">Sign In</a>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </nav>

    <!--=============================
        Navigation END
    ==============================-->