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
    if (sizeof($findedroute)>0 ){
        $control = include_once(ROOTDIR.CONTROLLERDIR.$findedroute[0]['controller']);
        if (!call_user_func($control)) return false;
    }

    return;
};



