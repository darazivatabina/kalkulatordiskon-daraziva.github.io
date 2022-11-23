<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Diskon
    </title>
</head>
<body>
<style>
        body{
    background-color: #4E6C50;
    color: #F0EBCE;
    font-family: 'Patrick Hand', cursive;
}

h1{
    text-align: center;
}

h3{
   text-align:center;
   margin-top: -30px;
}

form{
    text-align: center;
}

 x{
    margin-top: -30px;

}
</style>
</body>
</html>

<?php
include "Kalkulator.php";
$Kalku = new Kalkulator();


echo '<h1>Kalkulator Diskon</h1>';
echo '<h3>by: daraziva</h3>';
echo '<form method="POST" class="form">';
echo ' Harga Awal:  <input type="number" name="x" size="20"> &nbsp; <br></br>';
echo ' Diskon: <input type="text" name="y" size="3" > &nbsp;% <br></br>';
echo '<label></label> &nbsp;';
echo '<input type="submit" value="Hitung"><br></br>';
echo '</form>';

if ($_POST) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    echo "<center>Maka harga setelah diskon adalah Rp. ".$Kalku->setSatu($x, $y)."<br /> <br /> </center>";
}
?>