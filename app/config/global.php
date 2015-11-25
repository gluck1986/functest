<?php

/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 26.11.2015
 * Time: 1:42
 */
namespace app\config;




    $db = include_once('db.php');
    return array(
         'some'=>4,
        'db' => $db,
        'any'=> 'str',
    );
