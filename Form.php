<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Voorbeeld from</h1>

    <form method="post">
      <input type="text" name="invul1" value="18"><br>
      <input type="text" name="invul2" value="aa"><br>
      <input type="submit" name="knop" value="Verzenden">
    </form>

    <?php
        // test of verzendknop is ingedrukt?
        if (isset($_POST['knop'])){
          // print alle ingevulde velden van het formulier
          echo "Waarde van invulveld: " . $_POST['invul1'] . "<br>";
        }
        ?>
</head>
<body>

</body>
</html>