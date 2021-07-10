<?php
session_start();
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
                <h2>PROFILE</h2>
            </b></legend>
        <table border="0" width="100%">
            <tr>
                <td>
                    Name : <?php echo $_SESSION['name']; ?>
                </td>
                <td rowspan=8 align="center">
                    <img src="file/MyPic.jpg" height="200px" weidth="200px" alt=""><br>
                    <a href="pictureChange.php">change picture</a>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Email : <?php echo $_SESSION['email']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Gender : <?php echo $_SESSION['gender']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Date of Birth : <?php
                                    echo $_SESSION['date'] . "/";
                                    echo $_SESSION['month'] . "/";
                                    echo $_SESSION['year'];
                                    ?>
                </td>
            </tr>

            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="editProfile.php">Edit Profile</a>
                </td>

            </tr>
        </table>
    </fieldset>
</td>
</tr>
<tr>
    <td height="390px">
        <?php
        include('footer.php');
        ?>