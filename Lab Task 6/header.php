<?php
if (empty($_SESSION['flag'])) {
?>

    <!DOCTYPE html>
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
        <table border="0" width="100%">
            <tr>
                <td><img src="file/logo1.png" alt=""></td>
                <td width="285px"> </td>
                <td align="right"><a href="home.php">Home</a> | <a href="login.php">Login | <a href="registration.php">Registration</a></a></td>
            </tr>
            <tr>
                <td colspan="3" height="600px" align="center">

                <?php
            } else {
                ?>

                    <!DOCTYPE html>
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
                                <td><img src="file/logo1.png" alt=""></td>
                                <td width="600px"> </td>
                                <td align="center">Logged in as <a href="profile.php"><?php echo $_SESSION['uname'] ?></a> | <a href="logout.php">Logout</a></td>
                            </tr>
                            <tr>
                                <td>
                                <?php
                            }
                                ?>