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


      $nameErr = $passErr ="";
      $name = $pass = "";

      if ($_SERVER['REQUEST_METHOD'] == "POST")
      {
        if (empty($_POST["name"]))
        {
          $nameErr = "Name is required";
        }
        else
        {
          $name = test_input ($_POST["name"]);
          if (!preg_match("/^[a-zA-Z-'0-9 ]*$/",$name))
          {
            $nameErr = "Only letters and white space allowed";
            $name = "";
          }
          else
          {
            if (strlen($name)<2)
            {
              $nameErr = "Name must contain atleast 2 characters";
              $name = "";
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
            $pass = "";
          }
          else if (!preg_match("/[@#$%]/",$pass))
          {
            $passErr = "Password does not contain special characters";
          }
        }

      }
    ?>


    
    <form method="post" action="load.php">

        <fieldset style="width: 600px;height: 500px;">
        <legend>LOGIN</legend>
        <br><label>User Name :</label>
        <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span><br><br>

        <label>Password &nbsp;&nbsp;&nbsp;:</label>
        <input type="password" name="pass" value="<?php echo $pass;?>">
        <span class="error">* <?php echo $passErr;?></span><br><br><br>

        <span><input type="checkbox" name="remember" value="remember"> Remember Me</span><br><br>
        <input type="submit" value="Login">
        

        <a href="">Forgot Password?</a><br><br>

        <span>Don't have an account?</span>
        <a href="myform.php">Sign up
        </fieldset><br>

        
    </form>
  </body>
</html>
