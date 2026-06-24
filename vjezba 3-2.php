<?php
$rezultat = "";

if (isset($_POST['submit'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];
    $operacija = $_POST['operacija'];

    switch ($operacija) {
        case "+":
            $rezultat = $a + $b;
            break;
        case "-":
            $rezultat = $a - $b;
            break;
        case "*":
            $rezultat = $a * $b;
            break;
        case "/":
            if ($b != 0) {
                $rezultat = $a / $b;
            } else {
                $rezultat = "Dijeljenje s nulom nije dozvoljeno";
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body>

<form method="post">
    <input type="number" name="a" step="any" required><br><br>

    <select name="operacija">
        <option value="+">Zbrajanje</option>
        <option value="-">Oduzimanje</option>
        <option value="*">Množenje</option>
        <option value="/">Dijeljenje</option>
    </select><br><br>

    <input type="number" name="b" step="any" required><br><br>

    <input type="submit" name="submit" value="Izračunaj">
</form>

<p><?php echo $rezultat; ?></p>

</body>
</html>
