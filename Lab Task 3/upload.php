<?php

	if (isset($_POST['submit']))
	{
		$files = $_FILES['file'];

		$fileName = $files ['name'];
		$fileSize = $files ['size'];
		$fileTempLoc = $files ['tmp_name'];

		$f = explode('.', $fileName);
		$extension = strtolower($f[1]);
		$allowedExtension = array ('jpg','jpeg','png');

		if (in_array($extension, $allowedExtension))
		{
			if ($fileSize < 4194304)
			{
				$loc = 'Pictures/'.$fileName;
				move_uploaded_file($fileTempLoc, $loc);
				echo "File uploaded successfully";
			}
			else
			{
				echo "File size exceeded";
			}

		}
		else
		{
			echo "File type not supported";
		}
	}


?>