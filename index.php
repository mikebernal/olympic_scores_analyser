<?php include_once('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page;?></title>
  <link rel="stylesheet" href="css/style.css">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://code.jquery.com/jquery-1.12.1.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
  <div class="container">
    
    <header>
      <h1 class="heading">Olympic Scores Analyser</h1>
    </header>

    <main>
      <!-- Olympic analyzer form -->
      <form name="olympic" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <!-- <form name="olympic" method="post" action="views/result.php"> -->

        <!-- Year -->
        <label class="label" for="year">Year of Games</label> 
        <input name="year" type="text" class="input year" size="4" maxlength="4">

        <!-- City -->
        <label class="label" for="city">City of Games</label>
        <input name="city" type="text" class="input city" size="40" maxlength="40">
        
        <!-- Commence date -->
        <label class="label" for="commence-date">Commence Date</label>
        <!-- <input name="commence-date" type="text" class="input commence-date" size="10" maxlength="10"> -->
        <input name="commence-date" type="text" class="input commence-date" size="10" maxlength="30" autocomplete="off">
        
        <!-- End date -->
        <label class="label" for="end-date">End Date</label>
        <input name="end-date" type="text" class="input end-date" size="10" maxlength="10" autocomplete="off">

        <!-- Dynamic input data -->
        <div class="competitor-data">
          <!-- Competitor -->
          <div class="cols">
            <label class="label" for="competitor">Competitor Name</label>
            <input name="competitor" type="text" class="input competitor">
          </div>

          <!-- Country -->
          <div class="cols">
            <label class="label" for="country">Country</label>
            <select class="input country" name="country">
              <option value="" selected disabled hidden>select</option>
            </select>
          </div>
    
          <!-- Event -->
          <div class="cols">
            <label class="label" for="event">Event</label>
            <option value="" selected disabled hidden>select</option>
            <select class="input event" name="event">
              <option value="" selected disabled hidden>select</option>
            </select>
          </div>

          <!-- Medal -->
          <div class="cols">
            <label class="label" for="medal">Medal</label>
            <select class="input medal" name="medal">
              <option value="" selected disabled hidden>select</option>
              <option value="Gold">Gold</option>
              <option value="Silver">Silver</option>
              <option value="Bronze">Bronze</option>
            </select>
          </div>

          <!-- World record -->
          <div class="cols">
            <label class="label" for="medal">World Record?</label>
            <select class="input world-record" name="world-record">
              <option value="" selected disabled hidden>select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>

          <!-- Add button -->
          <button name="add" class="button__add button" disabled>Add</button>

        </div>
        
    </main>

    <!-- Preview table -->
    <div class="competitors-div">
      <h1>Competitors</h1>
      <table class="competitors">
        <tr>
          <th>ID</th>
          <th>Competitor</th>
          <th>Country</th>
          <th>Event</th>
          <th>Medal</th>
          <th>World Record</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </table>

      <input type="hidden" name="competitorList" class="competitor-list">

      <!-- Submit button -->
      <div class="submit">
        <input type="submit" name="submit" class="button p2"/>
      </div>

    </form>  
  </div>

  <script src="js/script.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
