<?php
session_start();
require_once('controller/search_validation.php');
include('header.php');
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
                    <h2>SEARCHED PROFILE</h2>
                </b></legend>
            <table border="0" width="100%">
                <tr>
                    <td>
                        Name : <?php echo $_SESSION['sname']; ?>
                    </td>
                    <td rowspan=8 align="center">
                        <img src="uploads/<?php echo $_SESSION['sphoto'] ?>" height="200px" weidth="200px" alt=""><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email : <?php echo $_SESSION['semail']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender : <?php echo $_SESSION['sgender']; ?>
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
                                        echo $_SESSION['sdate'] . "/";
                                        echo $_SESSION['smonth'] . "/";
                                        echo $_SESSION['syear'];
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
                        Department : <?php echo $_SESSION['sdept']; ?>
                <tr>
                    <td><br></td>
                </tr>
    </td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td>
            Position : <?php echo $_SESSION['sposition']; ?>
        </td>
    </tr>
    <tr>
        <td><br></td>
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
        <?php
    } else {
        header('location: login.php');
    }
        ?>