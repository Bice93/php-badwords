<?php 
    // Creare una variabile con un paragrafo di testo a vostra scelta.
    $paragraphText = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aliquid, natus vitae quo enim totam corrupti, laudantium voluptatem nihil, quam blanditiis tempore aspernatur! Incidunt labore recusandae, quas iusto vitae iste. Lorem dolor!';
    
    $userWord = $_GET['word'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php badwords</title>
</head>
<body>
    <h1>PHP BADWORDS</h1>
    <p>
    
        <?php
            // Stampo a schermo il paragrafo e la sua lunghezza.
            echo $paragraphText;
            echo strlen($paragraphText);
        ?>
    </p>
    <h5>Parola ricercata: 
        <?php 
        // Stampo a schermo la parola ricercata
            echo $userWord;
        ?>
    </h5>
    <p>
        <?php 
        // Sostituisco con *** la parola da censurare 
        $wordCensored = str_replace($userWord, '***', $paragraphText);
        // Stampo a schermo il nuovo paragrafo con la parola censurata e la lunghezza
        echo $wordCensored;
        echo strlen($wordCensored);
        ?>
    </p>
</body>
</html>