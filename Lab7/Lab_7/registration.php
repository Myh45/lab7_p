<?php


$servername = "127.0.0.1:3306";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, 'user_para');

$encoded_password = password_hash($_POST['user_password'], PASSWORD_BCRYPT);

$sql = 'INSERT INTO user (name, password)' . 
'VALUES ("' . $_POST['user_name'] . '", "' . $encoded_password . '")';

$result = $conn->query($sql);


?>