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


      $nameErr = $emailErr = $genderErr = $degErr = $bgErr = $ddErr = $mmErr = $yyyyErr = $dobErr ="";
      $name = $email = $gender = $bg = $dd = $mm = $yyyy = "";

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




        if (empty($_POST["deg"]))
        {
          $degErr = "Select degrees";
        }
        else
        {
          $checkedDegrees = 0;
          $values = $_POST['deg'];
          $checkedDegrees = count($values);

          if ($checkedDegrees < 2)
          {
            $degErr = "Select at least 2 degrees";
          }
        }


        if (empty($_POST["bg"]))
        {
          $bgErr = "Select a blood group";
        }
      }
    ?>


    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <fieldset style="width: 300px;height: 80px;">
        <legend>NAME</legend>
        <input type="text" id="name" name="name" value="<?php echo $name;?>"><br>
        <span class="error">* <?php echo $nameErr;?></span>
        </fieldset><br>

        <fieldset style="width: 300px;height: 80px;">
        <legend>EMAIL</legend>
        <input type="text" id="email" name="email" value="<?php echo $email;?>"><br>
        <span class="error">* <?php echo $emailErr;?></span><br><br>
        </fieldset><br>

        <fieldset style="width: 300px;height: 80px;">
        <legend>DATE OF BIRTH</legend>
        <label>&nbsp;&nbsp;dd&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yyyy</label><br>
        <input style="width:30px;" type="text" id="dd" name="dd" value="<?php echo $dd;?>">

        <span>/</span>

        <input style="width:30px;" type="text" id="mm" name="mm" value="<?php echo $mm;?>">
        <span>/</span>

        <input style="width:40px;" type="text" id="yyyy" name="yyyy" value="<?php echo $yyyy;?>"><br>

        <span class="error">* <?php echo $ddErr;?></span>
        <span class="error">* <?php echo $mmErr;?></span>
        <span class="error">* <?php echo $yyyyErr;?></span>
        <span class="error">* <?php echo $dobErr;?></span>
        </fieldset><br>

        <fieldset style="width: 300px;height: 80px;">
        <legend>GENDER</legend>
        <input type="radio" name="gender[]" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender[]" value="female">
        <label for="male">Female</label>
        <input type="radio" name="gender[]" value="other">
        <label for="male">Other</label><br>
        <span class="error">* <?php echo $genderErr;?></span>
        </fieldset><br>

        <fieldset style="width: 300px;height: 80px;">
        <legend>DEGREE</legend>
        <span><input type="checkbox" name="deg[]" value="ssc"> SSC</span>
        <span><input type="checkbox" name="deg[]" value="hsc"> HSC</span>
        <span><input type="checkbox" name="deg[]" value="bsc"> BSc</span>
        <span><input type="checkbox" name="deg[]" value="msc"> MSc</span> <br>

        <span class="error">* <?php echo $degErr;?></span>
        </fieldset><br>

        <fieldset style="width: 300px;height: 80px">
        <legend>BLOOD GROUP</legend>
        <select name="bg[]">
        <option></option>
        <option value="A+">A+</option>
        <option value="O+">O+</option>
        <option value="B+">B+</option>
        <option value="AB+">AB+</option>
        <option value="A-">A-</option>
        <option value="O-">O-</option>
        <option value="B-">B-</option>
        <option value="AB-">AB-</option>
        </select><br>
        <span class="error">* <?php echo $bgErr;?></span>
        </fieldset><br>

        <input type="submit">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $dd;
    echo "<br>";
    echo $mm;
    echo "<br>";
    echo $yyyy;
    echo "<br>";
    foreach($_POST['gender'] as $value)
    {
      echo $value.'<br>';
    } 
    echo "<br>";
    foreach($_POST['deg'] as $value)
    {
      echo $value.'<br>';
    } 
    echo "<br>";
    foreach($_POST['bg'] as $value)
    {
      echo $value.'<br>';
    }
    ?>
  </body>
</html>
