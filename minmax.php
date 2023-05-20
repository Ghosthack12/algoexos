<?php

function trouverMinEtMax($nombres) {
    $minimum = $nombres[0];
    $maximum = $nombres[0];
    
    foreach ($nombres as $nombre) {
        if ($nombre < $minimum) {
            $minimum = $nombre;
        }
        
        if ($nombre > $maximum) {
            $maximum = $nombre;
        }
    }
    
    return array('minimum' => $minimum, 'maximum' => $maximum);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification si les champs A et B ont été soumis
    if (isset($_POST["a"]) && isset($_POST["b"])) {
        // Récupération des champs A et B
        $a = $_POST["a"];
        $b = $_POST["b"];
        
        // Convertir les nombres en un tableau
        $nombresArray = array($a, $b);
        
        // Recherche du minimum et du maximum
        $resultat = trouverMinEtMax($nombresArray);
        
        // Affichage des résultats
        echo 'Le minimum est : ' . $resultat['minimum'] . '<br>';
        echo 'Le maximum est : ' . $resultat['maximum'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Recherche du minimum et du maximum</title>
</head>
<body>
    <h1>Recherche du minimum et du maximum</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="a">Entrez la valeur de A :</label>
        <input type="text" id="a" name="a"><br>
        
        <label for="b">Entrez la valeur de B :</label>
        <input type="text" id="b" name="b"><br>
        
        <input type="submit" value="Rechercher">
    </form>
</body>
</html>
