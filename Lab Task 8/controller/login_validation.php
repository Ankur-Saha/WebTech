<?php
session_start();
require_once 'model/model.php';
$cookie_name = $cookie_pass = "";
if (isset($_POST['submit'])) {
    if (empty($_POST['uname']) || empty($_POST['pass'])) {
        echo "PLEASE ENTER YOUR NAME & PASSWORD";
    } else {
        $data['uname'] = $_POST['uname'];
        $data['pass'] = $_POST['pass'];

        $f = 0;

        $result = login($data);
        if (!empty($result)) {
            if ($_POST['uname'] == $result[0]['Username'] && $_POST['pass'] == $result[0]['Password']) {
                $f = 1;
                $_SESSION['name'] = $result[0]['Name'];
                $_SESSION['email'] = $result[0]['Email'];
                $_SESSION['uname'] = $result[0]['Username'];
                $_SESSION['pass'] = $result[0]['Password'];
                $_SESSION['gender'] = $result[0]['Gender'];
                $_SESSION['date'] = $result[0]['Birth_date'];
                $_SESSION['month'] = $result[0]['Birth_month'];
                $_SESSION['year'] = $result[0]['Birth_year'];
                $_SESSION['position'] = $result[0]['User_type'];
                $_SESSION['dept'] = $result[0]['Dept'];
                $_SESSION['id'] = $result[0]['ID'];
                $_SESSION['photo'] = $result[0]['Photo'];
            }
            if ($f = 1) {
                $_SESSION['flag'] = true;
                if (!empty($_POST['remember'])) {
                    setcookie("user", $_POST['uname'], time() + 20);
                    setcookie("pass", $_POST['pass'], time() + 20);
                }
                header('location: dashboard.php');
            }
        } else {
            echo "INVALID USER";
        }
    }
}
