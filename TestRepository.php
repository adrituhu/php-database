<?php

require_once __DIR__ . '/GetConnection.php';
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommentRepository.php';

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

// $comment = new Comment(email: "repository2@test.com", comment:"Test repository2");
// $newComment = $repository->insert($comment);

// var_dump($newComment->getId());

// $comment = $repository->findById(42);
// var_dump($comment);

$comment = $repository->findAll();
var_dump($comment);

$connection = null;
