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
<p>Napisz program, który dla danego x będącego liczbą rzeczywistą oblicza wartość wyrażenia</p>
<form method="post">
    <label for="a">Podaj x</label>
    <input type="number" name="a"> <br>

    <button name="submit">WYŚLIJ</button> <br>
</form>
<?php
function x($a)
{
    if($a>0)
    {
        $b=$a;
    }
    else
    {
        $b=$a*(-1);
    }
    echo "Wartość x:", pow($a,2)/pow((1+$b),2);
}
if(isset($_POST["submit"]))
{
    $b=$_POST["a"];
    x($b);
}
?>
</body>
</html>
