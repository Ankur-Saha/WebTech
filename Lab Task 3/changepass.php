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


      $cpassErr = $npassErr = $rpassErr = "";
      $cpass = $npass = $rpass = "";

      if ($_SERVER['REQUEST_METHOD'] == "POST")
      {

        if (empty($_POST["cpass"]))
        {
          $cpassErr = "Current Password is required";
        }
        else
        {
          $cpass = test_input ($_POST["cpass"]);
          $npass = test_input ($_POST["npass"]);
          $rpass = test_input ($_POST["rpass"]);

          if (empty($_POST["npass"]))
          {
            $npassErr = "Enter new password";
          }

          else if ($npass == $cpass)
          {
            $npassErr = "Password can not be same as previous password";
            $npass = "";
          }
          else
          {
            if (empty($_POST["rpass"]))
            {
              $rpassErr = "Retype new password";
              $npass = "";
            }
            else if ($rpass != $npass)
            {
              $rpassErr = "Password does not match with new password";
              $npass = "";
              $rpass = "";
            }            
          } 
        }
      }
    ?>


    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <fieldset style="width: 700px;height: 200px;">
        <legend>CHANGE PASSWORD</legend>
        <br><label>Current Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input type="password" name="cpass" value="<?php echo $cpass;?>">
        <span class="error">* <?php echo $cpassErr;?></span><br><br>

        <label style="color: green;">New Password  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input type="password" name="npass" value="<?php echo $npass;?>">
        <span class="error">* <?php echo $npassErr;?></span><br><br>

        <label style="color: red;">Retype New Password :</label>
        <input type="password" name="rpass" value="<?php echo $rpass;?>">
        <span class="error">* <?php echo $rpassErr;?></span><br><br><br>

        <input type="submit">
        </fieldset><br>
    </form>
  </body>
</html>
