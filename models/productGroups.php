<?php
require_once('config/connection.php');

class ProductGroup
{
    public $id;
    public $productGroupId;
    public $name;
    public $note;

    function __construct(
        $id,
        $productGroupId,
        $name,
        $note,
    ) {
        $this->id = $id;
        $this->productGroupId = $productGroupId;
        $this->name = $name;
        $this->note = $note;
    }

    static function get_all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM `mega_product_groups` ORDER BY id");

        foreach ($req->fetchAll() as $item) {
            $list[] = new ProductGroup($item['id'], $item['product_group_id'], $item['name'], $item['note']);
        }

        return $list;
    }

    static function get_by_id($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare("SELECT  * FROM `mega_product_groups` WHERE id = :id ORDER BY id");
        $req->execute(['id' => $id]);
        $item = $req->fetch();
        if (isset($item['id']))
            $productGroup = new ProductGroup($item['id'], $item['product_group_id'], $item['name'], $item['note']);

        return $productGroup;
    }

    function insert()
    {
        $db = DB::getInstance();
        $req = $db->exec("INSERT INTO `mega_product_groups`(`id`, `product_group_id`, `name`, `note`) VALUES ('$this->id','$this->productGroupId','$this->name','$this->note')");

        return $req;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->exec("DELETE FROM `mega_product_groups` WHERE id = '$id'");

        return $req;
    }

    function update()
    {
        $db = DB::getInstance();
        $req = $db->exec("UPDATE `mega_product_groups` SET `product_group_id`='$this->productGroupId',`name`='$this->name',`note`='$this->note' WHERE `id`='$this->id'");

        return $req;
    }
}
