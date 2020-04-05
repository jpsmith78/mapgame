<?php
  class Map {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getMaps(){
      $this->db->query('SELECT u.name AS user, s.name AS state
        FROM users_states us
        INNER JOIN states s ON s.id = us.state_id
        INNER JOIN users u ON u.id = us.user_id');

      $results = $this->db->resultSet();
      return $results;
    }

  }
