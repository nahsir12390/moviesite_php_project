<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  rel="stylesheet" href="movieCarousel.css">
        
        <?php require("boostrapPlugins.php");  ?>
    </head>

<body>
    <div class="carousel-templet " >
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="picture/carouselMovies/venom 3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
      <h5>venom the last dance</h5>
        <p>2024 ‧ Action/Sci-fi ‧ 1h 49m
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="picture/carouselMovies/deadpool and wolverine.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
    

        <h5>wolverine & deadpool</h5>
        <p>2024 ‧ Action/Sci-fi ‧ 1h 49m.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="picture/carouselMovies/squid game.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>Squid Game</h5>
        <p>2021 ‧ Thriller ‧ 2 seasons
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="picture/carouselMovies/ghostbusters frozen empire.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>Ghostbusters: Frozen Empire</h5>
        <p>2024 ‧ Comedy/Horror ‧ 1h 55m
        </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>

</body>
</html>