<?php
  class Cult {

    public function getCults() {
      $conn = new Connection();
      $slq = "SELECT * FROM cultos";
      $stmt = $conn->connect()->prepare($slq);
      $result = $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createCult($titulo, $data, $horario, $fileUrl){
      $conn = new Connection();
      $slq = "INSERT INTO cultos (titulo, data, horario, fileUrl) values ('$titulo','$data','$horario','$fileUrl')";
      $stmt = $conn->connect()->prepare($slq);
      $result = $stmt->execute();
      return $result;
    }
  }