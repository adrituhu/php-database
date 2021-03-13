<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();


$connection->exec("INSERT INTO comments (email, comment) VALUES ('adri@test', 'Halo kamu')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;