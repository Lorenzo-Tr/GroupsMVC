<?php
require 'const.php';

final class AutoLoad {
  public function __construct(){
    spl_autoload_register('self::loadKernel');
    spl_autoload_register('self::loadView');
    spl_autoload_register('self::loadModel');
    spl_autoload_register('self::loadController');
    spl_autoload_register('self::loadHelper');
  }

  public static function loadKernel($S_KernelName){
    $S_file = Consts::getKernelDir() . "$S_KernelName.php";

    return self::_load($S_file);
  }

  public static function loadView($S_ViewName){
    $S_file = Consts::getViewsDir() . "$S_ViewName.php";

    return self::_load($S_file);
  }

  public static function loadModel($S_ModelName){
    $S_file = Consts::getModelDir() . "$S_ModelName.php";

    return self::_load($S_file);
  }

  public static function loadController($S_ControllerName){
    $S_file = Consts::getControllerDir() . "$S_ControllerName.php";

    return self::_load($S_file);
  }

  public static function loadHelper($S_HelperName){
    $S_file = Consts::getHelperDir() . "$S_HelperName.php";

    return self::_load($S_file);
  }

  private static function _load($S_loadFile){
      if (is_readable($S_loadFile))
      {
        require $S_loadFile;
      }
  }
}

