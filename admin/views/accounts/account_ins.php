<div class="p-4 mx-auto" style="max-width: 600px;">
    <h3 class="text-center text-black fw-bold">Thêm tài khoản</h3>
    <form class="my-4" action="index.php?controller=accounts&action=add_account_submit" method="POST">
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
        <div class="form-check mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="1" name="enable" checked> Kích hoạt
            </label>
        </div>
        <div class="d-flex justify-content-end w-100">
            <a href="index.php?controller=accounts" class="btn">Hủy</a>
            <button type="submit" class="btn btn-primary ml-4">Thêm tài khoản</button>
        </div>
    </form>
</div>