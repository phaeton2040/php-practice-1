<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP Practice</title>
</head>
<body>
<?php include "header.inc.php" ?>

<div class="container">
    <h1>
        <?php echo $greeting; ?>
    </h1>
    <p>
        Меня зовут - <?php echo $first_name . " " . $last_name; ?>
    </p>
    <p>
        Мне <?php echo $age ?> лет
    </p>
    <p>
        Мой родной город - <?php echo $city ?>
    </p>
</div>
<hr>
<?php include "cats.inc.php" ?>
<?php include "knowledge.inc.php" ?>
<footer>
    Спасибо за внимание!
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>