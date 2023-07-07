<?php
include 'models/userModel.php';

class userController extends controller
{
    public $model;

    public function __construct()
    {
        $this->model = new userModel();
    }

    public function guest()
    {
        if (!isset($_SESSION["login"])) {
            header("location: ?page=");
            exit;
        }
    }

    public function isLogin_session()
    {
        if (isset($_SESSION["login"]) && $_SESSION["login"] === true) {
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'Admin') {
                header("location: ?page=" . HOME_URL);
            } elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'User') {
                header("location: ?page=" . HOME_URL . "&sub=" . DIAGNOSA_URL);
            }
        }
    }

    public function login_view()
    {
        $this->isLogin_session();
        include "./views/pages/auth/login.php";
    }

    public function register_view()
    {
        $this->isLogin_session();
        include "views/pages/auth/register.php";
    }

    function validate_username($username)
    {
        if (empty(trim($username))) {
            $this->sweetalert('error', 'Username required!', 'Please enter your username');
            return false;
        } elseif (strlen($username) < 5) {
            $this->sweetalert('error', 'Invalid username!', 'Username must be at least 5 characters');
            return false;
        } else {
            return true;
        }
    }

    function validate_password($password)
    {
        if (empty(trim($password))) {
            $this->sweetalert('error', 'Password required!', 'Please enter your password');
            return false;
        } elseif (strlen($password) < 8) {
            $this->sweetalert('error', 'Invalid password!', 'Password must be at least 8 characters');
            return false;
        } elseif (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[A-Za-z\d]{8,}/", $password)) {
            $this->sweetalert('error', 'Invalid password!', 'Password must be a combination of letters, digits, and at least one uppercase and lowercase letter');
            return false;
        } else {
            return true;
        }
    }

    function validate_confirm_password($password, $confirm_password)
    {
        if (empty(trim($confirm_password))) {
            $this->sweetalert('error', 'Password Confirmation required!', 'Please enter your password confirmation');
            return false;
        } elseif ($confirm_password !== $password) {
            $this->sweetalert('error', 'Password Confirmation error!', 'Password confirmation must match password');
            return false;
        } else {
            return true;
        }
    }

    function do_register()
    {
        $username = @$_POST['username'];
        $password = @$_POST['password'];
        $confirm_password = @$_POST['confirm_password'];

        if ($this->validate_username($username) && $this->validate_password($password) && $this->validate_confirm_password($password, $confirm_password)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_data = $this->model->insert($username, $hashed_password);
            if ($insert_data) {
                echo "<script type='text/javascript'>
						Swal.fire({
						icon: 'success',
						title: 'Registration Success',
						text: 'Account has been created!'
						}).then(function() {
							location.href = '?page=';
						});
					</script>";
            } else {
                $this->sweetalert('error', 'Registration Failed!', 'account failed to create!');
            }
        }
    }

    function do_login()
    {
        $username = @$_POST['username'];
        $password = @$_POST['password'];
        if ($this->validate_username($username) && $this->validate_password($password)) {
            $user = $this->model->select($username);
            $cek = $this->model->numRow($user);

            if ($cek === 1) {
                $data = $this->model->fetch($user);
                if (password_verify($password, $data['password'])) {
                    $_SESSION["login"] = true;
                    $_SESSION['user_id'] = $data['id'];
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['role'] = $data['role'];
                    if ($data['role'] == 'Admin') {
                        header("location: ?page=" . HOME_URL);
                    } elseif ($data['role'] == 'User') {
                        header("location: ?page=" . HOME_URL . "&sub=" . DIAGNOSA_URL);
                    }
                } else {
                    $this->sweetalert('error', 'Login Failed!', 'Username or password is incorrect!');
                }
            } else {
                $this->sweetalert('error', 'Login Failed!', 'Username not found!');
            }
        }
    }

    function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("location: ?page=");
        exit;
    }
}
