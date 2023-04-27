<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Filip Rudziński</h1>
<p>Napisz program, który przelicza czas podany w sekundach na zapis uwzględniający godziny, minuty oraz sekundy. Program zadziała dla s większego od 0.
    Przykład: dla s = 4000 wynikiem powinien być ciąg znaków : 1g6m40s</p>

<form method="post">
    <label for="a">Podaj s</label>
    <input type="number" name="a"> <br>

    <button name="submit">WYŚLIJ</button> <br>
</form>
<?php

function czas($a)
{
    $g = intval($a/3600);
    $m = intval($a/60-$g*60);
    $s = intval($a-($g*3600+$m*60));
    echo "$g g $m m $s s ";
}
if(isset($_POST["submit"]))
{
    $b=$_POST["a"];
    czas($b);
}
?>
</body>
</html>