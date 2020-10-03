<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php       
            file_put_contents('exemple.txt', 'Ecriture dans un fichier');
            file_put_contents('exemple.txt', '**NOUVEAU TEXTE**');
        ?>
        <p>Un paragraphe</p>
    </body>
</html>
