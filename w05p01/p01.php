    <?php
    session_start();
    if (isset($_SESSION['licznik']))
        $_SESSION['licznik']++;
    else
        $_SESSION['licznik'] = 1;
    ?>
    <!doctype html>
    <html>

    <head>
        <meta charset="UTF-8" />
        <title></title>
    </head>
        <?php
        echo '<p>Strona została odświerzona: '.$_SESSION['licznik'].' razy</p>';
        ?>
    <body>
    </body>

    </html>