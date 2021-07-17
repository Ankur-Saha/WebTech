<?php
include('header.php');
require_once('controller/forgot_pass_validation.php');
?>
    <form method="post" action="">
        <fieldset style="width:280px">
            <legend><b>FORGOT PASSWORD</b></legend>
            <table>
                <tr>
                    <td>Enter ID:</td>
                    <td><input type="text" name="id">
                        <span class="error">* <?php echo $idErr; ?></span>
                    </td>
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