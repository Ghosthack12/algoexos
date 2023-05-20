<!DOCTYPE html>
<html>
<head>
    <title>Calcul de la somme des chiffres</title>
</head>
<body>
    <form method="POST" action="">
        <label for="number">Entier N :</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $sum = 0;
        $digits = str_split($number);

        foreach ($digits as $digit) {
            $sum += $digit;
        }

        echo "<p>La somme des chiffres de $number est : $sum</p>";
    }
    ?>
</body>
</html>
