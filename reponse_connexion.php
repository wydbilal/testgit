
<?php
// @author : bilal
// @version : 0.1
// Utilité : Cas de connexion

session_start();
include "page_connexion.html";


// Condition pour savoir si les informations rentrées sont bonnes/pas bonnes

if ($_POST["pseudo"] == "bilal" && $_POST["password"] == "bilal") {
    header('Location: Formulaire_Personnage.php');
} else if (!isset($_POST["pseudo"]) || !isset($_POST["password"])){
    echo "Veuillez remplir tous les champs";
} else if ($_POST["pseudo"] !== "bilal" || $_POST["password"] !== "bilal") {
    echo "Mot de passe incorrect";
}
?>


