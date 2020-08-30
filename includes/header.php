<?php 
  session_start();
  include('Util.php');
  $page = "Home";
  if ($page === "Home") {
    if (isset($_POST['submit'])) {
      $_SESSION['competitors'] = $_POST['competitorList'];
  
      // Redirect if all fields are valid
      Util::redirect('result.php');
    }
  } else {
    $page = "result";
  }

?>