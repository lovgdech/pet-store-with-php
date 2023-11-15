<?php

class DB
{
    private static $instance = null;

    public function getInstance()
    {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=localhost;dbname=pet-store', 'root', '');
                self::$instance->exec("SET NAMES 'urf8'");
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }

        return self::$instance;
    }
}
