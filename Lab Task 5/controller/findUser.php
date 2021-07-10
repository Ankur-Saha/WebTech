<?php

require_once '../model/model.php';
$email = $_GET['email'];

    try {
    	
    	searchUser($email);

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }

