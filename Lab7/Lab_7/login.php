<?php
session_start();

$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "user_para";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM user' .
    ' WHERE name = "' . $_POST['user_name'] . '";';

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $hash = $result->fetch_assoc()['password'];

    if (password_verify($_POST['user_password'], $hash)) {
        $_SESSION['id'] = 1234;
        echo 'Password is valid!';

        if (isset($_POST['remember_me'])) {
            echo 'cookie set';
            setcookie('user', json_encode(array($_POST['user_password'], $_POST['user_name'])), time() + (86400 * 30), '/');
        }
    } else {
        echo 'Invalid password.';
    }
} else {
    echo "0 results";
}
$conn->close();
