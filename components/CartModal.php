<div class="dropdown-menu p-4" style="width: max-content;">
    <?php
    if (!isset($_SESSION['user']))
        echo '<h4 class="text-center fs-5">Bạn chưa đăng nhập!</h4>
            <p>Vui lòng đăng nhập để xem giỏ hàng</p>
        <a class="fs-6 btn btn-primary" href="index.php?controller=auths">Đăng nhập</a>';
    else {
    ?>
    <div style="width: 500px;">
        <h4 class="text-center bg-secondary py-2 text-white mb-5">GIỎ HÀNG | CART</h4>
        <div>
            <?php if (!isset($_SESSION['cart']['totalQuantity']) || $_SESSION['cart']['totalQuantity'] == 0) {
                ?>

            <h5 class="text-center py-4">Giỏ hàng của bạn trống</h5>
            <?php
                } ?>
            <?php if (isset($_SESSION['cart']['totalQuantity'])) ?>

            <ul class="w-100 d-flex flex-column">
                <?php {
                        foreach ($_SESSION['cart']['cart'] as $item) {
                    ?>

                <li class="w-100 d-flex align-items-center justify-content-between gap-1">
                    <div class="flex-grow-1 d-flex">
                        <img width="80" height="80" src="admin/assets/uploads/<?php echo $item->product->image; ?>"
                            alt="<?php echo $item->product->name; ?>" />
                        <div class="d-flex flex-column gap-1 p-2">
                            <p class="fs-6 fw-bold mb-0"><?php echo $item->product->name; ?></p>
                            <p class="mb-0 fw-bold fs-6">
                                <span class="">Số lượng: <?php echo $item->quantity; ?></span> | Thành tiền:
                                <?php echo $item->quantity * $item->product->price . "$"; ?>
                            </p>
                        </div>
                    </div>
                </li>

                <?php } ?>
            </ul>
        </div>

        <div>
            <hr />
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h4 class="fs-5">Tổng tiền | subtotal: </h4>
                <h3 class="fs-5"><?php echo $_SESSION['cart']['totalPrice'] ?>đ</h3>
            </div>
            <div class="d-flex align-items-center justify-content-around">
                <?php if ($_SESSION['cart']['totalPrice'] > 0) {
                            echo '<a href="index.php?controller=cart" class="btn btn-danger p-4 py-2">Xem giỏ hàng <br /> View cart</a>
                <a href="index.php?controller=checkout" class="btn btn-danger p-4 py-2">Thanh toán <br /> Checkout</a>';
                        } else {
                            echo '<button disabled class="btn btn-danger p-4 py-2">Xem giỏ hàng <br /> View cart</button>
                <button disabled class="btn btn-danger p-4 py-2">Thanh toán <br /> Checkout</button>';
                        } ?>
            </div>
        </div>
    </div>
    <?php }
                }
?>
</div>