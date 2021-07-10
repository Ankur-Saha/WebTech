<?php
session_start();

if (isset($_POST['submit'])) {
    if (move_uploaded_file($_FILES['img']['tmp_name'], 'file/' . $_FILES['img']['name'])) {
        echo "Uploaded succussfully";
    } else {
        echo "failed";
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
                <h2>PROFILE PICTURE</h2>
            </b></legend>
        <form action="" method="post" enctype="multipart/form-data">
            <img src="file/user.png" height="250px" width="250px" alt=""><br>
            <input type="file" name="img"><br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </form>

    </fieldset>
</td>
</tr>
<tr>
    <td height="390px">
        <?php
        include('footer.php');
        ?>