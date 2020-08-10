<?php

  class Util {

    static public $invalidFields = array();

    static public function sanitize($input) {
      $input = trim($input);
      $input = stripslashes($input);
      $input = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
      return $input;
    }

    static public function validate($input) {
      if (empty($input)) {
        // self::redirect("../");exit;
        array_push(self::$invalidFields, $input);
      } 
      return self::sanitize($input);
    }

    // To do: add error msg
    static public function redirect($url) {
      header("Location: $url");
      exit;
    }

  }

?>
