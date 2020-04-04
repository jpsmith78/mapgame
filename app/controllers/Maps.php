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
  }
