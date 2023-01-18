<!DOCTYPE html>
<html>
<head>
<title>Mon premier script</title>
</head>
<body>

<?php
echo "<a href=https://www.chaouchi.dev>Mon site</a> <br>";
echo "La boutique de chaussettes <br>";
$username = "Billy82";
echo $username;
?>
<h1>Voici le lien de mon site : <?php echo "<a href=https://www.chaouchi.dev>Mon site</a> <br>" ?></h1>

<img src="<?php echo "https://picsum.photos/seed/picsum/200/300" ?>" alt="image d'un chien"> 

<?php
$point_de_vie = 100;
$reference_point_de_vie = &$point_de_vie;
echo $point_de_vie;
echo "<br>";
echo $reference_point_de_vie;
echo "<br>";

?>
<?php
$variable1 = "Paris";
$ref_variable1 = &$variable1;
echo $variable1;
echo "<br>";
echo $ref_variable1;

echo "<br>";

$variable2 = "Lyon";
$ref_variable2 = &$variable2;
echo $variable2;
echo "<br>";
echo $ref_variable2; 
echo "<br>";
?>

<?php

$nom_du_produit = "Power Ranger Rouge";
echo $nom_du_produit;
?>

<?php
$nom_du_produit = "Power Ranger Rouge";
echo "<h2>".$nom_du_produit."</h2>";
echo "<br>";

$nom = "Dupont";
$prenom = "Rémi";
$age = 34;
$phrase = "Je m'appelle " .$prenom." ".$nom." et j'ai " .$age. " ans !";
echo "<p>$phrase</p>";

?>
<?php 
$nom_du_produit = "Power Ranger Rouge";
$prix = 17.99;
$url_produit = "https://picsum.photos/200/300/?blur=2";

echo"<h3>".$nom_du_produit."</h3>"

?>

<h4><?php echo $prix ?>$</h4>
<img src="<?php echo $url_produit ?>" alt=""> -->

<?php
define("PI", 3.141592);
$rayon = 12;
$cirocnférence = PI*$rayon;
echo $cirocnférence;

?>
</body>
</html>