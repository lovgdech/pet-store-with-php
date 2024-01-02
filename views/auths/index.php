<div class="container-lg my-5 d-flex justify-content-center">
    <div class="p-4 mx-auto" style="max-width: 500px;">
        <h3 class="text-center text-black fw-bold">Đăng nhập</h3>
        <form class="my-4" action="index.php?controller=auths&action=login" method="POST">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Địa chỉ email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div>
                <label for="pwd" class="form-label">Mật khẩu:</label>
                <input type="password" class="form-control" id="pwd" name="password" required>
            </div>
            <p class="mt-3 fs-">This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service
                apply.</p>
            <button type="submit" class="btn btn-primary ml-4 w-100">Đăng nhập</button>
        </form>
        <div class="m-2 d-flex align-items-center flex-column">
            <p class="mb-1">Quên mật khẩu? <a href="#" class="text-dark ml-auto">Khôi phục mật khẩu</a>
            </p>
            <p class="mb-1">Khách hàng mới? <a href="index.php?controller=auths&action=register" class="text-dark ml-auto">Tạo tài khoản của bạn</a>
            </p>
        </div>
    </div>
</div>