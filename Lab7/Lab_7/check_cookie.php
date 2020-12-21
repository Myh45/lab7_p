<?php

$user_cred = json_decode($_COOKIE['user']);

echo 'password : ' . $user_cred[0] . '<br/>';
echo 'user name : ' . $user_cred[1] . '<br/>';

$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "user_para";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM user' .
    ' WHERE name = "' . $user_cred[1] . '";';

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $hash = $result->fetch_assoc()['password'];

    if (password_verify($user_cred[0], $hash)) {
        $_SESSION['id'] = 1234;
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }
} else {
    echo "0 results";
}
$conn->close();
