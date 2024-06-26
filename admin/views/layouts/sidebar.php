<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebar-customs" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Quản lý
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="bi bi-person-lines-fill"></i>
            <span>Tài khoản</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Hành động</h6>
                <a class="collapse-item" href="index.php?controller=accounts">Danh sách tài khoản</a>
                <a class="collapse-item" href="index.php?controller=accounts&action=add_account">Thêm tài
                    khoản</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="bi bi-cart"></i>
            <span>Sản phẩm</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Hành động</h6>
                <a class="collapse-item" href="index.php?controller=products">Danh sách sản phẩm</a>
                <a class="collapse-item" href="index.php?controller=product_groups">Danh sách nhóm
                    sản phẩm</a>
                <a class="collapse-item" href="index.php?controller=products&action=add_product">Thêm sản phẩm</a>
                <a class="collapse-item" href="index.php?controller=product_groups&action=add_product_group">Thêm nhóm
                    sản phẩm</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Công cụ
    </div>



    <!-- <li class="nav-item">
        <a class="nav-link" href="charts.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> -->

    <li class="nav-item">
        <a class="nav-link" href="../index.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Trang bán hàng</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>