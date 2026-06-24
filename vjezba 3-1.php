<?php
$poruka = "";

if (isset($_POST['submit'])) {
    $korisnik = $_POST['broj'];
    $random = rand(1, 9);
    if ($korisnik == $random) {
        $poruka = "Pogodili ste! Broj je bio $random";
    } else {
        $poruka = "Niste pogodili. Računalo je zamislilo $random";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pogađanje broja</title>
</head>
<body>

<h2>Pogodi broj (1 - 9)</h2>

<form method="post">
    <label>Unesite broj:</label><br>
    <input type="number" name="broj" min="1" max="9" required><br><br>

    <input type="submit" name="submit" value="Pošalji">
</form>

<br>

<?php
if ($poruka != "") {
    echo "<p>$poruka</p>";
}
?>

</body>
</html>
