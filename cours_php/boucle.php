<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($i = 1; $i <= 10; $i++){
            echo $i;
            echo "<br>";
         } 
    ?>

    <?php
for($i=1;$i<7;$i++){
  echo "<h$i> Compteur \$i : $i </h$i>";
}
?>
 <?php
        for($i = 10; $i >1; $i--){
            echo $i;
            echo "<br>";
         } 
    ?>

<h4>Faire une boucle for qui affiche la table de 7.</h4>
    <?php
    echo
    $chiffre = 7;
    $prod =1;
        for($i = 1; $i <= 10; $i++){
            $prod = $chiffre*$i;
            echo $chiffre . ' * ' . $i . ' = ' . $prod . '<br>';
         };
        
    ?>

    <h5>correction</h5>
    <table>
    <tr><th>calcul</th><th>Valeur</th></tr>
    <?php
    $table = 7;
        for($i = 1; $i < 11; $i++)
        echo "<tr><td>$i*$table</td><td>". $i*$table . "</td></tr>";
    ?>
    </table>

    <h5>correction-foreach()</h5>
    
    
    <h4>Faire une boucle for qui affiche la table de 9 à l’envers</h4>
    <?php
        for($i = 10; $i >1; $i--){
            echo 9*$i;
            echo "<br>";
         }  
    ?>
    <h4>Faire une boucle for qui reproduit ce code HTML :</h4>
    <menu>
        <?php
            for($i = 1; $i <= 10; $i++){
                echo "<li>ligne $i</li>";
                echo "<br>";
            } 
        ?>
    </menu>

    <h4>Faire une boucle for qui affiche les puissances de 10.</h4>
    <?php
        for($i = 1; $i <= 10; $i++){
            echo "Puissance de 10**$i =" . 10**$i;
            echo "<br>";
        } 
    ?>
    
    <h1>foreach() tableau associatif</h1>
    <?php
    $eleves = ["prenom"=>"Maxime","nom"=>"Dupont","taille"=>1.70];
    foreach ($eleves as $cle=> $valeur){
        echo "<p>$cle => $valeur</p>";
    }
    ?>
    
    <h1>foreach() tableau indexé</h1>
    <?php
    $fruits = ["pomme", "tomate", "mangue"];
    foreach($fruits as $i=>$fruit){
        echo "<p>$fruit $i</p>";
    }

    ?>
    <h3>Afficher uniquement les notes au dessus de 10 avec une boucle for ou foreach.</h3>
    <?php 
        $notes= [16,17,10,2,6];
        $coef = [2,1,4,1,3];
        foreach($notes as $note){
                if($note>10){
                    echo $note;
                    echo "<br>";
                }
        }
    ?>
<h3>Afficher les notes en prenant en compte leurs coefficients respectif</h3>
    <?php
        for($i =0; $i < count($notes); $i++){
            
            echo "Notes avec coef = " . $notes[$i]*$coef[$i];
            echo "<br>";
        
    }
    ?>
    <h3>while</h3>
    <?php
        $tableau = [4,8,9,7,12];
        $i = 0;
        while($i<10){
        echo "<p>$tableau[$i]</p>";
        $i++;
    }
?>

<h5>Correction exercec 2</h5>
<?php 
        $notes= [16,17,10,2,6];
        $coef = [2,1,4,1,3];
        foreach($notes as $i=>$note){
            echo $note*$coef[$i];
            echo "<br";
            echo $notes[$i]*$coef[$i];
        }
    ?>
</body>
</html>