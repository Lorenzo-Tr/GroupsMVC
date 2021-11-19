<?php

abstract class Controller{
  public function view($view, $data = []){
    $S_fichier = Consts::getViewsDir() . $view . '.php';

    extract($data);
    ob_start();
    include $S_fichier; 
    ob_end_flush();
  }
  public function redirect($url, $data = []){
    if(!empty($data)){
      $params = array(
        'http' => array(
            'method' => 'POST',
            'content' => http_build_query($data)
        )
      );
      
      $ctx = stream_context_create($params);
      $fp = @fopen('http://'. $_SERVER['HTTP_HOST'] . '/' . ucfirst($url), 'rb', false, $ctx);
      if ($fp) {
          echo @stream_get_contents($fp);
          die();
      } else {
          // Error
          throw new Exception("Error loading '$url', Error");
      }
    }else{
      header('Location: http://'. $_SERVER['HTTP_HOST'] . '/' . ucfirst($url));
      exit();   
    }
  }
  public function model($model){
    require_once Consts::getModelDir() . "$model.php";
  }
}