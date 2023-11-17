<div class="dropdown h-100">
    <button class="d-flex btn align-items-center btn-outline text-black gap-2 h-100" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-user"></i>
        <div class="d-none d-lg-block">
            <p class="fs-6 mb-0 text-start">
                Đăng nhập / Đăng ký
            </p>
            <p class="fs-6 mb-0 text-start fw-bold">
                Tài khoản của tôi
                <i class="fa-solid fa-chevron-down fs-6 text-end"></i>
            </p>
        </div>
    </button>
    <div class="dropdown-menu p-4" style="width: 400px;">
        <div>
            <h3 class="w-100 text-center">Đăng
                nhập tài
                khoản
            </h3>
            <h4 class="w-100 text-center">Your
                account</h4>
        </div>
        <div>
            <p class="d-block w-100 text-center">Theo dõi đơn hàng và khuyến mãi</p>

            <form method="POST" action="index.php?controller=auths&action=login">
                <div class="mb-3">
                    <input type="email" class="form-control" id="recipient-name" name="email" required placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="recipient-name" name="password" required placeholder="Mật khẩu">
                </div>
                <p class="fs-7">This site is protected by reCAPTCHA and the Google Privacy Policy and
                    Terms of
                    Service apply.
                </p>
                <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
            </form>
        </div>
        <div class="mt-2">
            <p class="text-center w-100 mb-0">Khách hàng mới? <a href="#" class="text-decoration-none text-black fst-italic">Tạo tài khoản</a></p>

            <p class="text-center w-100 mb-0">Quên mật khẩu? <a href="#" class="text-decoration-none text-black fst-italic">Khôi phục mật khẩu</a></p>
        </div>
    </div>
</div>