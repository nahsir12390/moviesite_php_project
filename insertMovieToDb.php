<?php

require("movieDatabaseConn.php");

$movies = [
    [
        "image" => "picture/latestMovies/Putin.jpeg",
        "movieLink" => "https://downloadwella.com/6vonr0rqkp32/Putin.(NKIRI.COM).2025.WEBRip.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2025",
        "movieName" => "PUTIN",
        "movieDescription" => "The film covers the life of Vladimir Putin and focuses on key milestones in Putin's real life.",
          "category" => "latest"
    ],
    [
        "image" => "picture/latestMovies/a complete unknown.jpeg",
        "movieLink" => "https://downloadwella.com/dkpsdkpfattd/A.Complete.Unknown.(NKIRI.COM).2024.WEBRip.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2024",
        "movieName" => "A complete unknown",
        "movieDescription" => "A Complete Unknown is a 2024 biographical musical drama film about the rise of Bob Dylan in the 1960s. The film stars Timothée Chalamet as Dylan. ",
          "category" => "general"
    ],
    [
        "image" => "picture/latestMovies/better man.jpeg",
        "movieLink" => "https://downloadwella.com/993fyhxtuqzi/Better.Man.(NKIRI.COM).2024.WEBRip.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2024",
        "movieName" => "Better man",
        "movieDescription" => "Better Man is a 2024 movie about the life of British pop star Robbie Williams. The film is told from Williams' perspective and uses a CGI chimpanzee to portray him. ",
         "category" => "general"
    ],
    [
        "image" => "picture/latestMovies/demon city.jpg",
        "movieLink" => "https://downloadwella.com/esxa4qo9odk9/Demon.City.(NKIRI.COM).2025.NF.WEB-DL.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2025",
        "movieName" => "demon city",
        "movieDescription" => "Framed for his family's murder and left for dead, an ex-hitman will stop at nothing to exact revenge on the masked 'demons' who have taken over his city. ",
         "category" => "latest"
    ],
    [
        "image" => "picture/latestMovies/fight or flight.jpg",
        "movieLink" => "https://downloadwella.com/m5zn3ivbpe1m/Fight.or.Flight.(NKIRI.COM).2025.WEB-DL.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2025",
        "movieName" => "fight or flight",
        "movieDescription" => "A Complete Unknown is a 2024 biographical musical drama film about the rise of Bob Dylan in the 1960s. The film stars Timothée Chalamet as Dylan. ",
         "category" => "latest"
    ],
    [
        "image" => "picture/latestMovies/valiant one.jpg",
        "movieLink" => "https://downloadwella.com/rb8ryu85tzrc/Valiant.One.(NKIRI.COM).2025.WEB-DL.DOWNLOADED.FROM.NKIRI.COM_.mkv.html",
        "year" => "2024",
        "movieName" => "valiant one",
        "movieDescription" => "Valiant One is a 2025 military thriller film about a US Army team that crashes in North Korea and must escape back to South Korea. ",
        "category" => "general"
    ],
    [
        "image" => "picture/latestMovies/mufasa the lion king.jpg",
        "movieLink" => "https://downloadwella.com/mvz7421hud0o/Mufasa.The.Lion.King.(NKIRI.COM).2024.WEB-DL.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2024",
        "movieName" => "Mufasa: The Lion King",
        "movieDescription" => "The chance meeting sets in motion an expansive journey of a group of misfits searching for their destiny. ",
        "category" => "anime"
    ],
    [
        "image" => "picture/latestMovies/dog man.jpg",
        "movieLink" => "https://downloadwella.com/mvz7421hud0o/Mufasa.The.Lion.King.(NKIRI.COM).2024.WEB-DL.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2023",
        "movieName" => "dog man",
        "movieDescription" => "DogMan is a 2023 French action thriller film about a man who was abused by his father and befriends dogs who protect him.  ",
        "category" => "anime"
    ],
    [
        "image" => "picture/latestMovies/the witcher.jpg",
        "movieLink" => "https://downloadwella.com/e598ss4xcine/The.Witcher.Sirens.of.the.Deep.(NKIRI.COM).2025.WEBRip.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2024",
        "movieName" => "The Witcher: Sirens of the Deep",
        "movieDescription" => "The film is a loose adaptation of the short story 'A Little Sacrifice' by Andrzej Sapkowski. ",
        "category" => "anime"
    ],
    [
        "image" => "picture/latestMovies/paddinton in peru.jpeg",
        "movieLink" => "https://downloadwella.com/50dbh0c2xa1u/Paddington.in.Peru.(NKIRI.COM).2024.WEB-DL.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2024",
        "movieName" => "Paddington in Peru",
        "movieDescription" => "Paddington and the Brown family travel to Peru to visit Aunt Lucy, only to discover she's gone missing, leading them on a thrilling adventure through the Amazon rainforest and to the mountain peaks in search of her.",
        "category" => "general"
    ],
    [
        "image" => "picture/latestMovies/my fault london.jpeg",
        "movieLink" => "https://downloadwella.com/rujgtn65xzwf/My.Fault.London.(NKIRI.COM).2025.WEB-DL.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2025",
        "movieName" => "My Fault: London",
        "movieDescription" => "Noah is a teenage girl who moves with her mother Ella from Florida to London to live with her new stepfather William.",
        "category" => "latest"
    ],
    [
        "image" => "picture/latestMovies/mechanic rocky.jpeg",
        "movieLink" => "https://downloadwella.com/ygverlpqux7m/Mechanic.Rocky.(NKIRI.COM).2024.WEBRip.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2024",
        "movieName" => "Mechanic Rocky",
        "movieDescription" => "A mechanic uncovers a sinister plot during a feud with local gangsters over ownership of his father's garage in this twisty Telugu-language action drama. ",
        "category" => "indian"
    ],
    [
        "image" => "picture/latestMovies/murophy.jpeg",
        "movieLink" => "https://downloadwella.com/vypilblrjuav/Murphy.(NKIRI.COM).2024.WEBRip.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2024",
        "movieName" => "Murphy",
        "movieDescription" => "Ordinary guy David's life takes an extraordinary turn after interacting with his late grandfather's peculiar radio. ",
        "category" => "indian"
    ],
    [
        "image" => "picture/latestMovies/thangalaan.jpeg",
        "movieLink" => "https://downloadwella.com/bucs4pni8uom/Thangalaan.(NKIRI.COM).2024.WEBRip.DOWNLOADED.FROM.NKIRI.COM.mkv.html",
        "year" => "2024",
        "movieName" => "Thangalaan",
        "movieDescription" => "a chief-turned-laborer, leads gold mining for the British. Ancient legends and supernatural events arise.",
        "category" => "indian"
    ]




   
];


// Prepare the SQL statement (include category)
$sql = "INSERT INTO movies (image, movieLink, year, movieName, movieDescription, category) 
        VALUES (:image, :movieLink, :year, :movieName, :movieDescription, :category)";

$stmt = $pdo->prepare($sql);

// Loop through each movie and insert into database
foreach ($movies as $movie) {
    $stmt->execute([
        ':image' => $movie['image'],
        ':movieLink' => $movie['movieLink'],
        ':year' => $movie['year'],
        ':movieName' => $movie['movieName'],
        ':movieDescription' => $movie['movieDescription'],
        ':category' => $movie['category'] ?? 'General' // Set default category if missing
    ]);

    echo "Movie inserted successfully!<br>";
}






?>





