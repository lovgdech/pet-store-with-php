<?php

require_once 'base_controller.php';

class CatsController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'cats';
    }

    public function index()
    {
        $this->render('index');
    }

    public function details()
    {
        $this->render('details');
    }
}
