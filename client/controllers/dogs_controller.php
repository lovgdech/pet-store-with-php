<?php
require_once 'base_controller.php';

class DogsController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'dogs';
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
