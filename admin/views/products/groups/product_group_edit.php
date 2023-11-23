<div class="p-4 mx-auto w-100" style="max-width: 1000px;">
    <h3 class="text-center text-black fw-bold">Thêm sản phẩm</h3>
    <form class="my-4 w-100" action="index.php?controller=product_groups&action=edit_product_group_submit" method="POST">
        <div class="mb-3 mt-3">
            <input type="hidden" class="form-control" value="<?php echo $productGroup->id ?>" name="id">
        </div>
        <div class="mb-3 mt-3">
            <label for="productGroupId" class="form-label">Mã nhóm sản phẩm:</label>
            <input type="text" class="form-control" id="productGroupId" value="<?php echo $productGroup->productGroupId ?>" name="productGroupId" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Tên nhóm sản phẩm:</label>
            <input type="text" class="form-control" id="name" value="<?php echo $productGroup->name ?>" name="name" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="note" class="form-label">Ghi chú:</label>
            <textarea class="w-100 p-2" name="note" rows="4" cols="50"><?php echo $productGroup->note ?></textarea>
        </div>
        <div class="d-flex justify-content-end w-100">
            <a href="index.php?controller=product_groups" class="btn">Hủy</a>
            <button type="submit" class="btn btn-primary ml-4">Lưu thay đổi</button>
        </div>
    </form>
</div>