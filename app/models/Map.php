<?php
  class Map {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getMaps(){
      $this->db->query('SELECT * FROM states ORDER BY name');

      $results = $this->db->resultSet();
      return $results;
    }

  }
