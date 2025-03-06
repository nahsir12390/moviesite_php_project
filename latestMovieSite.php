<?php
require("movieDatabaseConn.php");

try {
    // Fetch only movies where category is 'latest'
    $stmt = $pdo->prepare("SELECT image, movieLink, year, movieName, movieDescription FROM movies WHERE category = 'latest' ORDER BY year DESC");
    $stmt->execute();
    $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching latest movies: " . $e->getMessage());
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("boostrapPlugins.php"); ?>
    <link rel="stylesheet" href="latestMovieSite.css">
    <link rel="stylesheet" href="extractMoviesFromDb.css">
    <title>Latest Movies</title>
</head>
<body>
    <?php require("movieNavigation.php"); ?>
    <div class="movies-container-tittle">
        <h1>Latest Movies</h1>
    </div>

    <div class="movies-container">
        <?php if (empty($movies)): ?>
            <p>No latest movies found.</p>
        <?php else: ?>
            <?php foreach ($movies as $movie): ?>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo htmlspecialchars($movie['image']); ?>" alt="<?php echo htmlspecialchars($movie['movieName']); ?>">
                    <h2 class="card-title"><?php echo htmlspecialchars($movie['movieName']); ?></h2>
                    <p class="card-text-descrip"><?php echo htmlspecialchars($movie['movieDescription']); ?></p>
                    <p class="card-text">Year: <?php echo htmlspecialchars($movie['year']); ?></p>
                    <a class="btn btn-primary" href="<?php echo htmlspecialchars($movie['movieLink']); ?>">Watch Now</a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>