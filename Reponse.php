<html>
<body>

<!-- @author : bilal -->
<!-- version : 0.1 -->
<!-- Utilité : Page de résultat du personnage créer -->

<?php
include "Magicien.php";
include "Archer.php";
include "Guerrier.php";

// Variable qui récupère les valeurs saisis par l'utilisateur

$reflexe = $_POST['reflexe'];
$vision = $_POST['vision'];
$endurance = $_POST ["endurance"];
$resistance = $_POST ["resistance"];
$magie = $_POST['magie'];
$soin = $_POST['soin'];
$sagesse = $_POST['sagesse'];
$intelligence = $_POST["intelligence"];
$force = $_POST["force"];
$adresse = $_POST["adresse"];
$pv = $_POST["pv"];

// Conditions qui montrent le résumé du personnage créer

if ($magie > 0){
    $magicien = new Magicien($magie, $soin, $intelligence, $sagesse, $force, $adresse, $pv);
    echo "Magie : " . $magicien->getMagie()."<br>"."<br>";
    echo "Soin : " . $magicien->getSoin()."<br>"."<br>";
    echo "Intelligence : " . $magicien->getIntelligence()."<br>"."<br>";
    echo "Sagesse : " . $magicien->getSagesse()."<br>"."<br>";
    echo "Force : " . $magicien->getForce()."<br>"."<br>";
    echo "Adresse : " . $magicien->getAdresse()."<br>"."<br>";
    echo "Pv : " . $magicien->getPv()."<br>"."<br>";

} else if ($endurance > 0){
    $guerrier = new Guerrier($endurance, $resistance, $intelligence, $force, $adresse, $pv);
    echo "Endurance : " . $guerrier->getEndurance()."<br>"."<br>";
    echo "Resistance : " . $guerrier->getResistance()."<br>"."<br>";
    echo "Intelligence : " . $guerrier->getIntelligence()."<br>"."<br>";
    echo "Force : " . $guerrier->getForce()."<br>"."<br>";
    echo "Adresse : " . $guerrier->getAdresse()."<br>"."<br>";
    echo "Pv : " . $guerrier->getPv()."<br>"."<br>";
} else if ($vision > 0){
    $archer = new Archer($reflexe, $vision, $intelligence, $force, $adresse, $pv);
    echo "Reflexe : " . $archer->getReflexe()."<br>"."<br>";
    echo "Vision : " . $archer->getVision()."<br>"."<br>";
    echo "Intelligence : " . $archer->getIntelligence()."<br>"."<br>";
    echo "Force : " . $archer->getForce()."<br>"."<br>";
    echo "Adresse : " . $archer->getAdresse()."<br>"."<br>";
    echo "Pv : " . $archer->getPv()."<br>"."<br>";

}
?>

</body>
</html>