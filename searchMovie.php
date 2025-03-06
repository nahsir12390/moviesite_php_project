<?php 
/*require("fetchMovies.php");*/ // Fetch "latest" movies first

// Only modify $movies if there is a search query
if (isset($_GET['search']) && !empty($_GET['search'])) {
    try {
        $search = "%" . $_GET['search'] . "%"; // Using wildcards for partial matching
        $stmt = $pdo->prepare("SELECT image, movieLink, year, movieName, movieDescription FROM movies WHERE movieName LIKE :search");
        $stmt->execute([':search' => $search]);
        $movies = $stmt->fetchAll(PDO::FETCH_ASSOC); // Overwrite only when searching
    } catch (PDOException $e) {
        die("Error fetching searched movies: " . $e->getMessage());
    }
} 
// If no search is performed, $movies will still contain the "latest" movies from fetchMovies.php
?>