<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $colore1 = rand(0, 255);
        $colore2 = rand(0, 255);
        $colore3 = rand(0, 255);
        $nome = "alessandro";

        echo "<h1 style='color: rgb($colore1, $colore2, $colore3)'>$nome</h1>";
    ?>
</body>
</html>