<?php
// Funktion zur Berechnung des Volumens einer Kugel
function berechneKugelVolumen($radius) {
    return (4/3) * M_PI * pow($radius, 3);
}

// Funktion zur Berechnung der Oberfläche einer Kugel
function berechneKugelOberflaeche($radius) {
    return 4 * M_PI * pow($radius, 2);
}

// Funktion zur Berechnung des Volumens eines Zylinders
function berechneZylinderVolumen($radius, $hoehe) {
    return M_PI * pow($radius, 2) * $hoehe;
}

// Funktion zur Berechnung der Oberfläche eines Zylinders
function berechneZylinderOberflaeche($radius, $hoehe) {
    $oberflaecheMantel = 2 * M_PI * $radius * $hoehe;
    $oberflaecheDeckel = 2 * M_PI * pow($radius, 2);
    return $oberflaecheMantel + $oberflaecheDeckel;
}

// Funktion zur Berechnung des Volumens eines Würfels
function berechneWuerfelVolumen($seitenlaenge) {
    return pow($seitenlaenge, 3);
}

// Funktion zur Berechnung der Mantelfläche eines Würfels
function berechneWuerfelMantelflaeche($seitenlaenge) {
    return 4 * pow($seitenlaenge, 2);
}

// Funktion zur Berechnung des Oberflächeninhalts eines Würfels
function berechneWuerfelOberflaecheninhalt($seitenlaenge) {
    return 6 * pow($seitenlaenge, 2);
}

// Beispielaufruf der Funktionen
$radius = 5;
$hoehe = 10;
$seitenlaenge = 4;

$kugelVolumen = berechneKugelVolumen($radius);
$kugelOberflaeche = berechneKugelOberflaeche($radius);

$zylinderVolumen = berechneZylinderVolumen($radius, $hoehe);
$zylinderOberflaeche = berechneZylinderOberflaeche($radius, $hoehe);

$wuerfelVolumen = berechneWuerfelVolumen($seitenlaenge);
$wuerfelMantelflaeche = berechneWuerfelMantelflaeche($seitenlaenge);
$wuerfelOberflaecheninhalt = berechneWuerfelOberflaecheninhalt($seitenlaenge);

echo "Volumen der Kugel: $kugelVolumen<br>";
echo "Oberfläche der Kugel: $kugelOberflaeche<br>";
echo "Volumen des Zylinders: $zylinderVolumen<br>";
echo "Oberfläche des Zylinders: $zylinderOberflaeche<br>";
echo "Volumen des Würfels: $wuerfelVolumen<br>";
echo "Mantelfläche des Würfels: $wuerfelMantelflaeche<br>";
echo "Oberflächeninhalt des Würfels: $wuerfelOberflaecheninhalt<br>";
?>
<?php
// Funktion zur Berechnung des Volumens einer Kugel
function berechneKugelVolumen($radius) {
    if ($radius > 0) {
        return (4/3) * M_PI * pow($radius, 3);
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

// ... (Funktionen für Zylinder und Würfel hier einfügen)

// Funktion zum Erstellen der Wertetabelle
function erstelleWertetabelle($radius, $hoehe, $seitenlaenge) {
    $kugelVolumen = berechneKugelVolumen($radius);
    $kugelOberflaeche = berechneKugelOberflaeche($radius);

    $zylinderVolumen = berechneZylinderVolumen($radius, $hoehe);
    $zylinderOberflaeche = berechneZylinderOberflaeche($radius, $hoehe);

    $wuerfelVolumen = berechneWuerfelVolumen($seitenlaenge);
    $wuerfelMantelflaeche = berechneWuerfelMantelflaeche($seitenlaenge);
    $wuerfelOberflaecheninhalt = berechneWuerfelOberflaecheninhalt($seitenlaenge);

    echo '<table border="1">';
    echo '<tr><th>Berechnung</th><th>Wert</th></tr>';
    echo "<tr><td>Volumen der Kugel</td><td>$kugelVolumen</td></tr>";
    echo "<tr><td>Oberfläche der Kugel</td><td>$kugelOberflaeche</td></tr>";
    echo "<tr><td>Volumen des Zylinders</td><td>$zylinderVolumen</td></tr>";
    echo "<tr><td>Oberfläche des Zylinders</td><td>$zylinderOberflaeche</td></tr>";
    echo "<tr><td>Volumen des Würfels</td><td>$wuerfelVolumen</td></tr>";
    echo "<tr><td>Mantelfläche des Würfels</td><td>$wuerfelMantelflaeche</td></tr>";
    echo "<tr><td>Oberflächeninhalt des Würfels</td><td>$wuerfelOberflaecheninhalt</td></tr>";
    echo '</table>';
}

// Beispielaufruf der Funktion
$radius = 5;
$hoehe = 10;
$seitenlaenge = 4;

erstelleWertetabelle($radius, $hoehe, $seitenlaenge);
?>
