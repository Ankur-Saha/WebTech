<?php
require_once 'model/model.php';
$idErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) {
        if (empty($_POST['id'])) {
            $idErr = "Enter an ID number";
        } else {
            $data['id'] = $_POST['id'];
            $result = searchUser($data);
            if (!empty($result)) {
                if ($_POST['id'] == $result[0]['ID']) {
                    $_SESSION['sname'] = $result[0]['Name'];
                    $_SESSION['semail'] = $result[0]['Email'];
                    $_SESSION['suname'] = $result[0]['Username'];
                    $_SESSION['spass'] = $result[0]['Password'];
                    $_SESSION['sgender'] = $result[0]['Gender'];
                    $_SESSION['sdate'] = $result[0]['Birth_date'];
                    $_SESSION['smonth'] = $result[0]['Birth_month'];
                    $_SESSION['syear'] = $result[0]['Birth_year'];
                    $_SESSION['sposition'] = $result[0]['User_type'];
                    $_SESSION['sdept'] = $result[0]['Dept'];
                    $_SESSION['sid'] = $result[0]['ID'];
                    $_SESSION['sphoto'] = $result[0]['Photo'];
                    header("Location:searchProfile.php");
                }
            } else {
                echo "USER NOT FOUND";
            }
        }
    }
}
