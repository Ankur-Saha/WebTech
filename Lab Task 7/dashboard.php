<?php
session_start();
if (isset($_SESSION['flag'])) {

?>

    <?php
    include('header.php');
    ?>
    <head>
        <link rel="stylesheet" href="css/dashboard.css">
    </head>

    <b>
        <h2> &nbsp;&nbsp;Account</h2>
    </b>
    <hr>
        <div class="left-nav">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">View Profile</a></li>
                <li><a href="editProfile.php">Edit Profile</a></li>
                <li><a href="changePass.php">Change Password</a></li>
                <li><a href="all.php">View All Profiles</a></li>
                <li><a href="search.php">Search an User</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </td>
        <div class="background">
            <td colspan="2" rowspan="2"><b>
                <h1 style="text-align: center">Welcome <?php echo $_SESSION['uname'] ?></h1>
            </b>
            </td>
        </div>
    </tr>
    <tr>
    <td>
                <?php
                include('footer.php');
                ?>
    </td>
        <?php
    } else {
        header('location: login.php');
    }
        ?>