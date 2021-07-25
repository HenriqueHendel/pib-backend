<?php
  class Cult {
    private $name;
    private $date;
    private $hour;

    public function setName($name) {
      $this->name = $name;
    }

    public function setDate($date) {
      $this->date = $date;
    }

    public function setHour($hour) {
      $this->hour = $hour;
    }

    public function getName() {
      return $this->name;
    }

    public function getMyDate() {
      return $this->date;
    }

    public function getHour() {
      return $this->hour;
    }
  }