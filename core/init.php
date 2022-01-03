<?php
session_start();

include 'db/config.php';
include 'classes/_users.php';
include 'classes/_posts.php';
include 'classes/_points.php';
include 'classes/_projects.php';
include 'classes/_functions.php';

global $pdo;

$getFromUser = new User($pdo);
$getFromPost = new Post($pdo);
$getFromProject = new Project($pdo);
$getFromPoints = new Points($pdo);
$getFromFunc = new Func();

const BASE_URL = 'http://localhost/blog/';
