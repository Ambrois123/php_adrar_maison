<?php 

if(isset($_POST["champs1"]) && isset($_POST["champs2"])){
        if(!empty($_POST["champs1"]) || !empty($_POST["champs2"])){

            echo "<p>$_POST[champs1]</p>";
            echo "<p>$_POST[champs2]</p>";
    
        }
    }


echo "<pre>";
echo "\$_POST:";
print_r($_POST);
echo "</pre>";