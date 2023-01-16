<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['user']))
        echo "<p>Witaj " . $_SESSION['user'] . "!</p>";
    else
        echo "niezalogowany";
    ?>
    <br>
    <?php
    echo crc32("Haslo");

    // foreach($_SERVER as $klucz=>$wartosc)
    // {
    //     echo "<p> $klucz - $wartosc</p>";
    // }
    ?>
</body>

</html>