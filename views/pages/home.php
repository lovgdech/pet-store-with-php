<div class="w-100" style="min-height: 500px;">
    <img class="w-100" src="public/images/banner-home-page.png" alt="banner" />

    <div class="container-lg">
        <div class="row my-4">
            <a href="index.php?controller=dogs" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                <img class="w-100" src="public/images/img_slider_home_circle_1.png" alt="" />
                <p class="text-center text-black py-1 fs-5 fw-bold">Dành cho chó</p>
            </a>
            <a href="index.php?controller=cats" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                <img class="w-100" src="public/images/img_slider_home_circle_2.png" alt="" />
                <p class="text-center text-black py-1 fs-5 fw-bold">Dành cho mèo</p>
            </a>
            <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                <img class="w-100" src="public/images/img_slider_home_circle_3.png" alt="" />
                <p class="text-center text-black py-1 fs-5 fw-bold">NUTRIENCE -15%</p>
            </a>
            <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                <img class="w-100" src="public/images/img_slider_home_circle_4.png" alt="" />
                <p class="text-center text-black py-1 fs-5 fw-bold">TASTE OF THE WILD</p>
            </a>
            <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                <img class="w-100" src="public/images/img_slider_home_circle_5.png" alt="" />
                <p class="text-center text-black py-1 fs-5 fw-bold">TODAY Deal</p>
            </a>
            <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                <img class="w-100" src="public/images/img_slider_home_circle_6.png" alt="" />
                <p class="text-center text-black py-1 fs-5 fw-bold">PET PARENTS</p>
            </a>
        </div>

        <section class="my-4 recommend">
            <h3 class="text-center py-4 fs-4 fw-bold text-uppercase">Đề xuất</h3>
            <div class="row_customs">
                <?php
                foreach ($products as $key => $val) {
                    $type = "dogs";
                    if ($val->productGroupId == "pg_002")
                        $type = "cats";

                    echo '
                        <a href="index.php?controller=' . $type . '&action=details&id=' . $val->id . '" class="text-black text-decoration-none shadow rounded px-2 col_customs">
                            <img class="mb-2" style="height: 180px; width: auto; objec-fit: cover;" src="admin/assets/uploads/' . $val->image . '" />
                            <h4
                                class="title_customs">
                                ' . $val->title . '
                            </h4>
                            <p class="fs-6 fw-bold">' . $val->price . '$</p>
                        </a>
                    ';
                }
                ?>
            </div>
        </section>

        <div class="w-100 d-flex">
            <div class="w-50">
                <img class="w-100" src="public/images/a1_mob.png" alt="" />
                <p class="text-center fs-small text-black py-1">Puppy Shop</p>
            </div>
            <div class="w-50">
                <img class="w-100" src="public/images/a2_mob.png" alt="" />
                <p class="text-center fs-small text-black py-1">Kitten Shop</p>
            </div>
        </div>

        <section>
            <div class="d-flex justify-content-between align-items-center">
                <h3>2,000+ Brands - Shop All</h3>
                <a href="#" class="btn btn-primary">Xem thêm</a>
            </div>
            <div class="row my-4">
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/gallery_item_1.png" alt="" />
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/gallery_item_2.png" alt="" />
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/gallery_item_3.png" alt="" />
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/gallery_item_4.png" alt="" />
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/gallery_item_5.png" alt="" />
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/gallery_item_6.png" alt="" />
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/gallery_item_7.png" alt="" />
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/gallery_item_8.png" alt="" />
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/gallery_item_9.png" alt="" />
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/gallery_item_10.png" alt="" />
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/gallery_item_11.png" alt="" />
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/gallery_item_12.png" alt="" />
                </a>
            </div>
        </section>

        <section class="outlet">
            <h3 class="text-center py-4 fs-4 fw-bold">OUTLET</h3>
            <div class="row_customs">
                <?php
                foreach ($data["products"] as $key => $val) {
                    $type = "dogs";
                    $oldPrice = $val->price * 1.1;
                    if ($val->productGroupId == "pg_002")
                        $type = "cats";

                    echo '
                        <a href="index.php?controller=' . $type . '&action=details&id=' . $val->id . '" class="d-flex gap-3 text-black text-decoration-none shadow rounded px-2 col_customs">
                            <img class="mb-2" style="height: 80px; width: 80px; objec-fit: cover;" src="admin/assets/uploads/' . $val->image . '" />
                            <div>
                                <h4
                                class="title_customs">
                                ' . $val->title . '
                                </h4>
                                <div class="d-flex gap-2 align-items-center">
                                    <p class="fs-6 fw-bold text-danger">' . $val->price . '$</p>
                                    <p class="oldPrice_customs">' . $oldPrice . '$</p>
                                </div>
                            </div>
                        </a>
                    ';
                }
                ?>
            </div>
        </section>

        <style>
            .row_customs {
                background-color: inherit;
                width: 100%;
                display: grid;
                padding: 20px 10px;
                gap: 12px;
                cursor: pointer;
                grid-template-columns: repeat(6, auto);
                overflow: hidden;
            }

            .outlet .row_customs {
                grid-template-columns: repeat(4, auto);
            }

            .col_customs:hover {
                transform: translateY(-5px);
            }

            .title_customs {
                width: 100%;
                font-size: 16px;
                white-space: initial;
                overflow: hidden;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                display: -webkit-box;
            }

            .oldPrice_customs {
                font-size: 12px;
                color: gray;
                font-weight: normal;
                text-decoration: line-through;
            }

            .outlet .title_customs {
                font-weight: normal;
                font-size: 15px;
            }

            @media only screen and (max-width: 1400px) {
                .recommend .row_customs {
                    grid-template-columns: repeat(5, auto);
                }
            }

            @media only screen and (max-width: 1200px) {
                .recommend .row_customs {
                    grid-template-columns: repeat(4, auto);
                }
            }

            @media only screen and (max-width: 856px) {
                .recommend .row_customs {
                    grid-template-columns: repeat(3, auto);
                }
            }

            @media only screen and (max-width: 768px) {
                .recommend .row_customs {
                    grid-template-columns: repeat(2, auto);
                }
            }
        </style>

        <section>
            <h3 class="text-center py-4 fs-4 fw-bold text-uppercase">Quẹo lựa nhanh nè</h3>
            <div class="row my-4">
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/item_image_1.jpg" alt="" />
                    <p class="text-center text-black py-1 fs-6 fw-bold">Hiệu thuốc Online</p>
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/item_image_2.jpg" alt="" />
                    <p class="text-center text-black py-1 fs-6 fw-bold">Động Pate mèo</p>
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/item_image_3.jpg" alt="" />
                    <p class="text-center text-black py-1 fs-6 fw-bold">Động Pate chó</p>
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/item_image_4.jpg" alt="" />
                    <p class="text-center text-black py-1 fs-6 fw-bold">Cái tiệm quần áo</p>
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/item_image_5.jpg" alt="" />
                    <p class="text-center text-black py-1 fs-6 fw-bold">Cái kho đồ chơi</p>
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/item_image_6.jpg" alt="" />
                    <p class="text-center text-black py-1 fs-6 fw-bold">Chỗ của mèo con</p>
                </a>
                <a href="?controller=dogs" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/item_image_7.jpg" alt="" />
                    <p class="text-center text-black py-1 fs-6 fw-bold">Chỗ của cún con</p>
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/item_image_8.jpg" alt="" />
                    <p class="text-center text-black py-1 fs-6 fw-bold">Yêu nội thất đẹp</p>
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/item_image_9.jpg" alt="" />
                    <p class="text-center text-black py-1 fs-6 fw-bold">Vitamin nè</p>
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/item_image_10.jpg" alt="" />
                    <p class="text-center text-black py-1 fs-6 fw-bold">Tắm cho thơm tho</p>
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/item_image_11.jpg" alt="" />
                    <p class="text-center text-black py-1 fs-6 fw-bold"> Gặm bớt phá đồ</p>
                </a>
                <a href="#" class="col-4 col-md-2 text-decoration-none cursor-pointer">
                    <img class="w-100" src="public/images/item_image_12.jpg" alt="" />
                    <p class="text-center text-black py-1 fs-6 fw-bold">Bán thêm cho vui</p>
                </a>
            </div>
        </section>
    </div>
</div>