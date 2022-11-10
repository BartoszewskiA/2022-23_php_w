<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
 
    <?php
    function licz()
    {
        static $licznik=0;
        $licznik++;
        echo $licznik."<br>";
    }
    for($i=0; $i<10; $i++)
        licz();
    ?>
  </body>
</html>