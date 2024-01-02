<div>
    <div class="w-100 bg-light">
        <p class="container-lg py-2">
            Trang chủ / Đặt hàng
        </p>
    </div>
    <div class="container d-flex my-5">

        <div class="section flex-grow-1">
            <div class="section-header">
                <h2 class="fs-3 fw-bold">Thông tin giao hàng</h2>
            </div>
            <div class="section-content section-customer-information ">



                <input type="hidden" name="checkout_user[email]" value="longlovely2002@gmail.com" />

                <div class="fieldset">

                    <div class="field field-show-floating-label">
                        <div class="field-input-wrapper field-input-wrapper-select">
                            <label class="field-label" for="stored_addresses">Thêm địa chỉ mới...</label>
                            <select class="field-input" id="stored_addresses">
                                <option value="0" data-properties='{}'>Địa chỉ đã lưu trữ</option>

                                <option value="10018887844" data-properties='{"id":10018887844,
																				"last_name":"Nguyễn Đặng",
																				"first_name":"Long",
																				"phone":null,
																				"address1":null,
																				"zip":"70000",
																				"city":null,
																				"country":"Vietnam",
																				"country_id":"241",
																				"province":null,
																				"province_id":null,
																				"district":null,
																				"district_id":null,
																				"ward":null,
																				"wardid":null,
																				"default":true}' selected>
                                    70000, Vietnam
                                </option>

                            </select>
                        </div>
                    </div>


                    <div class="field   ">
                        <div class="field-input-wrapper">
                            <label class="field-label" for="billing_address_full_name">Họ và tên</label>
                            <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_full_name" name="billing_address[full_name]" value="" autocomplete="false" />
                        </div>

                    </div>
                    <div class="field field-required   ">
                        <div class="field-input-wrapper">
                            <label class="field-label" for="billing_address_phone">Số điện thoại</label>
                            <input autocomplete="false" placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="15" type="tel" id="billing_address_phone" name="billing_address[phone]" value="" />
                        </div>

                    </div>


                </div>
            </div>
            <div class="section-content">
                <div class="fieldset">

                    <form autocomplete="off" id="form_update_shipping_method" class="field " accept-charset="UTF-8" method="post">
                        <input name="utf8" type="hidden" value="✓">
                        <div class="content-box mt0">

                            <div class="radio-wrapper content-box-row">
                                <label class="radio-label">
                                    <div class="radio-input">
                                        <input type="radio" id="customer_pick_at_location_false" name="customer_pick_at_location" class="input-radio" value="false" checked>
                                    </div>
                                    <span class="radio-label-primary">Giao tận nơi</span>
                                </label>
                            </div>

                            <div id="form_update_location_customer_shipping" class="order-checkout__loading radio-wrapper content-box-row content-box-row-padding content-box-row-secondary " for="customer_pick_at_location_false">
                                <input name="utf8" type="hidden" value="✓">
                                <div class="order-checkout__loading--box">
                                    <div class="order-checkout__loading--circle"></div>
                                </div>

                                <div class="field field-required  ">
                                    <div class="field-input-wrapper">
                                        <label class="field-label" for="billing_address_address1">Địa chỉ</label>
                                        <input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1" name="billing_address[address1]" value="" />
                                    </div>

                                </div>
                                <input name="selected_customer_shipping_country" type="hidden" value="">
                                <input name="selected_customer_shipping_province" type="hidden" value="">
                                <input name="selected_customer_shipping_district" type="hidden" value="">
                                <input name="selected_customer_shipping_ward" type="hidden" value="">

                                <div class="field field-show-floating-label field-required field-third ">
                                    <div class="field-input-wrapper field-input-wrapper-select">
                                        <label class="field-label" for="customer_shipping_province"> Tỉnh / thành
                                        </label>
                                        <select class="field-input" id="customer_shipping_province" name="customer_shipping_province">
                                            <option data-code="null" value="null" selected>

                                                Chọn tỉnh / thành </option>
                                            <option data-code="HC" value="50">Hồ Chí Minh</option>
                                            <option data-code="HI" value="1">Hà Nội</option>
                                            <option data-code="DA" value="32">Đà Nẵng</option>
                                            <option data-code="AG" value="57">An Giang</option>
                                            <option data-code="BV" value="49">Bà Rịa - Vũng Tàu</option>
                                            <option data-code="BI" value="47">Bình Dương</option>
                                            <option data-code="BP" value="45">Bình Phước</option>
                                            <option data-code="BU" value="39">Bình Thuận</option>
                                            <option data-code="BD" value="35">Bình Định</option>
                                            <option data-code="BL" value="62">Bạc Liêu</option>
                                            <option data-code="BG" value="15">Bắc Giang</option>
                                            <option data-code="BK" value="4">Bắc Kạn</option>
                                            <option data-code="BN" value="18">Bắc Ninh</option>
                                            <option data-code="BT" value="53">Bến Tre</option>
                                            <option data-code="CB" value="3">Cao Bằng</option>
                                            <option data-code="CM" value="63">Cà Mau</option>
                                            <option data-code="CN" value="59">Cần Thơ</option>
                                            <option data-code="GL" value="41">Gia Lai</option>
                                            <option data-code="HG" value="2">Hà Giang</option>
                                            <option data-code="HM" value="23">Hà Nam</option>
                                            <option data-code="HT" value="28">Hà Tĩnh</option>
                                            <option data-code="HO" value="11">Hòa Bình</option>
                                            <option data-code="HY" value="21">Hưng Yên</option>
                                            <option data-code="HD" value="19">Hải Dương</option>
                                            <option data-code="HP" value="20">Hải Phòng</option>
                                            <option data-code="HU" value="60">Hậu Giang</option>
                                            <option data-code="KH" value="37">Khánh Hòa</option>
                                            <option data-code="KG" value="58">Kiên Giang</option>
                                            <option data-code="KT" value="40">Kon Tum</option>
                                            <option data-code="LI" value="8">Lai Châu</option>
                                            <option data-code="LA" value="51">Long An</option>
                                            <option data-code="LO" value="6">Lào Cai</option>
                                            <option data-code="LD" value="44">Lâm Đồng</option>
                                            <option data-code="LS" value="13">Lạng Sơn</option>
                                            <option data-code="ND" value="24">Nam Định</option>
                                            <option data-code="NA" value="27">Nghệ An</option>
                                            <option data-code="NB" value="25">Ninh Bình</option>
                                            <option data-code="NT" value="38">Ninh Thuận</option>
                                            <option data-code="PT" value="16">Phú Thọ</option>
                                            <option data-code="PY" value="36">Phú Yên</option>
                                            <option data-code="QB" value="29">Quảng Bình</option>
                                            <option data-code="QM" value="33">Quảng Nam</option>
                                            <option data-code="QG" value="34">Quảng Ngãi</option>
                                            <option data-code="QN" value="14">Quảng Ninh</option>
                                            <option data-code="QT" value="30">Quảng Trị</option>
                                            <option data-code="ST" value="61">Sóc Trăng</option>
                                            <option data-code="SL" value="9">Sơn La</option>
                                            <option data-code="TH" value="26">Thanh Hóa</option>
                                            <option data-code="TB" value="22">Thái Bình</option>
                                            <option data-code="TY" value="12">Thái Nguyên</option>
                                            <option data-code="TT" value="31">Thừa Thiên Huế</option>
                                            <option data-code="TG" value="52">Tiền Giang</option>
                                            <option data-code="TV" value="54">Trà Vinh</option>
                                            <option data-code="TQ" value="5">Tuyên Quang</option>
                                            <option data-code="TN" value="46">Tây Ninh</option>
                                            <option data-code="VL" value="55">Vĩnh Long</option>
                                            <option data-code="VT" value="17">Vĩnh Phúc</option>
                                            <option data-code="YB" value="10">Yên Bái</option>
                                            <option data-code="DB" value="7">Điện Biên</option>
                                            <option data-code="DC" value="42">Đắk Lắk</option>
                                            <option data-code="DO" value="43">Đắk Nông</option>
                                            <option data-code="DN" value="48">Đồng Nai</option>
                                            <option data-code="DT" value="56">Đồng Tháp</option>
                                        </select>
                                    </div>


                                </div>


                                <div class="field field-show-floating-label field-required field-third ">
                                    <div class="field-input-wrapper field-input-wrapper-select">
                                        <label class="field-label" for="customer_shipping_district">Quận / huyện</label>
                                        <select class="field-input" id="customer_shipping_district" name="customer_shipping_district">
                                            <option data-code="null" value="null" selected>Chọn quận / huyện</option>

                                        </select>
                                    </div>

                                </div>

                                <div class="field field-show-floating-label   field-third  ">
                                    <div class="field-input-wrapper field-input-wrapper-select">
                                        <label class="field-label" for="customer_shipping_ward">Phường / xã</label>
                                        <select class="field-input" id="customer_shipping_ward" name="customer_shipping_ward">
                                            <option data-code="null" value="null" selected>Chọn phường / xã</option>

                                        </select>
                                    </div>

                                </div>



                                <div id="div_location_country_not_vietnam" class="section-customer-information ">
                                    <div class="field field-two-thirds">
                                        <div class="field-input-wrapper">
                                            <label class="field-label" for="billing_address_city">Thành phố</label>
                                            <input placeholder="Thành phố" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_city" name="billing_address[city]" value="" />
                                        </div>
                                    </div>
                                    <div class="field field-third">
                                        <div class="field-input-wrapper">
                                            <label class="field-label" for="billing_address_zip">Mã bưu chính</label>
                                            <input placeholder="Mã bưu chính" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_zip" name="billing_address[zip]" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="radio-wrapper content-box-row">
                                <label class="radio-label">
                                    <div class="radio-input">
                                        <input type="radio" id="customer_pick_at_location_true" name="customer_pick_at_location" class="input-radio" value="true">
                                    </div>
                                    <span class="radio-label-primary">Nhận tại cửa hàng</span>
                                </label>
                            </div>


                            <div id="form_update_location_customer_pick_at_location" class="radio-wrapper content-box-row content-box-row-secondary hidden" for="customer_pick_at_location_true">
                                <div class="blank-slate">Hiện tại chưa có bất kỳ thông tin cửa hàng nào</div>
                            </div>


                        </div>
                    </form>

                </div>

            </div>
            <div id="change_pick_location_or_shipping">





                <div id="section-shipping-rate">
                    <div class="order-checkout__loading--box">
                        <div class="order-checkout__loading--circle"></div>
                    </div>
                    <div class="section-header">
                        <h2 class="section-title">Phương thức vận chuyển</h2>
                    </div>
                    <div class="section-content">

                        <div class="content-box  blank-slate">
                            <i class="blank-slate-icon icon icon-closed-box "></i>
                            <p>Vui lòng chọn tỉnh / thành để có danh sách phương thức vận chuyển.</p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="d-flex mt-5">
                <a href="index.php?controller=cart" class="btn btn-primary p-6 py-3">Trở về giỏ hàng</a>
                <a class="btn btn-primary p-6 py-3" style="margin-left: 40px;">Hoàn tất thanh toán</a>
            </div>
        </div>
        <div class="section flex-shrink-0 p-3" style="width: 500px; margin-left: 20px; border: 1px solid gray; height: max-content;">
            <div class="order-summary-sections">
                <div class="order-summary-section order-summary-section-product-list mb-4" data-order-summary-section="line-items">
                    <table class="product-table">
                        <thead>
                            <tr>
                                <th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
                                <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                <th scope="col"><span class="visually-hidden">Số lượng</span></th>
                                <th scope="col"><span class="visually-hidden">Giá</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($_SESSION['cart']['cart'] as $item) {
                            ?>
                                <tr class="product mb-2" data-product-id="1021830744" data-variant-id="1044223787">
                                    <td class="product-image">
                                        <div class="product-thumbnail">
                                            <div class="product-thumbnail-wrapper">
                                                <img class="product-thumbnail-image" height="80" alt="Combo Pate chó SmartHeart Vị Bò &amp; Gan 400g - 6 lon Petmall" src="admin/assets/uploads/<?php echo $item->product->image; ?>">
                                            </div>

                                        </div>
                                    </td>
                                    <td class="product-description">
                                        <span class="product-description-name order-summary-emphasis"><?php echo $item->product->name; ?></span>
                                        <br />
                                        <span class="product-thumbnail-quantity" aria-hidden="true">Số lượng:
                                            <?php echo $item->quantity; ?></span>

                                    </td>
                                    <td class="product-price">
                                        <h5 class="order-summary-emphasis fs-5 fw-bold text-black" style="width: max-content;">
                                            Giá:<br />
                                            <?php echo $item->quantity * $item->product->price; ?>đ</h5>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

                <div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">
                    <form id="form_discount_add" accept-charset="UTF-8" method="post">
                        <input name="utf8" type="hidden" value="✓">
                        <div class="fieldset">
                            <div class="field  ">
                                <div class="field-input-btn-wrapper">
                                    <div class="field-input-wrapper">
                                        <label class="field-label" for="discount.code">Mã giảm giá</label>
                                        <input placeholder="Mã giảm giá" class="field-input" data-discount-field="true" autocomplete="false" autocapitalize="off" spellcheck="false" size="30" type="text" id="discount.code" name="discount.code" value="">
                                    </div>
                                    <button type="submit" class="field-input-btn btn btn-default btn-disabled">
                                        <span class="btn-content">Sử dụng</span>
                                        <i class="btn-spinner icon icon-button-spinner"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="order-summary-section order-summary-section-display-discount" data-order-summary-section="discount-display">
                    <div>
                        <div class="hrv-discount-choose-coupons">
                            <div>
                                <svg width="15" height="10" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3337 5.3335V2.00016C17.3337 1.07516 16.5837 0.333496 15.667 0.333496H2.33366C1.41699 0.333496 0.675326 1.07516 0.675326 2.00016V5.3335C1.59199 5.3335 2.33366 6.0835 2.33366 7.00016C2.33366 7.91683 1.59199 8.66683 0.666992 8.66683V12.0002C0.666992 12.9168 1.41699 13.6668 2.33366 13.6668H15.667C16.5837 13.6668 17.3337 12.9168 17.3337 12.0002V8.66683C16.417 8.66683 15.667 7.91683 15.667 7.00016C15.667 6.0835 16.417 5.3335 17.3337 5.3335ZM15.667 4.11683C14.6753 4.69183 14.0003 5.77516 14.0003 7.00016C14.0003 8.22516 14.6753 9.3085 15.667 9.8835V12.0002H2.33366V9.8835C3.32533 9.3085 4.00033 8.22516 4.00033 7.00016C4.00033 5.76683 3.33366 4.69183 2.34199 4.11683L2.33366 2.00016H15.667V4.11683ZM9.83366 9.50016H8.16699V11.1668H9.83366V9.50016ZM8.16699 6.16683H9.83366V7.8335H8.16699V6.16683ZM9.83366 2.8335H8.16699V4.50016H9.83366V2.8335Z" fill="#318DBB"></path>
                                </svg>
                                <span>Xem thêm mã giảm giá</span>
                            </div>
                            <div id="list_short_coupon">
                                <span><span data-code="WILD">Giảm 15%</span></span>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="order-summary-section order-summary-section-total-lines payment-lines" data-order-summary-section="payment-lines">
                    <table class="total-line-table">
                        <thead>
                            <tr>
                                <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                <th scope="col"><span class="visually-hidden">Giá</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total-line total-line-subtotal">
                                <td class="total-line-name">Tạm tính</td>
                                <td class="total-line-price">
                                    <h5 class="order-summary-emphasis fs-5 fw-bold text-black">
                                        <?php echo $_SESSION['cart']['totalPrice']; ?>đ
                                    </h5>
                                </td>
                            </tr>


                            <tr class="total-line total-line-shipping">
                                <td class="total-line-name">Phí vận chuyển</td>
                                <td class="total-line-price">
                                    <span class="order-summary-emphasis" data-checkout-total-shipping-target="0">

                                        —

                                    </span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="total-line-table-footer">
                            <tr class="total-line">
                                <td class="total-line-name payment-due-label">
                                    <span class="payment-due-label-total">Tổng cộng</span>
                                </td>
                                <td class="total-line-name payment-due">
                                    <h5 class="order-summary-emphasis fs-5 fw-bold text-black">
                                        <?php echo $_SESSION['cart']['totalPrice']; ?>đ
                                    </h5>
                                    <span class="checkout_version" display:none="" data_checkout_version="0">
                                    </span>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fieldset .field .field-input-wrapper .field-input {
        box-shadow: 0 0 0 1px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 4px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        padding: 0.94em 2.8em 0.94em 0.8em;
        word-break: normal;
    }

    body {
        color: #737373;
        background: white !important;

        font-size: 14px;
        font-family: Helvetica Neue, sans-serif;
        line-height: 1.3em;
        overflow-wrap: break-word;
        word-wrap: break-word;
        word-break: break-word;
        -webkit-font-smoothing: subpixel-antialiased;
        overflow-x: hidden;
    }

    .fieldset .field .field-input-wrapper .field-input:focus {
        box-shadow: 0 0 0 2px #338dbc;
        outline: none;
    }

    .radio-wrapper .radio-input .input-radio:checked,
    .checkbox-wrapper .checkbox-input .input-checkbox:checked {
        border: none;
        box-shadow: 0 0 0 10px #338dbc inset;
    }

    .fieldset .field.field-error .field-input-wrapper .field-input {
        box-shadow: 0 0 0 2px #ff6d6d;
        outline: none;
    }

    html,
    body {
        margin: 0;
        width: 100%;
        /* == 2 => 1 page, == 1 => 2 page*/
    }





    a {
        text-decoration: none;
        color: #338dbc;
        transition: color 0.2s ease-in-out;
        display: inline-block;
    }

    .banner {
        padding: 1.5em 0;

        display: none;
        ;
    }

    .alert {
        padding: 16px;
        border-radius: 5px;
        display: -webkit-flex;
        display: flex;
        align-items: center;
    }


    .alert-danger svg {
        width: 20px;
        margin-right: 10px;
    }

    .alert-danger span {
        max-width: calc(100% - 30px);
    }

    .alert-danger * {
        flex: 0 0 auto;
    }

    .alert-danger {
        color: #721c24;
        background-color: #ffebeb;
        border-color: #ffebeb;
        line-height: 20px;
    }

    @-webkit-keyframes rotate {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes rotate {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }


    a:focus {
        outline: none;
    }

    a:hover {
        /* color: #2b78a0; */
        filter: brightness(1.2);
    }

    ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: normal;
        margin: 0;
        line-height: 1em;
    }

    h2 {
        font-size: 1.28571em;
    }

    h3 {
        font-size: 1em;
        font-weight: 500;
        margin-bottom: 0.75em;
    }

    h3:not(:first-child) {
        margin-top: 1.5em;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        font-size: 1em;
    }

    td,
    th {
        padding: 0;
        padding-left: 1em;
    }

    td:first-child,
    th:first-child {
        padding-left: 0;
        text-align: left;
    }

    td:last-child,
    th:last-child {
        text-align: right;
    }

    img {
        border: 0;
        max-width: 100%;
    }

    p {
        margin: 0;
        line-height: 1.5em;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        color: inherit;
        font: inherit;
        margin: 0;
        padding: 0;
        -webkit-appearance: none;
        -webkit-font-smoothing: inherit;
        border: none;
        background: transparent;
        line-height: normal;
    }

    button:focus,
    input:focus {
        outline: none;
    }

    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"] {
        -webkit-appearance: button;
        cursor: pointer;
    }

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
    }

    .radio-wrapper,
    .checkbox-wrapper {
        display: table;
        box-sizing: border-box;
        width: 100%;
        zoom: 1;
    }

    .radio-wrapper:after,
    .radio-wrapper:before,
    .checkbox-wrapper:after,
    .checkbox-wrapper:before {
        content: "";
        display: table;
    }

    .radio-wrapper .radio-input,
    .checkbox-wrapper .checkbox-input {
        display: table-cell;
        padding-right: 0.75em;
        white-space: nowrap;
    }

    .radio-wrapper .payment-method-checkbox {
        display: flex;
        align-self: center;
    }

    .radio-wrapper .radio-input .input-radio,
    .checkbox-wrapper .checkbox-input .input-checkbox {
        width: 18px;
        height: 18px;
        box-shadow: 0 0 0 0 #338dbc inset;
        transition: all 0.2s ease-in-out;
        position: relative;
        cursor: pointer;
        vertical-align: -4px;
        outline: 0;
        border: solid 1px #d9d9d9;
    }

    .radio-wrapper .radio-input .input-radio:hover,
    .checkbox-wrapper .checkbox-input .input-checkbox:hover {
        border-color: #cccccc;
    }

    .radio-wrapper .radio-input .input-radio {
        border-radius: 50%;
    }

    .radio-wrapper .radio-content-input {
        display: flex;
        align-items: center;
    }

    .radio-content-input .content-wrapper {
        display: grid
    }

    .radio-wrapper .radio-content-input .main-img {
        margin-right: 10px;
        display: flex;
        align-self: center;
        width: 40px;
        height: 40px;
    }

    .radio-wrapper .radio-content-input-no-icon {
        margin: 0.8em 0.8em 0.8em 0;
    }

    .radio-wrapper .radio-content-input .child-img {
        max-height: 30px
    }

    .radio-wrapper .radio-content-input .quick-tagline {
        color: #338dbc;
        display: flex;
        align-items: center;
        margin-top: 2px;
    }

    .radio-wrapper .radio-content-input .quick-tagline svg {
        fill: #338dbc;
        margin-left: 10px;
    }

    .radio-wrapper .radio-input .input-radio:checked:focus,
    .checkbox-wrapper .checkbox-input .input-checkbox:checked:focus {
        border-color: #286f94;
    }

    .radio-wrapper .radio-input .input-radio:checked:after,
    .checkbox-wrapper .checkbox-input .input-checkbox:checked:after {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 100 ")";
        filter: alpha(opacity=100);
    }

    .radio-wrapper .radio-input .input-radio:after,
    .checkbox-wrapper .checkbox-input .input-checkbox:after {
        content: "";
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: scale(0.2);
        transform: scale(0.2);
        transition: all 0.2s ease-in-out 0.1s;
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 0 ")";
        filter: alpha(opacity=0);
    }

    .radio-wrapper .radio-input .input-radio:after {
        width: 4px;
        height: 4px;
        margin-left: -2px;
        margin-top: -2px;
        background-color: #fff;
        border-radius: 50%;
    }

    .radio-wrapper .radio-label,
    .checkbox-wrapper .checkbox-label {
        display: flex !important;
        cursor: pointer !important;
        align-items: center;
        padding: 1.3em;
        width: auto;
    }

    .radio-wrapper .radio-label-payment-card,
    .checkbox-wrapper .checkbox-label {
        display: flex !important;
        cursor: pointer !important;
        align-items: center;
        padding: 0 0.5em;
        width: auto;
    }

    .radio-wrapper .two-page,
    .checkbox-wrapper .checkbox-label {
        display: flex;
        cursor: pointer;
        align-items: center;
        padding: 1.3em;
        width: auto;
    }

    .radio-wrapper .radio-label .radio-label-primary,
    .checkbox-wrapper .checkbox-label .checkbox-label-primary {
        display: table-cell;
        width: 100%;
    }

    .radio-wrapper .radio-accessory,
    .checkbox-wrapper .checkbox-accessory {
        display: table-cell;
        padding-left: 0.75em;
        white-space: nowrap;
    }

    .radio-wrapper.no-box,
    .checkbox-wrapper.no-box {
        display: block;
    }

    .radio-wrapper.no-box .radio-input,
    .checkbox-wrapper.no-box .checkbox-input {
        display: inline-block;
    }

    .radio-wrapper.no-box .radio-label,
    .checkbox-wrapper.no-box .checkbox-label {
        display: inline-block;
        width: inherit;
    }

    ::selection {
        background: #338dbc;
        color: white;
    }


    .btn:not(.btn-disabled):hover {
        /* background: #286f94; */
        color: white;
        filter: brightness(1.2);
    }



    .btn-spinner {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -10px;
        margin-left: -10px;
        /*transition: opacity 0.3s ease-in-out;*/
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 0 ")";
        filter: alpha(opacity=0);
    }

    .btn-loading {
        pointer-events: none;
        cursor: default;
    }

    .btn-loading .btn-content {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 0 ")";
        filter: alpha(opacity=0);
    }

    .btn-loading .btn-spinner {
        -webkit-animation: rotate 0.5s linear infinite;
        animation: rotate 0.5s linear infinite;
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 100 ")";
        filter: alpha(opacity=100);
    }

    #div_location_country_not_vietnam {
        display: none;
    }

    div#section-shipping-rate,
    #section-payment-method {
        position: relative;
    }

    .icon {
        background-position: center center;
        background-repeat: no-repeat;
        display: inline-block;
    }

    .icon.icon-button-spinner {
        width: 20px;
        height: 20px;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+PHBhdGggZD0iTTIwIDEwYzAgNS41MjMtNC40NzcgMTAtMTAgMTBTMCAxNS41MjMgMCAxMCA0LjQ3NyAwIDEwIDB2MmMtNC40MTggMC04IDMuNTgyLTggOHMzLjU4MiA4IDggOCA4LTMuNTgyIDgtOGgyeiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg=='), none;
    }

    .icon.icon-clear {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMiAtNCAxNiAxNiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAyIC00IDE2IDE2Ij48cGF0aCBvcGFjaXR5PSIuMiIgZD0iTTEwLTRjLTQuNCAwLTggMy42LTggOHMzLjYgOCA4IDggOC0zLjYgOC04LTMuNi04LTgtOHptMy43IDEwLjdsLTEgMS0yLjctMi42LTIuNyAyLjYtMS0xIDIuNi0yLjctMi42LTIuNyAxLTEgMi43IDIuNiAyLjctMi42IDEgMS0yLjYgMi43IDIuNiAyLjd6Ii8+PC9zdmc+'), none;
    }

    .icon.icon-os-question {
        width: 18px;
        height: 18px;
        margin-right: 0.5em;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOCIgaGVpZ2h0PSIxOCIgdmlld0JveD0iMCAwIDE4IDE4Ij48cGF0aCBkPSJNOSAxOGM0Ljk3IDAgOS00LjAzIDktOXMtNC4wMy05LTktOS05IDQuMDMtOSA5IDQuMDMgOSA5IDl6TTUuODUgNy4xNjJoMS41NDZjLjA1My0uODAzLjYtMS4zMTcgMS40NS0xLjMxNy44MjggMCAxLjM4LjQ5NCAxLjM4IDEuMTggMCAuNjUtLjI3NSAxLTEuMDkyIDEuNDkzLS45MDguNTM0LTEuMjkgMS4xMjYtMS4yMyAyLjExNGwuMDA2LjQ0OGgxLjUyN3YtLjM3NmMwLS42NS4yNDQtLjk4NyAxLjEwNi0xLjQ5NC44OTYtLjUzNCAxLjM5Ni0xLjIzOCAxLjM5Ni0yLjI0NiAwLTEuNDU1LTEuMjA3LTIuNDk1LTMuMDEtMi40OTUtMS45NTUgMC0zLjAzIDEuMTMtMy4wOCAyLjY5em0yLjg5NiA3LjA1OGMuNjcyIDAgMS4wOTMtLjQxNCAxLjA5My0xLjA0NiAwLS42NC0uNDIzLTEuMDU0LTEuMDk1LTEuMDU0LS42NiAwLTEuMDkzLjQxNS0xLjA5MyAxLjA1NCAwIC42MzIuNDM0IDEuMDQ2IDEuMDkzIDEuMDQ2eiIgZmlsbD0iI0I1QjVCNSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+'), none;
    }

    .icon.icon-closed-box {
        width: 68px;
        height: 54px;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2OCIgaGVpZ2h0PSI1NCIgdmlld0JveD0iMjQuMSAtMTcgNjggNTQiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMjQuMSAtMTcgNjggNTQiPjxwYXRoIHN0cm9rZT0iI0IyQjJCMiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGZpbGw9Im5vbmUiIGQ9Ik0yNS4xLTVoNjZNMzIuMSAyOGgxNk0zMi4xIDIzaDEyIi8+PHBhdGggc3Ryb2tlPSIjQjJCMkIyIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTI1LjEtNS40bDYuNy0xMC42aDUyLjlsNi40IDEwLjZ2MzguNmMwIDEuNi0xLjIgMi44LTIuOCAyLjhoLTYwLjRjLTEuNiAwLTIuOC0xLjItMi44LTIuOHYtMzguNnpNNTguMS0xNnYxMSIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=='), none;
    }

    .icon.icon-closed-box.has-error {
        width: 68px;
        height: 54px;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2OCIgaGVpZ2h0PSI1NCIgdmlld0JveD0iMjQuMSAtMTcgNjggNTQiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMjQuMSAtMTcgNjggNTQiPjxwYXRoIHN0cm9rZT0iI2ZmNmQ2ZCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGZpbGw9Im5vbmUiIGQ9Ik0yNS4xLTVoNjZNMzIuMSAyOGgxNk0zMi4xIDIzaDEyIi8+PHBhdGggc3Ryb2tlPSIjZmY2ZDZkIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTI1LjEtNS40bDYuNy0xMC42aDUyLjlsNi40IDEwLjZ2MzguNmMwIDEuNi0xLjIgMi44LTIuOCAyLjhoLTYwLjRjLTEuNiAwLTIuOC0xLjItMi44LTIuOHYtMzguNnpNNTguMS0xNnYxMSIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=='), none;
    }

    .flexbox {}

    .flexbox body,
    .flexbox .content,
    .flexbox .content .wrap,
    .flexbox .main {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-flex: 1 0 auto;
        -ms-flex: 1 0 auto;
        flex: 1 0 auto;
    }

    .flexbox .main-content {
        -webkit-flex: 1 0 auto;
        -ms-flex: 1 0 auto;
        flex: 1 0 auto;
    }

    .step-footer {
        z-index: 2;
        position: relative;
        margin-top: 1em;
        zoom: 1;
    }

    .step-footer:after,
    .step-footer:before {
        content: "";
        display: table;
    }

    .step-footer:after {
        clear: both;
    }

    .step-footer .step-footer-previous-link {
        cursor: pointer;
        display: block;
    }

    .step-footer .step-footer-previous-link .previous-link-icon {
        fill: #338dbc;
        transition: all 0.2s cubic-bezier(0.3, 0, 0, 1);
        margin-right: 0.25em;
    }

    .step-footer .step-footer-previous-link:hover .previous-link-icon {
        fill: #2b78a0;
        -webkit-transform: translateX(-5px);
        transform: translateX(-5px);
    }

    .step-footer .step-footer-info {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .content {
        overflow-x: hidden;
    }

    .content.content-second {
        display: none;
    }

    .section {
        position: relative;
        padding-top: 2em;
    }

    .section.thank-you-checkout-info {
        padding-top: 0.5em;
    }

    .section:first-child {
        padding-top: 0;
    }

    .section .section-header {
        position: relative;
    }

    .section .section-content {
        zoom: 1;
        margin-bottom: 2em;
    }

    .section .section-content .section-content-text {
        margin-bottom: 0.75em;
    }

    .section .section-content.no-mb,
    .section .section-content:last-child {
        margin-bottom: inherit;
    }

    .section .section-content:after,
    .section .section-content:before {
        content: "";
        display: table;
    }


    .section .section-content .content-box {
        box-shadow: 0 0 0 1px #d9d9d9;
        border-radius: 4px;
        background: #fff;
        color: #737373;
        margin-top: 1em;
    }

    .section .section-content .content-box.has-error {
        box-shadow: 0 0 0 2px #ff6d6d;
        color: #ff6d6d;
    }

    .section .section-content .content-box.no-border {
        box-shadow: none;
    }

    .section .section-content .content-box:first-child {
        margin-top: 0;
    }

    .section .section-content .content-box .content-box-row {
        display: table;
        box-sizing: border-box;
        width: 100%;
        border-top: 1px solid #d9d9d9;
        zoom: 1;
    }

    .section .section-content .content-box .content-box-row.content-box-row-padding {
        padding: 0.8em 0.6em;
    }

    .section .section-content .content-box .content-box-row:first-child {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        border-top: none;
    }

    .section .section-content .content-box .content-box-row:last-child {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .section .section-content .content-box .content-box-row:after,
    .section .section-content .content-box .content-box-row:before {
        content: "";
        display: table;
    }

    .section .section-content .content-box .content-box-row.content-box-row-secondary {
        background-color: #fafafa;
    }

    .section .section-content .content-box .content-box-row.content-box-row-no-border {
        padding-bottom: 0;
    }

    .section .section-content .content-box .content-box-row.content-box-row-no-border+.content-box-row {
        border-top: none !important;
    }

    .section .section-content .content-box .content-box-row-payment-card {
        display: table;
        box-sizing: border-box;
        width: 100%;
        zoom: 1;
    }

    .section .section-content .content-box .content-box-row-payment-card.content-box-row-padding {
        padding: 0.8em 0.6em;
    }

    .section .section-content .content-box .content-box-row-payment-card:first-child {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        border-top: 1px solid #d9d9d9;
    }

    .section .section-content .content-box .content-box-row-payment-card:last-child {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .section .section-content .content-box .content-box-row-payment-card:after,
    .section .section-content .content-box .content-box-row-payment-card:before {
        content: "";
        display: table;
    }

    .section .section-content .content-box .content-box-row-payment-card.content-box-row-secondary {
        background-color: #fafafa;
    }

    .section .section-content .content-box .content-box-row-payment-card.content-box-row-no-border {
        padding-bottom: 0;
    }

    .section .section-content .content-box .content-box-row-payment-card.content-box-row-no-border+.content-box-row {
        border-top: none !important;
    }

    .section .section-content .content-box .content-box-emphasis {
        font-weight: 500;
        color: #4d4d4d;
    }

    .section .section-content .content-box h3 {
        color: #4d4d4d;
    }

    .section .section-content .content-box h2 {
        color: #333333;
    }

    .section .section-content .content-box h2:only-child {
        margin: 0;
    }

    .section .section-title {
        color: #333333;


    }

    .payment-later-table,
    .payment-later-table>table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        box-shadow: 0px 0px 5px rgb(10 31 68 / 21%);
        border-radius: 9px;
        background-color: #FFFFFF;
    }

    .paylater--text {
        color: #ACA9A9;
    }

    .paylater--h4 {
        padding-top: 1em;
    }

    .border-bot-1px {
        border-bottom: 1px solid #d9d9d9;
    }

    .font-weight-bold {
        font-weight: bold;
    }

    .payment-card {
        padding: 0 .8em 0 1.8em;
        white-space: normal;
    }

    .payment-card--text {
        color: #ACA9A9;
    }

    .payment-card--h4 {
        text-align: left;
        padding-top: 1em;
    }

    .payment-card--title {
        text-align: left;
        margin: 1em;
    }

    .payment-later-table--loading {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        box-shadow: 0px 0px 5px rgb(10 31 68 / 21%);
        border-radius: 9px;
        background-color: #FFFFFF;
        display: none;
    }

    .payment-later-table--loading.show {
        display: block;
    }

    .payment-later-table>table th {
        text-align: center;
        padding: 16px;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        color: #338DBC;
    }

    .payment-later-table>table th:first-child {
        text-align: left;
        border-top-left-radius: 9px;
        border: 1px;
    }

    .payment-later-table>table th:last-child {
        text-align: right;
        border-top-right-radius: 9px;
        border: 1px;
    }

    .payment-later-table>table td {
        text-align: center;
        padding: 16px;
        font-weight: 500;
    }

    .payment-later-table>table td:first-child {
        text-align: left;
    }

    .payment-later-table>table td:last-child {
        text-align: right;
        padding: 16px;
    }

    .payment-later-table>table tr:nth-child(odd) {
        background-color: #D9D9D9;
    }


    .fieldset {
        margin: -0.45em;
        zoom: 1;
    }

    .fieldset:after,
    .fieldset:before {
        content: "";
        display: table;
    }

    .fieldset:after {
        clear: both;
    }

    .fieldset .field {
        width: 100%;
        float: left;
        padding: 0.45em;
        box-sizing: border-box;
    }

    .fieldset .field .field-input-btn-wrapper {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .fieldset .field .field-input-btn-wrapper .field-input-btn {
        width: auto;
        margin-left: 0.9em;
        white-space: nowrap;
        padding-top: 0;
        padding-bottom: 0;
    }

    .fieldset .field .field-input-btn-wrapper .field-input-wrapper {
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .fieldset .field .field-input-wrapper {
        position: relative;
    }

    .fieldset .field .field-input-wrapper .field-label {
        font-size: 0.85714em;
        font-weight: normal;
        position: absolute;
        top: 0;
        width: 100%;
        padding: 0 0.93333em;
        z-index: 1;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-transform: translateY(3px);
        transform: translateY(3px);
        pointer-events: none;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        box-sizing: border-box;
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 0 ")";
        filter: alpha(opacity=0);
        color: #999999;
        transition: all 0.2s ease-out;
        margin: 0.5em 0;
        margin-top: 0.3em;
        display: block;
    }




    .fieldset .field .field-input-wrapper .field-description {
        display: block;
        margin-left: 25px;
        margin-top: 2px;
    }

    .fieldset .field .field-input-wrapper.field-input-wrapper-select {}

    .fieldset .field .field-input-wrapper.field-input-wrapper-select::before {
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMSIgaGVpZ2h0PSIxOSIgdmlld0JveD0iMCAwIDIxIDE5Ij48dGl0bGU+QXJ0Ym9hcmQgMTwvdGl0bGU+PGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsPSIjMDAwIj48Zz48cGF0aCBkPSJNMCAwaDF2MTlIMFYweiIgaWQ9IlNoYXBlIiBmaWxsLW9wYWNpdHk9Ii4xNSIvPjxwYXRoIGQ9Ik0xMSA4aDEwbC01IDUtNS01eiIgZmlsbC1vcGFjaXR5PSIuNSIvPjwvZz48L2c+PC9nPjwvc3ZnPg=='), none;
        content: '';
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        width: 50px;
        background-position: center center;
        background-repeat: no-repeat;
        pointer-events: none;
    }

    .fieldset .field .field-message {
        font-size: 0.85714em;
    }

    .fieldset .field .field-message.field-message-error {
        margin: 0;
        display: none;
        margin: 0.75em 0 0.25em;
        transition: all 0.3s ease-out;
        line-height: 1.3em;
        color: #ff6d6d
    }

    .fieldset .field.field-active {}

    .fieldset .field.field-active .field-input-wrapper .field-label {
        color: #737373;
    }

    .fieldset .field.field-show-floating-label {}

    .fieldset .field.field-show-floating-label .field-input-wrapper .field-label {
        -webkit-transform: none;
        transform: none;
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 100 ")";
        filter: alpha(opacity=100);
    }

    .fieldset .field.field-show-floating-label .field-input-wrapper .field-input {
        padding-top: 1.5em;
        padding-bottom: 0.38em;
    }

    .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-webkit-input-placeholder {
        color: transparent;
    }

    .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-moz-placeholder {
        color: transparent;
    }

    .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-moz-placeholder {
        color: transparent;
    }

    .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-ms-input-placeholder {
        color: transparent;
    }

    .fieldset .field.field-error {}

    .fieldset .field.field-error .field-input-wrapper {}

    .fieldset .field.field-error .field-message.field-message-error {
        display: block;
    }

    .wrap {
        margin: 0 auto;
        max-width: 40em;
        zoom: 1;
    }

    .wrap:after {
        clear: both;
    }

    .wrap:after,
    .wrap:before {
        content: "";
        display: table;
    }

    .sidebar {
        position: relative;
        color: #717171;
    }

    .sidebar h2 {
        color: #323232;
    }

    .sidebar:after {
        content: "";
        display: block;
        width: 300%;
        position: absolute;
        top: 0;
        left: -100%;
        bottom: 0;
        background: #fafafa;

        z-index: -1;
        box-shadow: 0 -1px 0 #e1e1e1 inset;
    }

    .sidebar .sidebar-content {}

    .sidebar .sidebar-content .order-summary {}

    .sidebar .sidebar-content .order-summary .order-summary-sections {}

    .sidebar .sidebar-content .order-summary .order-summary-sections .order-summary-section {
        border-top: 1px solid;
        padding-top: 1.5em;
        padding-bottom: 1em;
        border-color: #e1e1e1;
    }

    .sidebar .sidebar-content .order-summary .order-summary-sections .order-summary-section:first-child {
        border-top: none;
    }

    .sidebar .sidebar-content .order-summary .order-summary-emphasis {
        font-weight: 500;
        color: #4b4b4b;
    }

    .sidebar .sidebar-content .order-summary .order-summary-small-text {
        font-size: 0.85714em;
        color: #969696;
    }

    .sidebar .sidebar-content .order-summary .product {}

    .sidebar .sidebar-content .order-summary .product:first-child td {
        padding-top: 0;
    }

    .sidebar .sidebar-content .order-summary .product td {
        padding-top: 1em;
    }

    .sidebar .sidebar-content .order-summary .product .product-image {}

    .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail {
        width: 4.6em;
        height: 4.6em;
        border-radius: 8px;
        background: #fff;
        position: relative;
    }

    .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail .product-thumbnail-wrapper {
        width: 100%;
        height: 100%;
        position: relative;
        overflow: hidden;
        border-radius: 8px;
    }

    .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail .product-thumbnail-wrapper .product-thumbnail-image {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        max-width: 100%;
        max-height: 100%;
        margin: auto;
    }

    .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail .product-thumbnail-quantity {
        font-size: 0.85714em;
        font-weight: 500;
        white-space: nowrap;
        padding: 0.15em 0.65em;
        border-radius: 2em;
        background-color: rgba(153, 153, 153, 0.9);
        color: #fff;
        position: absolute;
        right: -0.75em;
        top: -0.75em;
        z-index: 2;
    }

    .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail::after {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        border-radius: 8px;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1) inset;
    }

    .sidebar .sidebar-content .order-summary .product .product-description {
        width: 100%;
    }

    .sidebar .sidebar-content .order-summary .product .product-description .product-description-name,
    .sidebar .sidebar-content .order-summary .product .product-description .product-description-variant,
    .sidebar .sidebar-content .order-summary .product .product-description .product-description-property {
        display: block;
    }

    .sidebar .sidebar-content .order-summary .product .product-quantity {}

    .sidebar .sidebar-content .order-summary .product .product-price {
        white-space: nowrap;
    }

    .sidebar .btn-disabled {
        cursor: default;
        background: #c8c8c8;
        box-shadow: none;
    }


    .logo-text {
        color: #333333;
    }

    .main {}

    .main .main-header {}

    .main .main-header .logo {
        display: none;
    }

    .main .main-header .breadcrumb {}

    .main .main-header .breadcrumb .breadcrumb-item {
        display: inline-block;
        font-size: 0.85714em;
        color: #999999;
    }

    .main .main-header .breadcrumb .breadcrumb-item.breadcrumb-item-current {
        font-weight: 500;
        color: #4d4d4d;
    }

    .main .main-header .breadcrumb .breadcrumb-item:after {
        content: "";
        display: inline-block;
        width: 6px;
        height: 11px;
        vertical-align: middle;
        margin: 0 0.5em;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2IiBoZWlnaHQ9IjExIiBvcGFjaXR5PSIuNCIgZmlsbD0iIzAwMCI+PHBhdGggZD0iTS41MjYgMS40MDhsNCA0LjY0NS4wMTQtLjgzLTQgNC4zNTQuOTIuODQ2IDQtNC4zNTYuMzc2LS40MS0uMzYyLS40Mi00LTQuNjQ1LS45NDguODE2eiIvPjwvc3ZnPg=='), none;
    }

    .main .main-header .breadcrumb .breadcrumb-item:last-child:after {
        display: none;
    }

    .main .main-header .breadcrumb .breadcrumb-item .breadcrumb-link {
        cursor: pointer;
    }

    .main .main-footer {
        padding: 1em 0;
        border-top: 1px solid #e6e6e6;
    }

    .main h2 {
        color: #333333;
    }

    .field-label-strong {
        font-weight: 600;
    }

    .ctrl_payment_method {
        padding: 10px 60px;
    }

    .ctrl_payment_method>label {
        margin-bottom: 5px;
        display: block;
    }

    .ctrl_payment_method .payment_method_list {
        padding-left: 10px;
    }

    .total-line {}

    .total-line td {
        padding-top: 0.75em;
    }

    .total-line-table-footer .total-line td {
        padding-top: 3em;
        position: relative;
    }

    .total-line-table-footer .total-line td::before {
        background-color: #e1e1e1;
        content: '';
        position: absolute;
        top: 1.5em;
        left: 0;
        width: 100%;
        height: 1px;
    }

    .payment-due-label {}

    .payment-due-label .payment-due-label-total {
        font-size: 1.14286em;
        color: #4b4b4b;
    }

    .payment-due {}

    .payment-due .payment-due-currency {
        font-size: 0.85714em;
        vertical-align: 0.2em;
        margin-right: 0.5em;
        color: #969696;
    }

    .payment-due .payment-due-price {
        font-size: 1.71429em;
        font-weight: 500;
        letter-spacing: -0.04em;
        color: #4b4b4b;
        line-height: 1em;
    }

    .applied-reduction-code {
        margin-left: 0.5em;
    }

    .applied-reduction-code .applied-reduction-code-icon {
        fill: #338dbc;
        vertical-align: middle;
        margin-right: 0.14286em;
    }

    .applied-reduction-code .applied-reduction-code-information {
        font-size: 0.85714em;
        color: #338dbc;
        font-weight: 500;
    }

    .applied-reduction-code-clear-button {
        vertical-align: middle;
        margin-left: 0.28571em;
    }

    .hanging-icon {
        margin-right: 0.75em;
        stroke: #338dbc;
    }

    .hanging-icon.hanging-icon-error {
        stroke: #ff6d6d;
    }

    .os-header {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        margin: 0;
    }

    .os-header .os-header-heading {
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .os-header .os-header-heading .os-order-number {
        display: block;
    }

    .os-header .os-header-heading .os-header-title {
        font-size: 1.5em;
        margin-bottom: 0.1em;
    }

    .os-header .os-header-heading .os-description {
        color: #4d4d4d;
    }

    .wrap {
        margin: 0 auto;
        max-width: 40em;
        zoom: 1;
    }

    .wrap:after,
    .wrap:before {
        content: "";
        display: table;
    }

    .order-summary-toggle {
        background: #fafafa;
        border-top: 1px solid #e6e6e6;
        border-bottom: 1px solid #e6e6e6;
        padding: 1.25em 0;
        -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        text-align: left;
        width: 100%;
    }

    .order-summary-toggle .order-summary-toggle-inner {
        display: table;
        box-sizing: border-box;
        width: 100%;
        zoom: 1;
    }

    .order-summary-toggle .order-summary-toggle-inner:after,
    .order-summary-toggle .order-summary-toggle-inner:before {
        content: "";
        display: table;
    }

    .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-icon-wrapper {
        display: table-cell;
        vertical-align: middle;
        padding-right: 0.75em;
        white-space: nowrap;
    }

    .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-icon-wrapper .order-summary-toggle-icon {
        fill: #338dbc;
        transition: fill 0.2s ease-in-out;
    }



    .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-text {
        color: #338dbc;
        vertical-align: middle;
        transition: color 0.2s ease-in-out;
        display: none;
    }

    .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-text .order-summary-toggle-dropdown {
        vertical-align: middle;
        transition: fill 0.2s ease-in-out;
        fill: #338dbc;
    }

    .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-total-recap {
        display: table-cell;
        vertical-align: middle;
        text-align: right;
        padding-left: 0.75em;
        white-space: nowrap;
    }

    .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-total-recap .total-recap-final-price {
        font-size: 1.28571em;
        line-height: 1em;
        color: #4d4d4d;
    }

    .order-summary-toggle.order-summary-toggle-show {}

    .order-summary-toggle.order-summary-toggle-hide .order-summary-toggle-inner .order-summary-toggle-text.order-summary-toggle-text-show,
    .order-summary-toggle.order-summary-toggle-show .order-summary-toggle-inner .order-summary-toggle-text.order-summary-toggle-text-hide {
        display: table-cell;
        width: 100%;
    }

    .logged-in-customer-information {
        display: table;
        box-sizing: border-box;
        width: 100%;
        margin-bottom: 1.5em;
    }

    .logged-in-customer-information:after,
    .logged-in-customer-information:before {
        content: "";
        display: table;
    }

    .logged-in-customer-information .logged-in-customer-information-avatar-wrapper {
        display: table-cell;
        padding-right: 1em;
        white-space: nowrap;
        vertical-align: middle;
    }

    .logged-in-customer-information .logged-in-customer-information-avatar-wrapper .logged-in-customer-information-avatar {
        border-radius: 8px;
        background-size: cover;
        position: relative;
        max-width: none;
        width: 50px;
        height: 50px;
        overflow: hidden;
    }

    .logged-in-customer-information .logged-in-customer-information-avatar-wrapper .logged-in-customer-information-avatar:before {
        content: '';
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MCIgaGVpZ2h0PSI1MCIgdmlld0JveD0iMCAwIDUwIDUwIj48dGl0bGU+QXJ0Ym9hcmQ8L3RpdGxlPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PHBhdGggZD0iTTAgMGg1MHY1MEgwVjB6IiBmaWxsPSIjRDhEOEQ4Ii8+PHBhdGggZD0iTTI1LjEwMyAyNi4yNDJjMy4yMTIgMCA1LjY0Mi0yLjkyIDUuNjQyLTYuNzg3IDAtMy4wODYtMi41OC01LjcwNS01LjY0Mi01LjcwNS0zLjA2IDAtNS42NCAyLjYyLTUuNjQgNS43MDUgMCAzLjg2NiAyLjQzIDYuNzg3IDUuNjQgNi43ODd6bTAtMTAuNTRjMS45NTIgMCAzLjY3OCAxLjc2MyAzLjY3OCAzLjc1MyAwIDIuNzU3LTEuNTc0IDQuODM1LTMuNjc3IDQuODM1LTIuMTAzIDAtMy42NzctMi4wNzgtMy42NzctNC44MzUgMC0xLjk5IDEuNzI2LTMuNzUzIDMuNjc3LTMuNzUzem0tOC40NSAyMC42MTVsLjE3Ny0xLjg3N2MuMzktMy43NzggNC42OTctNC42MSA4LjI3My00LjYxIDMuNTc3IDAgNy44ODQuODMyIDguMjc0IDQuNTk4bC4xNzYgMS44OWgyLjAxNWwtLjE3Ni0yLjA4Yy0uNDQtNC4xMTctNC4wNjgtNi4zODQtMTAuMjktNi4zODQtNi4yMiAwLTkuODQ2IDIuMjY3LTEwLjI4NyA2LjM5N2wtLjE3NiAyLjA2N2gyLjAxNHoiIGZpbGw9IiNGRkYiLz48L2c+PC9zdmc+'), none;
    }

    .logged-in-customer-information .logged-in-customer-information-paragraph {
        display: table-cell;
        width: 100%;
        padding-top: 0.25em;
        vertical-align: middle;
    }

    @media (min-width: 1300px) {
        .hanging-icon {
            position: absolute;
            right: 100%;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            margin-right: 1.5em;
        }
    }

    @media (min-width: 1000px) {
        .wrap {
            padding: 0 5%;
            width: 90%;
            max-width: 78.57143em;
        }

        .order-summary-toggle {
            display: none;
        }

        .flexbox .content .wrap {
            -webkit-flex-direction: row-reverse;
            -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
        }

        .main {
            width: 52%;
            width: 52%;
            padding-right: 6%;
            /* float: left;*/
        }

        .main .main-header {
            padding-bottom: 1em;
        }

        .main .main-header .logo {
            display: block;
        }

        .main .main-header .breadcrumb {
            margin-top: 1em;
        }

        .sidebar {
            width: 38%;
            padding-left: 4%;
            background-position: left top;
            /* float: right; */
        }

        .sidebar:after {
            left: 0;
            background-position: left top;
            box-shadow: 1px 0 0 #e1e1e1 inset;
        }

        .sidebar .sidebar-content .order-summary .order-summary-sections .order-summary-section:first-child {
            padding-top: 0;
        }
    }

    @media (max-width: 999px) {
        .content {}

        .content.content-second {
            display: block;
        }

        .wrap {
            width: 100%;
            box-sizing: border-box;
            padding: 0 1em;
        }

        .banner {
            display: block;
        }

        .banner.error {
            padding-bottom: 100px;
        }

        #checkout_order_information_changed_error_message {
            position: absolute;
            top: 60px;
            left: 15px;
            width: calc(100% - 30px);
            margin-bottom: 0 !important;
        }

        .main .main-header .breadcrumb {
            display: none;
        }

        .sidebar .sidebar-content .order-summary.order-summary-is-collapsed {
            height: 0;
            overflow: hidden;
        }
    }

    @media (max-width: 999px) and (min-width: 750px) {
        .hanging-icon {
            position: absolute;
            right: 100%;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            margin-right: 1.5em;
        }
    }

    @media (min-width: 750px) {
        h1 {
            font-size: 2em;
        }

        .main {
            padding-top: 1.5em;
        }

        .main .main-content {
            padding-bottom: 4em;
        }

        .step-footer {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row-reverse;
            -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 1.5em;
        }

        .step-footer .step-footer-continue-btn {
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            float: right;
        }

        .step-footer .step-footer-previous-link {
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            margin-right: 1em;
            float: left;
            display: block;
        }

        .step-footer .step-footer-info {
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            margin-right: 1em;
            float: left;
        }

        .section {
            padding-top: 3em;
        }

        .section.thank-you-checkout-info {
            padding-top: 1.5em;
        }

        .section .section-header {
            margin-bottom: 1.5em;
        }

        .field-half {
            width: 50% !important;
        }

        .field-two-thirds {
            width: 66.66667% !important;
        }

        .field-third {
            width: 33.33333% !important;
        }

        .os-header {
            margin: 0 0 -0.5em !important;
        }

        .icon {}

        .icon.icon-closed-box {
            width: 108px;
            height: 85px;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgiIGhlaWdodD0iODUiIHZpZXdCb3g9IjAgMCAxMDggODUiPjxnIHN0cm9rZT0iI0IyQjJCMiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGZpbGw9Im5vbmUiPjxwYXRoIGQ9Ik0xIDE4aDEwNk0xMSA3MC4zaDI2bS0yNi02aDI2bS0yNi02aDE3Ii8+PC9nPjxwYXRoIHN0cm9rZT0iI0IyQjJCMiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xIDE4bDEwLjctMTdoODQuN2wxMC42IDE3djYxLjVjMCAyLjUtMiA0LjUtNC41IDQuNWgtOTdjLTIuNSAwLTQuNS0yLTQuNS00LjV2LTYxLjV6TTU0IDF2MTYuNiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=='), none;
        }

        .icon.icon-closed-box.has-error {
            width: 108px;
            height: 85px;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgiIGhlaWdodD0iODUiIHZpZXdCb3g9IjAgMCAxMDggODUiPjxnIHN0cm9rZT0iI2ZmNmQ2ZCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGZpbGw9Im5vbmUiPjxwYXRoIGQ9Ik0xIDE4aDEwNk0xMSA3MC4zaDI2bS0yNi02aDI2bS0yNi02aDE3Ii8+PC9nPjxwYXRoIHN0cm9rZT0iI2ZmNmQ2ZCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xIDE4bDEwLjctMTdoODQuN2wxMC42IDE3djYxLjVjMCAyLjUtMiA0LjUtNC41IDQuNWgtOTdjLTIuNSAwLTQuNS0yLTQuNS00LjV2LTYxLjV6TTU0IDF2MTYuNiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=='), none;
        }
    }

    @media (min-width: 1000px) {

        .main,
        .sidebar {
            padding-top: 4em;
        }
    }

    .text-center {
        text-align: center;
    }

    @media (max-width: 749px) {
        .modal-container {
            display: block;
        }

        .tool-tip__info,
        .tool-tip {
            display: none !important;
        }

        .main {
            padding-top: 1.5em;
        }

        .main .main-content {
            padding-bottom: 1.5em;
        }

        .section-header {
            margin-bottom: 1em;
        }

        .text-center {
            text-align: left;
        }

        .btn {
            width: 100%;
            padding-top: 1.75em;
            padding-bottom: 1.75em;
        }

        .step-footer {}

        .step-footer .step-footer-previous-link {
            padding-top: 1.5em;
            text-align: center;
        }

        .step-footer .step-footer-info {
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding-top: 1.5em;
            text-align: center;
        }
    }

    .thank-you-additional-content {
        margin-top: 15px;
        line-height: 1.25em;
    }

    .blank-slate {
        white-space: pre-line;
        padding: 1.5em;
        text-align: center;
    }

    .paylater {
        padding: .8em;
        white-space: normal;
    }

    .paylater--ul {
        list-style-type: disc;
        padding: 0 2em;
        padding-right: 1em;
        word-break: break-word;
    }

    .paylater--ul li {
        margin: 5px;
        text-align: justify;
    }

    .blank-slate .blank-slate-icon {
        margin-bottom: 1em;
    }

    .dp-none {
        display: none;
    }

    .dp-inline-block {
        display: inline-block;
    }

    .visually-hidden {
        border: 0;
        clip: rect(0, 0, 0, 0);
        clip: rect(0 0 0 0);
        width: 2px;
        height: 2px;
        margin: -2px;
        overflow: hidden;
        padding: 0;
        position: absolute;
    }

    .clearfix:after {
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0;
    }

    .group:after {
        content: "";
        display: table;
        clear: both;
    }

    .pt0 {
        padding-top: 0px !important;
    }

    .mt0 {
        margin-top: 0px !important;
    }

    .mb5 {
        margin-bottom: 5px;
    }

    .hidden {
        display: none !important;
    }

    form#form_update_shipping_method {
        position: relative;
    }

    .footer-powered-by {
        text-align: center;
        color: #4B5563;
        font-size: 0.9em;
    }


    .redeem-login {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .redeem-login-title {
        position: relative;
        display: flex;
        flex-wrap: wrap;
    }

    .redeem-login-title h2 {
        color: #333;
        margin-right: 5px;
    }


    .redeem-login-btn a {
        display: inline-block;
        border-radius: 4px;
        font-weight: 500;
        padding: 13px 10px;
        background: #338dbc;
        color: #fff;
        width: 82px;
        text-align: center;
    }

    .redeem-login-btn a:hover,
    .redeem-login-btn a:focus {
        filter: brightness(1.2);
    }

    .redeem-form-used {
        padding-top: 10px;
    }

    .btn-redeem-loading .btn-redeem-spinner {
        -webkit-animation: rotate 0.5s linear infinite;
        animation: rotate 0.5s linear infinite;
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 100 ")";
        filter: alpha(opacity=100);
    }

    .icon-redeem-button-spinner {
        position: absolute;
        top: 0;
        opacity: 0;
        right: -25px;
        width: 12px;
        height: 12px;
        border: 2px solid #999999;
        border-bottom-color: transparent;
        border-radius: 100%;
    }

    .total-line-table-footer {
        white-space: nowrap;
    }

    .row-align-top {
        vertical-align: top;
    }

    .section .section-content #form_update_shipping_method.default .content-box .content-box-row.content-box-row-secondary {
        padding: 0;
        background: transparent;
        border: none !important;
        margin: 0;
        width: 100%;
        display: block;
        box-shadow: unset !important;
    }

    form#form_update_shipping_method.default {
        padding: 0;
    }

    #form_update_shipping_method.default .content-box {
        box-shadow: unset;
    }
</style>