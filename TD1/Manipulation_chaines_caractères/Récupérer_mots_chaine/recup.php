<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>100% Recup</title>
</head>

<body>
    <?php
    $phrase = "Je suis une simple phrase";
    $separator = " ";

    str_word_count($phrase);
    echo ("$phrase <br>");
    echo ("Cette phrase contient " . str_word_count($phrase) . " mots");
    $mots = explode($separator, $phrase);

    foreach ($mots as $valeur) {
        echo ("<br> $valeur");
    }
    ?>
</body>

</html>