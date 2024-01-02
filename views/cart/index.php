<div class="w-100">
    <div class="w-100 bg-light">
        <p class="container-lg py-2">
            Trang chủ / Giỏ hàng
        </p>
    </div>

    <div class="container">
        <h3 class="fs-4 fw-bold text-center my-3">Giỏ hàng của bạn <br />
            Your shopping cart</h3>
        <div class="w-100 d-flex">
            <div class="flex-grow-1">
                <div>
                    <?php if (!isset($_SESSION['cart']['totalQuantity']) || $_SESSION['cart']['totalQuantity'] == 0) {

                    ?>

                    <h5 class="text-center py-4">Giỏ hàng của bạn trống</h5>
                    <?php
                    } else {

                    ?>
                    <div class="p-1 px-4 bg-secondary text-white">
                        <p class="mb-0">Bạn đang có <?php print_r($_SESSION['cart']['totalQuantity']); ?> sản phẩm trong
                            giỏ
                            hàng!</p>
                        <p class="mb-0">You have <?php print_r($_SESSION['cart']['totalQuantity']); ?> product in your
                            shopping
                            cart
                        </p>
                    </div>
                    <ul class="w-100 d-flex flex-column my-4">

                        <?php
                            foreach ($_SESSION['cart']['cart'] as $item) {
                            ?>
                        <li class="w-100 d-flex align-items-center justify-content-between gap-1 mb-2">
                            <div class="flex-grow-1 d-flex">
                                <img width="100" height="100"
                                    src="admin/assets/uploads/<?php echo $item->product->image; ?>"
                                    alt="<?php echo $item->product->name; ?>" />
                                <div class="w-100 d-flex flex-column gap-1 p-2">
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <p class="fs-5 fw-bold mb-0"><?php echo $item->product->name; ?></p>
                                        <form method="post" action="index.php?controller=cart&action=delete">
                                            <input type="hidden" value="<?php echo $item->id; ?>" name="cartId" />
                                            <button><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                                                    viewBox="0 0 448 512">
                                                    <path
                                                        d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                                                </svg></button>
                                        </form>
                                    </div>
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-2 fw-bold fs-6"><?php echo $item->product->price; ?>đ
                                            </p>
                                            <form class="d-flex my-4 gap-4" method="post"
                                                action="index.php?controller=cart&action=update">
                                                <div class="d-flex align-items-center">
                                                    <button onclick="giamFunction()" class="btn btn-light">
                                                        <i class="bi bi-dash-lg"></i>
                                                    </button>
                                                    <input id="quantity" class="text-center mx-2" style="width: 50px;"
                                                        value="<?php echo $item->quantity; ?>" name="quantity"
                                                        type="number" readonly />
                                                    <button onclick="tangFunction()" class="btn btn-light">
                                                        <i class="bi bi-plus-lg"></i>
                                                    </button>
                                                    <input type="hidden" value="<?php echo $item->id; ?>"
                                                        name="cartId" />
                                                </div>
                                            </form>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="fs-5">Thành tiền | subtotal: </h4>
                                            <h3 class="fs-5" style="margin-left: 12px;">
                                                <?php echo $item->quantity * $item->product->price; ?>đ
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <hr />
                        <?php } ?>
                    </ul>

                    <?php } ?>
                </div>

                <div class="w-100 d-flex p-2 bg-secondary text-white my-4">
                    <div class="w-50 flex-grow-1 flex-shrink-1" style="margin-right: 10px;">
                        <h5>
                            Ghi chú đơn hàng<br />
                            Order notes
                        </h5>
                        <textarea style="width: 100%; height: 100px;" class="form-control"></textarea>
                    </div>
                    <div class="flex-grow-1 flex-shrink-1">
                        <h5>Chính sách mua hàng</h5>
                        <ul style="list-style: circle; padding-left: 20px;">
                            <li>Sản phẩm được đổi 1 lần duy nhất, không hỗ trợ trả.</li>
                            <li>
                                Sản phẩm còn đủ tem mác, chưa qua sử dụng
                            </li>
                            <li>Sản phẩm nguyên giá được đổi trong 30 ngày trên toàn hệ thống</li>
                            <li>Sản phẩm sale chỉ hỗ trợ đổi size (nếu cửa hàng còn) trong 7 ngày trên toàn hệ thống
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style="width: 450px; border: 1px solid gray; height: max-content; margin-left: 30px;" class="p-4">
                <div>
                    <h4>Thông tin đơn hàng</h4>
                    <hr />
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h4 class="fs-5">Tổng tiền | subtotal: </h4>
                        <h3 class="fs-4 text-danger fw-bold"><?php echo $_SESSION['cart']['totalPrice'] ?>đ
                        </h3>
                    </div>
                    <hr />
                    <p>Bạn có thể nhập mã giảm giá ở trang thanh toán
                        You can enter the coupon code at the checkout page</p>
                    <?php
                    if ($_SESSION['cart']['totalQuantity'] > 0) {
                        echo '<a href="index.php?controller=checkout" class="btn w-100 p-2 mb-2 bg-primary  text-white">Thanh toán
                        |
                        Checkout</a>';
                    } else {
                        echo '<button class="btn w-100 p-2 mb-2 bg-primary  text-white" disabled>Thanh toán
                        |
                        Checkout</button>';
                    }
                    ?>
                    <a href="index.php" class="text-center">Tiếp tục mua hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>

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