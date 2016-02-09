<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Destinations</title>
  <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
</head>
<body>
  <ul>
  <?php foreach($destinations as $ville):?>
    <li class="city" id="city-<?php echo $ville['id']?>">
    <?php echo $ville["name"];?>
    <a class="city-delete" href="#" data-cityid="<?php echo $ville['id']?>">X</a>
    </li>
  <?php endforeach;?>
  </ul>

<script>
$(document).on('click','.city-delete', function(e){

  var city_id = $(this).data('cityid');

  $.post('/city/delete/'+city_id,function(data){
    console.log(data);
  })

  e.preventDefault();
})
</script>

</body>
</html>