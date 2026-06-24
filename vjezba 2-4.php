<?php
$c = "";

if (isset($_POST['submit'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];

    $c = (3 * $a - $b) / 2;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zadatak</title>
</head>
<body>

<h2>Izračun varijable c</h2>

<form method="post">
    <label>Vrijednost a:</label><br>
    <input type="number" name="a" step="any" required><br><br>

    <label>Vrijednost b:</label><br>
    <input type="number" name="b" step="any" required><br><br>

    <input type="submit" name="submit" value="Pošalji">
</form>

<br>

<?php
if ($c !== "") {
    echo "<p>Rezultat: c = $c</p>";
}
?>

</body>
</html>
