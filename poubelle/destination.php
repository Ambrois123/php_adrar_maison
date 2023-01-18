<?php
echo "<table>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>Mot de passe</th>";
echo "<th>Email</th>";
echo "</tr>";
echo "<tr>";
echo "<td>".$_GET['form_name']."</td>";
echo "<td>".$_GET['form_password']."</td>";
echo "<td>".$_GET['form_email']."</td>";
echo "<td>".$_GET['form_gps']."</td>";
echo "</tr>";
echo "</table>";

// echo "<pre>";
// print_r($_GET);
// echo "<pre>";

// echo "<p>" . $_GET['form_name'] . "</p>";
// echo "<p>" . $_GET['form_password'] . "</p>";
// echo "<p>" . $_GET['form_gps'] . "</p>";
// echo "<p>" . $_GET['form_submit'] . "</p>";
?>