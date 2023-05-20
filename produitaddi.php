<!DOCTYPE html>
<html>
<head>
    <title>Calcul du produit de deux entiers</title>
</head>
<body>
    <form method="post" action="">
        <label for="num1">Entier 1 :</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Entier 2 :</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        function produit($a, $b) {
            $result = 0;
            for ($i = 0; $i < $b; $i++) {
                $result += $a;
            }
            return $result;
        }

        $produit = produit($num1, $num2);
        echo "Le produit de $num1 et $num2 est : $produit";
    }
    ?>
</body>
</html>
