<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>BMI-Berechnung</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
</head>

<body>
	<h1>BMI Berechnung</h1>
	<?php
		// Das Ergebnis wird erst berechnet und angezeigt, wenn das Formular gesendet wurde. Details siehe weiter unten.
		if(isset($_POST["gesendet"]))
		{
			// Einlesen der Werte aus dem Formular
			$koerpergewicht = doubleval($_POST["gewicht"]); //Angabe in kg
			$koerpergroesse = doubleval($_POST["kgroesse"]); // Angabe in m. 
			
			// Definition der Grenzwerte. Vorteil ist, dass sie nur an einer Stelle "verwaltet" werden
			$gewichtMin = 40; // kg
			$gewichtMax = 150; // kg
			$maxKoerpergroesse = 2.10; //m
			/* 
				In diesem Beispiel wird die Variable $ergebnis genutzt, um sowohl den errechneten BMI oder aber die generierte Fehlermeldung an der gleichen Stelle im HTML-Dokument auszugeben.
				Der Text soll per CSS unterschiedlich formatiert werden. Standardmäßig wird er auf false gesetzt. istFehlerVorhanden meint, dass ein falscher Wert für Gewicht oder Größe erfasst wurden
			*/
			$isFehlerVorhanden = false; 
			// Speicherung der Selektoren. Macht es einfacher, wenn diese später einmal namentlich geändert werden. Dann müssen sie nur hier angepasst werden. Definiert sind sie in der CSS-Datei
			$selektorHinweis = "hinweis";
			$selektorErgebnis = "ergebnis";

			/* 
				Entsprechen die eingegebenen Werte den Vorgaben, erfolgt die Berechnung
			*/
			
			if(($koerpergewicht>=$gewichtMin && $koerpergewicht<=$gewichtMax)&& ($koerpergroesse<$maxKoerpergroesse))
			{
				$bmi = $koerpergewicht/pow($koerpergroesse,2);  
				$ergebnis = "Ihr BMI beträgt $bmi";
			} else
			{
				/* 
					Alternative und genauere Generierung der Fehlermeldung
					Beide Kriterien werden ausgewertet und die Fehlermeldung generiert
					
					In diesem Zweig ist aber mindestens ein Fehler vorhanden, 
					deshalb wird $isFehlerVorhanden auf true gesetzt, damit in der Ausgabe des 
					Fehlertextes dieser anders formatiert wird.
				*/
				$isFehlerVorhanden = true;
				
				if(($koerpergewicht<$gewichtMin || $koerpergewicht>$gewichtMax))
				{
					$ergebnis ="Der zulässige Berechnungsbereich liegt zwischen $gewichtMin kg und $gewichtMax kg. Ihre Eingabe betrug $koerpergewicht.";
					
				}
				if($koerpergroesse>$maxKoerpergroesse)
				{
					// Die Meldung aus der Überprüfung des Körpergewichts wird der neuen Meldung angehängt. Sollte das Gewicht korrekt gewesen sein, ist der Inhalt von $ergebnis leer 
					$ergebnis =$ergebnis."<br>Die größtmögliche Körpergröße beträgt $maxKoerpergroesse. Ihre Angabe betrug $koerpergroesse m.";			
				}
			}
		}
	?>
	
	
	<form action="bmi.php" method="post">	
		<p>
			
			<label for="gewicht">Gewicht [kg]</label>
			<input id="gewicht" name="gewicht"> 
			
			<label for="kgroesse">Körpergröße [m]</label>
			<input id="kgroesse" name="kgroesse"> 	
		</p>
		
		<p><input type="submit" name="gesendet"</p>
	</form>
	
		<?php 
				/* Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Ebenfalls die Berechnung (Siehe oben).
				Dafür wird der Submit-Button mit einem Namen versehen "gesendet". Dieser kann jetzt mit isset abgefragt werden.
				In den bisherigen Übungen ist dieser PHP-Code in einem p-Element integriert gewesen. 
				Diesem Element werden jetzt - entsprechend Zustand von $isFehlerVorhanden unterschiedliche Stylesheets zugewiesen ;
				*/
