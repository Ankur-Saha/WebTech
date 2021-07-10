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
}
?>

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
    <li><a href="all.php">View All Profiles</a></li>
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
        <?php
        include('footer.php');
        ?>