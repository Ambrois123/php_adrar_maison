<?php
echo "<pre>";
print_r($_GET);
echo "<pre>";

if(isset($_GET['form_name']) && isset($_GET['form_password']) && isset($_GET['form_email'])){
    if(!empty($_GET['form_name']) && !empty($_GET['form_password']) && !empty($_GET['form_email'])){
            //BDD
            $mysqli = new mysqli("localhost", "projet_formation", "040904Adanledj1", "shoes_shop");
            if($mysqli){
                // créer utilisateur dans mysql
                //connection
                echo "<p>Connexion réussie. </p>";
                //insert data
                $data = $mysqli->prepare("INSERT INTO users (users_name, users_password, users_email)
                VALUES('".$_GET["form_name"]."', '".$_GET["form_password"]."', '".$_GET["form_email"]."')");
                $data->execute();
                // recup data
                $result = $mysqli->query("SELECT * FROM users");
                echo "<pre>";
                print_r($result->fetch_assoc());
                echo "</pre>";

                // echo "<table>";
                // echo "<tr><th>Nom</th><th>Mot de passe</th><th>Email</th>";
                // echo "</tr><tr><td>".$_GET['form_name']."</td><td>".$_GET['form_password']."</td><td>".$_GET['form_email']."</td><td>".$_GET['form_gps']."</td></tr>";
                // echo "</table>";
            }else{
                echo "<p>La connexion a échoué. </p>";
            }
    }
}
/**Possible aussi :
 * if(isset($_GET['form_name']) && isset($_GET['form_password']) && isset($_GET['form_email']) 
 * $$ !empty($_GET['form_name']) && !empty($_GET['form_password']) && !empty($_GET['form_email'])){
 * }
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
        <input type="text" name="form_name">
        <input type="password" name="form_password">
        <input type="email" name="form_email">
        <input type="hidden" name="form_gps" value="">
        <input type="submit" value="Envoyer" name="form_submit">

    </form>
</body>
</html>