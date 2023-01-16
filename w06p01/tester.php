<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <style type="text/css">
    <!--
    body {
        display: flex;
    }
    form {
        display: flex;
        flex-direction: column;
        width: 400px;
        border: 1px solid black;
        padding: 10px;
    }
    div {
               width: 400px;
        border: 1px solid black;
        padding: 10px;
    }
    -->
    </style>
  </head>
  <body>
    <form>
        <label>Maska:</label>
        <textarea name="maska" cols="40" rows="5"
        type="text"></textarea>
        <label>Wyrażenie:</label>
        <textarea name="wyrazenie" cols="40" rows="5"
        type="text"></textarea>
        <input type="submit">
    </form>
    <div>
    <?php
        if(isset($_GET['maska']) && isset($_GET['wyrazenie']))
        {
          if(preg_match($_GET['maska'],$_GET['wyrazenie'],$tab))
          {
            echo "<p>".$_GET['maska']." - ",$_GET['wyrazenie']."</p>";
            echo "<h3>Jest dopasowanie</h3>";
            print_r($tab);
          }
          else 
          {
            echo "<p>".$_GET['maska']." - ",$_GET['wyrazenie']."</p>";
            echo "<h3>Brak dopasowania</h3>";
          } 
        }
    ?>
    </div>
  </body>
</html>