<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }

      $data = [
        'title' => 'SharePost Africa',
        'description' => 'Simple social network built to share information about what is happening around the Globe'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => ' To empower people to build a legacy of significant change in their lives and the lives of others.
        <br> also keep them updated about what is happening around the globe <br> And we intend to 
        create a standard community forum and also improve our community on all <br> sector around the globe
        and also to Generate opportunities for each others and benefit from the community'
      ];

      $this->view('pages/about', $data);
    }
  }