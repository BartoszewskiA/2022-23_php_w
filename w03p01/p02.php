<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
</head>

<body>
    <?php
    $a = 10;
    $b = 20;

    function licz()
    {
        //    global $a, $b;
        // return $a + $b;
        return $GLOBALS['a']+$GLOBALS['b'];
    }
    echo licz();
    ?>
</body>

</html>