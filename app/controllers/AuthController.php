<?php
class AuthController {
    private $userModel;
    public function __construct() {
        $this->userModel = new User();
    }
    public function register($username, $password) {
        return $this->userModel->register($username, $password);
    }
    public function login($username, $password) {
        $user = $this->userModel->login($username, $password);
        if ($user) {
            $_SESSION['user'] = $user;
            header("Location: dashboard.php");
        } else {
            echo "Identifiants incorrects.";
        }
    }
}
?>
