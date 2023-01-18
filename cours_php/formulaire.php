<?php
if(isset($_POST["champs1"]) && isset($_POST["champs2"])){
    if(!empty($_POST["champs1"]) || !empty($_POST["champs2"])){

        

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="reception.php" method="post">
    <label for="champs1">Champs 1</label>
    <input type="text" name="champs1" id="champs1" value ="">

    
    <label for="champs2">Champs 2</label>
    <input type="text" name="champs2" id="champs2" value ="">

    <input type="submit" value="Envoyer">
</form>  
</body>
</html>