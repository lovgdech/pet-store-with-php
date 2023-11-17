<?php
require_once('config/connection.php');

class Authentication
{
    public $id;
    public $username;
    public $email;
    public $password;

    function __construct($id, $username, $email, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    static function get_by_id($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare("SELECT  id, username, email, password, enable FROM `mega_accounts` WHERE id = :id ORDER BY id");
        $req->execute(['id' => $id]);
        $item = $req->fetch();
        if (isset($item['id']))
            $account = new Authentication($item['id'], $item['username'], $item['email'], $item['password']);

        return $account;
    }

    function insert()
    {
        $db = DB::getInstance();
        $req = $db->exec("INSERT INTO `mega_accounts` (`id`, `username`, `email`, `password`, `enable`)  
        VALUES ('$this->id', '$this->username', '$this->email','$this->password')");

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
        `username` = '$this->username', `email` = '$this->email', `password` = '$this->password'
        WHERE `id`= '$this->id';");

        return $req;
    }

    static function check_auth($email, $password)
    {
        $db = DB::getInstance();
        $req = $db->prepare("SELECT  id, username, email, password, enable FROM `mega_accounts` WHERE email = :email and password = :password");
        $req->execute(['email' => $email, 'password' => $password]);
        $item = $req->fetch();
        if (isset($item['id']) && $item['enable'] != 0) {
            $user = new Authentication($item['id'], $item['username'], $item['email'], $item['password']);
            return $user;
        }
        return $user = null;
    }
}
