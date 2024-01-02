<?php
require_once('config/connection.php');
require_once('products.php');

class Cart
{
    public $id;
    public $product;
    public $note;
    public $quantity;

    function __construct(
        $id,
        $product,
        $quantity,
        $note,
    ) {
        $this->id = $id;
        $this->product = $product;
        $this->quantity = $quantity;
        $this->note = $note;
    }

    static function get_cart()
    {
        if (isset($_SESSION['cart']))
            unset($_SESSION['cart']);

        $id = $_SESSION['user']['id'];
        $cartList = [];
        $list = [];
        $db = DB::getInstance();
        $req = $db->query("SELECT `mega_products`.*, `mega_products`.id as productId,  `mega_carts`.*, `mega_carts`.id as cartId FROM `mega_carts`, `mega_products` where `mega_products`.id = `mega_carts`.product_id and `mega_carts`.user_id = $id");

        $totalQuantity = 0;
        $totalPrice = 0;

        foreach ($req->fetchAll() as $item) {
            $product = new Product($item['productId'], $item['product_id'], $item['product_group_id'], $item['name'], $item['title'], $item['description'], $item['image'], $item['price'], $item['quanlity'], $item['note'], $item['enable']);

            $totalQuantity += $item['quantity'];
            $totalPrice += ($item['quantity'] * $item['price']);

            $list[] = new Cart($item['cartId'], $product, $item['quantity'], $item['note']);
        }

        $cartList = [
            "cart" => $list,
            "totalQuantity" => $totalQuantity,
            "totalPrice" => $totalPrice
        ];


        $_SESSION['cart'] = $cartList;

        return $cartList;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->exec("DELETE FROM `mega_carts` WHERE id = '$id'");

        return $req;
    }

    static function insert($productId, $quantity)
    {
        if (isset($_SESSION['user']['id'])) {
            $userId = $_SESSION['user']['id'];
            $db = DB::getInstance();
            $id = time();
            $req = $db->exec("INSERT INTO `mega_carts` VALUES ($id, $userId, $productId, $quantity, '')");
        }
    }

    static function update($id, $quantity)
    {
        $db = DB::getInstance();
        $req = $db->exec("UPDATE `mega_carts` SET `quantity`='$quantity' WHERE `id` = '$id'");
    }
}
