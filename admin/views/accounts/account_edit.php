<div>
    <h3 class="text-center text-black fw-bold">Sửa tài khoản</h3>
    <form class="my-4 mx-auto" action="index.php?controller=accounts&action=edit_account_submit" method="POST" style="max-width: 600px;">

        <div class="mb-3 mt-3">
            <input type="hidden" class="form-control" value="<?php echo $account->id ?>" name="id">
        </div>
        <div class="mb-3 mt-3">
            <label for="username" class="form-label">Họ và tên:</label>
            <input type="text" class="form-control" value="<?php echo $account->username ?>" id="username" name="username" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" value="<?php echo $account->email ?>" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Mật khẩu:</label>
            <input type="password" class="form-control" value="<?php echo $account->password ?>" id="pwd" name="password" required>
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="enable" value="1" <?php if ($account->enable == 1) echo 'checked'; ?>> Kích hoạt
            </label>
        </div>
        <div class="d-flex justify-content-end w-100">
            <a href="index.php?controller=accounts" class="btn">Hủy</a>
            <button type="submit" class="btn btn-primary ml-4">Lưu thay đổi</button>
        </div>
    </form>
</div>