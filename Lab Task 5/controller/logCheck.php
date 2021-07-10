<?php
    require_once '../model/model.php';

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null input...";
		}else{
            if (login($username,$password) == true)
            {
                header ('location: ../view/home.php');
            }

		}
	}


?>