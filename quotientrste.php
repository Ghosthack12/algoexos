<!DOCTYPE html>
<html>
<head>
    <title>Calcul du quotient et du reste</title>
</head>
<body>
    <form method="post" action="">
        <label for="inputA">Entier A:</label>
        <input type="text" id="inputA" name="inputA" required><br><br>

        <label for="inputB">Entier B:</label>
        <input type="text" id="inputB" name="inputB" required><br><br>

        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = intval($_POST['inputA']);
        $b = intval($_POST['inputB']);

        $quotient = 0;
        $reste = $a;

        while ($reste >= $b) {
            $reste -= $b;
            $quotient++;
        }

        echo "Quotient : " . $quotient . "<br>";
        echo "Reste : " . $reste . "<br>";
    }
    ?>
</body>
</html>
