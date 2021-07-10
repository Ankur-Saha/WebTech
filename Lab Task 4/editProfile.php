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
                <h2>EDIT PROFILE</h2>
            </b></legend>
        <form method="post" action="">
            <table border="0" width="100%">
                <tr>
                    <td>Name</td>
                    <td>: <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <input type="email" name="email" id="" value="<?php echo $_SESSION['email']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>:
                        <?php
                        if (!empty($_SESSION['gender'])) {
                            if ($_SESSION['gender'] == "Male") { ?>
                                <input type="radio" name="gender" value="Male" id="" checked>Male
                                <input type="radio" name="gender" value="Female" id="">Female
                                <input type="radio" name="gender" value="Other" id="">Other
                            <?php
                            } else if ($_SESSION['gender'] == "Female") { ?>
                                <input type="radio" name="gender" value="Male" id="">Male
                                <input type="radio" name="gender" value="Female" id="" checked>Female
                                <input type="radio" name="gender" value="Other" id="">Other

                            <?php
                            } else { ?>
                                <input type="radio" name="gender" value="Male" id="">Male
                                <input type="radio" name="gender" value="Female" id="">Female
                                <input type="radio" name="gender" value="Other" id="" checked>Other
                        <?php }
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of Birth
                    </td>
                    <td>
                        <input type="tel" name="date" id="" value="<?php echo $_SESSION['date']; ?>" size="1"> /
                        <input type="tel" name="month" id="" value="<?php echo $_SESSION['month']; ?>" size="1"> /
                        <input type="tel" name="year" id="" value="<?php echo $_SESSION['year']; ?>" size="1"><i> (dd/mm/yy)</i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
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