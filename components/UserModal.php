<div class="dropdown h-100">
    <button class="d-flex btn align-items-center btn-outline text-black gap-2 h-100" data-bs-toggle="dropdown"
        aria-expanded="false">
        <i class="fa-solid fa-user"></i>
        <p class="fs-6 mb-0 d-none d-lg-block">
            <?php echo AuthsController::$user->username; ?>
        </p>
    </button>

    <div class="dropdown-menu p-4" style="width: 600px;">
        <!-- account -->
        <a href="index.php?controller=auths&action=logout">Đăng xuất</a>
    </div>
</div>