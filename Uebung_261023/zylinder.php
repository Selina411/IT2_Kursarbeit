<!DOCTYPE html>
<html>
<head>
    <title>Zylinder-Werte erfassen</title>
</head>
<body>
    <h1>Zylinder-Werte erfassen</h1>
    <form action="ziel.php" method="post">
        <label for="radius">Radius des Zylinders (in cm):</label>
        <input type="text" id="radius" name="radius" required>
        <br><br>

        <label for="hoehe">Höhe des Zylinders (in cm):</label>
        <input type="text" id="hoehe" name="hoehe" required>
        <br><br>

        <label for="volumen">Volumen des Zylinders:</label>
        <input type="text" id="volumen" name="volumen" readonly>
        <br><br>

        <label for="oberflaeche">Oberfläche des Zylinders:</label>
        <input type="text" id="oberflaeche" name="oberflaeche" readonly>
        <br><br>

        <label for="lateralflaeche">Laterale Oberfläche des Zylinders:</label>
        <input type="text" id="lateralflaeche" name="lateralflaeche" readonly>
        <br><br>

        <input type="button" value="Berechnen" onclick="berechneZylinder()">
    </form>

    <script>
        function berechneZylinder() {
            const radius = parseFloat(document.getElementById("radius").value);
            const hoehe = parseFloat(document.getElementById("hoehe").value);

            if (!isNaN(radius) && !isNaN(hoehe)) {
                const volumen = Math.PI * Math.pow(radius, 2) * hoehe;
                const oberflaeche = 2 * Math.PI * radius * (radius + hoehe);
                const lateralflaeche = 2 * Math.PI * radius * hoehe;

                document.getElementById("volumen").value = volumen.toFixed(2);
                document.getElementById("oberflaeche").value = oberflaeche.toFixed(2);
                document.getElementById("lateralflaeche").value = lateralflaeche.toFixed(2);
            } else {
                alert("Bitte geben Sie gültige Zahlenwerte für Radius und Höhe ein.");
            }
        }
    </script>
</body>
</html>
<?php
// Funktion zur Berechnung des Volumens eines Zylinders
function berechneZylinderVolumen($radius, $hoehe) {
    if ($radius > 0 && $hoehe > 0) {
        return M_PI * pow($radius, 2) * $hoehe;
    } else {
        return "Ungültige Werte (Radius und Höhe müssen größer als 0 sein)";
    }
}

// Funktion zur Berechnung der Oberfläche eines Zylinders
function berechneZylinderOberflaeche($radius, $hoehe) {
    if ($radius > 0 && $hoehe > 0) {
        $oberflaecheMantel = 2 * M_PI * $radius * $hoehe;
        $oberflaecheDeckel = 2 * M_PI * pow($radius, 2);
        return $oberflaecheMantel + $oberflaecheDeckel;
    } else {
        return "Ungültige Werte (Radius und Höhe müssen größer als 0 sein)";
    }
}
$zylinderVolumen = berechneZylinderVolumen($radius, $hoehe);
$zylinderOberflaeche = berechneZylinderOberflaeche($radius, $hoehe);
echo "Volumen des Zylinders: $zylinderVolumen<br>";
echo "Oberfläche des Zylinders: $zylinderOberflaeche<br>";
?>
