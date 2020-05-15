<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    
    <?php
    // Vars
    $paragraph = '“Appartengo a un mondo senza argomenti. È forse per questo che, di volta in volta, ho litigato per poi riconciliarmi con esso. La sua mancanza di fondamento mi ha assuefatto a un’alternativa inesorabile tra partecipazione e disgusto”. Emil Cioran';
    $string_length = strlen($paragraph);
    $word = $_GET["word"];
    $replace = str_replace($word, '***', $paragraph); 
    //$replace = str_replace($_GET["name"], '***', $paragraph); 
    ?>
    <!-- Visualizzare paragrafo a schermo -->
    <p><?php echo $paragraph ?></p>
    <!-- Lunghezza paragrafo -->
    <p>Lunghezza paragrafo: <?php echo $string_length ?></p>
    <!-- Sostituzione della parola indesiderata -->
    <div>
        <strong>Sostituzione della parola indesiderata: </strong><?php echo $replace ?>
    </div>

</body>
</html>