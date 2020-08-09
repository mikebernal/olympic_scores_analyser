<?php

  function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
    return $input;
  }

  function validateInput($input) {
    if (empty($input)) {
      header('Location: '.$_SERVER['PHP_SELF']);
      exit;
    } 
    return sanitizeInput($input);
  }

?>
