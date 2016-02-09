<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Destinations</title>
</head>
<body>
  <ul>
  <?php foreach($destinations as $ville):?>
    <li><?php echo $ville["name"];?></li>
  <?php endforeach;?>
  </ul>
</body>
</html>