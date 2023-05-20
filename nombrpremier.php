<!DOCTYPE html>
<html>
<head>
    <title>nombre premier</title>
</head>
<body>
    <h1>Nombre premier</h1>

    <form method="post" action="">
        <label for="number">Entrez un nombre entier :</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Vérifier">
    </form>

    <?php
    function isPrime($number)
    {
        if ($number <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }

        return true;
    }

    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        if (is_numeric($number)) {
            if (isPrime($number)) {
                echo "<p>Le nombre $number est un nombre premier.</p>";
            } else {
                echo "<p>Le nombre $number n'est pas un nombre premier.</p>";
            }
        } else {
            echo "<p>Veuillez entrer un nombre entier valide.</p>";
        }
    }
    ?>
</body>
</html>
