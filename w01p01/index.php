<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
</head>

<body>
    <?php
    $imie = "Artur";
    // echo "<h1>Witaj $imie</h1>";
    // echo "<br>";
    // echo '<h1 style="color: red">Witaj '.$imie.'</h1>';
    $paleta = [ "Red"=>"#FF0000", 
                "Green"=>"#00FF00", 
                "Blue"=>"#0000FF"];
    foreach($paleta as $kolor=>$kod)
    {
        echo "<span style=\"color: $kod\">$kolor</span><br>";
    }
    ?>
</body>

</html>