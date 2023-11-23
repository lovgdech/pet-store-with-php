<div class="w-100">
    <h3>Danh sách nhóm sản phẩm</h3>
    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Mã nhóm sản phẩm</th>
                <th scope="col">Tên nhóm sản phẩm</th>
                <th scope="col">Ghi chú</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($productGroups as $index => $v) {
                echo '
                <tr>
                    <td>' . $index  + 1 . '</td>
                    <td>' . $v->productGroupId . '</td>
                    <td>' . $v->name . '</td>
                    <td>' . $v->note . '</td>
                    <td>
                        <a class="btn bg-primary" href="index.php?controller=product_groups&action=edit_product_group&id=' . $v->id . '"><i class="bi bi-pencil-square text-light"></i></a>
                    </td>
                    <td>
                        <a class="btn bg-danger" href="index.php?controller=product_groups&action=delete_product_group&id=' . $v->id . '"><i class="bi bi-trash text-light"></i></a>
                    </td>
                </tr>
            ';
            }
            ?>
        </tbody>
    </table>
    <a href="index.php?controller=product_groups&action=add_product_group" class="btn btn-primary">
        Thêm nhóm sản phẩm
    </a>
</div>