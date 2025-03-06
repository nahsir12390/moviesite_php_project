<?php
$host = "sql7.freesqldatabase.com";
$dbname = "sql7766235";
$username = "sql7766235";
$password = "n9M7dnhKRP";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
