<?php
$username = $_POST['name'];
$useremail = $_POST['e-mail'];
$userpassword = $_POST['password'];
try {
    $pdo_options[pdo::ATTR_ERRMODE] = pdo::ERRMODE_EXCEPTION;
    $db = new PDO('mysql:host=localhost; dbname=clinique', 'root', '',$pdo_options);
    
    $sql_adduser = 'INSERT INTO users(name, email, password) VALUE(:name, :email, :password)';
    $request_adduser = $db->prepare($sql_adduser);
    $request_adduser->execute(array('name' => $username, 'email' => $useremail, 'password' => $userpassword));
    header('Location: ../index.php');
} 
catch (Exception $e) {
    die('Error:' . $e->getMessage());
}
