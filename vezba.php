<?php
    
    
    ?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
    </head>
    <body>
    <form method="POST" action="baza.php">
        <input type="text" name="ime_proizvoda" placeholder="ime" required>
        <input type="text" name="opis" placeholder="opis" required>
        <input type="number" step="0.01" name="cena" placeholder="cena" required>
        <input type="text" name="datum_nabavke" placeholder="datum" required>
        <input type="number" name="kolicina" placeholder="kolicina" required>

        <button type="submit">dodaj proizvod</button>


    </form>
    </body>
</html>
