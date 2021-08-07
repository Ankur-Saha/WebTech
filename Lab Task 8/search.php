<?php
session_start();
include('header.php');
require_once('controller/search_validation.php');
if (isset($_SESSION['flag'])) {
?>
    <b>
        <h2>&nbsp;&nbsp;Account</h2>
    </b>
    <hr>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="profile.php">View Profile</a></li>
        <li><a href="editProfile.php">Edit Profile</a></li>
        <li><a href="changePass.php">Change Password</a></li>
        <li><a href="all.php">View All Profiles</a></li>
        <li><a href="search.php">Search an User</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    </td>
    <td colspan="2" rowspan="2">
        <fieldset>
            <legend><b>
                    <h2>SEARCH</h2>
                </b></legend>
            <form method="post" action="" enctype="multipart/form-data">
                <table border="0" width="100%">
                    <tr>
                        <td>ID</td>

                        <td>: <input value="" type="text" id="" name="id">
                            <span class="error">* <?php echo $idErr; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <Td><br></Td>
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
        <?php
    } else {
        header('location: login.php');
    }
        ?>