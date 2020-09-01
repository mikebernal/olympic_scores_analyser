<?php 
	$page ="result";
	include_once('includes/header.php'); 
	include_once('result-script.php'); 
?>
		<!-- Competitors -->
		<div>
			<div class="wrap-table100">
        <div class="back-button"><a href="index.php">Back</a></div><br>
        <h1>Competitors</h1><br>
				<div class="table100 ver1 m-b-110 table">
					<div class="table100-head">
						<table>
							<thead>
								<tr >
									<th class="cell100 column1">Country</th>
									<th class="cell100 column2">Gold</th>
									<th class="cell100 column3">Silver</th>
									<th class="cell100 column4">Bronze</th>
									<th class="cell100 column5">Total Medals</th>
									<th class="cell100 column6">Rank</th>
								</tr>
							</thead>
						</table>
					</div>
				
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
							<?php
								usort($sortedCountries, 'sortByMedals');
                foreach($sortedCountries as $country) {
							?>
                <tr>
									<td class='column1'><?php echo $country['country']; ?></td>
									<td class='column2'><?php echo $country['gold']; ?></td>
									<td class='column3'><?php echo $country['silver']; ?></td>
									<td class='column4'><?php echo $country['bronze']; ?></td>
									<td class='column5'><?php echo $country['total-medals']; ?></td>
									<td class='column6'><?php echo getRank($country['country']); ?></td>
								</tr>
              <?php }
              ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- World Record -->
		<!-- Display world record table if row exists -->
		<?php if (count($worldRecord)) {	?>
		<div>
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
							<?php foreach($worldRecord as $record) { ?>
								<tr>
							  	<td class='column1'><?php echo $record['athletes']; ?></td>
									<td class='column2'><?php echo $record['event']; ?></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
		<?php	} ?>

<?php include('includes/footer.php');?>
								