<?php
require_once('model/model.php');
$cpassErr = $npassErr = $rpassErr = "";
$cpass = $npass = $rpass = "";

if (isset($_POST['submit'])) {
    if (empty($_POST["cpass"])) {
        $cpassErr = "Current Password is required";
    } else {
        if ($_POST["cpass"] != $_SESSION['pass']) {
            $cpassErr = "Current password do not match";
        } else {
            if (empty($_POST["npass"])) {
                $npassErr = "Enter new password";
            } else if ($_POST["npass"] == $_POST["cpass"]) {
                $npassErr = "Password can not be same as previous password";
                $npass = "";
            } else {
                if (empty($_POST["rpass"])) {
                    $rpassErr = "Retype new password";
                    $npass = "";
                } else if ($_POST["rpass"] != $_POST["npass"]) {
                    $rpassErr = "Password does not match with new password";
                    $npass = "";
                    $rpass = "";
                }
                else{
                    $data['pass'] = $_POST['npass'];
                    $data ['id'] = $_SESSION['id'];
                }
            }
        }
        if ($cpassErr == "" && $npassErr == "" && $rpassErr == "") {
            if (updatePass($data) == true)
            {
                echo "PASSWORD UPDATED";
            }
        }
    }
}
