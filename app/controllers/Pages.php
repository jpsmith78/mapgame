<?php
  class Pages extends Controller{
    public function __construct(){
    }

    public function index(){

      $data = [
        'title' => 'Map Game',
        'description' => 'My PHP map game is coming along.'
      ];
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About us',
        'description' => 'This probably won\'t make the final edit'
      ];
      $this->view('pages/about', $data);
    }

  }
