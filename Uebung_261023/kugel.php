<!DOCTYPE html>
<html>
<head>
    <title>Kugel-Werte erfassen</title>
</head>
<body>
    <h1>Kugel-Werte erfassen</h1>
    <form action="ziel.php" method="post">
        <label for="radius">Radius der Kugel (in cm):</label>
        <input type="text" id="radius" name="radius" required>
        <br><br>

        <label for="volumen">Volumen der Kugel:</label>
        <input type="text" id="volumen" name="volumen" readonly>
        <br><br>

        <label for="oberflaeche">Oberfläche der Kugel:</label>
        <input type="text" id="oberflaeche" name="oberflaeche" readonly>
        <br><br>

        <input type="button" value="Berechnen" onclick="berechneKugel()">
    </form>

    <script>
        function berechneKugel() {
            const radius = parseFloat(document.getElementById("radius").value);

            if (!isNaN(radius)) {
                const volumen = (4 / 3) * Math.PI * Math.pow(radius, 3);
                const oberflaeche = 4 * Math.PI * Math.pow(radius, 2);

                document.getElementById("volumen").value = volumen.toFixed(2);
                document.getElementById("oberflaeche").value = oberflaeche.toFixed(2);
            } else {
                alert("Bitte geben Sie einen gültigen Zahlenwert für den Radius ein.");
            }
        }
    </script>
</body>
</html>
<?php
// Funktion zur Berechnung des Volumens einer Kugel
function berechneKugelVolumen($radius) {
    if ($radius > 0) {
        return (4/3) * M_PI * pow($radius);
    } else {
        return "Ungültiger Radius (muss größer als 0 sein)";
    }
}

// Funktion zur Berechnung der Oberfläche einer Kugel
function berechneKugelOberflaeche($radius) {
    if ($radius > 0) {
        return 4 * M_PI * pow($radius, 2);
    } else {
        return "Ungültiger Radius (muss größer als 0 sein)";
    }
}
$kugelVolumen = berechneKugelVolumen($radius);
$kugelOberflaeche = berechneKugelOberflaeche($radius);
echo "Volumen der Kugel: $kugelVolumen<br>";
echo "Oberfläche der Kugel: $kugelOberflaeche<br>";
?>
