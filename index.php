<?php $page = "home"; ?>
<?php include_once('includes/header.php'); ?>

  <div class="form-holder">
    <header>
      <h1 class="heading">Olympic Scores Analyser</h1>
    </header>

    <main>
      <!-- Olympic analyzer form -->
      <form name="olympic" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <!-- <form name="olympic" method="post" action="views/result.php"> -->

        <div style="background: none; display: flex;">
          <div style="flex: 1; background: none">
            <!-- Year -->
            <label class="label" for="year">Year of Games</label> 
            <input name="year" type="text" class="year input form-control col-md-11" size="4" maxlength="4">
          </div>

          <div style="flex: 1">
            <!-- City -->
            <label class="label" for="city">City of Games</label>
            <input name="city" type="text" class="city input form-control col-md-11" size="40" maxlength="40">
          </div>
        </div>

        <div style="background: none; display: flex;">
          <div style="flex: 1; background: none">
            <!-- Commence date -->
            <label class="label" for="commence-date">Commence Date</label>
            <input name="commence-date" type="text" class="input commence-date form-control col-md-11" size="10" maxlength="30" autocomplete="off">
          </div>
        
        <div style="flex: 1">
          <!-- End date -->
          <label class="label" for="end-date">End Date</label>
          <input name="end-date" type="text" class="input end-date form-control col-md-11" size="10" maxlength="10" autocomplete="off">
        </div>
      </div>

        <!-- Dynamic input data -->
        <div class="competitor-data">
          <div style="background: none; display: flex;">
            <div style="flex: 1; background: none">
              <!-- Competitor -->
              <label class="label" for="competitor">Competitor Name</label>
              <input name="competitor" type="text" class="input competitor form-control col-md-11">
            </div>
          
            <!-- Country -->
            <div style="flex: 1; background: none">
              <label class="label" for="country">Country</label>
              <select class="input country form-control col-md-11" name="country">
                <option value="" selected disabled hidden>select</option>
              </select>
            </div>
          </div>
    
          <div style="background: none; display: flex;">
            <div style="flex: 4; background: none">
              <!-- Event -->
              <label class="label" for="event">Event</label>
              <option value="" selected disabled hidden>select</option>
              <select class="col-md-11 input event form-control" name="event">
                <option value="" selected disabled hidden>select</option>
              </select>
            </div>

            <!-- Medal -->
            <div style="flex: 2; background: none">
              <label class="label" for="medal">Medal</label>
              <select class=" input medal form-control col-md-10" name="medal">
                <option value="" selected disabled hidden>select</option>
                <option value="Gold">Gold</option>
                <option value="Silver">Silver</option>
                <option value="Bronze">Bronze</option>
              </select>
            </div>

            <!-- World record -->
            <div style="flex: 2; background: none">
              <label class="label" for="medal">World Record?</label>
              <select class="input world-record form-control col-md-10" name="world-record">
                <option value="" selected disabled hidden>select</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>

          </div>

        </div>
        <!-- Add button -->
    </main>
    <button type="button" name="add" class="btn btn-light button__add" disabled>Add</button>
    </div>
    <br>

    <!-- Preview table -->
    
    <div class="competitors-div">
      <h1>Competitors</h1>
      <table class="table competitors">
        <tr>
          <th>ID</th>
          <th scope="col">Competitor</th>
          <th scope="col">Country</th>
          <th scope="col">Event</th>
          <th scope="col">Medal</th>
          <th scope="col">World Record</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </table>

      <input type="hidden" name="competitorList" class="competitor-list">

      <!-- Submit button -->
      <div class="submit">
        <button type="submit" name="submit" class="submit btn btn-primary">Submit</button>
      </div>

    </form>  
    
    <?php include('includes/footer.php');?>
