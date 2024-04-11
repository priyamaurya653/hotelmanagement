<?php include_once "head.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>                      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <aside class="main-sidebar bg-muted  sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
     <a href="index3.html" class="brand-link text-center">
     <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"style="opacity: .8"> -->
    <span class="brand-text  font-weight-light">Admin</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="image/priya.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">priya maurya</a>
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar bg-muted" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar bg-muted">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="index.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
            
                <!-- <a href="viewhotel.php" class="nav-link">
                    <i class="nav-icon fa fa-hotel"></i>
                    <p>View Hotel</p>  
                </a> -->
                <!-- <a href="login.php" class="nav-link">
                <i class="nav-icon fas fa-user" style="font-size:24px"></i>
                    <p> Login </p> 
                </a> -->
                <a href="alluser.php" class="nav-link">
                    <i class="nav-icon fas fa-user" style="font: size 18px"></i>
                    <p> View user </p> 
                </a>
                <a href="userloaction.php" class="nav-link">
                <i class="fa fa-map-marker" style="font: size 18px"></i>
                 <p>Add Location</p>
                  </a>
                  <a href="roomtype.php" class="nav-link">
                 
                  <i class="fas fa-bed" style="font: size 18px"></i>
                 <p>Room type</p>
                  </a>
                  <a href="roomfacility.php" class="nav-link">
                  <i class=" nav-icon fas fa-building" style="font: size 18px"></i>
                 <p>Property type</p>
                  </a>
                  <a href="manageroom.php" class="nav-link">
                  <i class=" nav-icon fas fa-building" style="font-size:18px"></i>
                 <p>manageroom</p>
                  </a>
                  <a href="hotelmanage.php" class="nav-link">
                  <i class=" nav-icon fas fa-building" style="font-size:18px"></i>
                 <p>hotelmanage</p>
                  </a>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>      
</body>
</html>
