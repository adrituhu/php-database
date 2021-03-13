<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();


$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES('joko@test.com', 'hallo')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('joko@test.com', 'welkam')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('joko@test.com', 'hello')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('joko@test.com', 'haloha')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('joko@test.com', 'helohelo')");

$connection->rollBack();



$connection = null;