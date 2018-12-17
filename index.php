<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 5 exercice 10</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 5 exercice 10</h1>
                    <p align="center">Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.</p>
                    <p align="center">Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département</p>
                </div>
            </div>
            <div align="center">
                <?php
                $dpt = array(
                    '02' => 'Aisne',
                    59 => 'Nord',
                    60 => 'Oise',
                    62 => 'Pas de calais',
                    80 => 'Somme');
                foreach ($dpt as $cle => $element) {
                    echo '<p>Le département [' . $element . '] a le numéro ' . $cle . '<br />';
                }
                ?>
            </div>
        </div>
    </body>
</html>


