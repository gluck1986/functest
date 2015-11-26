<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 26.11.2015
 * Time: 7:08
 */
namespace app\core;

return function($query){

    $config = include(ROOTDIR.CONFIGDIR.CONFIGNAME);
    $dbconf = $config['db'];
    //print_r($dbconf);
    $mysqli = new \mysqli($dbconf['host'], $dbconf['name'], $dbconf['pass'], $dbconf['db']);
    if (mysqli_connect_errno()) {
        printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
        exit;
    }
    return $mysqli;

}  ;