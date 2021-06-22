<?php
session_start();
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
            }
        }
        if ($cpassErr == "" && $npassErr == "" && $rpassErr == "") {
            echo "PASSWORD CHANGED SUCESSFULLY";
        }
    }



    /*if (empty($_POST['pass']) || empty($_POST['nPass']) || empty($_POST['repass'])) {
        echo "Enter Passwords";
    } else {
        if ($_SESSION['pass'] != $_POST['pass']) {
            $cpassErr = "Please enter valid password";
        } else if ($_POST['pass'] == $_POST['nPass']) {
            echo "new password cannot be same as old password <br>";
            echo "try a new one ! <br>";
        } else if ($_POST['nPass'] != $_POST['repass']) {
            echo "password and confirm password doesn't match <br>";
        } else {
            echo "password changed successfully <br>";
            $_SESSION['pass'] = $_POST['nPass'];
        }
    }*/
}
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home --Welcome--</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <table border="1" width="100%">
        <tr>
            <td><img src="file/logo.png" alt=""></td>
            <td width="600px"> </td>
            <td align="center">Logged in as <a href=""><?php echo $_SESSION['name']; ?></a> | <a href="logout.php">Logout</a></td>
        </tr>
        <tr>
            <td> -->
<?php
include('header.php');
?>
<b>
    <h2>&nbsp;&nbsp;Account</h2>
</b>
<hr>
<ul>
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="profile.php">View Profile</a></li>
    <li><a href="editProfile.php">Edit Profile</a></li>
    <li><a href="pictureChange.php">Change Profile Picture</a></li>
    <li><a href="changePass.php">Change Password</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
</td>
<td colspan="2" rowspan="2">
    <fieldset>
        <legend><b>
                <h2>CHANGE PASSWORD</h2>
            </b></legend>
        <form action="" method="post">
            <table width=40%>
                <tr>
                    <td>Current Password</td>
                    <td>: <input type="text" name="cpass" id=""></td>
                    <span class="error"><?php echo $cpassErr; ?></span>
                </tr>
                <tr>
                    <td><label for="" style="color: green;">New Password</label></td>
                    <td>: <input type="text" name="npass" id=""></td>
                    <span class="error"><?php echo $npassErr; ?></span>
                </tr>
                <tr>
                    <td><label for="" style="color: red;">Retype New Password</label></td>
                    <td>: <input type="text" name="rpass" id=""></td>
                    <span class="error"><?php echo $rpassErr; ?></span>
                </tr>
                <tr>
                    <td colspan='2'>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>

    </fieldset>
</td>
</tr>
<tr>
    <td height="390px">
        <!-- </td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright &COPY 2021</td>
        </tr>
    </table>
</body>

</html> -->
        <?php
        include('footer.php');
        ?>