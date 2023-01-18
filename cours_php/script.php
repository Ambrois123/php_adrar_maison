<!DOCTYPE html>
<html>
<head>
<title>Mon premier script</title>
</head>
<body>


<?php
define("PI", 3.141592);
$rayon = 12;
$cirocnférence = PI*$rayon;
echo $cirocnférence;
echo "<br>";

?>
<?php
$variable = "Bonjour";
$type = gettype($variable);
?>

<?php
$age = 23;
$prenom = "Maxime";
$taille = 1.70;
$typeAge = gettype($age);
$typePrenom = gettype($age);
$typeTaille = gettype($age);

var_dump (is_integer($age));
echo "<br>";
echo is_float($taille);
echo "<br>";
echo is_string($prenom);
?>
<table>
    <tr>
        <th>Identifiant</th>
        <th>Valeur</th>
        <th>Type</th>
    </tr>
    <tr>
        <td><?php echo "\$age" ?></td>
        <td><?= $age ?></td>
        <td><?= $typeAge?></td>
    </tr>
    <tr>
        <td><?php echo "\$prenom" ?></td>
        <td><?php echo $prenom ?></td>
        <td><?php echo $typePrenom?></td>
    </tr>
    <tr>
        <td><?php echo "\$taille" ?></td>
        <td><?php echo $taille ?></td>
        <td><?php echo $typeTaille ?></td>
    </tr>
</table>

<p><?php ?></p>
<p>Type de variable : <?php echo $type ?></p>
</body>
</html>