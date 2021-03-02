<?php
 class Pages extends Controller {
     public function __construct() {

      // $this->userModel = $this->model('User');
        
     }

     public function index() {
      //   $users = $this->userModel->getUsers();


        $this->view('pages/index');
     }

     public function about() {
        $this->view('pages/about');
    }

    public function projects() {
     
      $this->view('pages/projects');
  }
    
 }
 