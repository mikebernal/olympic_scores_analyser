<?php include('../helpers/utilities.php'); ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Initialization
  $year         = validateInput($_POST['year']);
  $city         = validateInput($_POST['city']);
  $commenceDate = validateInput($_POST['commence-date']);
  $endDate      = validateInput($_POST['end-date']);
  $competitors  = json_decode($_POST['competitorList'], true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="result" style="width: 100%;">
    <div class="back-button">
      <a href="../index.php">Back</a>
    </div>
    <h1>Competitors</h1>
    <table style="width: 100%; text-align: left;">
      <tr>
        <th>Name</th>
        <th>Country</th>
        <th>Medals</th>
        <th>Word Record</th>
      </tr>
      <?php
        foreach($competitors as $competitor) {
          echo "<tr>";
          echo "<td>" . validateInput($competitor['name']) . "</td>";
          echo "<td>" . validateInput($competitor['country']) . "</td>";
          echo "<td>" . validateInput($competitor['medal']) . "</td>";
          echo "<td>" . validateInput($competitor['world-record']) . "</td>";
          echo "</tr>";
        }
      ?>
    </table>
    <br>
    <div class="details" style="display:flex; flex-direction: column;">
        <!-- Year -->
        <div class="year" style="display: flex;">
          <div class="year-title title">Year</div>
          <div class="year-value value"><?php echo $year; ?></div>
        </div>

        <!-- City -->
        <div class="city" style="display: flex;">
          <div class="city-title title">City</div>
          <div class="city-value value"><?php echo $city; ?></div>
        </div>

        <!-- Commence Date -->
        <div class="commence-date" style="display: flex;">
          <div class="commence-date title">Commence date</div>
          <div class="commence-date-value value"><?php echo $commenceDate; ?></div>
        </div>

        <!-- End Date -->
        <div class="end-date title" style="display: flex;">
          <div class="end-date title">End date</div>
          <div class="end-date-value value"><?php echo $endDate;?></div>
        </div>

    </div>
  </div>
</body>
</html>

<?php

} else {
  header("Location: ../index.php");
}

?>
