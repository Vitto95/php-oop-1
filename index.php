<?php

require_once __DIR__ . "/Movie.php";

$movieOne = new Movie("2001: A Space Odyssey", "Science Fiction" );
$movieTwo = new Movie("Donnie Darko", "Science Fiction");



/* Film 1 */
$movieOne->director = "Stanley Kubrick";
$movieOne->releaseDate = "2 Aprile 1968";
$movieOne->runningTime = "142 minuti";
$movieOne->setMainActor("Keir Dullea");
var_dump($movieOne);

/* Film 2 */
$movieTwo->director = "Richard Kelly";
$movieTwo->releaseDate = "19 Gennaio 2001";
$movieTwo->runningTime = "113 minuti";
$movieTwo->setMainActor("Jake Gyllenhaal");
var_dump($movieOne);

$movies = array($movieOne, $movieTwo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
</head>
<body>

  <h1>Movies</h1>
  <h2>Risultati Ottenuti: <?php echo Movie::getCounter() ?></h2>

  <?php foreach($movies as $index => $movie){ ?>

  <h2>Film <?php echo ($index + 1) ?></h2>
  <p>Titolo: <?php echo $movie->name ?></p>
  <p>Regista: <?php echo $movie->director ?></p>
  <p>Genere: <?php echo $movie->genre ?></p>
  <p>Anno di uscita: <?php echo $movie->releaseDate ?></p>
  <p>Durata: <?php echo $movie->runningTime ?></p>
  <p>Starring: <?php echo $movie->getMainActor() ?></p>

  <?php } ?>


</body>
</html>