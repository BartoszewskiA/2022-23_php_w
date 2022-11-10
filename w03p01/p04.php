<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
</head>

<body>
    <?php
    $nazwa = "dane.txt";
    $do_dopisania = "Dopidany tekst";
    if (file_exists($nazwa)) {
       $plik = fopen($nazwa,'r');
         $zawartosc = fread($plik, filesize($nazwa));
       fclose($plik);
       $plik = fopen($nazwa, "w");
       fwrite($plik,$do_dopisania.$zawartosc);
    } else
        echo "Błąd pliku";
    ?>
</body>

</html>