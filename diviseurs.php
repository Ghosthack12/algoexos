<!DOCTYPE html>
<html>
<head>
    <title>Déterminer les diviseurs d'un entier</title>
</head>
<body>
    <form method="POST" action="">
        <label for="number">Entier :</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Les diviseurs</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $number = $_POST["number"];
        $divisors = array();

        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i === 0) {
                $divisors[] = $i;
            }
        }

        echo "Les diviseurs de $number sont : ";
        foreach ($divisors as $divisor) {
            echo "$divisor ";
        }
    }
    ?>
</body>
</html>
