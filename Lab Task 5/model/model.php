<?php 

require_once 'db_connect.php';

function showAllUsers(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_details` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showUser($email){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user_details` where Email = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchUser($email){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_details` WHERE Email = ?";

    
    try{
        $stmt = $conn->query($selectQuery);
        $stmt->execute([
        	$email
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    echo $rows;
}


function addUser($data){
	$conn = db_conn();
    $selectQuery = "INSERT INTO `user_details` (Username, Password, Email) VALUES (:username, :password, :email)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':email' => $data['email']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateUser($email, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `user_details` SET Username = ?, Password = ? WHERE Email = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['username'], $data['password'], $email
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteUser($email){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `user_details` WHERE `Email` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function login ($uname,$pass){
    $conn = db_conn();
    $selectQuery = "SELECT `Password` FROM `user_details` WHERE `Username` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$uname]);
    }catch(PDOException $e){
        
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    if ($pass != $rows['Password']){
        return false;
    }
}