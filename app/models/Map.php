<?php
  class Map {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getStates(){
      $this->db->query('SELECT DISTINCT u.name AS user_name, s.name AS state_name, s.abbreviation as state_abbr
        FROM users_states us
        INNER JOIN states s ON s.id = us.state_id
        INNER JOIN users u ON u.id = us.user_id
        WHERE u.name = :user_name');

      $this->db->bind(':user_name', $_SESSION['user_name']);

      $results = $this->db->resultSet();
      return $results;
    }

    public function addState($data){

      $this->db->query("
        INSERT INTO users_states (user_id, state_id) VALUES
        (:user_id, (SELECT DISTINCT id FROM states WHERE abbreviation = :state_abbr))
      ");

      $this->db->bind(':user_id', $data['user_id']);
      $this->db->bind(':state_abbr', $data['state_abbr']);
      if($this->db->execute()){
        var_dump('success');
      }else{
        var_dump('failure');
      }
    }

    public function deleteState($data){

      $this->db->query("
        DELETE FROM users_states WHERE
        user_id = :user_id AND
        state_id = (SELECT DISTINCT id FROM states WHERE abbreviation = :state_abbr)
      ");

      $this->db->bind(':user_id', $data['user_id']);
      $this->db->bind(':state_abbr', $data['state_abbr']);
      if($this->db->execute()){
        var_dump('success');
      }else{
        var_dump('failure');
      }
    }



  }
