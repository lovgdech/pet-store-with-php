<div class="dropdown h-100">
    <button class="d-flex btn align-items-center btn-outline text-black gap-2 h-100" data-bs-toggle="dropdown"
        aria-expanded="false">
        <i class="fa-solid fa-user"></i>
        <p class="fs-6 mb-0 d-none d-lg-block">
            <?php echo $_SESSION['user']['username'] ?>
        </p>
    </button>

    <div class="dropdown-menu p-4" style="width: max-content;">
        <p class="mb-1">ID: <?php echo $_SESSION['user']["id"] ?></p>
        <h4 class="fs-6">Tên: <?php echo $_SESSION['user']["username"] ?></h4>
        <p>Email: <?php echo $_SESSION['user']['email'] ?></p>
        <a class="fs-6 btn btn-danger" href="index.php?controller=auths&action=logout">Đăng xuất</a>
    </div>
</div>