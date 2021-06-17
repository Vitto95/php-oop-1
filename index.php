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

<h2>Film 1</h2>
<p>Titolo: <?php echo $movieOne->name ?></p>
<p>Regista: <?php echo $movieOne->director ?></p>
<p>Genere: <?php echo $movieOne->genre ?></p>
<p>Anno di uscita: <?php echo $movieOne->releaseDate ?></p>
<p>Durata: <?php echo $movieOne->runningTime ?></p>
<p>Starring: <?php echo $movieOne->getMainActor() ?></p>

<h2>Film 2</h2>
<p>Titolo: <?php echo $movieTwo->name ?></p>
<p>Regista: <?php echo $movieTwo->director ?></p>
<p>Genere: <?php echo $movieTwo->genre ?></p>
<p>Anno di uscita: <?php echo $movieTwo->releaseDate ?></p>
<p>Durata: <?php echo $movieTwo->runningTime ?></p>
<p>Starring: <?php echo $movieTwo->getMainActor() ?></p>
  
</body>
</html>