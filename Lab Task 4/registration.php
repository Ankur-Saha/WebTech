<?php
session_start();
$nameErr = $emailErr = $genderErr = $ddErr = $mmErr = $yyyyErr = $dobErr = $unameErr = $passErr = $cpassErr = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $cPass = $_POST['cPass'];
    if (!isset($_POST['gender'])) {
    } else {
        $gender = $_POST['gender'];
    }

    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($name)) {
            $nameErr = "Name is required.";
        } else {
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
                $name = "";
            } else {
                if (str_word_count($name) < 2) {
                    $nameErr = "Name must contain atleast 2 words";
                }
            }
        }
        if (empty($email)) {
            $emailErr = "Email is required";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Not a valid email. e.g anything@email.com";
                $email = "";
            }
        }
        if (empty($uname)) {
            $unameErr = "User Name is required";
        } else {
            if (!preg_match("/^[a-zA-Z-'0-9 ]*$/", $uname)) {
                $unameErr = "Only letters and white ifspace allowed";
                $uname = "";
            } else {
                if (strlen($uname) < 2) {
                    $unameErr = "Name must contain atleast 2 characters";
                    $uname = "";
                }
            }
        }
        if (empty($pass)) {
            $passErr = "Password is required";
        } else {
            if (strlen($pass) < 8) {
                $passErr = "Password must contain atleast 8 characters";
            } else if (!preg_match("/[@#$%]/", $pass)) {
                $passErr = "Password must contain a special character";
            }
        }
        if (empty($cPass)) {
            $cpassErr = "Retype password";
            $pass = "";
        } else {

            if ($cPass != $pass) {
                $cpassErr = "Password does not match with new password";
            }
        }

        if (empty($date)) {
            $ddErr = "Date is required";
        } else {
            if ($date < 1  || $date > 31) {
                $ddErr = "Enter a valid date";
            }
        }

        if (empty($month)) {
            $mmErr = "Month is required";
        } else {
            if ($month < 1  || $month > 12) {
                $mmErr = "Enter a valid month";
            }
        }

        if (empty($year)) {
            $yyyyErr = "Year is required";
        } else {
            if ($year < 1901  || $year > 2000) {
                $yyyyErr = "Enter a valid year";
            }
        }





        if (empty($_POST['gender'])) {
            $genderErr = "Select a gender";
        }

        if ($nameErr == "" && $emailErr == "" && $unameErr == "" && $passErr == "" && $cpassErr == "" && $genderErr == "" && $ddErr == "" && $mmErr == "" && $yyyyErr == "") {
            echo "Signup Complete<br>";
            $user = ['username' => $uname, 'password' => $pass, 'email' => $email, 'name' => $name, 'date' => $date, 'month' => $month, 'year' => $year, 'gender' => $gender];

            if (filesize('user.json') == 0) {
                $json = json_encode($user);
                $myfile = fopen('user.json', 'w');
                fwrite($myfile, '[' . $json . ']');
            } else {
                $inp = file_get_contents('user.json');
                $tempArray = json_decode($inp);
                array_push($tempArray, $user);
                $jsonData = json_encode($tempArray);
                file_put_contents('user.json', $jsonData);
            }

            header('location: login.php');
        }
    }
}

?>


<?php
include('header.php');
?>
<form method="post" action="">
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
                    <input type="email" name="email" id="">
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