<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $view ?></title>
</head>

<body>
  <a href='/logout'>
    <?php
    if ($app->isLogin()) {
      echo "Logout";
    }
    ?>
  </a>
  {{content}}
</body>

</html>