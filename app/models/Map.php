<?php
  class Map {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getMaps(){
      $this->db->query('SELECT DISTINCT u.name AS user_name, s.name AS state_name, s.abbreviation as state_abbr
        FROM users_states us
        INNER JOIN states s ON s.id = us.state_id
        INNER JOIN users u ON u.id = us.user_id
        WHERE u.name = :user_name');

      $this->db->bind(':user_name', $_SESSION['user_name']);

      $results = $this->db->resultSet();
      return $results;
    }



  }
