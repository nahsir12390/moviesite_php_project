<?php
require("movieDatabaseConn.php");

try {
    // Fetch movies with category "latest"
    $stmt = $pdo->prepare("SELECT image, movieLink, year, movieName, movieDescription FROM movies WHERE category = 'indian' ORDER BY year DESC");
    $stmt->execute();
    $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching latest movies: " . $e->getMessage());
}
?>