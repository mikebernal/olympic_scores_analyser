<?php 

  class Competitors {

    // Initialize values
    public $name        = "";
    public $country     = "";
    public $event       = "";
    public $medal       = "";
    public $worldRecord = false;

    public $competitors = array();

    function __construct($name, $country, $event, $medal, $worldRecord) {
      $this->name        = $name;
      $this->country     = $country;
      $this->event       = $event;
      $this->medal       = $medal;
      $this->worldRecord = $worldRecord;
    }

    public function getCompetitors() {
      return $this->competitors;
    }

    public function setCompetitors($competitor, $operator) {
      switch($operator) {
        case "add":
          $this->competitors[] = $competitor;
          return true;
        break;
        case "edit":
          
        break;
        case "delete":
          $this->competitors[] = array_splice($this->competitors, 1, );
        break;
        default:
          echo "Operator not found!";
          return false;
        break;
      }

    }


  }

?>