<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();


$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES('budi@test.com', 'hallo')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('budi@test.com', 'welkam')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('budi@test.com', 'hello')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('budi@test.com', 'haloha')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('budi@test.com', 'helohelo')");

$connection->commit();



$connection = null;