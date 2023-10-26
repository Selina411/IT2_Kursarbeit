<!DOCTYPE html>
<html>
<head>
    <title>Würfel-Werte erfassen</title>
</head>
<body>
    <h1>Würfel-Werte erfassen</h1>
    <form action="ziel.php" method="post">
        <label for="seitenlaenge">Seitenlänge des Würfels (in cm):</label>
        <input type="text" id="seitenlaenge" name="seitenlaenge" required>
        <br><br>

        <label for="volumen">Volumen des Würfels:</label>
        <input type="text" id="volumen" name="volumen" readonly>
        <br><br>

        <label for="mantelflaeche">Mantelfläche des Würfels:</label>
        <input type="text" id="mantelflaeche" name="mantelflaeche" readonly>
        <br><br>

        <label for="oberflaecheninhalt">Oberflächeninhalt des Würfels:</label>
        <input type="text" id="oberflaecheninhalt" name="oberflaecheninhalt" readonly>
        <br><br>

        <input type="button" value="Berechnen" onclick="berechneWuerfel()">
    </form>

    <script>
        function berechneWuerfel() {
            const seitenlaenge = parseFloat(document.getElementById("seitenlaenge").value);

            if (!isNaN(seitenlaenge)) {
                const volumen = Math.pow(seitenlaenge, 3);
                const mantelflaeche = 4 * Math.pow(seitenlaenge, 2);
                const oberflaecheninhalt = 6 * Math.pow(seitenlaenge, 2);

                document.getElementById("volumen").value = volumen.toFixed(2);
                document.getElementById("mantelflaeche").value = mantelflaeche.toFixed(2);
                document.getElementById("oberflaecheninhalt").value = oberflaecheninhalt.toFixed(2);
            } else {
                alert("Bitte geben Sie einen gültigen Zahlenwert für die Seitenlänge ein.");
            }
        }
    </script>
</body>
</html>
<?php
// Funktion zur Berechnung des Volumens eines Würfels
function berechneWuerfelVolumen($seitenlaenge) {
    if ($seitenlaenge > 0) {
        return pow($seitenlaenge, 3);
    } else {
        return "Ungültige Seitenlänge (muss größer als 0 sein)";
    }
}

// Funktion zur Berechnung der Mantelfläche eines Würfels
function berechneWuerfelMantelflaeche($seitenlaenge) {
    if ($seitenlaenge > 0) {
        return 4 * pow($seitenlaenge, 2);
    } else {
        return "Ungültige Seitenlänge (muss größer als 0 sein)";
    }
}

// Funktion zur Berechnung des Oberflächeninhalts eines Würfels
function berechneWuerfelOberflaecheninhalt($seitenlaenge) {
    if ($seitenlaenge > 0) {
        return 6 * pow($seitenlaenge, 2);
    } else {
        return "Ungültige Seitenlänge (muss größer als 0 sein)";
    }
}

// Beispielaufruf der Funktionen
$radius = 5;
$hoehe = 10;
$seitenlaenge = 4;

$wuerfelVolumen = berechneWuerfelVolumen($seitenlaenge);
$wuerfelMantelflaeche = berechneWuerfelMantelflaeche($seitenlaenge);
$wuerfelOberflaecheninhalt = berechneWuerfelOberflaecheninhalt($seitenlaenge);

echo "Volumen des Würfels: $wuerfelVolumen<br>";
echo "Mantelfläche des Würfels: $wuerfelMantelflaeche<br>";
echo "Oberflächeninhalt des Würfels: $wuerfelOberflaecheninhalt<br>";
?>
