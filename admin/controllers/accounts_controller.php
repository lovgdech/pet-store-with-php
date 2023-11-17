<?php

require_once 'base_controller.php';
require_once 'models/accounts.php';

class AccountsController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'accounts';
    }

    public function index()
    {
        $accounts = Account::get_all();

        $data = array('accounts' => $accounts);
        $this->render('index', $data);
    }

    public function add_account()
    {
        $this->render('account_ins');
    }

    public function add_account_submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = time();
            $username = $_POST['username'] ? $_POST['username'] : '';
            $email = $_POST['email'] ? $_POST['email'] : '';
            $password = $_POST['password'] ? $_POST['password'] : '';
            $enable = isset($_POST['enable']) ? $_POST['enable'] : 0;

            $newAccount = new Account($id, $username, $email, $password, $enable);

            $result = $newAccount->insert();

            return $this->index();
        }
    }

    public function edit_account()
    {
        if ($_GET['id']) {
            $id = $_GET['id'];
            $account = Account::get_by_id($id);

            $data = array('account' => $account);
            return $this->render('account_edit', $data);
        }

        $this->index();
    }

    public function edit_account_submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ? $_POST['id'] : '';
            $username = $_POST['username'] ? $_POST['username'] : '';
            $email = $_POST['email'] ? $_POST['email'] : '';
            $password = $_POST['password'] ? $_POST['password'] : '';
            $enable = isset($_POST['enable']) ? $_POST['enable'] : 0;

            $oldAccount = new Account($id, $username, $email, $password, $enable);
            $result = $oldAccount->update();

            $this->index();
        }
    }

    public function delete_account()
    {
        $id = $_GET['id'] ? $_GET['id'] : null;
        $result = Account::delete($id);

        $this->index();
    }
}
