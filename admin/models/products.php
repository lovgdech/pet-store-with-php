<?php
require_once('config/connectDb.php');

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

    function __construct(
        $id,
        $productId,
        $productGroupId,
        $name,
        $title,
        $description,
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
        $this->price = $price;
        $this->quanlity = $quanlity;
        $this->note = $note;
        $this->enable = $enable;
    }

    static function get_all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM `mega_products` ORDER BY id");

        foreach ($req->fetchAll() as $item) {
            $list[] = new Product($item['id'], $item['product_id'], $item['product_group_id'], $item['name'], $item['title'], $item['description'], $item['price'], $item['quanlity'], $item['note'], $item['enable']);
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
            $product = new Product($item['id'], $item['product_id'], $item['product_group_id'], $item['name'], $item['title'], $item['description'], $item['price'], $item['quanlity'], $item['note'], $item['enable']);

        return $product;
    }

    function insert()
    {
        $db = DB::getInstance();
        $req = $db->exec("INSERT INTO `mega_products`(`id`, `product_id`, `product_group_id`, `name`, `title`, `description`, `price`, `quanlity`, `enable`, `note`) VALUES ('$this->id','$this->productId','$this->productGroupId','$this->name','$this->title','$this->description','$this->price','$this->quanlity','$this->enable','$this->note')");

        return $req;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->exec("DELETE FROM `mega_products` WHERE id = '$id'");

        return $req;
    }

    function update()
    {
        $db = DB::getInstance();
        $req = $db->exec("UPDATE `mega_products` SET `product_id`='$this->productId',`product_group_id`='$this->productGroupId',`name`='$this->name',`title`='$this->title',`description`='$this->description',`price`='$this->price',`quanlity`='$this->quanlity',`enable`='$this->enable',`note`='$this->note' WHERE `id`='$this->id'");

        return $req;
    }
}
