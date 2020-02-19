<?php
/**
 * User: Ricardo Kerssens
 * Date: 12-2-2020
 * Time: 15:13
 * File: opdracht_3-1.php
 */
include "../Includes/Header.php";
include "../Includes/Menu.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <!-- Variabellen voor komende tekst. -->
    <?php
    /*Variabellen met strings*/
    $evenement = "Elfstedentocht";
    $fries = "Alvestêdetocht";
    $tocht = "schaatstocht";
    $ijs = "natuurijs";
    $vereniging = "Koninklijke Vereniging De Friesche Elf Steden";
    $hoofdstad = "Leeuwarden";
    $provincie = "Friesland";
    /*Variabellen met nummers*/
    $lenghte = 200;
    $verreden = 15;
    $datum = 1909;
    $hoevaak = 1;
    ?>
    <?php
        $verhaal = "de " . $evenement . " (Fries: ". $fries . ") is een " . $lenghte .
        " kilometer lange " . $tocht . " over " . $ijs . " die wordt georganiseerd door de " . $vereniging .
         ". " . $hoofdstad . ", de hoofdstad van " . $provincie . ", is start- en aankomstplaats. De " . $tocht .
          " is inmiddels " . $verreden . " maal verreden en werd voor het eerst in " . $datum .
           "gereden en wordt maximaal " . $hoevaak . " keer per winter gehouden.";
    ?>
    <?php
        echo "<p>" . $verhaal . "</p>";
    ?>

</main>
</body>
</html>
