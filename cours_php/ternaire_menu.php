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
  $is_admin = FALSE;
?>

<menu>
  <li> <a href="#">Contact</a> </li>
  <li> <a href="#">Blog</a> </li>
  <li> <a href="#">A propos</a> </li>
  <?php echo $is_admin ? '<li> <a href="#">Administration</a> </li>' : ""; ?>
</menu>
</body>
</html>