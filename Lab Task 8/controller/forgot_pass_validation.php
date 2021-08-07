<?php
require_once 'model/model.php';
$idErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) {
        if (empty($_POST['id'])) {
            $idErr = "Enter your email";
        } else {
            $data['id'] = $_POST['id'];
            $result = searchPass($data);
            if (!empty($result)) {
                if ($_POST['id'] == $result[0]['ID']) {
                    echo "YOUR PASSWORD IS " . $result[0]['Password'];
                }
            } else {
                echo "USER NOT FOUND";
            }
        }
    }
}
