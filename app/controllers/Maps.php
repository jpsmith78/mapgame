<?php
  class Maps extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }
      $this->map_model = $this->model('Map');
    }

    public function index(){
      $maps = $this->map_model->getMaps();
      $data = [
        'maps' => $maps
      ];

      $this->view('maps/index', $data);
    }

    public function add(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'user_id' => trim($_SESSION['user_id']),
          'state_abbr' => trim($_POST['state'])
        ];

        $this->map_model->addState($data);
        header("Location: " . URLROOT . "/maps/index ");
        exit();

      }else{

        header("Location: " . URLROOT . "/maps/index ");
        exit();

      }
    }

    public function delete(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'user_id' => trim($_SESSION['user_id']),
          'state_abbr' => trim($_POST['state'])
        ];

        $this->map_model->deleteState($data);
        header("Location: " . URLROOT . "/maps/index ");
        exit();

      }else{

        header("Location: " . URLROOT . "/maps/index ");
        exit();

      }
    }
  }
