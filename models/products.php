<?php
require_once('config/connection.php');

class Product
{
    public $id;
    public $productId;
    public $productGroupId;
    public $name;
    public $title;
    public $description;
    public $price;
    public $quanlity;
    public $note;
    public $enable;
    public $productGroupName;
    public $image;

    function __construct(
        $id,
        $productId,
        $productGroupId,
        $name,
        $title,
        $description,
        $image,
        $price,
        $quanlity,
        $note,
        $enable
    ) {
        $this->id = $id;
        $this->productId = $productId;
        $this->productGroupId = $productGroupId;
        $this->name = $name;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
        $this->quanlity = $quanlity;
        $this->note = $note;
        $this->enable = $enable;
    }

    static function get_all($mode)
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM `mega_products` ORDER BY id");
        if ($mode == 1) {
            $req = $db->query("SELECT * FROM `mega_products` WHERE product_group_id = 'pg_001' ORDER BY id");
        }

        if ($mode == 2) {
            $req = $db->query("SELECT * FROM `mega_products` WHERE product_group_id = 'pg_002' ORDER BY id");
        }

        foreach ($req->fetchAll() as $item) {
            $list[] = new Product($item['id'], $item['product_id'], $item['product_group_id'], $item['name'], $item['title'], $item['description'], $item['image'], $item['price'], $item['quanlity'], $item['note'], $item['enable']);
        }

        return $list;
    }

    static function get_by_id($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare("SELECT  * FROM `mega_products` WHERE id = :id ORDER BY id");
        $req->execute(['id' => $id]);
        $item = $req->fetch();
        if (isset($item['id']))
            $product = new Product($item['id'], $item['product_id'], $item['product_group_id'], $item['name'], $item['title'], $item['description'], $item['image'], $item['price'], $item['quanlity'], $item['note'], $item['enable']);

        return $product;
    }
}