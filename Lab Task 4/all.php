<?php
session_start();
if (isset($_SESSION['flag'])) {

?>


    <?php
    include('header.php');
    ?>

    <b>
        <h2> &nbsp;&nbsp;Account</h2>
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
                    <h2>ALL PROFILES</h2>
                </b></legend>
            <table border="0" width="100%">
                <tr>
                    <td>
                        <?php
                        $inp = file_get_contents('user.json');
                        $temp = json_decode($inp, true);

                        foreach ($temp as $key1 => $value1) {
                        ?>
                            <br>Name : <?php echo $temp[$key1]['name']; ?>
                            <br>Email : <?php echo $temp[$key1]['email']; ?>
                            <br>Gender : <?php echo $temp[$key1]['gender']; ?>
                            <br>Date of Birth : <?php echo $temp[$key1]['date'] . "/";
                                                echo $temp[$key1]['month'] . "/";
                                                echo $temp[$key1]['year']; ?>
                            <br><?php
                            } ?>
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

        <?php
    } else {
        header('location: login.php');
    }
        ?>