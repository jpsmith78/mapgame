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
          'state_abbr' => trim($_POST['state'])
        ];
        var_dump($data);
      }
    }

    public function delete(){
      echo 'goodbye world';
    }
  }
