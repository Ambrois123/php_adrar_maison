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

$eleves = [
    ["prenom"=>"Maxime","nom"=>"Dupont","taille"=>1.70],
    ["prenom"=>"Guillaume","nom"=>"Denis","taille"=>1.90],
    ["prenom"=>"Mathieu","nom"=>"Gratade","taille"=>1.72]
  ];

echo "<pre>";
print_r ($eleves[0]["prenom"]);
echo "<pre>";

    ?>
    <table>
        <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Taille</th>
        </tr>
        <tr>
            <td><?php echo $eleves[0]["prenom"] ?></td>
            <td><?php echo $eleves[0]["nom"] ?></td>
            <td><?php echo $eleves[0]["taille"] ?></td>
        </tr>
        <tr>
            <td><?php echo $eleves[1]["prenom"] ?></td>
            <td><?php echo $eleves[1]["nom"] ?></td>
            <td><?php echo $eleves[1]["taille"] ?></td>
        </tr>
        <tr>
            <td><?php echo $eleves[2]["prenom"] ?></td>
            <td><?php echo $eleves[2]["nom"] ?></td>
            <td><?php echo $eleves[2]["taille"] ?></td>
        </tr>
    </table>
</body>
</html>