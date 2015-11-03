<?php
	$calendrier = file_get_contents('ADECal.ics');
	$regExpmatch = "'SUMMARY:(.*)'";
	$regExpDateDeb = "'DTSTART:(.*)'";
	$regExpDateEnd = "'DTEND:(.*)'";
	$regExpEmp = "'LOCATION:(.*)'";
	$regExpDesc = "'DESCRIPTION:(.*)'";
	
	$n = preg_match_all($regExpmatch, $calendrier, $matchTableau, PREG_PATTERN_ORDER);
	preg_match_all($regExpDateDeb, $calendrier, $dateTableauDeb, PREG_PATTERN_ORDER);
	preg_match_all($regExpDateEnd, $calendrier, $dateTableauEnd, PREG_PATTERN_ORDER);
	preg_match_all($regExpEmp, $calendrier, $empTableau, PREG_PATTERN_ORDER);
	preg_match_all($regExpDesc, $calendrier, $descTableau, PREG_PATTERN_ORDER);
	
	for ($j=0 ; $j < $n ; ++$j){
		
		// Récupération des données
		$annee = substr( $dateTableauDeb[0][$j], 8, 4);
		$mois = substr( $dateTableauDeb[0][$j], 12, 2);
		$jour = substr( $dateTableauDeb[0][$j], 14, 2);
		$heure = substr( $dateTableauDeb[0][$j], 17, 2);
		$min = substr( $dateTableauDeb[0][$j], 19, 2);
		$match = substr( $matchTableau[0][$j], 8);

		$desc = substr( $descTableau[0][$j], 12);

		// Mise en forme
		$date = $jour . '/'.$mois . '/' . $annee;
		$horaire = $heure . 'h' . $min;
		list($compet) = explode(" – ", $desc);

		// Affichage
		echo $dateTableauDeb[0][$j] . '</br>';
		echo $dateTableauEnd[0][$j] . '</br>';
		echo $matchTableau[0][$j] . '</br>';
		echo $empTableau[0][$j] . '</br>';
		echo $descTableau[0][$j] . '</br></br>';
		
		// echo $compet . $date . $horaire . $match . '</br>';
	}
?>