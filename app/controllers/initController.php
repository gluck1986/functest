<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 26.11.2015
 * Time: 5:08
 */
namespace app\controllers;



return function(){
    $mydb=include_once(ROOTDIR.COREDIR.'getMysql.php');
  //  $query = 'select * from test';
  //  $result = call_user_func($mydb,$query);
    echo 'init controller'."\n"; return true;};