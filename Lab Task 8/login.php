<?php
include('header.php');
require_once('controller/login_validation.php');
?>

<form method="post" action="">
    <fieldset style="width:400px">
        <legend><b>LOG IN</b></legend>
        <table>
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="uname" id="luname" value="<?php if (isset($_COOKIE["user"])) {
                                                                echo $_COOKIE["user"];
                                                            } ?>" onkeyup="logUnameCheck()" onblur="logUnameCheck()">
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" id="lpass" value="<?php if (isset($_COOKIE["pass"])) {
                                                                    echo $_COOKIE["pass"];
                                                                } ?>"onkeyup="logPassCheck()" onblur="logPassCheck()">
                </td>
            </tr>
            <tr>
                <td>
                <span id="msg13"> </span>
                </td>
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
                    <br>
                    <input type="submit" name="submit" value="Log In">
                    <a href="forgotpass.php"> Forgot Password?</a>
                </td>
            </tr>
        </table>
    </fieldset>
</form>

<?php
include('footer.php');
?>