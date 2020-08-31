<?php

  $competitors     = json_decode($_SESSION["competitors"], true);
	$sortedCountries = array();
	$worldRecord     = array();

	// $worldRecord array
	foreach($competitors as $competitor) {
		if ($competitor['world-record'] === 'Yes') {
			array_push($worldRecord, [
				'athletes' => $competitor['name'],
				'event'    => $competitor['event']
			]);
		}
	}

  // Count Gold medal
	function checkGold($medal) {
		$count = 0;
		if ($medal === 'Gold') {
			$count = $count + 1;
			return $count;
		} else {
			return $count;
		}
	}

  // Count Silver Medal
	function checkSilver($medal) {
		$count = 0;
		if ($medal === 'Silver') {
			$count = $count + 1;
			return $count;
		} else {
			return $count;
		}
	}

  // Count Bronze Medal
	function checkBronze($medal) {
		$count = 0;
		if ($medal === 'Bronze') {
			$count = $count + 1;
			return $count;
		} else {
			return $count;
		}
	}

  // Cound total num of medals
	function countMedals($gold, $silver, $bronze) {
		$count = 0;
		$count = $count + $gold + $silver + $bronze;
		return $count;
	}

	// $sortedCountries array
	foreach($competitors as $competitor) {
		// Add competitor to $sortedCountries array if the competitors' country  does not exists yet
		if (!in_array($competitor['country'], $sortedCountries)) {
			array_push($sortedCountries, [
				'country'      => $competitor['country'],
				'gold'         => checkGold($competitor['medal']),
				'silver'       => checkSilver($competitor['medal']),
				'bronze'       => checkBronze($competitor['medal']),
				'total-medal'  => countMedals(checkGold($competitor['medal']), checkSilver($competitor['medal']), checkBronze($competitor['medal']))
			]);
	?>

		<?php
		} else {
			// If competitors' country already exists in $sortedCountries UPDATE medals
      
		}
	}
?>
    // echo "<pre>";print_r($competitor);echo "</pre>";
