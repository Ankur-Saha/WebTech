<?php
require_once 'model/model.php';
$nameErr = $emailErr = $genderErr = $ddErr = $mmErr = $yyyyErr = $dobErr = $unameErr = $passErr = $cpassErr = $deptErr = $positionErr = $idErr = "";

if (isset($_POST['change'])) {
    $data['name'] = $_POST['ename'];
    $data['email'] = $_POST['eemail'];
    $data['gender'] = $_POST['egender'];
    $data['date'] = $_POST['edate'];
    $data['month'] = $_POST['emonth'];
    $data['year'] = $_POST['eyear'];
    $data['id'] = $_SESSION['id'];
    $data['dept'] = $_POST['edept'];
    $data['position'] = $_POST['eposition'];
    if (!empty($_FILES["photo"]["name"])) {
        $data['photo'] = basename($_FILES["photo"]["name"]);
    } else {
        $data['photo'] = $_SESSION['photo'];
    }



    $target_dir = 'uploads/';
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


    // print_r($data);

    // if (updateUser($data) == true)
    // {
    //     echo "SUCCESS";
    //     $_SESSION['name'] = $data['name'];
    //     $_SESSION['email'] = $data['email'];
    //     $_SESSION['gender'] = $data['gender'];
    //     $_SESSION['date'] = $data ['date'];
    //     $_SESSION['month'] = $data ['month'];
    //     $_SESSION['year'] = $data ['year'];
    //     header('location: profile.php');
    // }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($data['name'])) {
            $nameErr = "Name is required.";
        } else {
            if (!preg_match("/^[a-zA-Z-' ]*$/", $data['name'])) {
                $nameErr = "Only letters and white space allowed";
                $data['name'] = "";
            } else {
                if (str_word_count($data['name']) < 2) {
                    $nameErr = "Name must contain atleast 2 words";
                }
            }
        }
        if (empty($data['email'])) {
            $emailErr = "Email is required";
        } else {
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Not a valid email. e.g anything@email.com";
                $data['email'] = "";
            }
        }

        if (empty($data['date'])) {
            $ddErr = "Date is required";
        } else {
            if ($data['date'] < 1  || $data['date'] > 31) {
                $ddErr = "Enter a valid date";
            }
        }

        if (empty($data['month'])) {
            $mmErr = "Month is required";
        } else {
            if ($data['month'] < 1  || $data['month'] > 12) {
                $mmErr = "Enter a valid month";
            }
        }

        if (empty($data['year'])) {
            $yyyyErr = "Year is required";
        } else {
            if ($data['year'] < 1901  || $data['year'] > 2000) {
                $yyyyErr = "Enter a valid year";
            }
        }


        if (
            $nameErr == "" && $emailErr == "" && $genderErr == "" && $ddErr == "" &&
            $mmErr == "" && $yyyyErr == ""
        ) {
            if (updateUser($data) == true) {
                $_SESSION['name'] = $data['name'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['gender'] = $data['gender'];
                $_SESSION['date'] = $data['date'];
                $_SESSION['month'] = $data['month'];
                $_SESSION['year'] = $data['year'];
                $_SESSION['dept'] = $data['dept'];
                $_SESSION['position'] = $data['position'];
                $_SESSION['photo'] = $data['photo'];

                header('location: profile.php');
            }
        }
    }
}
