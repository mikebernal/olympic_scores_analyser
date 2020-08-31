<?php 
	$page ="result";
	include_once('includes/header.php'); 
	include_once('result-script.php'); 
?>
		<!-- Competitors -->
		<div class="container-table100">
			<div class="wrap-table100">
        <div class="back-button"><a href="index.php">Back</a></div><br>
        <h1>Competitors</h1><br>
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Country</th>
									<th class="cell100 column2">Gold</th>
									<th class="cell100 column2">Silver</th>
									<th class="cell100 column2">Bronze</th>
									<th class="cell100 column3">Total Medals</th>
									<th class="cell100 column4">Rank</th>
								</tr>
							</thead>
						</table>
					</div>
				
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
              <!-- <?php
                foreach($sortedCountries as $country) {
                  echo "<tr>";
                  echo "<td class='column1'>" . $country['country']         . "</td>";
                  echo "<td class='column2'>" . $country['gold']      . "</td>";
                  echo "<td class='column3'>" . $country['silver']        . "</td>";
                  echo "<td class='column4'>" . $country['bronze'] . "</td>";
                  echo "<td class='column5'>" . $country['total-medal'] . "</td>";
                  echo "<td class='column6'>" . "X" . "</td>";
                  echo "</tr>";
                }
              ?> -->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- World Record -->
		<!-- Display world record table if a world record row exists -->
		<?php if (count($worldRecord)) {	?>
		<div class="container-table100">
			<div class="wrap-table100">
        <h1>World Record</h1><br>
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Athletes</th>
									<th class="cell100 column2">Sports</th>
								</tr>
							</thead>
						</table>
					</div>
				
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
							<?php
								foreach($worldRecord as $record) {
									echo "<tr>";
									echo "<td class='column1'>" . $record['athletes'] . "</td>";
									echo "<td class='column2'>" . $record['event']    . "</td>";
									echo "</tr>";
								}
							?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
		<?php	} ?>

<?php include('includes/footer.php');?>
