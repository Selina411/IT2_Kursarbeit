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
