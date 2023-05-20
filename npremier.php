<!DOCTYPE html>
<html>
<head>
    <title> calcul </title>
</head>
<body>
    <h1>Calcul de la somme des N premiers nombres entiers</h1>
    <form method="post" action="">
        <label for="number">Entrez un nombre entier (N) :</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];
        $sum = 0;

        for ($i = 1; $i <= $number; $i++) {
            $sum += $i;
        }

        echo "<p>La somme des $number premiers nombres entiers est : $sum</p>";
    }
    ?>
</body>
</html>



