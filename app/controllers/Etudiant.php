<?php
class Etudiant extends Controller{
  public function index($error = null){
    $data['error'] = $error;
    
    $this->view('home', $data);
  }

  public function result(){
    $file = Upload::getUploadedFile('file');
    if(is_null($file)){
      redirect('');
    }else{
      $data['students'] = $file;
      $this->view('groups', $data);
    }
    // $this->redirect('');
    // $this->redirect('etudiant/result', $data);
  }
}
