<div class="w-100">
    <h3>Danh sách sản phẩm</h3>
    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Nhóm sản phẩm</th>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Chi tiết</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Ghi chú</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $index => $v) {
                echo '
                <tr>
                    <td>' . $index  + 1 . '</td>
                    <td>' . $v->productGroupName . '</td>
                    <td>' . $v->productId . '</td>
                    <td>' . $v->name . '</td>
                    <td><p style="width: 150px; height: 200px; overflow: hidden; text-overflow: ellipsis; white-space: pre;">' . $v->title . '</p></td>
                    <td><p style="width: 150px; height: 200px; overflow: hidden; text-overflow: ellipsis; white-space: pre;">' . $v->description . '</p></td>
                    <td><img width="120" src="assets/uploads/' . $v->image . '" /></td>
                    <td>' . $v->price . '</td>
                    <td>' . $v->quanlity . '</td>
                    <td>' . $v->note . '</td>
                    <td>' . $v->enable . '</td>
                    <td>
                        <a class="btn bg-primary" href="index.php?controller=products&action=edit_product&id=' . $v->id . '"><i class="bi bi-pencil-square text-light"></i></a>
                    </td>
                    <td>
                        <a class="btn bg-danger" href="index.php?controller=products&action=delete_product&id=' . $v->id . '"><i class="bi bi-trash text-light"></i></a>
                    </td>
                </tr>
            ';
            }
            ?>
        </tbody>
    </table>
    <a href="index.php?controller=products&action=add_product" class="btn btn-primary">
        Thêm sản phẩm
    </a>
</div>