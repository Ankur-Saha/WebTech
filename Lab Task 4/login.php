<?php

session_start();
$cookie_name = $cookie_pass = "";
if (isset($_POST['submit'])) {

    $inp = file_get_contents('user.json');
    $temp = json_decode($inp, true);

    if (!empty($_COOKIE["$cookie_name"])) {
        echo "$_COOKIE[$cookie_name]";
    }

    if (empty($_POST['uname']) || empty($_POST['pass'])) {
        echo "field cannot be empty";
    } else {
        $f = 0;
        foreach ($temp as $key1 => $value1) {
            if ($temp[$key1]["username"] == $_POST['uname'] and $temp[$key1]["password"] == $_POST['pass']) {
                $f = 1;
                $_SESSION['name'] = $temp[$key1]["name"];
                $_SESSION['email'] = $temp[$key1]["email"];
                $_SESSION['gender'] = $temp[$key1]["gender"];
                $_SESSION['date'] = $temp[$key1]["date"];
                $_SESSION['month'] = $temp[$key1]["month"];
                $_SESSION['year'] = $temp[$key1]["year"];
                $_SESSION['pass'] = $temp[$key1]["password"];
            }
        }
        if ($f == 1) {
            $_SESSION['flag'] = true;
            $uname = $_POST['uname'];
            $_SESSION['uname'] = $uname;
            if (!empty($_POST['remember'])) {
                setcookie("user", $_POST['uname'], time() + 10);
                setcookie("pass", $_POST['pass'], time() + 10);
            }
            header('location: dashboard.php');
        } else {
            echo "invaild user";
        }
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
    <title>Login</title>
</head>

<body>
    <table border="0" width="100%">
        <tr>
            <td width="550px"><img src="file/logo.png" alt=""></td>
            <td width="450px"> </td>
            <td align="center"><a href="home.php">Home</a> | <a href="login.php">Login | <a href="registration.php">Registration</a></a></td>
        </tr>
        <tr>
            <td></td>
            <td height="600px" align="center"> -->
<form method="post" action="">
    <fieldset style="width:400px">
        <legend><b>LOG IN</b></legend>
        <table>
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="uname" value="<?php if (isset($_COOKIE["user"])) {
                                                                echo $_COOKIE["user"];
                                                            } ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="pass" value="<?php if (isset($_COOKIE["pass"])) {
                                                                echo $_COOKIE["pass"];
                                                            } ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="remember" id="">Remember me
                </td>
            </tr>
            <tr>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <a href="forgotpass.php"> Forgot Password?</a>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
<!-- </td>
            <td></td>
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