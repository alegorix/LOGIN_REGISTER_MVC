<?php
require_once '../app/config.php';
$auth = new AuthController();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_GET['action'] == 'register') {
        $auth->register($_POST['username'], $_POST['password']);
    } elseif ($_GET['action'] == 'login') {
        $auth->login($_POST['username'], $_POST['password']);
    }
}
?>
