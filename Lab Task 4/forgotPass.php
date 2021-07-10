<?php
session_start();

if (isset($_POST['submit'])) {
    $inp = file_get_contents('user.json');
    $temp = json_decode($inp, true);
    if (empty($_POST['email'])) {
        echo "email field cnnot be empty";
    } else {
        $f = 0;
        foreach ($temp as $key1 => $value1) {
            if ($temp[$key1]["email"] == $_POST['email']) {
                $f = 1;
            }
        }
        if ($f == 1) {
            echo "A CODE HAS BEEN SENT TO YOUR EMAIL";
        } else {
            echo "MAIL NOT REGISTERED";
        }
    }
}
?>


<?php include('header.php') ?>
<form method="post" action="">
    <fieldset style="width:280px">
        <legend><b>FORGOT PASSWORD</b></legend>
        <table>
            <tr>
                <td>Enter Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</td>
<td></td>
</tr>
<tr>
    <?php include('footer.php') ?>