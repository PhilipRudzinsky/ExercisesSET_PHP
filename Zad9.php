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
<p>Napisz program, który zamienia długość podaną w calach na mm.
    (1cal=25,3995 mm)</p>

<form method="post">
    <label for="a">Podaj długość w calach</label>
    <input type="number" name="a"> <br>

    <button name="submit">WYŚLIJ</button> <br>
</form>
<?php
function dlugosc($a)
{
    echo "Długość $a cali to: ",$a*25.3995,"mm";
}
if(isset($_POST["submit"]))
{
    $b=$_POST["a"];
    dlugosc($b);
}
?>
</body>
</html>
