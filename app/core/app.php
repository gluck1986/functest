<?php
namespace app\core;
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 26.11.2015
 * Time: 1:47
 */



function app($config){
    $appEnviroment=array();
    if (isset($config['init'])){
        $init = include_once(ROOTDIR.CONTROLLERDIR.$config['init']);
        if (!call_user_func($init)) return false;
    }
  //print_r($_SERVER);

    $findedroute = array_filter($config['route'],function($val){return trim($val['url'])===trim($_SERVER['REDIRECT_URL']); });
    reset($findedroute); $element = current($findedroute);
    if ($element){
        $control = include_once(ROOTDIR.CONTROLLERDIR.$element['controller']);
        if (!call_user_func($control)) return false;
    }

    return;
};



