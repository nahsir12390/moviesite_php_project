<?php

require("movieDatabaseConn.php");

try {
    // Fetch movies from the database
    $stmt = $pdo->query("SELECT image, movieLink, year, movieName FROM movies");
    $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching movies: " . $e->getMessage());
}
?>
