<!DOCTYPE html>
<html>
<head>
    <title>Calcul du Binaire</title>
</head>
<body>
    <h2>Calcul du Binaire</h2>
    <form method="post" action="">
        <label for="number">Entier N :</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Convertir">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $number = $_POST["number"];
        $binary = decbin($number);

        echo "Le binaire de $number est : $binary";
    }
    ?>
</body>
</html>
