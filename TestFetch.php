<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "adri";
$password = "rahasia";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";

$prepareStatement = $connection->prepare($sql);
$prepareStatement->bindParam("username", $username);
$prepareStatement->bindParam("password", $password);
$prepareStatement->execute();

if ($row = $prepareStatement->fetch()) {
    echo "Sukses Login : " . $row["username"] . PHP_EOL;
} else {
    echo "gagal login" . PHP_EOL;
}

var_dump($prepareStatement->fetch());

$connection = null;