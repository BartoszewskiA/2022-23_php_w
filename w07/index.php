<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
    <?php
    $host = 'localhost';
    $user = 'student';
    $pass = '123';
    $baza = 'wyklad09';
    $con = mysqli_connect($host, $user, $pass, $baza);
    $zapytanie = 'SELECT * FROM przedmioty';
    $odpowiedz = mysqli_query($con, $zapytanie);
    echo "Luczba wierszy: ". mysqli_num_rows($odpowiedz)."<br><br>";
    while($wiersz = mysqli_fetch_assoc($odpowiedz))
    {
        foreach($wiersz as $klucz => $wartosc)
        {
            echo "<b>".$klucz.": </b> ";
            echo $wartosc."<br>";
        }
        //print_r($wiersz);
        //echo "<br><br>";
    }
    ?>
  </body>
</html>