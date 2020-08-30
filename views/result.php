<?php 
  session_start();

  include("../models/Util.php");

  // Validate input fields
  $competitors  = json_decode($_SESSION["competitors"], true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
  <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
        <div class="back-button"><a href="../index.php">Back</a></div><br>
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
  <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
	<script src="../js/main.js"></script>
</body>
</html>
