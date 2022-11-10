<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
</head>

<body>
    <?php
    $nazwa = "dane.txt";
    if (file_exists($nazwa)) {
        $plik = fopen($nazwa, 'r');
        while (!feof($plik)) {
            $wiersz = fgets($plik);
            $tab[] = $wiersz;
        }
        fclose($plik);
    } else
        echo "Błąd pliku";

    foreach ($tab as $s)
        echo "<p>" . $s . "</p>";
    ?>
</body>

</html>