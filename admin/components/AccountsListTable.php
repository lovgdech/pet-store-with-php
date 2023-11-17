<table class="table table-hover mt-3">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên đăng nhập</th>
            <th scope="col">Email</th>
            <th scope="col">Tên người dùng</th>
            <th scope="col">Mật khẩu</th>
            <th scope="col">Trạng thái</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($accounts as $index => $v) {
            echo '
                <tr>
                    <td>' . $index  + 1 . '</td>
                    <td>' . $v->loginname . '</td>
                    <td>' . $v->email . '</td>
                    <td>' . $v->username . '</td>
                    <td>' . $v->password . '</td>
                    <td>' . $v->enable . '</td>
                    <td class="edit">
                        <a class="btn btn-primary" href="EditAccountPage.php?loginname=' . $v->loginname . '">edit</a>
                        <a class="btn btn-primary" href="DeleteAccountPage.php?loginname=' . $v->loginname . '">delete</a>
                    </td>
                </tr>
            ';
        }
        ?>
    </tbody>
</table>