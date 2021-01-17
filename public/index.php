<?php
require_once('./pdo.php');

$obj = new Connect();

$pdo = $obj->pdo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIFF体重管理</title>
</head>
<body>
    <?=$pdo?>
</body>
</html>