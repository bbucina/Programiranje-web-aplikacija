<?php
$rezultat = "";

if (isset($_POST['submit'])) {

    $k1 = $_POST['kol1'];
    $k2 = $_POST['kol2'];

    if ($k1 < 1 || $k1 > 5 || $k2 < 1 || $k2 > 5) {
        $rezultat = "Ocjene moraju biti između 1 i 5";
    } else {

        if ($k1 == 1 || $k2 == 1) {
            $rezultat = "Konačna ocjena: 1";
        } else {
            $prosjek = ($k1 + $k2) / 2;
            $konacna = round($prosjek);
            $rezultat = "Prosjek: $prosjek <br> Konačna ocjena: $konacna";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ocjene</title>

<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f2f2f2;
    font-family: Arial;
}

.container {
    background: white;
    padding: 30px;
    border-radius: 10px;
    width: 300px;
    text-align: left;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

input, button {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
}

button {
    background-color: blue;
    color: white;
    border: none;
    border-radius: 5px;
}

.result {
    margin-top: 15px;
    font-weight: bold;
}
</style>

</head>
<body>

<div class="container">

<form method="post">
    <label>I. kolokvij:</label>
    <input type="number" name="kol1" required>

    <label>II. kolokvij:</label>
    <input type="number" name="kol2" required>

    <button type="submit" name="submit">Izračunaj</button>
</form>

<div class="result">
<?php echo $rezultat; ?>
</div>

</div>

</body>
</html>
