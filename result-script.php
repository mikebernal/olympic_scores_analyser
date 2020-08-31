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

	// $sortedCountries array
  // Check if competitor[country] exists in sortedCountries
  function checkCountry($array, $key, $val) {

  }

  // $sortedCountries
  foreach($competitors as $competitor) {
    // echo "<pre>";print_r($competitor);echo "</pre>";
    // echo "===========================================";

    if (empty($sortedCountries)) {
      array_push($sortedCountries, [
				'country' => $competitor['country'],
				'gold'    => checkGold($competitor['medal']),
				'silver'  => checkSilver($competitor['medal']),
				'bronze'  => checkBronze($competitor['medal'])
      ]);
    } else {
      $allCountries = array_column($sortedCountries, 'country');
      if (in_array($competitor['country'], $allCountries)) {
        // Array splice()
        array_replace($sortedCountries, [ 
          'country'      => $competitor['country'],
          'gold'         => 99,
          'silver'       => 99,
          'bronze'       => 99
        ]);
      } else {
        // Array push()
        array_push($sortedCountries, [
          'country'      => $competitor['country'],
          'gold'         => checkGold($competitor['medal']),
          'silver'       => checkSilver($competitor['medal']),
          'bronze'       => checkBronze($competitor['medal'])
        ]);
      }

    }

  }

    echo "<pre>";print_r($sortedCountries);echo "</pre>";




?>
