<?php
/**
 * User: Ricardo Kerssens
 * Date: 11-2-2020
 * Time: 11:43
 * File: opdracht_2-2.php
 */
?>

<!doctype html>
<html>
<head>
    <title>
        Template
    </title>
    <link href="./css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<!--De bovenkant van de website-->
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<!--De linker kant van de pagina, hier staat een lijst in met de links naar alle opdrachten.-->
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="hoofdstuk3/opdracht_3-1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="hoofdstuk3/opdracht_3-2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="hoofdstuk3/opdracht_3-3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="hoofdstuk4/opdracht_4-1.php">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="hoofdstuk4/opdracht_4-2.php">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="hoofdstuk4/opdracht_4-3.php">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="hoofdstuk4/opdracht_4-4.php">Opdracht 4.4</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="hoofdstuk5/opdracht_5-1.php">Opdracht 5.1</a>
                </li>
                <li>
                    <a href="hoofdstuk5/opdracht_5-2.php">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="hoofdstuk5/opdracht_5-3.php">Opdracht 5.3</a>
                </li>
                <li>
                    <a href="hoofdstuk5/opdracht_5-4.php">Opdracht 5.4</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<!--De main deel van de pagina. Hier komt de opdracht uitwerking in.-->
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    $text1 = "Hallo";
    $text2 = " een makkelijke taal";
    $text3 = " toch zo'n makkelijke taal";
    $text4 = " wat is";
    $text5 = " PHP";
    $text6 = "Nooit gedacht dat";
    $text7 = "De installatie is best ingewikkeld";
    $text8 = "Fijn";
    $text9 = "?";
    $text10 = ".";
    $text11 = ",";
    $text12 = "<br>";
    $text13 = " is";
    $text14 = "Vind je niet";
    $text15 = " toch";
    ?>
    <?php
    echo "<p>" . $text1 . $text4 . $text5 . $text15 . $text2 . $text10 . $text12 .
                $text7 . $text10 . $text8 . $text15 . $text9 . $text12 .
                $text6 . $text5 . $text3 . $text13 . $text10 . "</p>";
    ?>
    <?php
    echo "<p>" . $text1 . $text11 . $text12 .
                $text8 . $text15 . " dat" . $text5 . " zo'n makkelijke taal" . $text13 . $text10 . $text12 .
                $text7 . $text10 . $text14 . $text9 . $text12 . "<p/>";
    ?>
</main>
</body>
</html>




































