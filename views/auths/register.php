<div class="container-lg my-5 d-flex justify-content-center">
    <div class="w-100 p-4 mx-auto" style="max-width: 500px;">
        <h3 class="text-center text-black fw-bold">Tạo tài khoản</h3>
        <form class="my-4" action="index.php?controller=auths&action=register_submit" method="POST">
            <div class="mb-3 mt-3">
                <label for="username" class="form-label">Họ và tên:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Mật khẩu:</label>
                <input type="password" class="form-control" id="pwd" name="password" required>
            </div>
            <p class="mt-3 fs-">This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service
                apply.</p>
            <button type="submit" class="btn btn-primary ml-4 w-100">Đăng ký</button>
        </form>
        <a class="d-flex gap-2 text-decoration-none text-dark fw-bold" href="index.php?controller=auths"><i class="bi bi-arrow-left"></i>
            <p class="fw-bold">Quay lại đăng nhập</p>
        </a>
    </div>
</div>