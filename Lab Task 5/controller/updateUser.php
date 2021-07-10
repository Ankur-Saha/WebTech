<?php  
require_once '../model/model.php';
$email= $_GET['email'];


if (isset($_POST['updateStudent'])) {
	$data ['username'] = $_POST['name'];
	$data ['password'] = $_POST['pass'];


  if (updateUser($email, $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location:../view/home.php');
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>