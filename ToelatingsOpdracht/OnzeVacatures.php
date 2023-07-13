<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacatures</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Vacatures.css">
    <script src="script.js" defer></script>
    <?php require_once("Connection.php") ?>
</head>
<header class="header">
    <div class="topLayer">
        <?php require_once("navbar.php"); ?>
    </div>
</header>

<body>
    <div id="AlleVacatures">
        <div id="alignTitle">
            <h1 id="Title">Hier zul je alle beschikbare vacatures vinden</h1>
        </div>
        <?php
        $querySelectVacatures = $pdo->prepare("SELECT * FROM vacatures;");
        $querySelectVacatures->execute();
        $vacature_array = $querySelectVacatures->fetchAll(PDO::FETCH_OBJ);

        function echoVacatures()
        {
            global $vacature_array;
            foreach ($vacature_array as $key) {
                echo '<div id="Vacature">';
                echo '<div id="VacatureInfo">';
                echo '<p id="FunctieNaam">';
                echo $key->naam;
                echo '</p>';
                echo '<p id="FunctieLocatie">';
                echo $key->locatie;
                echo '</p>';
                echo '<a id="ABekijkFuntie" href=""><button class="BekijkFuntie">bekijk vacature</button></a>';
                echo '</div>';
                echo '</div>';
            }
        }

        echoVacatures();
        ?>
    </div>
</body>
<footer>
    <?php require_once("footer.php"); ?>
</footer>

</html>