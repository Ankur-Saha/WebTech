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


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home --Welcome--</title>
</head>

<body>
    <table border="1" width="100%">
        <tr>
            <td><img src="file/logo.png" alt=""></td>
            <td width="600px"> </td>
            <td align="center">Logged in as <a href=""><?php echo $_SESSION['uname']; ?></a> | <a href="logout.php">Logout</a></td>
        </tr>
        <tr>
            <td>-->
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