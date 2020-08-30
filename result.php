<?php $page ="result"; ?>
<?php 
	include_once('includes/header.php'); 
	$competitors  = json_decode($_SESSION["competitors"], true);
?>

		<div class="container-table100">
			<div class="wrap-table100">
        <div class="back-button"><a href="index.php">Back</a></div><br>
        <h1>Competitors</h1>
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Name</th>
									<th class="cell100 column2">Country</th>
									<th class="cell100 column3">Medals</th>
									<th class="cell100 column4">World Record</th>
								</tr>
							</thead>
						</table>
					</div>
				
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
              <?php
                foreach($competitors as $competitor) {
                  echo "<tr>";
                  echo "<td class='column1'>" . $competitor['name']         . "</td>";
                  echo "<td class='column2'>" . $competitor['country']      . "</td>";
                  echo "<td class='column3'>" . $competitor['medal']        . "</td>";
                  echo "<td class='column4'>" . $competitor['world-record'] . "</td>";
                  echo "</tr>";
                }
              ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php include('includes/footer.php');?>