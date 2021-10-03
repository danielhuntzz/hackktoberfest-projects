<?php
$get = $_GET['id'];
$url = 'https://kodepos.vercel.app/search/?q='$get;
$result = file_get_contents($url);
$data = json_decode($result);
$pos = $data->data[0]->postalcode;
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
  <h3>Country <?=$pos?></h3>
</body>
</html>
