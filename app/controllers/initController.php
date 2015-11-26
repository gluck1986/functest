<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 26.11.2015
 * Time: 5:08
 */
namespace app\controllers;



return function() use(&$appEnviroment){
    session_start();
    $appEnviroment['GetUser'] = function(){return 'ПОЛЬЗОВАТЕЛЬ';};
   /* $mydb=include_once(ROOTDIR.COREDIR.'getMysql.php');

    print_r($_SESSION);
    $_SESSION['session'] = md5(time());

  //  $query = 'select * from test';
  //  $result = call_user_func($mydb,$query);
    echo $appEnviroment.'init controller'."\n"; */return true;};