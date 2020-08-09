<?php require_once('helpers/initialize.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Olympic Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    
    <header>
      <h1>Olympic Scores Analyser</h1>
    </header>

    <main>
      <!-- Olympic analyzer form -->
      <form name="olympic" method="post" action="views/result.php">

        <!-- Year -->
        <label class="label" for="year">Year of Games</label> 
        <input name="year" type="text" class="input year" size="4" maxlength="4"><br />

        <!-- City -->
        <label class="label" for="city">City of Games</label>
        <input name="city" type="text" class="input city" size="40" maxlength="40"><br />
        
        <!-- Commence date -->
        <label class="label" for="commence-date">Commence Date</label>
        <input name="commence-date" type="text" class="input commence-date" size="10" maxlength="10"><br />
        
        <!-- End date -->
        <label class="label" for="end-date">End Date</label>
        <input name="end-date" type="text" class="input end-date" size="10" maxlength="10">

        <br><br><hr><br>

        <!-- Dynamic input data -->
        <div class="competitor-data justify-center">
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
          <div class="button unselectable" onclick="addCompetitor(competitors.length)">
            <span name="add" class="button__add">Add</span>
          </div>

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

      <!-- Submit button -->
      <div class="submit">
        <button class="button p2">Submit</button>
        <!-- <button class="button p2" onclick="postData()">Submit</button> -->
      </div>

      <input type="hidden" name="competitorList" class="competitor-list">

    </form>  

  </div>

  <script src="js/script.js"></script>
</body>
</html>
