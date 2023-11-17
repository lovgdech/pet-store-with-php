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
                        <a class="nav-link px-0 text-black fw-normal fs-6" aria-current="page" href="index.php">SHOP
                            BY BRAND</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="index.php?controller=cats" data-bs-toggle=" collapse" role="button"
                            aria-expanded="false" aria-controls="collapseCat"
                            class="nav-link px-0 text-black fw-normal fs-6 dropdown-toggle">
                            MÈO | CAT
                        </a>
                        <ul class="collapse" id="collapseCat">
                            <li><a class="nav-link px-0 text-black fw-normal fs-6" href="#">Action</a></li>
                            <li><a class="nav-link px-0 text-black fw-normal fs-6" href="#">Another action</a></li>
                            <li><a class="nav-link px-0 text-black fw-normal fs-6" href="#">Something else
                                    here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-bs-toggle="collapse" href="index.php?controller=cats" role="button"
                            aria-expanded="false" aria-controls="collapseDog"
                            class="nav-link px-0 text-black fw-normal fs-6 dropdown-toggle">
                            CHÓ | DOG
                        </a>
                        <ul class="collapse" id="collapseDog">
                            <li><a class="nav-link px-0 text-black fw-normal fs-6" href="#">Action</a></li>
                            <li><a class="nav-link px-0 text-black fw-normal fs-6" href="#">Another action</a></li>
                            <li><a class="nav-link px-0 text-black fw-normal fs-6" href="#">Something else
                                    here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-bs-toggle="collapse" href="#collapseSmallPet" role="button" aria-expanded="false"
                            aria-controls="collapseSmallPet"
                            class="nav-link px-0 text-black fw-normal fs-6 dropdown-toggle">
                            THÚ NHỎ | SMALL PET
                        </a>
                        <ul class="collapse" id="collapseSmallPet">
                            <li><a class="nav-link px-0 text-black fw-normal fs-6" href="#">Action</a></li>
                            <li><a class="nav-link px-0 text-black fw-normal fs-6" href="#">Another action</a></li>
                            <li><a class="nav-link px-0 text-black fw-normal fs-6" href="#">Something else
                                    here</a></li>
                        </ul>
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
            if (isset(AuthsController::$user)) {
                require_once 'components/UserModal.php';
            } else {
                require_once 'components/LoginButtonModal.php';
            }
            ?>
            <div class="dropdown h-100">
                <button class="d-flex btn align-items-center btn-outline text-black gap-2 h-100"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p class="fs-6 mb-0 d-none d-lg-block">Giỏ hàng</p>
                </button>

                <div class="dropdown-menu p-4" style="width: 600px;">
                    <!-- cart  -->
                </div>
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
                        <a class="nav-link px-0 text-black fw-normal fs-6" aria-current="page" href="index.php">SHOP
                            BY BRAND</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link px-0 text-black fw-normal fs-6 dropdown-toggle"
                            href="index.php?controller=cats" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            MÈO | CAT
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another
                                    action</a></li>
                            <li><a class="dropdown-item" href="#">Something
                                    else
                                    here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link px-0 text-black fw-normal fs-6 dropdown-toggle"
                            href="index.php?controller=dogs" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            CHÓ | DOG
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another
                                    action</a></li>
                            <li><a class="dropdown-item" href="#">Something
                                    else
                                    here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link px-0 text-black fw-normal fs-6 dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            THÚ NHỎ | SMALL PET
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another
                                    action</a></li>
                            <li><a class="dropdown-item" href="#">Something
                                    else
                                    here</a></li>
                        </ul>
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