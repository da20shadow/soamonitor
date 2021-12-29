<?php
$db_host = "localhost";
$db_user = "root"; //u843684511_username
$db_password = ""; //zQ77D/]G!Pt]
$db_name = "blog"; //u843684511_database
$charset = "utf8mb4";

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$charset";
try {
    $pdo = new PDO($dsn, $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $err) {
    throw new PDOException($err->getMessage());
}