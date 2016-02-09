<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Destinations</title>
</head>
<body>
  <ul>
  <?php foreach($destinations as $ville):?>
    <li>
    <?php echo $ville["name"];?>
    <a href="/city/delete/<?php echo $ville['id']?>">X</a>
    </li>
  <?php endforeach;?>
  </ul>
</body>
</html>