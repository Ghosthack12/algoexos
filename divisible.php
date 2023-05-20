<!DOCTYPE html>
<html>
<head>
    <title>divisibilité</title>
</head>
<body>
    <h1>divisibilité</h1>

    <form method="post" action="">
        <label for="number_a">Entier A :</label>
        <input type="number" id="number_a" name="number_a" required><br><br>

        <label for="number_b">Entier B :</label>
        <input type="number" id="number_b" name="number_b" required><br>

        <input type="submit" value="Vérifier">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numberA = $_POST["number_a"];
        $numberB = $_POST["number_b"];

        if ($numberB != 0 && $numberA % $numberB == 0) {
            echo "<p>$numberA est divisible par $numberB.</p>";
        } else {
            echo "<p>$numberA n'est pas divisible par $numberB.</p>";
        }
    }
    ?>
</body>
</html>
