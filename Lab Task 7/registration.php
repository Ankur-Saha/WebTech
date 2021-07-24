<?php
include('header.php');
require_once('controller/registration_validation.php');
?>
<form method="post" action="" enctype="multipart/form-data">
    <fieldset style="width:500px">
        <legend><b>REGISTRATION</b></legend>
        <table border="0">
            <tr>
                <td>Name</td>
                <td>:
                    <input type="text" name="name" id="">
                    <span class="error">* <?php echo $nameErr; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:
                    <input type="text" name="email" id="">
                    <span class="error">* <?php echo $emailErr; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>User Name</td>
                <td>:
                    <input type="text" name="uname" id="">
                    <span class="error">* <?php echo $unameErr; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:
                    <input type="password" name="pass" id="">
                    <span class="error">* <?php echo $passErr; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td>:
                    <input type="password" name="cPass" id="">
                    <span class="error">* <?php echo $cpassErr; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="Male" id="">Male
                        <input type="radio" name="gender" value="Female" id="">Female
                        <input type="radio" name="gender" value="Other" id="">Other
                    </fieldset>
                    <span class="error">* <?php echo $genderErr; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Date Of Birth</legend>
                        <input type="tel" name="date" id="" size="1"> /
                        <input type="tel" name="month" id="" size="1"> /
                        <input type="tel" name="year" id="" size="1"> <i>(dd/mm/yy)</i>
                    </fieldset>
                    <span class="error">* <?php echo $ddErr; ?></span>
                    <span class="error">* <?php echo $mmErr; ?></span>
                    <span class="error">* <?php echo $yyyyErr; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Department</legend>
                        <input type="radio" name="dept" value="CSE" id="">CSE
                        <input type="radio" name="dept" value="EEE" id="">EEE
                        <input type="radio" name="dept" value="BBA" id="">BBA
                    </fieldset>
                    <span class="error">* <?php echo $deptErr; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Position</legend>
                        <input type="radio" name="position" value="Student" id="">Student
                        <input type="radio" name="position" value="Alumni" id="">Alumni
                        <input type="radio" name="position" value="Teacher" id="">Teacher
                    </fieldset>
                    <span class="error">* <?php echo $positionErr; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>ID</td>
                <td>:
                    <input type="text" name="id" id="">
                    <span class="error">* <?php echo $idErr; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Profile Picture</td>
                <td>:
                    <input type="file" name="photo" id=""><br>
                    <span class="error">* <?php echo $photoErr; ?></span>
                </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="reset">
                </td>
            </tr>
        </table>
    </fieldset>
</form>

<?php
include('footer.php');
?>