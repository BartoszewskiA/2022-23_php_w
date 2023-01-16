<?php
session_start();
if(isset($_GET['login']) &&
   isset($_GET['pass']) &&
   !empty($_GET['login']) &&
   !empty($_GET['pass'])
)
$_SESSION['user'] = $_GET['login'];
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
</head>

<body>
    <form method="GET">
        <label>Login:</label>
        <input name="login" type="text" />
        <label>Pass:</label>
        <input name="pass" type="password" />
        <input type="submit" />
    </form>
    <a href="podstrona.php">podstrona</a>
    <?php
    if (isset($_SESSION['user']))
        echo "<p>Witaj " . $_SESSION['user'] . "!</p>";
    else
        echo "niezalogowany";
    ?>
</body>

</html>