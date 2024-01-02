<div class="p-4 mx-auto w-100" style="max-width: 1000px;">
    <h3 class="text-center text-black fw-bold">Thêm sản phẩm</h3>
    <form class="my-4 w-100" action="index.php?controller=products&action=edit_product_submit" method="POST" enctype="multipart/form-data">
        <div class=" mb-3 mt-3">
            <input type="hidden" class="form-control" value="<?php echo $product->id ?>" name="id">
        </div>
        <div class="mb-3 mt-3 d-flex gap-2" style="gap: 50px;">
            <div style="flex: 1;">
                <label for="productId" class="form-label">Mã sản phẩm:</label>
                <input type="text" class="form-control" id="productId" value="<?php echo $product->productId ?>" name="productId" required>
            </div>
            <div style="flex: 1;">
                <label for="productGroupId" class="form-label">Nhóm sản phẩm:</label>
                <select class="form-control" name="productGroupId">
                    <?php foreach ($productGroups as $productGroup) {
                    ?>
                        <option value="<?php echo $productGroup->productGroupId ?>" <?php if (
                                                                                        $product->productGroupId ==
                                                                                        $productGroup->productGroupId
                                                                                    ) {
                                                                                        echo "selected";
                                                                                    } ?>>
                            <?php echo $productGroup->name ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="mb-3 d-flex gap-2" style="gap: 50px;">
            <div class="flex-item flex-grow-1">
                <label for="name" class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" id="name" value="<?php echo $product->name ?>" name="name" required>
            </div>
            <div class="flex-item flex-grow-1">
                <label for="title" class="form-label">Tiêu đề sản phẩm:</label>
                <input type="text" class="form-control" id="title" value="<?php echo $product->title ?>" name="title" required>
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="description" class="form-label d-block">Chi tiết
                sản phẩm:</label>
            <textarea class="w-100 p-2" name="description" rows="4" cols="50"><?php echo $product->description ?>
            </textarea>
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label">Hình ảnh sản phẩm:</label>
            <div>
                <img width="120" src="assets/uploads/<?php echo $product->image; ?>" />
                <input type="file" class="form-control mt-3" id="image" name="image">
            </div>
        </div>
        <div class="mb-3 d-flex gap-2" style="gap: 50px;">
            <div class="flex-item flex-grow-1">
                <label for="price" class="form-label">Giá sản phẩm:</label>
                <input type="number" class="form-control" id="price" value="<?php echo $product->price ?>" name="price" required>
            </div>
            <div class="flex-item flex-grow-1">
                <label for="quanlity" class="form-label">Số lượng:</label>
                <input type="number" class="form-control" id="quanlity" value="<?php echo $product->quanlity ?>" name="quanlity" required>
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="note" class="form-label">Ghi chú:</label>
            <textarea class="w-100 p-2" name="note" rows="4" cols="50"><?php echo $product->note ?></textarea>
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="1" name="enable" <?php if ($product->enable == 1) echo 'checked'; ?>> Kích hoạt
            </label>
        </div>
        <div class="d-flex justify-content-end w-100">
            <a href="index.php?controller=products" class="btn">Hủy</a>
            <button type="submit" class="btn btn-primary ml-4">Lưu thay đổi</button>
        </div>
    </form>
</div>