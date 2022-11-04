<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  
  <body>
    <?php
    $tekst = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum convallis, quam nec malesuada rhoncus, odio metus vestibulum quam, in laoreet ex odio scelerisque mi. Sed sit amet egestas augue. Proin fermentum sit amet nibh eget facilisis. Suspendisse ultrices et lacus at placerat.";
    $tab = explode(".",$tekst);
    // for($i=0; $i<sizeof($tab); $i++)
    // {
    //     echo "<p>$tab[$i]</p>";
    // }
    foreach($tab as $zdanie)
        echo "<p>$zdanie</p>";
    echo "<p>----------------------------------</p>";
    $wynik = implode("---",$tab);
    echo $wynik;
    ?>
  </body>
</html>