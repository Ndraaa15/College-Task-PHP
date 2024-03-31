<?php
class Calculator {
  public  $history = [];

  public function __construct() {
    if (!isset($_SESSION['history'])) {
      $_SESSION['history'] = [];
    }
    $this->history = &$_SESSION['history'];
  }

  public function add($number1, $number2) {
    array_push($this->history, "$number1 " . " + " . "$number2" .  " = " .  ($number1 + $number2));
    return $number1 + $number2;
  }
  
  public function subtract($number1, $number2) {
    array_push($this->history, "$number1 " . " - " . "$number2" .  " = " .  ($number1 - $number2));
    return $number1 - $number2;
  }

  public function multiply($number1, $number2) {
    array_push($this->history, "$number1 " . " * " . "$number2" .  " = " .  ($number1 * $number2));
    return $number1 * $number2;
  }

  public function divide($number1, $number2) {
    if ($number2 == 0) {
      array_push($this->history, "$number1 " . " / " . "$number2" .  " = " .  "undfined");
      return "Can't divide by zero";
    }


    array_push($this->history, "$number1 " . " / " . "$number2" .  " = " .  ($number1 / $number2));
    return $number1 / $number2;
  }
}



