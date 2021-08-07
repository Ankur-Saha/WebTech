<?php
require_once 'db_connect.php';

function addUser($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT INTO users (Name, Email, Username, Password, Gender, Birth_date, Birth_month, Birth_year, User_type, Dept, ID, Photo) 
    VALUES (:name, :email, :username, :password, :gender, :date, :month, :year, :type, :dept, :id, :photo)";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data ['name'],
            ':email' => $data ['email'],
        	':username' => $data['uname'],
        	':password' => $data['pass'],
            ':gender' => $data ['gender'],
            ':date' => $data ['date'],
            ':month' => $data ['month'],
            ':year' => $data ['year'],
            ':type' => $data ['position'],
            ':dept' => $data ['dept'],
            ':id' => $data ['id'],
            ':photo' => $data ['photo']
        ]);
        return true;
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}

function login ($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM users WHERE Username = :username";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt -> execute
        ([
            ':username' => $data ['uname'],
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function updateUser ($data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE users SET Name = :name, Email = :email, Gender = :gender, Birth_date = :date,
    Birth_month = :month, Birth_year = :year, Photo = :photo, User_type = :position, Dept = :dept WHERE ID = :id";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
            ':email' =>  $data['email'],
            ':gender' => $data ['gender'],
            ':date' => $data ['date'],
            ':month' => $data ['month'],
            ':year' => $data ['year'],
            ':id' => $data ['id'],
            ':photo' => $data ['photo'],
            ':position' => $data ['position'],
            ':dept' => $data ['dept']
        ]);
        return true;    
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
}

function updatePass ($data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE users SET Password = :pass WHERE ID = :id";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':pass' => $data['pass'],
            ':id' => $data ['id'],
        ]);
        return true;    
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
}

function showAllUsers(){
	$conn = db_conn();
    $selectQuery = "SELECT * FROM users";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function searchUser($data){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM users WHERE ID = :id";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':id' => $data ['id']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function searchPass($data){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM users WHERE ID = :id";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':id' => $data ['id']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}