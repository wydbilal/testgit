<?php
$nom = "bilal";
$valeur = "aaaaaa";
setcookie($nom, $valeur, time()+10);
?>
<html>
<body>


<form>
    Fond : <input type="color", name="fond">
    Texte : <input type="color", name="texte">
</form>
<?php
if (!isset($_COOKIE["bilal"])) {
    echo "le cookie " . $nom ." is not set";
    echo '<body style="background-color:red">';
} else {
    echo '<body style="background-color:green">';
    echo "le cookie " . $nom . " is set! <br>";
    echo "valeur du cookie : " . $valeur;
}

?>
</body>
</html>
