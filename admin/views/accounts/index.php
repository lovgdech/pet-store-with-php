<div>
    <h3>Danh sách tài khoản</h3>
    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên người dùng</th>
                <th scope="col">Email</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($accounts as $index => $v) {
                echo '
                <tr>
                    <td>' . $index  + 1 . '</td>
                    <td>' . $v->username . '</td>
                    <td>' . $v->email . '</td>
                    <td>' . $v->password . '</td>
                    <td>' . $v->enable . '</td>
                    <td>
                        <a class="btn bg-primary" href="index.php?controller=accounts&action=edit_account&id=' . $v->id . '"><i class="bi bi-pencil-square text-light"></i></a>
                    </td>
                    <td>
                        <a class="btn bg-danger" href="index.php?controller=accounts&action=delete_account&id=' . $v->id . '"><i class="bi bi-trash text-light"></i></a>
                    </td>
                </tr>
            ';
            }
            ?>
        </tbody>
    </table>
    <a href="index.php?controller=accounts&action=add_account" class="btn btn-primary">
        Thêm tài khoản
    </a>
</div>