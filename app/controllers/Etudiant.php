<?php
class Etudiant extends Controller{
  public function index($error = null){
    $data['error'] = $error;
    $data['title'] = "Accueil";
    
    $this->view('home', $data);
  }

  public function result(){
    $list = Upload::getUploadedFile('file');
    if(is_null($list)){
      $this->redirect('');
    }else{
      $data['A_groups'] = GroupsMaker::makeGroups($list, $_POST['wantedNbGroups']);
      $data['title'] = "Random Groups";
      $this->view('groups', $data);
    }
  }
}
