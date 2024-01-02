<div class="w-100">
    <div class="w-100 bg-light">
        <p class="container-lg py-2">
            Trang chủ / For Dogs /

            <span class="fw-bold">
                <?php
                echo ($product->name);
                ?>
            </span>
        </p>
    </div>
    <div class="w-100 container-lg d-flex my-5 overflow-hidden  gap-4" style="min-height: 500px;">
        <div class="w-50 d-flex flex-column gap-2 productInfo_customs">
            <img class="m-auto" style="width: 80%; height: auto;"
                src="admin/assets/uploads/<?php echo $product->image ?>" />

            <div class="mt-5">
                <hr />
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5>Mô tả | Description</h5>
                    <i class="bi bi-dash-lg"></i>
                </div>
                <p class="fs-6"><?php
                                $text = explode(".", $product->description);
                                foreach ($text as $para) {
                                    echo $para . "<br />";
                                }
                                ?></p>
                <hr />
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5>Chính sách đổi trả</h5>
                    <i class="bi bi-plus-lg"></i>
                </div>
                <hr />
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5>Chính sách bảo mật</h5>
                    <i class="bi bi-plus-lg"></i>
                </div>
            </div>
        </div>

        <div class="w-50 overflow-hidden">
            <h4>
                <?php echo $product->title; ?>
            </h4>
            <div class="d-flex align-items-center gap-2 mt-4">
                <p class="m-0">BY:</p>
                <button type="button" class="btn btn-lg btn-primary" disabled>Royal Canin</button>
            </div>
            <hr />
            <p class="text-danger fs-4 fw-bold"><?php
                                                $reversedString = strrev($product->price);

                                                $chunkedString = chunk_split($reversedString, 3, '.');

                                                $price = strrev($chunkedString);
                                                $product->price = substr($price, 1);
                                                echo $product->price ?>đ</p>

            <form class="d-flex my-4 gap-4" method="post" acction="index.php?controller=cart">
                <div class="d-flex align-items-center">
                    <button onclick="giamFunction()" type="button" class="btn btn-light">
                        <i class="bi bi-dash-lg"></i>
                    </button>
                    <input id="quantity" class="text-center mx-2" style="width: 50px;" value="1" name="quantity"
                        type="number" />
                    <button onclick="tangFunction()" type="button" class="btn btn-light">
                        <i class="bi bi-plus-lg"></i>
                    </button>
                </div>

                <input type="hidden" name="productId" value="<?php echo $product->id; ?>" />

                <button class="w-100 btn btn-primary py-3">
                    Thêm vào giỏ hàng
                </button>
            </form>

            <ul class="d-flex flex-column gap-3">
                <li class="d-flex align-items-center gap-4">
                    <i class="bi bi-check-circle"></i>
                    <p class="mb-0">Cam kết 100% chính hãng</p>
                </li>
                <li class="d-flex align-items-center gap-4">
                    <i class="bi bi-minecart"></i>
                    <p class="mb-0">Miễn phí vận chuyển<br />Trong 60 phút tại Hồ Chí Minh với đơn hàng >599k<br />Giao
                        hàng toàn
                        quốc từ 1-2 ngày</p>
                </li>
                <li class="d-flex align-items-center gap-4">
                    <i class="bi bi-arrow-left-right"></i>
                    <p class="mb-0">Đổi sản phẩm nhanh trong 24h</p>
                </li>
            </ul>

            <hr />
            <h5>
                CUSTUMER REVIEWS
            </h5>
        </div>
    </div>
</div>

<style>
.productInfo_customs {
    max-height: calc(100vh + 200px);
    padding-right: 10px;
    overflow-x: hidden !important;
    overflow-y: auto !important;
}

.productInfo_customs::-webkit-scrollbar {
    width: 8px;
    background-color: transparent;
}

.productInfo_customs::-webkit-scrollbar-thumb {
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 4px;
}
</style>

<script>
function giamFunction() {
    var input = document.getElementById("quantity");
    var currentValue = parseInt(input.value);
    if (currentValue > 1) {
        input.value = currentValue - 1;
    }
}

function tangFunction() {
    var input = document.getElementById("quantity");
    var currentValue = parseInt(input.value);
    input.value = currentValue + 1;
}
</script>