<?php
include('header.php');
require_once('controller/registration_validation.php');
?>
<form method="post" action="" enctype="multipart/form-data" onsubmit="validate()">
    <fieldset style="width:500px">
        <legend><b>REGISTRATION</b></legend>
        <table border="0">
            <tr>
                <td>Name</td>
                <td>:
                    <input type="text" name="name" id="name" onkeyup="nameCheck()" onblur="nameCheck()">
                    <span id="msg1"> </span>
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
                    <input type="text" name="email" id="email" onkeyup="emailCheck()" onblur="emailCheck()">
                    <span id="msg2"> </span>
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
                    <input type="text" name="uname" id="uname" onkeyup="unameCheck()" onblur="unameCheck()">
                    <span id="msg3"> </span>
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
                    <input type="password" name="pass" id="pass" onkeyup="passCheck()" onblur="passCheck()">
                    <span id="msg4"> </span>
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
                    <input type="password" name="cPass" id="cPass" onkeyup="cPassCheck()" onblur="cPassCheck()">
                    <span id="msg5"> </span>
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
                        <input type="radio" name="gender" value="Male" id="gender">Male
                        <input type="radio" name="gender" value="Female" id="gender">Female
                        <input type="radio" name="gender" value="Other" id="gender">Other
                    </fieldset>
                    <span id="msg6"> </span>
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
                        <input type="tel" name="date" id="date" size="1" onkeyup="dateCheck()" onblur="dateCheck()"> /
                        <input type="tel" name="month" id="month" size="1" onkeyup="monthCheck()" onblur="monthCheck()"> /
                        <input type="tel" name="year" id="year" size="1" onkeyup="yearCheck()" onblur="yearCheck()"> <i>(dd/mm/yy)</i>
                    </fieldset>
                    <span id="msg7"> </span>
                    <span id="msg8"> </span>
                    <span id="msg9"> </span>
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
                        <input type="radio" name="dept" value="CSE" id="dept">CSE
                        <input type="radio" name="dept" value="EEE" id="dept">EEE
                        <input type="radio" name="dept" value="BBA" id="dept">BBA
                    </fieldset>
                    <span id="msg10"> </span>
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
                        <input type="radio" name="position" value="Student" id="position">Student
                        <input type="radio" name="position" value="Alumni" id="position">Alumni
                        <input type="radio" name="position" value="Teacher" id="position">Teacher
                    </fieldset>
                    <span id="msg11"> </span>
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
                    <input type="text" name="id" id="id" onkeyup="idCheck()" onblur="idCheck()">
                    <span id="msg12"> </span>
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
                    <input type="file" name="photo" id="photo"><br>
                    <span id="msg13"> </span>
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