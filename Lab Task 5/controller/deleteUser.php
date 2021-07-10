<?php 

require_once '../model/model.php';

if (deleteUser($_GET['email'])) {
    header('Location: ../view/home.php');
}

 ?>