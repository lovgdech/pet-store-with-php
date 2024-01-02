<header>
    <p class="bg-danger py-2 fw-bold fs-5 text-center text-light mb-0">Giao hàng
        nhanh trong 30
        phút!</p>

    <div class="container-lg d-flex justify-content-between align-items-center py-3 gap-5" style="height: 80px;">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars fs-4"></i>
        </button>
        <div class="offcanvas offcanvas-end  d-lg-none" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">DANH MỤC |
                    MENU</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link px-0 text-black fw-normal fs-6" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0 text-black fw-normal fs-6" aria-current="page"
                            href="index.php?controller=dogs">FOR DOGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0 text-black fw-normal fs-6" aria-current="page"
                            href="index.php?controller=cats">FOR CATS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0 text-black fw-normal fs-6" href="#">TODAY'S
                            DEALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0 text-black fw-normal fs-6" href="#">PET
                            PARENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0 text-black fw-normal fs-6" href="#">OUTLET</a>
                    </li>
                </ul>
            </div>
        </div>

        <a href="index.php" class="text-uppercase mb-0 fs-3 text-black fw-bold text-decoration-none">Đồ chảnh
            cún</a>

        <form class="flex-grow-1 h-100 d-none d-lg-flex" role="search">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
            <button style="width: 48px;" class="btn btn-danger" type="submit"><i
                    class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <div class="d-flex gap-1 align-items-center" style="height: 50px;">
            <?php
            if (isset($_SESSION['user'])) {
                require_once 'components/UserModal.php';
            } else {
                echo "  <a href='index.php?controller=auths' class='d-flex gap-2 align-items-center text-dark text-decoration-none'>
                            <i class='bi bi-person-circle fs-4'></i>
                            <p class='fs-6 mb-0 d-none d-lg-block'>Đăng nhập</p>
                        </a>";
            }
            ?>
            <div class="dropdown h-100">
                <button class="d-flex btn align-items-center btn-outline text-black gap-2 h-100"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p class="fs-6 mb-0 d-none d-lg-block">Giỏ hàng</p>
                    <div class="cartQuanlity_customs">
                        <?php
                        if (isset($_SESSION['user']) && isset($_SESSION['cart'])) {
                            echo ($_SESSION['cart']['totalQuantity']);
                        } else {
                            echo 0;
                        }
                        ?>
                    </div>
                </button>

                <?php
                require_once 'components/CartModal.php';
                ?>
            </div>
        </div>
    </div>
    </div>

    <form class="container-lg w-100 d-flex d-lg-none" role="search">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
        <button style="width: 48px;" class="btn btn-danger" type="submit"><i
                class="fa-solid fa-magnifying-glass"></i></button>
    </form>

    <nav class="container-lg navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link px-0 text-black fw-normal fs-6" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0 text-black fw-normal fs-6" aria-current="page"
                            href="index.php?controller=dogs">FOR DOGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0 text-black fw-normal fs-6" aria-current="page"
                            href="index.php?controller=cats">FOR CATS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0 text-black fw-normal fs-6" href="#">TODAY'S
                            DEALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0 text-black fw-normal fs-6" href="#">PET
                            PARENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0 text-black fw-normal fs-6" href="#">OUTLET</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
.cartQuanlity_customs {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 30px;
    width: 30px;
    border-radius: 50%;
    background-color: #dc3545;
    color: white;
    position: absolute;
    top: 0;
    right: 0;
}
</style>