<?php
  class Travel {
    private $pdo;
    
    public function __construct() {
      require_once('Connection.php');
      $connect = new Connection();
      $this->pdo = $connect->getPdo();
    }
    public function getTravelTitle($travel_id) {
        $sql = "SELECT title FROM travel";
        $ps = $this->pdo->prepare($sql);
        $ps->execute();
        return $ps->fetch(PDO::FETCH_ASSOC);
    }
  }
?>