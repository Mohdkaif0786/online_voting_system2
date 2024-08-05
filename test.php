<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" accept-charset="utf-8">
  <input type="date" name="date" id="date" value="" />
  <button type="submit" name='submit'>submit</button>
</form>
</body>
</html>


<?php
if(isset($_POST['submit'])){
  echo 'true<pre>';
  print_r($_POST);
  $dt=new DateTime($_POST['date']);
  print_r($dt);
  $diff=$dt->diff(new DateTime);
  echo $diff->y;
  echo $diff->m;
  echo $diff->d;
}
else{
    echo 'false';
}
?>