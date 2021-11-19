<?php

abstract class Controller{
  public function view($view, $data = []){
    $S_fichier = Consts::getViewsDir() . $view . '.php';

    extract($data);
    ob_start();
    include $S_fichier;
    $content = ob_get_contents();
    ob_end_flush();
  }

  public function css($filename){
    echo "<style>".file_get_contents(APP_PATH . "/resources/css/$filename.css")."</style>";
  }

  public function redirect($url, $data = []){
      header('Location: http://'. $_SERVER['HTTP_HOST'] . '/' . ucfirst($url));
      exit();
  }

  public function model($model){
    require_once Consts::getModelDir() . "$model.php";
  }
}