<!DOCTYPE html>
  <html>
    <head>
    <style>
    .error {color: #FF0000;}
    </style>
    </head>
    <body>

    <?php

      function test_input($data) 
      {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
      }


      $nameErr = $emailErr = $genderErr = $ddErr = $mmErr = $yyyyErr = $dobErr = $unameErr = $passErr = $cpassErr = "";
      $name = $email = $gender = $dd = $mm = $yyyy = $uname = $pass = $cpass = $dob ="";

      if ($_SERVER['REQUEST_METHOD'] == "POST")
      {
        if (empty($_POST["name"]))
        {
          $nameErr = "Name is required";
        }
        else
        {
          $name = test_input ($_POST["name"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
          {
            $nameErr = "Only letters and white space allowed";
            $name = "";
          }
          else
          {
            if (str_word_count($name)<2)
            {
              $nameErr = "Name must contain atleast 2 words";
            }
          }
        }


        if (empty($_POST["email"]))
        {
          $emailErr = "Email is required";
        }
        else
        {
          $email = test_input ($_POST["email"]);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL))
          {
            $emailErr = "Not a valid email. e.g anything@email.com";
            $email = "";
          }
        }



        if (empty($_POST["uname"]))
        {
          $unameErr = "User Name is required";
        }
        else
        {
          $uname = test_input ($_POST["uname"]);
          if (!preg_match("/^[a-zA-Z-'0-9 ]*$/",$uname))
          {
            $unameErr = "Only letters and white space allowed";
            $uname = "";
          }
          else
          {
            if (strlen($uname)<2)
            {
              $unameErr = "Name must contain atleast 2 characters";
              $uname = "";
            }
          }
        }


        if (empty($_POST["pass"]))
        {
          $passErr = "Password is required";
        }
        else
        {
          $pass = test_input ($_POST["pass"]);
          if (strlen($pass)<8)
          {
            $passErr = "Password must contain atleast 8 characters";
          }
          else if (!preg_match("/[@#$%]/",$pass))
          {
            $passErr = "Password must contain a special character";
          }
          
        }


        if (empty($_POST["cpass"]))
            {
              $cpassErr = "Retype password";
              $pass = "";
            }
        else 
            {
              $cpass = test_input ($_POST["cpass"]);
              if ($cpass != $pass)
              {
                $cpassErr = "Password does not match with new password";
              }
            }



        if (empty($_POST["dd"]))
        {
          $ddErr = "Date is required";
        }

        else if (empty($_POST["mm"]))
        { 
          $mmErr = "Month is required";
        }

        else if (empty($_POST["yyyy"]))
        {
          $mmErr = "Year is required";
        }
        else
        {
          $dd = test_input ($_POST["dd"]);
          $mm = test_input ($_POST["mm"]);
          $yyyy = test_input ($_POST["yyyy"]);
          if ($dd < 1  || $dd > 31)
          {
            $dobErr ="Enter a valid date";
          }
          else if ($mm < 1  || $mm > 12)
          {
            $dobErr ="Enter a valid month";
          }
          else if ($yyyy < 1953  || $yyyy > 1998)
          {
            $dobErr ="Enter a valid year";
          }

        }



        if (empty($_POST['gender']))
        {
          $genderErr = "Select a gender";
        }

        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['uname']) || empty($_POST['gender']) || empty($_POST['dd']) || empty($_POST['mm']) || empty($_POST['yyyy']))
        {}
        else
        {
          if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name' => $_POST['name'],  
                     'e-mail' => $_POST["email"],  
                     'username' => $_POST["uname"],  
                     'gender' => $_POST["gender"],
                     'date' => $_POST["dd"],
                     'month' => $_POST["mm"],
                     'year' => $_POST["yyyy"],

                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "File Appended Success fully";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }
        }
    }
    ?>


    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <fieldset style="width: 500px;height: 450px;">
        <legend>REGISTRATION</legend>
        <label>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input type="text" id="name" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span><br><br>

        <label>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input type="text" id="email" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span><br><br>

        <label>User Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input type="text" name="uname" value="<?php echo $uname;?>">
        <span class="error">* <?php echo $unameErr;?></span><br><br>


        <label >Password  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input type="text" name="pass" value="<?php echo $pass;?>">
        <span class="error">* <?php echo $passErr;?></span><br><br>

        <label>Confirm Password &nbsp;&nbsp;:</label>
        <input type="text" name="cpass" value="<?php echo $cpass;?>">
        <span class="error">* <?php echo $cpassErr;?></span><br><br>

        <fieldset style="width: 470px;height: 40px;">
        <legend>Gender</legend>
        <input type="radio" name="gender[]" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender[]" value="female">
        <label for="male">Female</label>
        <input type="radio" name="gender[]" value="other">
        <label for="male">Other</label>
        <span class="error">* <?php echo $genderErr;?></span>
        </fieldset><br>


        <fieldset style="width: 470px;height: 60px;">
        <legend>Date of Birth</legend>
        <label>&nbsp;&nbsp;dd&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yyyy</label><br>
        <input style="width:30px;" type="text" id="dd" name="dd" value="<?php echo $dd;?>">

        <span>/</span>

        <input style="width:30px;" type="text" id="mm" name="mm" value="<?php echo $mm;?>">
        <span>/</span>

        <input style="width:40px;" type="text" id="yyyy" name="yyyy" value="<?php echo $yyyy;?>">

        <span class="error">* <?php echo $ddErr;?></span>
        <span class="error">* <?php echo $mmErr;?></span>
        <span class="error">* <?php echo $yyyyErr;?></span>
        <span class="error">* <?php echo $dobErr;?></span>
        </fieldset><br>

        <input type="submit">
        <input type="reset">
      </fieldset>
    </form>
  </body>
</html>
