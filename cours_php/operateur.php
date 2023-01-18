<?php

$compteur = 0;
$valeur1 = $compteur++; //0
var_dump($valeur1) ;
echo "<br>";
$valeur2 = $compteur++; //1
var_dump($valeur2);
echo "<br>";
$valeur3 = $compteur++; //2
var_dump($valeur3);
echo "<br>";
$valeur4 = $compteur++; //2
var_dump($valeur4);

$notes = [17, 12, 14, 5, 8, 20];
echo "<pre>";
print_r ($notes);
echo "<pre>";

$eleves = [
    ["prenom"=>"Maxime","nom"=>"Dupont","taille"=>1.70],
    ["nom"=>"Guillaume","prenom"=>"Denis","taille"=>1.90],
    ["nom"=>"Mathieu","prenom"=>"Gratade","taille"=>1.72],
    ["nom"=>"Massinissa","prenom"=>"Dupont","taille"=>1.70],
    ["nom"=>"Maxime","prenom"=>"Dupont","taille"=>1.70],
    ["nom"=>"Maxime","prenom"=>"Dupont","taille"=>1.70],
  ];

echo "<pre>";
print_r ($eleves);
echo "<pre>";



$product = [
    "name"=>"Pantalon Cargo",
    "price"=>34,
    "category"=>"Pantalons",
    "color"=>[
        "red",
        "blue"
    ],
    "taille"=>array(
        34,
        45
    )
];

echo "<pre>";
print_r ($product["colors"][1]);
echo "<pre>";