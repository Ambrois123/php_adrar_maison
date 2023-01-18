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
        switch($departement=31){
            case 80 : echo "Tarn";
            break;
            case 95 : echo "Val d'Oise";
            break;
            case 30 : echo "Gard";
            break;
            case 31 : echo "Haute et garonne";
            break;
            default;
            echo "Plus de précision";
            break;
        }
    ?>



</body>
</html>