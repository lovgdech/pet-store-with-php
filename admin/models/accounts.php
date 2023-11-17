<?php
require_once('config/connectDb.php');

class Account
{
    public $id;
    public $username;
    public $email;
    public $password;
    public $enable;

    function __construct($id, $username, $email, $password, $enable)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->enable = $enable;
    }

    static function get_all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query("SELECT  id, username, email, password, enable FROM `mega_accounts` ORDER BY id");

        foreach ($req->fetchAll() as $item) {
            $list[] = new Account($item['id'], $item['username'], $item['email'], $item['password'], $item['enable']);
        }

        return $list;
    }

    static function get_by_id($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare("SELECT  id, username, email, password, enable FROM `mega_accounts` WHERE id = :id ORDER BY id");
        $req->execute(['id' => $id]);
        $item = $req->fetch();
        if (isset($item['id']))
            $account = new Account($item['id'], $item['username'], $item['email'], $item['password'], $item['enable']);

        return $account;
    }

    function insert()
    {
        $db = DB::getInstance();
        $req = $db->exec("INSERT INTO `mega_accounts` (`id`, `username`, `email`, `password`, `enable`)  
        VALUES ('$this->id', '$this->username', '$this->email','$this->password','$this->enable')");

        return $req;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->exec("DELETE FROM `mega_accounts` WHERE id = '$id'");

        return $req;
    }

    function update()
    {
        $db = DB::getInstance();
        $req = $db->exec("UPDATE `mega_accounts` SET 
        `username` = '$this->username', `email` = '$this->email', `password` = '$this->password', `enable` = '$this->enable'
        WHERE `id`= '$this->id';");

        return $req;
    }
}
