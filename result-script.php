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

  // array_push($sortedCountries, [
  //   'country' => 'Australia',
  //   'gold'    => 1,
  //   'silver'  => 0,
  //   'bronze'  => 0
  // ]);

  // $sortCountries
  foreach($competitors as $competitor) {

    if (empty($sortedCountries)) {
      // Init empty array by pushing first element
      array_push($sortedCountries, [
				'country'      => $competitor['country'],
				'gold'         => checkGold($competitor['medal']),
				'silver'       => checkSilver($competitor['medal']),
        'bronze'       => checkBronze($competitor['medal']),
        'total-medals' => countMedals(checkGold($competitor['medal']), checkSilver($competitor['medal']), checkBronze($competitor['medal']))
      ]);
    } else {
      $allCountries  = array_column($sortedCountries, 'country');
      $countryExists = in_array($competitor['country'], $allCountries);
      if ($countryExists) {
        // Array splice()
        $existingCountryIndex = array_search($competitor['country'], $allCountries);
        $sortedCountries[$existingCountryIndex] = array_merge($sortedCountries[$existingCountryIndex], [
          'country' => $competitor['country'],
          'gold'    => ( checkGold($competitor['medal']) + (int)$sortedCountries[$existingCountryIndex]['gold'] ),
          'silver'  => ( checkSilver($competitor['medal']) + (int)$sortedCountries[$existingCountryIndex]['silver'] ),
          'bronze'  => ( checkBronze($competitor['medal']) + (int)$sortedCountries[$existingCountryIndex]['bronze'] ),
          'total-medals' => $sortedCountries[$existingCountryIndex]['total-medals'] += countMedals(checkGold($competitor['medal']), checkSilver($competitor['medal']), checkBronze($competitor['medal']))

        ]);
        
      } else {
        // Array push()
        array_push($sortedCountries, [
          'country' => $competitor['country'],
          'gold'    => checkGold($competitor['medal']),
          'silver'  => checkSilver($competitor['medal']),
          'bronze'  => checkBronze($competitor['medal']),
          'total-medals' => countMedals(checkGold($competitor['medal']), checkSilver($competitor['medal']), checkBronze($competitor['medal']))

        ]);
      }

    }
  }

  function sortByMedals($x, $y) {
    // Rearrange countries based from their number of medals
    if($x['total-medals'] == $y['total-medals']) {
      return 0;
    }

    return $x['total-medals'] < $y['total-medals'];
  }

  echo "<pre>";print_r($sortedCountries);echo "</pre>";
?>
