<?php  
require_once '../model/model.php';

if (isset($_POST['signup'])) {
	    $data ['username'] = $_POST['username'];
		$data ['password'] = $_POST['password'];
        $data ['confirmpassword'] = $_POST['repass'];
		$data ['email'] = $_POST['email'];

  if (addUser($data)) {
  	echo 'Successfully added!!';
	header('location: ../view/login.html');

  }
} else {
	echo 'You are not allowed to access this page.';
}

?>
