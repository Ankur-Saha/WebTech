<?php 

require_once '../model/model.php';
$email= $_GET['email'];
$student = showUser($email);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <center>

 <form action="../controller/updateUser.php?email=<?php echo $email?>" method="POST" enctype="multipart/form-data">
  <label for="uname">Username:</label><br>
  <input value="<?php echo $student['Username'] ?>" type="text" id="name" name="uname"><br>
  <label for="password">Password:</label><br>
  <input value="<?php echo $student['Password'] ?>" type="text" id="username" name="pass"><br>
  <input type="submit" name = "updateStudent" value="Update">
  <input type="reset"> 
</form>
    </center>

</body>
</html>
