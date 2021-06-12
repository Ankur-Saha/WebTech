<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.avatar 
		{
  			vertical-align: middle;
  			width: 100px;
  			height: 100px;
  			border-radius: 50%;
		}
	</style>
</head>
<body>



	<form action="upload.php" method="post" enctype="multipart/form-data">

        <fieldset style="width: 100px;height: 200px;">
        <legend>PROFILE PICTURE</legend>
        <img src="user.png" alt="Avatar" class="avatar"><br><br>
        <input type="file" name="file"><br><br>
        
        <input type="submit" name="submit" value="submit">
        </fieldset><br>

        
    </form>

</body>
</html>