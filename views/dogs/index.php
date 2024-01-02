<div class="w-100" style="min-height: 500px;">
    <img class="w-100" src="public/images/banner-dog-page.png" alt="" />
    <div class="container-lg d-flex my-4 gap-4">
        <?php require_once('components/FilterProducts.php') ?>
        <div class="my-2">
            <div class="d-flex justify-content-between align-items-center px-2 flex-lg-shrink-3 title_customs">
                <h2>For Dog - Thức ăn & dưỡng chất</h2>
                <p>
                    Mới nhất
                    <i class="bi bi-chevron-down ml-3"></i>
                </p>
            </div>

            <div class="row_customs">
                <?php
                foreach ($products as $key => $product) {
                    $type = "dogs";
                    if ($product->productGroupId == "pg_002")
                        $type = "cats";

                    $reversedString = strrev($product->price);

                    $chunkedString = chunk_split($reversedString, 3, '.');

                    $price = strrev($chunkedString);
                    $product->price = substr($price, 1);

                    echo '
                        <a href="index.php?controller=' . $type . '&action=details&id=' . $product->id . '" class="text-black text-decoration-none shadow rounded px-2 col_customs">
                            <img class="mb-2" style="height: 180px; width: auto; objec-fit: cover;" src="admin/assets/uploads/' . $product->image . '" />
                            <h4
                                class="title_customs">
                                ' . $product->title . '
                            </h4>
                            <p class="fs-6 fw-bold">' . $product->price . '$</p>
                        </a>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<style>
.row_customs {
    background-color: inherit;
    width: 100%;
    display: grid;
    padding: 20px 10px;
    gap: 12px;
    cursor: pointer;
    grid-template-columns: repeat(4, auto);
    overflow: hidden;
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


@media only screen and (max-width: 1400px) {
    .row_customs {
        grid-template-columns: repeat(3, auto);
    }
}

@media only screen and (max-width: 1200px) {
    .row_customs {
        grid-template-columns: repeat(3, auto);
    }
}

@media only screen and (max-width: 946px) {
    .row_customs {
        grid-template-columns: repeat(2, auto);
    }

    .title_customs h2 {
        font-size: 22px;
    }

    .title_customs p {
        font-size: 14px;
    }
}

@media only screen and (max-width: 750px) {
    .filter_customs {
        display: none;
    }

    .title_customs p {
        font-size: 12px;
    }
}
</style>