<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja prva stranka v php</title>
</head>
<body>

    <h1>Vitajte na mojej prvej stranke v php!</h1>
    <?php
    echo "<h1>Hello World!</h1>";
    echo "Dnes je " . date(format:  "d.m.Y") . "<br>";
    echo "Aktualny cas je " . date(format:"H:i:s") . "<br>";
    ?>
    
</body>
</html>