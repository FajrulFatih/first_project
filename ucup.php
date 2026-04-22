<?php
    $ucup = [
        "nama" => "Ucup",
        "umur" => 17,
        "pekerjaan" => "Orang goblok yang suka ngecas"
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($ucup as $ayam): ?>
        <p><?= $ayam; ?></p>
    <?php endforeach; ?>
</body>
</html>