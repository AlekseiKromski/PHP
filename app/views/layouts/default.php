<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        echo $this->getMeta();
    ?>
</head>
<body>
    <h1>Шаблон Default</h1>
    <? echo $content; ?>
    <p><?php  echo $name;?></p>
    <p><?php  echo $age;?></p>
</body>
</html>