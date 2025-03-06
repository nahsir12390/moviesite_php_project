

<?php require("searchMovie.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="movieNavigation.css">
    <title>Document</title>
    <?php require("boostrapPlugins.php");  ?>   
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid"><i class="bi bi-film"></i>
    <a class="navbar-brand" href="#">MovieHub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link  " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " aria-current="page" href="latestMovieSite.php">latest</a>
        </li>
        <li class="nav-item">
          <a  onclick="alert('Coming soon')" class="nav-link " href="">nollywood</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="movieIndian.php">indian</a>
        </li>
        <li class="nav-item">
          <a onclick="alert('Coming soon')" class="nav-link " href="#">korean</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="movieAnime.php">anime</a>
        </li>
      </ul>
      <form method="GET" class="d-flex">
        <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search"value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>


