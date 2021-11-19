<?php

// Rappel : nous sommes dans le répertoire Core, voilà pourquoi dans realpath je "remonte d'un cran" pour faire référence
// à la VRAIE racine de mon application

final class Consts
{
    // Les constantes relatives aux chemins

    const VIEWS_DIR      = '/views/';

    const MODEL_DIR      = '/app/model/';

    const CONTROLLER_DIR = '/app/controllers/';

    const KERNEL_DIR     = '/kernel/';

    public static function getRootDir() {
        return realpath(__DIR__ . '/../');
    }

    public static function getViewsDir(){
        return self::getRootDir() . self::VIEWS_DIR;
    }

    public static function getModelDir(){
      return self::getRootDir() . self::MODEL_DIR;
    }

    public static function getControllerDir(){
        return self::getRootDir() . self::CONTROLLER_DIR;
    }

    public static function getKernelDir(){
      return self::getRootDir() . self::KERNEL_DIR;
    }
}