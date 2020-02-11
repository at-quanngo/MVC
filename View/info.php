<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  ul{
  list-style-type: circle;
</style>
</head>
<body>
  <ul>
    <li><?php echo $dataID['id']; ?></li>
    <li><?php echo $dataID['full_name']; ?></li>
    <li><?php echo $dataID['email']; ?></li>
    <li><?php echo $dataID['rank']; ?></li>
    <li><?php echo $dataID['is_active']; ?></li>
    <li><?php echo $dataID['created_at']; ?></li>
  </ul>
</body>
</html>